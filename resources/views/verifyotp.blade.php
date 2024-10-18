<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>XetoXchange</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <!-- responsive-->
    <link rel="stylesheet" href="{{url('css/responsive.css')}}">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{url('css/home.css')}}">
    <link rel="stylesheet" href="{{url('css/addProject.css')}}">
    <!-- box icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <!-- <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div> -->
    <!-- end loader -->
    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <img src="{{ asset('images/xetologo.png') }}" alt="">
        <a class="active" href="{{url('/')}}">Home</a>
        <a href="{{url('/exchange')}}">Exchange</a>
        <a href="{{url('/about')}}">About</a>
        <a href="{{url('/your-transactions')}}">Your Exchanges</a>
        <a href="{{url('/contact')}}">Contact</a>
    </div>
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="head-top">
            <div class="container-fluid">
                <div class="row d_flex">
                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="{{url('/')}}">XetoXchange</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    <section>

<div class="container2">





    
        <div class="errorfield">
            <div class="update-heading">Verify OTP</div>

            

        </div>
        
    
        <div class="form-step form-step-active">
            <p id="message_error" style="color:red;"></p>
            <p id="message_success" style="color:green;"></p>
            <form  id="form" action="{{ route('verifiedOtp',['id' => $id]) }}" method="post" >
                @csrf
            <div class="form-group">
                

                

                <input type="hidden" name="email" value="{{ $id }}">
                <input type="text" name="otp" class="title" required>


                <div id="name-error"></div>

                <div class="btns-group">
                    <!-- <a  class="btn2 btn-prev">Previous</a> -->
                    <!-- <a class="btn2 btn-next">Log In</a> -->
                    <!-- <input type="submit" value="Verify" id="verificationForm"> -->
                    <!-- <input type="submit" value="Verify"  class="btn2 btn-next" required> -->
                    <input type="submit" value="Verify" class="btn2 btn-next">
                </div>

                
            </div>
        </form>


            

            <p style="margin-top: 2rem;" class="time">Expires in </p>

            <div class="btns-group">
                <!-- <a  class="btn2 btn-prev">Previous</a> -->
                <!-- <a class="btn2 btn-next">Log In</a> -->
                <a href="{{route('verifyotp',['id' => $id])}}" class="btn2 btn-next">Refresh Page To Get OTP Again !!</a>
                <!-- <input id="resendOtpVerification" name="submit" value="Resend OTP" class="btn2 btn-next"> -->
            </div>


        </div>
   

    




</div>




</section>


        <!-- footer -->
        <footer>
        <div class="footer">
           
            <div class="copyright text_align_center ">
               <div class="container ">
                  <div class="row ">
                     <div class="col-md-12 ">
                        <p>© 2024 All Rights Reserved. Design by   <a href="# "> XetoXchange</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{url('js/jquery.min.js')}} "></script>
      <script src="{{url('js/bootstrap.bundle.min.js')}} "></script>
      <script src="{{url('js/jquery-3.0.0.min.js')}} "></script>
      <script src="{{url('js/custom.js')}} "></script>
   </body>
   <script src="{{url('js/home.js')}}"></script>
   <script src="{{url('js/addProject.js')}}"></script>
 





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script>

    $(document).ready(function(){
        $('#verificationForm').submit(function(e){
            e.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                url:"{{ route('verifiedOtp',['id' => $id]) }}",
                type:"POST",
                data: formData,
                success:function(res){
                    if(res.success){
                        alert(res.msg);
                        window.open("/","_self");
                    }
                    else{
                        $('#message_error').text(res.msg);
                        setTimeout(() => {
                            $('#message_error').text('');
                        }, 3000);
                    }
                }
            });

        });

        $('#resendOtpVerification').click(function(){
            $(this).text('Wait...');
            var userMail = json($email);

            $.ajax({
                url:"{{ route('verifiedOtp',['id' => $id])  }}",
                type:"GET",
                data: {email:userMail },
                success:function(res){
                    $('#resendOtpVerification').text('Resend Verification OTP');
                    if(res.success){
                        timer();
                        $('#message_success').text(res.msg);
                        setTimeout(() => {
                            $('#message_success').text('');
                        }, 3000);
                    }
                    else{
                        $('#message_error').text(res.msg);
                        setTimeout(() => {
                            $('#message_error').text('');
                        }, 3000);
                    }
                }
            });

        });
    });

    function timer()
    {
        var seconds = 30;
        var minutes = 1;

        var timer = setInterval(() => {

            if(minutes < 0){
                $('.time').text('');
                clearInterval(timer);
            }
            else{
                let tempMinutes = minutes.toString().length > 1? minutes:'0'+minutes;
                let tempSeconds = seconds.toString().length > 1? seconds:'0'+seconds;

                $('.time').text(tempMinutes+':'+tempSeconds);
            }

            if(seconds <= 0){
                minutes--;
                seconds = 59;
            }

            seconds--;

        }, 1000);
    }

    timer();

</script>
</html>
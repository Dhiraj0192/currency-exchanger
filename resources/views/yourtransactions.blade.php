<?php
    use Illuminate\Support\Facades\Session;
    $userName = Session::get('UserName');
?>

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
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="{{url('css/home.css')}}">
    <link rel="stylesheet" href="{{url('css/addProject.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <!-- <a class="active" href="{{url('/')}}">Home</a> -->
        <div >
            <div>
                <img src="{{ asset('images/xetologo.png') }}" alt="">
                <a href="{{url('/exchange')}}">Exchange</a>
                <a href="{{url('/about')}}">About</a>
                <a href="{{url('/your-transactions')}}">Your Exchanges</a>
                <a href="{{url('/contact')}}">Contact</a>
            </div>
            
                <div style="">
                    <div class="btns-group" style="margin-right: 1rem; margin-left: 1rem;">
                        <!-- <a  class="btn2 btn-prev">Previous</a> -->
                        <a href="{{url('/logout')}}" class="btn2" style="padding: 0;
                        position: absolute;
                        bottom: 3rem; font-size: 18px; width: 90%;" >Log Out</a>
                    </div>
                </div>

            

        </div>
        
        
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
                    <div class="col-sm-5">
                        <ul class="social_icon text_align_right d_none">
                            <!-- <li> <a class="active" href="{{url('/')}}">Home</a></li> -->
                            <li> <a href="{{url('/exchange')}}">Exchange</a></li>
                            
                            <li> <a href="{{url('/about')}}">About</a></li>
                            <li> <a href="{{url('/your-transactions')}}">Your Exchanges</a></li>
                            <li> <a href="{{url('/contact')}}">Contact</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="email text_align_right">
                            <li class="d_none"><a ><i class="fa fa-user" aria-hidden="true"></i></a></li>
                            <h2>{{$userName}}</h2>
                            <!-- <li class="d_none"> <a href="Javascript:void(1)"><i class="fa fa-search" style="cursor: pointer;" aria-hidden="true"></i></a> </li> -->
                            <li>
                                <button class="openbtn" onclick="openNav()"><img width="60px" src="images/menu_btn.png"></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    <section>

        <h2 style="text-align: center;
        background-color: black;
        padding: 10px;
        width: 108%;
        left: -4vw;">Your Exchanges</h2>

<div class="container4" id="slideDiv2">




    <div style="width: 100%;">
    <form id="form" action="{{ route('studentRegister') }}" method="post" enctype="multipart/form-data">
        
        
       
        
        <div class="form-step form-step-active">
           
            <div class="form-group">

                @foreach($userExchange as $key => $data)
                
                <div style="display: flex; justify-content: space-between;">
                    <div>
                        <label for="">Pay (INR) <span style="color: red;">*</span></label>
                        <input id="fullname" type="number" name="fullname" value="{{$data->Amount}}" class="title" style="width: 100%;" disabled>

                    </div>
                    <div style="margin-top: 2rem;">
                        <img src="{{ asset('images/arrows.png') }}" alt="" srcset="">

                    </div>
                    <div>
                        <label for="">Receive (USDT) </label>

                        
                        <input id="number" type="text" name="number" value="{{$data->ReceiveAmount}}" class="title" value="0 USDT" disabled>

                    </div>
                    <div style="margin-left: 6rem;">
                        <label for="">Receive Address</label>
                        <label for=""><span style="color: red;">{{$data->Address}}</span></label>
                        
    
                    </div>

                    <div>
                        <label for="">Transaction </label>
                        <label for=""><span style="color: lightgreen;">{{$data->Status}}</span></label>
                        
    
                    </div>

                    
                </div>

                <hr style="height:2px;border-width:0;color:white;background-color:white">

                @endforeach

                

                

                


               

                

                


            </div>


            


        </div>


        
    </form>

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
                        <p>© 2024 All Rights Reserved. Design by   <a href="# "> XetoXchage</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js "></script>
      <script src="js/bootstrap.bundle.min.js "></script>
      <script src="js/jquery-3.0.0.min.js "></script>
      <script src="js/custom.js "></script>
   </body>
   <script src="{{url('js/home.js')}}"></script>
<script src="{{url('js/addProject.js')}}"></script>
<script>
    var images = [];
    function image_select() {
        var imageName;
        var image = document.getElementById('images').files;
        for (i = 0; i < image.length; i++) {
            if (check_dup(image[i].name)) {
                images.push({
                    "name": image[i].name,
                    "url": URL.createObjectURL(image[i]),
                    "file": image[i],
                })
                imageName = image[i].name
            } else {
                alert(image[i].name + " is already added in list.");
            }

        }
        // document.getElementById('form').reset();

        document.getElementById('images-container').innerHTML = imageName;
    }

    function image_show() {
        var image = "";
        images.forEach((i) => {
            image += `<img src="` + i.url + `" alt="" srcset="">`;
        })
        return image;
    }

    function check_dup(name) {
        var image = true;
        if (images.length > 0) {
            for (j = 0; j < images.length; j++) {
                if (images[j].name == name) {
                    image = false;
                    break;
                }
            }
        }
        return image;
    }
</script>

<script>
    var panimages = [];
    function pan_image_select() {
        var panimageName;
        var panimage = document.getElementById('panimages').files;
        for (i = 0; i < panimage.length; i++) {
            if (pan_check_dup(panimage[i].name)) {
                panimages.push({
                    "name": panimage[i].name,
                    "url": URL.createObjectURL(panimage[i]),
                    "file": panimage[i],
                })
                panimageName = panimage[i].name
            } else {
                alert(panimage[i].name + " is already added in list.");
            }

        }
        // document.getElementById('form').reset();

        document.getElementById('pan-images-container').innerHTML = panimageName;
    }

    function pan_image_show() {
        var image = "";
        images.forEach((i) => {
            image += `<img src="` + i.url + `" alt="" srcset="">`;
        })
        return image;
    }

    function pan_check_dup(name) {
        var image = true;
        if (images.length > 0) {
            for (j = 0; j < images.length; j++) {
                if (images[j].name == name) {
                    image = false;
                    break;
                }
            }
        }
        return image;
    }
</script>

<script>
    var bankimages = [];
    function bank_image_select() {
        var bankimageName;
        var bankimage = document.getElementById('bankimages').files;
        for (i = 0; i < bankimage.length; i++) {
            if (bank_check_dup(bankimage[i].name)) {
                bankimages.push({
                    "name": bankimage[i].name,
                    "url": URL.createObjectURL(bankimage[i]),
                    "file": bankimage[i],
                })
                bankimageName = bankimage[i].name
            } else {
                alert(bankimage[i].name + " is already added in list.");
            }

        }
        // document.getElementById('form').reset();

        document.getElementById('bank-images-container').innerHTML = bankimageName;
    }

    function bank_image_show() {
        var image = "";
        images.forEach((i) => {
            image += `<img src="` + i.url + `" alt="" srcset="">`;
        })
        return image;
    }

    function bank_check_dup(name) {
        var image = true;
        if (images.length > 0) {
            for (j = 0; j < images.length; j++) {
                if (images[j].name == name) {
                    image = false;
                    break;
                }
            }
        }
        return image;
    }
</script>
</html>
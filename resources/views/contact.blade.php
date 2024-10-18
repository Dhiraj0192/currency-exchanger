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
    <title>XetoXchage</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="{{url('css/addProject.css')}}">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout inner_page">
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
                            <a href="{{url('/')}}">XetoXchage</a>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <ul class="social_icon text_align_right d_none">
                            <!-- <li> <a class="active" href="{{url('/')}}">Home</a></li> -->
                            <li> <a href="{{url('/exchange')}}">Exchange</a></li>
                            <li> <a href="{{url('/about')}}">About</a></li>
                            <li> <a href="{{url('/your-transactions')}}">Your Exchange</a></li>
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
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class=" col-md-10 offset-md-1">
                    <form id="request" class="main_form">
                        <div class="row">
                            <div class="col-md-6 ">
                                <input class="contactus" placeholder="Full Name" type="type" name="Full Name">
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Email" type="type" name="Email">
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Phone number" type="type" name="Phone number">
                            </div>
                            <div class="col-md-6">
                                <textarea class="textarea" placeholder="Message" type="type" Message="Name"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div style="text-align: center; margin-top: 3rem;">
        <h3>Feel Free To Join  Us On Telegram: <a href="https://t.me/escrowagent0" style="color: greenyellow; margin-left: .5rem;">@escrowagent0</a></h3>

        <h3 style="margin-top: 2rem;">Customer Support: <a href="https://t.me/aaghoribaaba" style="color: greenyellow; margin-left: .5rem;">@aaghoribaaba</a></h3>
    </div>
    <!-- footer -->
    <footer>
        <div class="footer">
            
            <div class="copyright text_align_center ">
               <div class="container ">
                  <div class="row ">
                     <div class="col-md-12 ">
                        <p>© 2024 All Rights Reserved. Design by   <a href="#">XetoXchage</a></p>
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
</html>
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
    <link rel="stylesheet" href="{{url('css/addProject.css')}}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
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
    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about_border">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="titlepage text_align_left">
                                    <h2>About Us</h2>
                                </div>
                                <div class="about_text">
                                    <p>Welcome to Xetoxchange, where convenience meets efficiency in the world of digital asset transactions. Our platform is designed to empower users like you to seamlessly convert USDT (Tether) into cash and vice versa, offering a secure and user-friendly environment for all your financial needs.</p>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about_img">
                                    <figure><img class="img_responsive" src="images/about2.png" alt="#" /></figure>
                                </div>
                            </div>
                            <div class="" style="text-align: center; margin-top: 5rem;">
                                <div class="">
                                    <h2 style="font-size: 35px;
                                    font-weight: 600;
                                    line-height: 55px;
                                    color: #fff;">Who We Are:</h2>
                                </div>
                                <div class="" style="margin-top: 1rem;">
                                    <p>At Xetoxchange, we understand the evolving landscape of digital assets and the growing demand for flexible and efficient financial solutions. Our team of experts is dedicated to providing you with a reliable platform that bridges the gap between the digital and traditional financial realms.</p>
                                    
                                </div>
                            </div>



                            <div class="" style="text-align: center; margin-top: 5rem;">
                                <div class="">
                                    <h2 style="font-size: 35px;
                                    font-weight: 600;
                                    line-height: 55px;
                                    color: #fff;">What Sets Us Apart:</h2>
                                </div>
                                <div class="" style="margin-top: 1rem;">
                                    <p>User-Friendly Interface: Our platform boasts an intuitive and user-friendly interface, ensuring a hassle-free experience for both novice and seasoned users. Whether you're new to cryptocurrency or a seasoned trader, Xeto is designed with you in mind.</p>
                                    <p style="margin-top: 1rem;">Secure Environment: Your security is our top priority. Xetoxchange employs state-of-the-art security measures to safeguard your transactions and personal information. Rest easy knowing that your financial activities are protected on our platform.</p>
                                    <p style="margin-top: 1rem;">Transparent Process: Transparency is key in the world of digital assets. Xetoxchange ensures a transparent and straightforward conversion process, keeping you informed at every step. No hidden fees or surprises – just a clear and honest transaction experience.</p>
                                </div>
                            </div>



                            <div class="" style="text-align: center; margin-top: 5rem;">
                                <div class="">
                                    <h2 style="font-size: 35px;
                                    font-weight: 600;
                                    line-height: 55px;
                                    color: #fff;">Why Choose Us:</h2>
                                </div>
                                <div class="" style="margin-top: 1rem;">
                                    <p>Market Competitive Rates: We offer competitive rates to ensure that you get the most value for your assets. Maximize your returns with Xetoxchange.</p>
                                    <p style="margin-top: 1rem;">24/7 Support: Our dedicated customer support team is available 24/7 to assist you with any queries or concerns. We believe in providing prompt and efficient support to enhance your overall experience</p>
                                    <p style="margin-top: 1rem;">Adaptable to Your Needs: Whether you're looking to convert USDT to cash or explore other financial options, Xetoxchange is adaptable to your needs. Customize your transactions to suit your preferences and goals.</p>
                                </div>
                            </div>
                            

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- footer -->

    <div style="text-align: center;">
        <h3>Feel Free To Join  Us On Telegram: <a href="https://t.me/escrowagent0" style="color: greenyellow; margin-left: .5rem;">@escrowagent</a></h3>
    </div>
    <footer>
        <div class="footer">
            
            <div class="copyright text_align_center ">
               <div class="container ">
                  <div class="row ">
                     <div class="col-md-12 ">
                        <p>© 2024 All Rights Reserved. Design by   <a href="#"> XetoXchange</a></p>
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
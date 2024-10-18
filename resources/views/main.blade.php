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
                    <div class="col-sm-5">
                        <ul class="social_icon text_align_right d_none">
                            <li> <a class="active" href="{{url('/')}}">Home</a></li>
                            <li> <a href="{{url('/exchange')}}">Exchange</a></li>
                            <li> <a href="{{url('/about')}}">About</a></li>
                            <!-- <li> <a href="{{url('/your-transactions')}}">Your Exchanges</a></li> -->
                            <li> <a href="{{url('/contact')}}">Contact</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="email text_align_right">
                            <!-- <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i></a></li> -->
                            <!-- <li class="d_none"> <a href="Javascript:void(1)"><i class="fa fa-search" style="cursor: pointer;" aria-hidden="true"></i></a> </li> -->
                            <li>
                                <button class="openbtn" onclick="openNav()"><img src="images/menu_btn.png"></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <!-- start slider section -->
    <div id="top_section" class=" banner_main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container-fluid">
                                    <div class="carousel-caption relative">
                                        <div class="row d_flex">
                                            <div class="col-md-6">
                                                <div class="con_img">
                                                    <figure><img class="img_responsive" src="images/top_img.png" alt="#" /></figure>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="bluid">
                                                    <h1>Currency Exchanger.......!
                                                        <br> Good To Go...</h1>
                                                    <p>Welcome to Xetoxchange, where convenience meets efficiency in the world of digital asset transactions. Our platform is designed to empower users like you to seamlessly convert USDT (Tether) into cash and vice versa, offering a secure and user-friendly environment for all your financial needs.
                                                    </p>
                                                    <a class="read_more" href="{{url('/signup')}}">Let's Start </a><a class="read_more" href="{{url('/signin')}}">Sign In </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider section -->
    <!-- wallet -->
    <div class="wallet" style="background-image: url(public\images\bg.png);">
        <div class="container-fluid">
            <div class="titlepage text_align_center">
                <h2 style=" margin-top: 4rem;">Fast Exchange in Minutes Between</h2>
            </div>
            <div class="row" style="display: flex; justify-content: center; align-items: center;">
                <!-- <div class="col-lg-3 col-sm-6">
                    <div id="wa_hover" class="wallet_box text_align_center">
                        <i><img src="images/paypal-icon.svg" alt="#" style="max-width: 100%;
                            height: 100px;
                            padding: .9rem;"/></i>
                        
                    </div>
                </div> -->
                <div class="col-lg-3 col-sm-6">
                    <div id="wa_hover" class="wallet_box text_align_center">
                        <i><img src="images/upi-payment-icon.svg" alt="#"   style="max-width: 100%;
                            height: 100px;
                            padding: .9rem;"/></i>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div id="wa_hover" class="wallet_box text_align_center">
                        <i><img src="images/tether-usdt-icon.svg" alt="#"   style="max-width: 100%;
                            height: 100px;
                            padding: .9rem;"/></i>
                       
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-sm-6">
                    <div id="wa_hover" class="wallet_box text_align_center">
                        <i><img src="images/paypal-icon.svg" alt="#" style="max-width: 100%;
                            height: 100px;
                            padding: .9rem;" /></i>
                        
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- end wallet -->
    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about_border">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="titlepage text_align_left">
                                    <h2>Who We Are</h2>
                                </div>
                                <div class="about_text">
                                    <p>At Xetoxchange, we understand the evolving landscape of digital assets and the growing demand for flexible and efficient financial solutions. Our team of experts is dedicated to providing you with a reliable platform that bridges the gap between the digital and traditional financial realms.</p>
                                    <a class="read_more" href="{{url('/about')}}">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about_img">
                                    <figure><img class="img_responsive" src="images/about2.png" alt="#" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- graf -->
    <div class="graf">
        <div class="container" style="margin-bottom: 3rem;">
            
                <div class="titlepage text_align_center">
                    <h2 style=" margin-top: 4rem;">Currency RealTime Rates</h2>
                </div>
                <iframe src="https://www.widgets.investing.com/live-currency-cross-rates?theme=darkTheme&pairs=1,3,2,4,7,5,8,6,9,49,11,9278,9289" width="100%" height="600px" margin-top="4rem"  frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe><div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;">Powered by <a href="https://www.investing.com?utm_source=WMT&amp;utm_medium=referral&amp;utm_campaign=LIVE_CURRENCY_X_RATES&amp;utm_content=Footer%20Link" target="_blank" rel="nofollow">Investing.com</a></div>

        </div>
    </div>
    <!-- end graf -->
  
   
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>Requeste A call Back</h2>
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
    <!-- end contact -->
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
      <script src="js/jquery.min.js "></script>
      <script src="js/bootstrap.bundle.min.js "></script>
      <script src="js/jquery-3.0.0.min.js "></script>
      <script src="js/custom.js "></script>
   </body>
</html>
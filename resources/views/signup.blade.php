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

    <section>

        <div class="container2" id="slideDiv2">





            <form id="form" action="{{ route('studentRegister') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="errorfield">
                    <div class="update-heading">Let's SignUP</div>

                    <p>All Fields Are Required!!</p>

                </div>
                <div class="progressbar">
                    <div class="progress" id="progress"></div>
                    <div class="progress-step progress-step-active" data-title="About"></div>
                    <div class="progress-step " data-title="Required Documents"></div>
                    <div class="progress-step" data-title="Finish"></div>

                </div>

                <div class="form-step form-step-active">
                    <div class="form-group">
                        <label for="">Full Name <span style="color: red;">*</span> : </label>


                        <input id="fullname" type="text" name="fullname" class="title" >

                        <label for="">Email <span style="color: red;">*</span> : </label>


                        <input id="email" type="email" name="email" class="title" >

                        <label for="">Phone Number <span style="color: red;">*</span> : </label>


                        <input id="number" type="text" name="number" class="title" >

                        <label for="">Password <span style="color: red;">*</span> : </label>


                        <input id="password" type="password" name="password" class="title">

                        <div id="name-error"></div>


                    </div>


                    <div class="btns-group">
                        <!-- <a  class="btn2 btn-prev">Previous</a> -->
                        <a class="btn2 btn-next">Next</a>
                    </div>


                </div>



                <div class="form-step ">
                    <input type="file" name="adharimages" id="images" style="visibility: hidden;" onchange="image_select()"
                        >
                    <div class="choose-cont">
                        <h4>Adhar Card <span style="color: red; font-size: 15px;">*only in pdf</span> : </h4>

                        <a class="choose-btn" onclick="document.getElementById('images').click()">Choose Images</a>

                    </div>

                    <p id="images-container" style="margin-top: .5rem;"></p>

                    <input type="file" name="panimages" id="panimages" style="visibility: hidden;"
                        onchange="pan_image_select()" >
                    <div class="choose-cont">
                        <h4>Pan Card <span style="color: red;font-size: 15px;">*only in pdf</span> : </h4>

                        <a class="choose-btn" onclick="document.getElementById('panimages').click()">Choose Images</a>

                    </div>

                    <p id="pan-images-container" style="margin-top: .5rem;"></p>

                    <input type="file" name="bankimages" id="bankimages" style="visibility: hidden;"
                        onchange="bank_image_select()" >
                    <div class="choose-cont">
                        <h4>Bank Statements <h6> 3 months </h6> <span style="color: red;font-size: 15px;">*only in
                                pdf</span> : </h4>


                        <a class="choose-btn" onclick="document.getElementById('bankimages').click()">Choose Images</a>

                    </div>

                    <p id="bank-images-container" style="margin-top: .5rem;"></p>


                    <div class="btns-group">
                        <a class="btn2 btn-prev">Previous</a>
                        <a class="btn2 btn-next">Next</a>
                    </div>


                </div>


                <div class="form-step">
                    <div class="form-group">

                        <div class="form-group-part1">

                            <div class="sub" id="rm-group1">
                                <div>
                                    <label for="">Terms and Condition </label>

                                    <p>
Welcome to Xetoxchange! By accessing or using our website and services, you agree to comply with and be bound by these terms and conditions. Please read them carefully. If you do not agree with any part of these terms, you may not use our services.

You agree to use Xetoxchange for lawful purposes and in a way that does not infringe the rights of, restrict, or inhibit anyone else's use and enjoyment of our services.

Any use of Xetoxchange for illegal or unauthorized purposes is strictly prohibited. This includes but is not limited to unauthorized access, transmission of malicious software, or any activity that may disrupt the functionality of our platform.

For users of our shared web hosting services, the usage of allocated resources must adhere to the agreed terms. Excessive use that impacts server performance may result in account suspension or termination.

Users are prohibited from using excessive server resources that negatively impact the performance of the server or other users' websites. This includes, but is not limited to, CPU usage, memory usage, and bandwidth consumption.

Users are required to adhere to specified disk space and bandwidth limits for shared web hosting plans. Violation may result in additional charges or suspension of services.

Xetoxchange is not responsible for the backup of personal computer data. Users are advised to regularly back up their personal data to prevent loss.


Any attempt to interfere with the normal operation of Xetoxchange's systems or networks is strictly prohibited and may result in legal action.

The exchange of fraudulent or misleading content on Xetoxchange is strictly prohibited. This includes but is not limited to false financial information, identity theft, or any form of deceptive practices.


Violation of any terms and conditions outlined in this agreement may result in the suspension or termination of your account without prior notice.

All content and materials on Xetoxchange are the property of Xetoxchange and are protected by copyright law. Users may not reproduce, distribute, or create derivative works without explicit permission.


Xetoxchange is provided "as is" without any warranties, expressed or implied. We do not guarantee the accuracy, completeness, or timeliness of information on our platform.


Xetoxchange shall not be liable for any direct, indirect, incidental, special, or consequential damages arising out of the use or inability to use our services.


By using Xetoxchange, you acknowledge that you have read, understood, and agreed to these terms and conditions. We reserve the right to update or modify these terms at any time without prior notice. It is your responsibility to review these terms periodically for changes. Continued use of Xetoxchange after any modifications indicates your acceptance of the updated terms.
                                    </p>

                                </div>

                                <!-- <div class="rm-group">
                      <a class="remove"><i class='bx bxs-trash'></i></a>
                    </div> -->

                            </div>

                        </div>






                    </div>


                    <div class="btns-group">
                        <a class="btn2 btn-prev">Previous</a>
                        <input type="submit" name="submit" value="Submit" class="btn2">

                    </div>



                </div>
            </form>






        </div>
        <div style="display: flex;     justify-content: center;
margin-top: 2rem;
margin-bottom: -5rem;">
            <p>Already have an account?</p>
            <p><a href="{{url('/signin')}}" style="color: green; font-weight: bold;"> Login!</a></p>
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
                            <p>© 2024 All Rights Reserved. Design by <a href="# "> XetoXchange</a></p>
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
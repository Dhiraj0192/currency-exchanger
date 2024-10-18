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

    <section style="margin-top: -5rem;">


    <div class="carousel-inner" >
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
                                                    
    <h1 style=" font-size: 35px; color: white; font-weight: bold; line-height: 100px;">Let's Exchange Your Money</h1>
                                                    <p>Welcome to Xetoxchange, where convenience meets efficiency in the world of digital asset transactions. Our platform is designed to empower users like you to seamlessly convert USDT (Tether) into cash and vice versa, offering a secure and user-friendly environment for all your financial needs.
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>

<div class="container3" id="slideDiv2">
    <div style="margin-right: 13%;">
        <div class="btns-group" style="width: 160%;">
            <!-- <a  class="btn2 btn-prev">Previous</a> -->
            <a class="btn2">Exchange Money</a>
        </div>
    </div>

    <div style="border-right: 3px solid white;">

    </div>



    <div style="width: 70%; margin-left: 3rem;">
    <form id="form" action="{{ route('exchangeProcess') }}" method="post" enctype="multipart/form-data">
        @csrf
        
        <div class="progressbar">
            <div class="progress" id="progress"></div>
            <div class="progress-step progress-step-active" data-title="Amount"></div>
            <div class="progress-step " data-title="Required Docuent"></div>
            

        </div>

        <div class="form-step form-step-active">
            <div class="form-group">
                <label for="">Enter Amount <span style="color: red;">*</span> : </label>

                <p>Reference Price: 89.5 INR == 1 USDT</p>
                <div style="display: flex; justify-content: space-between;">
                    <div>
                        <label for="">Pay (INR) <span style="color: red;">*</span></label>
                        <div class="convert-from" style="border: 1px solid #00abf0;
                        border-radius: 5px;
                        /* color: white; */
                        padding: 5px; text-align: center; display: flex;">
                            <input type="number" name="amount" id="amountFrom" style="border: none;
    font-size: 16px;
    color: white;
    padding: 5px;
    outline: none;
    background-color: transparent;
    width: 200px; text-align: center;" >
                            <select id="convertFrom" style="border: none;
                            font-size: 16px;
                            padding: 5px;
                            outline: none;
                            background-color: black;
                            width: 200px; color: white;">
                                <option value="INR">Indian Rupee</option>
                            </select>
                        </div>
                    
                        
                        <!-- <input id="fullname" type="number" name="amount" class="title" style="width: 100%;"> -->

                    </div>
                    <div style="margin-top: 2rem;">
                        <img src="{{ asset('images/arrows.png') }}" alt="" srcset="">

                    </div>
                    <div>
                        <label for="">Receive (USDT) </label>
                        <div class="convert-to" style="border: 1px solid #00abf0;
                        border-radius: 5px;
                        color: white;
                        padding: 5px; text-align: center; display: flex;">
                            <input type="number" id="amountTo" readonly style="border: none;
                            font-size: 16px;
                            color: white;
                            padding: 5px;
                            outline: none;
                            background-color: transparent;
                            width: 200px; text-align: center;" name="receive">
                            <select id="convertTo" style="border: none;
                            font-size: 16px;
                            padding: 5px;
                            outline: none;
                            background-color: black;
                            width: 200px; 
                            color: white;">
                                <option value="USD">US Dollar</option>
                            </select>
                        </div>

                        
                        <!-- <input id="number" type="text" name="" class="title" value="0 USDT" disabled> -->

                    </div>
                </div>

                <div>
                    <label for="">Enter Receive Address <span style="color: red;">*</span></label>
                    <input id="fullname" type="text" name="address" class="title" >

                </div>

                


               

                

                


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
                <div style="">
                    <div style="margin-top: 4rem;">
                        <h4>Pay INR Money <span style="color: red; font-size: 15px;">*</span> : </h4>
                        <p>Please pay the amount through the given Bank Details.</p>
                        

                    </div>
                    
                    


                </div>
                

            </div>
            <div style="display: flex; justify-content: center;">
                <div style=" margin-top: 4rem; background-color: black; padding: 2rem;">
                    <h3>Bank Name : PNB</h3>
                    <h3>Account Name : ARUN SAH</h3>
                    <h3>Account Number : 2539000100272175</h3>
                    <h3>IFSC : PUNB0253900</h3>
                </div>
                <div style="margin-left: 5rem; margin-top: 4rem; background-color: black; padding: 2rem;">
                    <h3>Bank Name : State bank of India</h3>
                    <h3>Account Name : SAGAR KUMAR SAH</h3>
                    <h3>Account Number : 40082663725</h3>
                    <h3>IFSC : SBIN0010446</h3>
                </div>
            </div>

            <div style="margin-top: 3rem;">
                <p><span style="color: red; font-size: 15px;">*</span>We do not accept online transaction. Only Cash Deposit Machine (CDM) deposits and Bank Deposit are accepted.<span style="color: red; font-size: 15px;">*</span></p>
            <p style="margin-top: .5rem;">We are not responsible for any financial losses due to online transactions.</p>

            </div>

            

            <p id="images-container" style="margin-top: .5rem;"></p>

            <input type="file" name="paymentimages" id="panimages" style="visibility: hidden;"
                onchange="pan_image_select()" >
            <div class="choose-cont">
                <h4>Payment Proof <span style="color: red;font-size: 15px;">*only in pdf</span> : </h4>

                <a class="choose-btn" onclick="document.getElementById('panimages').click()">Choose Files</a>

            </div>

            <p id="pan-images-container" style="margin-top: .5rem;"></p>

            


            
            <div class="btns-group">
                <a class="btn2 btn-prev">Previous</a>
                <input type="submit" name="submit" value="Submit" class="btn2">

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
<script>
    const currencyList = [
    



    {name: "Indian Rupee", code: "INR"}
    
    // {name: "US Dollar", code: "USD"}
];

const currencyList2 = [
    



    // {name: "Indian Rupee", code: "INR"},
    
    {name: "US Dollar", code: "USD"}
];

// function populateSelectOptions(selectId, options) {
//     const select = document.getElementById(selectId);

//     options.forEach(option => {
//         const optionElement = document.createElement('option');
//         optionElement.value = option.code;
//         optionElement.textContent = option.name;
//         select.appendChild(optionElement);
//     });
// }

// populateSelectOptions('convertFrom', currencyList);
// populateSelectOptions('convertTo', currencyList2);


const apiKey = '69799d05ab0c71fcd792539c';


async function convertCurrency() {
    const amountFrom = document.getElementById('amountFrom').value;
    const convertFrom = document.getElementById('convertFrom').value;
    const convertTo = document.getElementById('convertTo').value;


    const apiUrl = `https://v6.exchangerate-api.com/v6/${apiKey}/pair/${convertFrom}/${convertTo}`;
    try {
        const response = await fetch(apiUrl);
        const data = await response.json();

        const exchangeRate = 1/89.5;
        const amountTo = (amountFrom * exchangeRate).toFixed(2);
        document.getElementById('amountTo').value = amountTo;
        // document.getElementById('exchangeRate').textContent = `1 ${convertFrom} = ${exchangeRate} ${convertTo}`;
    } catch (error) {
        console.error('Error fetching exchange rate:', error);
    }
}

document.getElementById('convertFrom').addEventListener('change', convertCurrency);
document.getElementById('convertTo').addEventListener('change', convertCurrency);
document.getElementById('amountFrom').addEventListener('input', convertCurrency);

// document.querySelector('.swap-currency').addEventListener('click', function () {
//     const convertFrom = document.getElementById('convertFrom');
//     const convertTo = document.getElementById('convertTo');
//     const temp = convertFrom.value;
//     convertFrom.value = convertTo.value;
//     convertTo.value = temp;
//     convertCurrency();
// });
</script>


</html>
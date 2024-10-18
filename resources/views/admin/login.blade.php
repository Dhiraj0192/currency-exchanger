

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XetoXchage - Admin</title>
    <link rel="stylesheet" type="text/css" href="{{url('admin/css/style.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    
</head>

<body style="background-image: url({{url('images/body_bg.jpg')}}) ; background-size: cover; width: 100%;">



    <div class="body-section">
        <div class="navbar-section">
            <div class="logo-section">
                <a href="login.html" class="logo">Xeto<span>Xchange</span></a>
            </div>
            



        </div>

        <div class="sign-in-section">
            <div class="form-section">
                <div class="form-container">
                    <h2 class="sign-in-heading">Admin - Login</h2>

            <form action="{{route('adminlogin')}}" method="post">
            @csrf
                <input type="email" name="email" placeholder="Email" class="email-container">

                <br>

                <input type="password" name="password" placeholder="Password" class="password-container">

                <br>

                <a href=""><input type="submit" name="submit" value="Login" class="sign-in-container"></a>


                

                
                


            </form>
                </div>
                
            </div>
            

        </div>


        
    </div>

    <div class="footer-container">
            <div class="copyright-section">
            <p class="line">&copy; 2024</p>
            <p class="line">www.xetoxchange.com</p>
            <p>All Rights Reserved</p>
        </div>
    </div>


    <script src="js/function.js"></script>
</body>

</html>
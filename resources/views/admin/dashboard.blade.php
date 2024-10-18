
<?php
                  use App\Models\SignUP;
                  use App\Models\Exchange;
                  $userImage = session('Adminimage');
                  $userName = session('Adminname');
                  
                  $pendingcountData = SignUP::where('verified_or_not',NULL)->count();
                  $activecountData = SignUP::where('verified_or_not','active')->count();
                  $pendingcountTran = Exchange::where('Status','Pending')->count();
                  $activecountTran = Exchange::where('Status','Completed')->count();

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XetoXchage - Dashboard</title>
    <link rel="stylesheet" type="text/css" href="{{url('admin/css/dashboard.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body style="background-image: url({{url('images/body_bg.jpg')}}) ; background-size: cover; width: 100%;">
    <div class="sidebar-container">
        <div class="logo-section">
            <a href="{{url('/admin-dashboard')}}" class="logo">Xeto<span>Xchange</span></a>

        </div>


        <div class="admin-info-section">
            <img src="{{ asset('images/AdminProfilePicture/' . $userImage) }}" class="admin-image">
            <div class="admin-info">
                <h2 class="admin">Admin</h2>
                <h2 class="admin-name">
                    {{$userName}}
                </h2>

            </div>
            <div class="logout-section">
                <a href="{{url('/adminlogout')}}"><i class='bx bx-log-out'></i></a>
            </div>
        </div>

        <div class="navbar-container">
            <a href="{{url('/admin-dashboard')}}" class="nav-link "><i class='bx bxs-dashboard'></i><span
                    class="nav-active">DASHBOARD</span></a>

            

            <a href="{{url('/active-user')}}" class="nav-link"><i class='bx bx-movie'></i><span>Active Profile</span></a>

            <a href="{{url('/pending-user')}}" class="nav-link"><i class='bx bx-movie'></i><span>Pending Profiles</span></a>

            <a href="{{url('/completed-transactions')}}" class="nav-link"><i class='bx bx-movie'></i><span>Complete Transactions</span></a>

            <a href="{{url('/pending-transactions')}}" class="nav-link"><i class='bx bx-movie'></i><span>Pending Transactions</span></a>

            

            <p class="pages" onclick="showHideUser()" onsubmit="return false;"><i
                    class='bx bx-note'></i><span>PAGES</span><i class='bx bxs-down-arrow down'></i>
            <p>

            <div class="pages-menu-container" id="cont">
                <ul class="pages-menu">
                    
                    <li><a href="{{url('/add-admin-user')}}" class="pages-menu-link">Add admin user</a></li>
                    <li><a href="{{url('/admin-user')}}" class="pages-menu-link">Admin User</a></li>

                    

                   

                </ul>
            </div>


            </a>

            

            



            
        </div>

        <div class="sidebar-footer">
            <p>© XetoXchage, 2024.</p>
            <p>Create by <span>Dhiraj Yadav</span></p>
        </div>


    </div>

    <head>
        <link rel="stylesheet" type="text/css" href="{{url('admin/css/movies.css')}}">
    </head>

    <div class="bodycontainer">
        <div class="header-section">
            <h2 class="header-title">Dashboard</h2>

            <!-- <form action="movie-search.php" method="POST">
                <div class="search-box">

                    <input type="text" name="search" value="" id="search-input" placeholder="" maxlength="10">
                    <input class="search-btn" type="submit" name="submit" value="Search"></input>

                </div>

            </form> -->
            <a href="{{url('/add-admin-user')}}" class="add-movie-btn"><span>ADD ADMIN</span></a>

        </div>

        <div class="body-cont">
            <div class="first-div">
                <p class="monthly-view-heading">Total Numbers Of Active Profiles</p>
                <div class="monthly-view-data">
                    <p class="mnthnumber">{{$activecountData}}</p>
                    <i class='bx bx-line-chart-down'></i>
                </div>
            </div>

            <div class="first-div">
                <p class="monthly-view-heading">Total Numbers Of Pending Profiles</p>
                <div class="monthly-view-data">
                    <p class="mnthnumber">{{$pendingcountData}}</p>
                    <i class='bx bx-film'></i>
                </div>
            </div>

            




        </div>

        <div class="body-cont">
            <div class="first-div">
                <p class="monthly-view-heading">Total Numbers Of complete Transactions</p>
                <div class="monthly-view-data">
                    <p class="mnthnumber">{{$activecountTran}}</p>
                    <i class='bx bx-line-chart-down'></i>
                </div>
            </div>

            <div class="first-div">
                <p class="monthly-view-heading">Total Numbers Of Pending Transactions</p>
                <div class="monthly-view-data">
                    <p class="mnthnumber">{{$pendingcountTran}}</p>
                    <i class='bx bx-film'></i>
                </div>
            </div>

            




        </div>

        







        









    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{url('admin/js/dashboard.js')}}"></script>

</body>

</html>
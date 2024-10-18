<?php
                  
                  $userImage = session('Adminimage');
                  $userName = session('Adminname');        

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XetoXchage</title>
    <link rel="stylesheet" type="text/css" href="{{url('admin/css/dashboard.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
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



            <a href="{{url('/active-user')}}" class="nav-link"><i class='bx bx-movie'></i><span>Active Users</span></a>

            <a href="{{url('/pending-user')}}" class="nav-link"><i class='bx bx-movie'></i><span>Pending
                    Users</span></a>


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
        <link rel="stylesheet" type="text/css" href="{{url('admin/css/comments.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('admin/css/movies.css')}}">

    </head>


    <div class="bodycontainer">
        <div class="header-section">
            <h2 class="header-title">Full Name : {{$userData->fullname}}</h2>


        </div>
        <div class="user-container">
            <!-- <div class="user-info-heading"> -->

            <div style="display: flex; justify-content: center;">
                <h4 style="
          
          margin: 30px;">Email : {{$userData->email}}</h4>

                <h4 style="
          
          margin: 30px;">Phone Number : {{$userData->number}}</h4>
            </div>


            <div style="display: flex;
          justify-content: flex-start;
          flex-direction: column;
          flex-wrap: nowrap;
          align-content: flex-start;
          align-items: center;
      ">
                <h2 style="text-align: center;">Adhar Card </h3>
                    <iframe style="border: 6px solid yellow;
            border-radius: 6px;
            
            margin: 30px;" width="60%" height="350px" src="{{ asset('images/AdharCardFile/' . $userData->adharcard) }}"
                        frameborder="0"></iframe>
                    <hr style="width: 100%; color: white; margin-top: 1rem; margin-bottom: 1rem;">
                    <h2 style="text-align: center;">Pan Card </h3>
                        <iframe style="border: 6px solid yellow;
            border-radius: 6px;
            
            margin: 30px;" width="60%" height="350px" src="{{ asset('images/PanCardFile/' . $userData->pancard) }}"
                            frameborder="0"></iframe>
                        <hr style="width: 100%; color: white; margin-top: 1rem; margin-bottom: 1rem;">
            </div>

            <h2 style="text-align: center;">Bank Statements </h3>

                <div style="border: 6px solid yellow;
          border-radius: 6px;
          
          margin: 30px;


      ">


                    <iframe width="100%" height="550px"
                        src="{{ asset('images/BankStatementFile/' . $userData->bankstatement) }}"
                        frameborder="0"></iframe>

                </div>

                <hr style="width: 100%; color: white; margin-top: 1rem; margin-bottom: 1rem;">
                <div style="display: flex; justify-content: space-between;
                
                margin-left: 30px; margin-top: 3rem; margin-bottom: 3rem;">
                    <a href="{{url('/active-user')}}" class="add-movie-btn"><span>Cancel</span></a>
                    <div style="display: flex; align-items: center;">
                        <p style="margin-right: 1rem; font-size: 20px;">Respond : </p>
                        
                  
                  
                    
                       
                        @if ($userData->verified_or_not == NULL)
                        <a href="{{ url('acceptuser',['id' => $userData->id])}}" class="add-movie-btn"><span>Accept</span></a>
                        @endif
                  
                        <a href="{{ url('rejectuser',['id' => $userData->id])}}" class="add-movie-btn"><span>Reject</span></a>

                    </div>
                </div>










        </div>





    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{url('admin/js/dashboard.js')}}"></script>

</body>

</html>
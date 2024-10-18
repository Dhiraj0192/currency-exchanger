



<?php
                  
                  $userImage = session('Adminimage');
                  $userName = session('Adminname');        

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XetoXchage - Active Users</title>
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
                    >DASHBOARD</span></a>

            

            <a href="{{url('/active-user')}}" class="nav-link"><i class='bx bx-movie'></i><span class="nav-active">Active Users</span></a>

            <a href="{{url('/pending-user')}}" class="nav-link"><i class='bx bx-movie'></i><span>Pending Users</span></a>

            
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
        <h2 class="header-title">Active Users</h2>
        
          
      </div> 
      <div class="user-container">
      	<!-- <div class="user-info-heading"> -->


          <table class="spacing">
           <tr class="movies-info-heading">
              <div class="movies-heading-container">
                <th>ID</th>
                
                <th>Full Name</th>
                <th>Status</th>
                
                <th>Email</th>
                <th>Contact No.</th>
                
                <th style="text-align: right;">ACTIONS</th>

              </div>
            </tr>

            @foreach($userData as $key => $data)
            
                
            
          
            <tr class="movies-info-heading-data">
              <div class="movies-data-container">
               
                
                <td style=" letter-spacing: 1px"><p class="comment-data">{{$data->id}}</p></td>
                <td><p class="review-data">{{$data->fullname}}</p></td>
                <td><p class="review-data">{{$data->email}}</p></td>
                
                <td><p class="review-data" style="color: red;">{{$data->verified_or_not}}</p></td>
                <td><p class="review-data">{{$data->number}}</p></td>
                <!-- <td><p class="status-data"></p></td> -->
                <td style="text-align: right;">
                  <div class="action-container">
                    
                    <a href="{{ url('user',['id' => $data->id])}}"><i class='bx bxs-low-vision eye-icon'></i></a>
                    <a href=""><i class='bx bxs-trash delete-icon' ></i></a>
                  </div>
                </td>
              </div>
              
            </tr>
           
            @endforeach


           


          </table>






      		
      	</div>

      	
      


</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{url('admin/js/dashboard.js')}}"></script>

</body>
</html>



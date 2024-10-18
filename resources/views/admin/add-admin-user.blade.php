
<?php
                  
                  $userImage = session('Adminimage');
                  $userName = session('Adminname');        

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XetoXchage - Admin Panel</title>
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

            <!-- <a href="users.html" class="nav-link"><i class='bx bx-user-circle'></i><span>USERS</span></a> -->

            <a href="{{url('/active-user')}}" class="nav-link"><i class='bx bx-movie'></i><span>Active Profile</span></a>

            <a href="{{url('/pending-user')}}" class="nav-link"><i class='bx bx-movie'></i><span>Pending Profile</span></a>

            
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

<div class="bodycontainer" >
    <div class="header-section">
        <h2 class="header-title">ADD ADMIN USER</h2>
        
    </div>

    <div class="add-user-container">
    	<div>
    		<form class="user-image" action="{{ route('addadminuser') }}" method="post" enctype="multipart/form-data">
            @csrf
    			<div>
    				<img src="" id="img_url" style="background-image: url(images/upload-pp.png) ; background-size: cover;">
                    <input class="file" name="profilepic" type="file" id="img_file" onChange="img_pathUrl(this);" required></input>

                    <p style="text-align: center; font-size: 20px; color: #ffb43a;">Upload Your Photo</p>
					
    			</div>
    		
    			
				<div class="user-info">
    				<input class="fullname" type="text" name="fullname" placeholder="Full Name" maxlength="85" required>
    				<input class="email" type="email" name="email" placeholder="Email" required>
    				<input class="password" type="text" name="password"  placeholder="Password" required>


    				<input class="number" type="number" name="number"  placeholder="Mobile No." required>
                    
    				<!-- <input class="file" name="profilepic" type="file" id="img_file" onChange="img_pathUrl(this);" required></input> -->

    				<div class="btn">
    					<input class="add-user-btn" type="submit" name="submit" value="ADD USER">
    				</div>
    				
    				
    			</div>
			</form>
			
    	</div>


    	
    </div>  
</div>


</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{url('admin\js\dashboard.js')}}"></script>

</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StreamFlix - Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <div class="sidebar-container">
        <div class="logo-section">
            <a href="index.html" class="logo">Port<span>Folio's</span></a>

        </div>


        <div class="admin-info-section">
            <img src="./userProfilePic/<?php echo $_SESSION['user_img']?>" class="admin-image">
            <div class="admin-info">
                <h2 class="admin">Admin</h2>
                <h2 class="admin-name">
                    <?php echo $_SESSION['user_name']?>
                </h2>

            </div>
            <div class="logout-section">
                <a href="logout.php"><i class='bx bx-log-out'></i></a>
            </div>
        </div>

        <div class="navbar-container">
            <a href="index.html" class="nav-link "><i class='bx bxs-dashboard'></i><span
                    class="nav-active">DASHBOARD</span></a>

            <a href="users.html" class="nav-link"><i class='bx bx-user-circle'></i><span>USERS</span></a>

            <a href="movies.php" class="nav-link"><i class='bx bx-movie'></i><span>Users Profile</span></a>

            <a href="movies.php" class="nav-link"><i class='bx bx-movie'></i><span>Users Projects</span></a>

            

            <p class="pages" onclick="showHideUser()" onsubmit="return false;"><i
                    class='bx bx-note'></i><span>PAGES</span><i class='bx bxs-down-arrow down'></i>
            <p>

            <div class="pages-menu-container" id="cont">
                <ul class="pages-menu">
                    
                    <li><a href="add-admin-user.html" class="pages-menu-link">Add admin user</a></li>
                    <li><a href="admin-user.html" class="pages-menu-link">Admin User</a></li>

                    

                    

                </ul>
            </div>


            </a>

            

            



            <a href="../home.php" class="nav-link" target="_blank"><i class='bx bx-arrow-back'></i><span>BACK TO
                    PORTFOLIO'S</span></a>
        </div>

        <div class="sidebar-footer">
            <p>© PORTFOLIO'S, 2023.</p>
            <p>Create by <span>Dhiraj Yadav</span></p>
        </div>


    </div>
<head>
  <link rel="stylesheet" type="text/css" href="css/comments.css">
  <link rel="stylesheet" type="text/css" href="css/movies.css">

</head>


<div class="bodycontainer">
      <div class="header-section">
        <h2 class="header-title">Admin Users</h2>
        
          
      </div> 
      <div class="user-container">
      	<!-- <div class="user-info-heading"> -->


          <table class="spacing">
           <tr class="movies-info-heading">
              <div class="movies-heading-container">
                <th>ID</th>
                <th>Profile Pic</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Contact No.</th>
                <th style="text-align: right;">ACTIONS</th>

              </div>
            </tr>

            <?php
              $query = "SELECT * from streamflixusers ORDER BY id DESC";
              $run = mysqli_query($con,$query);

              if ($run) {
                while ($row = mysqli_fetch_assoc($run)) {
                  
                

            ?>
            <tr class="movies-info-heading-data">
              <div class="movies-data-container">
                <td><p class="id-data"><?php echo $row['id'];  ?></p></td>
                <td>
                  <div class="info-container">
                    <img src="./userProfilePic/<?php echo $row['profilepic'];  ?>" class="user-image-data">
                    
                  </div>
                </td>
                <td style=" letter-spacing: 1px"><p class="comment-data">Dhiraj Yadav</p></td>
                <td><p class="review-data">yadavdhiru201@gmail.com</p></td>
                <td><p class="status-data">9803403860</p></td>
                <td style="text-align: right;">
                  <div class="action-container">
                    <!-- <a href=""><i class='bx bxs-low-vision eye-icon'></i></a> -->
                    <a href="delete-streamflix-user.php?userid=<?php echo $row['id'] ?>"><i class='bx bxs-trash delete-icon' ></i></a>
                  </div>
                </td>
              </div>
              
            </tr>

            <?php

            }
              }

            ?>




            




          </table>






      		
      	</div>

      	
      


</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/dashboard.js"></script>

</body>
</html>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php
      session_start();
      if(isset($_SESSION['username']) && $_SESSION['username']==true )
      {
              if(isset($_SESSION['student_dash']))
              {
                 $student_login=true;
                 $loggedin=false;
                 
              }
              else
              {
                   $student_login=false;
                   $loggedin=true;
              }
      }
        else
        {
          $loggedin=false;
          $student_login=false;
        }

echo'   
<nav class="navbar navbar-expand-lg  navbar-light  ">
  <a class="navbar-brand text-white" href="#">SuccessCurve</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>';
  echo '

 <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="all_course.php">All Courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="#">Contact Us</a>
      </li>
    </ul>';
   if (!$loggedin && !$student_login) 
   {
    echo '
    <div class="access">
    <button id="login" type="button" data-toggle="modal" data-target="#exampleModalLong">Login</button>
    <button id="ragister" type="button"  data-toggle="modal" data-target="#exampleModalregister">Register</button>
    <button id="admin" type="button"  data-toggle="modal" data-target="#adminmodal">Admin</button>';   
     }  
      if($student_login)
      {    
       echo '<a id="dashboard_button" type="button"  href="student.php">Student Dashboard</a>';         
       }

     if($loggedin){    
               
       echo '<a id="dashboard_button" type="button"  href="admin.php">Admin Dashboard</a>';
       }  
      echo' 
  </div>    
  </div>
</nav>';
?>


<!-- Admin Modal -->
<div class="modal fade" id="adminmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title " id="exampleModalLongTitle">Admin Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                           <div class="modal-body">
                      
                                <form id="login-form" class="form" action="admin_login.php" method="post">                           
                                    <div class="form-group">
                                        <label for="username" class="text-info">Email:</label><br>
                                        <input type="email" name="username" id="username" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="text-info">Password:</label><br>
                                        <input type="password" name="password" id="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="login" class="btn btn-info btn-md" value="Login">
                                    </div>
                                    <div id="register-link">
                                      <a href="#" class="text-info">forgot password ?</a>
                                    </div>
                                </form>
                              </div>
    </div>
  </div>  
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title " id="exampleModalLongTitle">Student Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                           <div class="modal-body">
                      
                                <form id="login-form" class="form" action="login.php" method="post">                           
                                    <div class="form-group">
                                        <label for="username" class="text-info">Email:</label><br>
                                        <input type="email" name="username" id="username" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="text-info">Password:</label><br>
                                        <input type="password" name="password" id="password" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="login" class="btn btn-info btn-md" value="Login">
                                    </div>
                                    <div id="register-link">
                                      <a href="#" class="text-info">forgot password ?</a>
                                    </div>
                                </form>
                              </div>
    </div>
  </div>  
</div>
 


<!-- ragisterModal -->
<div class="modal fade" id="exampleModalregister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title " id="exampleModalLongTitle">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                           <div class="modal-body">
                      
                                <form id="login-form" class="form" action="login.php" method="post"> 
                                    <div class="form-group">
                                        <label for="name" class="text-info">Name:</label><br>
                                        <input type="text" name="name" id="name" class="form-control" required="">
                                    </div>                                    

                                    <div class="form-group">
                                        <label for="username" class="text-info">Email:</label><br>
                                        <input type="email" name="email" id="username" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile" class="text-info">Mobile:</label><br>
                                        <input type="phone" name="mobile" id="mobile" class="form-control" required="">
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="password" class="text-info">Password:</label><br>
                                        <input type="password" name="password" id="password" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="text-info">Confirm Password:</label><br>
                                        <input type="password" name="password" id="password" class="form-control" required="">
                                    </div>                                    
                                    <div class="form-group">
                                        <input type="submit" name="Register" class="btn btn-info btn-md text-center" value="Register">
                                    </div>
                                    <div id="register-link">Already Register ?
                                      <a href="#" class="text-info" data-dismiss="modal" type="button" data-toggle="modal" data-target="#exampleModalLong">Login</a>
                                    </div>
                                </form>
                              </div>
    </div>
  </div>  
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
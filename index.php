
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <title>Learn Here</title>
    <style type="text/css">
      img{
        height:100vh;
        width: 100%;
      } 
      #explore_course{
        
      }
      #explore_class{
       
        
      }
         #explore_subject{
        
        
      }

 

      .card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
}


  .card-body:hover{
    background:#4f464c;
    color: white;
    
  }
     .card-title {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
     }
  


 .owl-carousel .owl-nav button.owl-prev{
     
    left:0;
     font-size: 80px;
    position: absolute;
    top:50%;
    outline: none;
    max-width:40px;
    transform: translateY(-50%);
}
.owl-carousel .owl-nav button.owl-next
{   
    transform: translateY(-50%);
    right:0;
    font-size: 80px;
    position: absolute;
    top:50%;
    max-width:40px;
    outline: none;
    
}




    </style>
  </head>
  <body >
    


<?php
include("navbar.php"); ?>



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/img3.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/img2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/img1.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="container-fluid  d-flex searchbox">
  <div class="search1">
    <h3> SEARCH FOR COURSE</h3>
</div>
<div class="categories">
  <form>
    <select name="Course"  form="courseform">
  <option value="volvo" selected>All Categories </option>
  <option value="saab">Categories 2</option>
  <option value="opel">Categories 3</option>
  <option value="audi">Categories 4</option>
  </select>
  <input type="text" name="coursename" placeholder="Enter Course Name">
  <button>
    <i class="fa fa-search"  aria-hidden="true" ></i>
  </button>
   
  </form>

 </div>
</div>


  <div class="container" id="explore_course" >
        <h2>Explore courses</h2>
            <div class="owl-carousel  mr-auto">       
                   <?php

                    include("db.php");
                      $get_course=$con->prepare("select * from course");
                      $get_course->setFetchMode(PDO::FETCH_ASSOC);
                      $get_course->execute();
                      
                      while ($row=$get_course->fetch()): {                
                      echo"
                      <div class='card' style='width: 18rem;'>
                          <img src='image/".$row['course_icon']."' class='card-img-top' style='height: 12rem; alt='..'>  
                           <div class='card-body'>
                           <h5 class='card-title'>".$row['course_name']."</h5>
                           <p class='card-title' >".$row['course_desc']."</p>
                           <a href='course.php?courseid=".$row['course_id']."' class='btn btn-primary'>Enroll Now</a> 
                           </div>
                       </div>";
                           }
                       endwhile;
                      
                    ?>                     
            </div>
   </div>



    <div class="" id="explore_subject">
      <h2>Explore Class</h2>
                  <div class="owl-carousel  mr-auto">        
                   <?php

                    include("db.php");
                      $get_class=$con->prepare("select * from class");
                      $get_class->setFetchMode(PDO::FETCH_ASSOC);
                      $get_class->execute();
                      
                      while ($row=$get_class->fetch()): {                
                      echo"
                      <div class='card' style='width: 18rem;'>
                          <img src='image/".$row['class_icon']."' class='card-img-top' style='height: 12rem; alt='..'>  
                           <div class='card-body'>
                           <h5 class='card-title'>".$row['class_name']."</h5>
                           <a href='course_class.php?classid=".$row['class_id']."' class='btn btn-primary'>Explore Now</a> 
                           </div>
                       </div>";
                           }
                       endwhile;
                      
                    ?>                     
            </div>
   
    </div>


    <div class="" id="explore_class" >
      <h2>Explore Categories</h2>
                  <div class="owl-carousel  mr-auto">       
                   <?php

                    include("db.php");
                      $get_cat=$con->prepare("select * from categories");
                      $get_cat->setFetchMode(PDO::FETCH_ASSOC);
                      $get_cat->execute();
                      
                      while ($row=$get_cat->fetch()): {                
                      echo"
                      <div class='card' style='width: 18rem;'>
                          <img src='image/".$row['cat_icon']."' class='card-img-top' style='height: 12rem; alt='..'>  
                           <div class='card-body'>
                           <h5 class='card-title'>".$row['cat_name']."</h5>
                           <a href='course_cat.php?cat_id=".$row['cat_id']."' class='btn btn-primary'>Explore Now</a> 
                           </div>
                       </div>";
                           }
                       endwhile;
                      
                    ?>                     
            </div>
      
    </div>




<div class=" text-center" >
  <h4 id="copyright" >
  copyright@2020 SuccessCurve</h4>
  
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
</script>
  </body>
</html>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <!-- Bootstrap CSS -->
          <title>course details</title>
          </head>
          <style type="text/css">
            ul li{
                list-style: none;
            }
            .container-fluid{
              
               margin-bottom: 10px;
            }
            .instructor{
                display: inline-flex;
                justify-content: space-between;
                align-items: center;
            }
            .enroll{
                padding: 10px;
                border:2px solid red;
                display: flex;
                align-items: center;
                flex-direction: column;
                
            }
            .enroll a{
                
                text-decoration: none;
                padding:5px;
            }
            .enroll a:hover{
                background: #397587;
                color:#db0909;
                
                text-decoration: none;
                padding:10px;
            }
            #course_content{
                border:2px solid green;
            }
            .col-md-4 img{
                width:100%;
                
            }
          </style>
          <body>
<?php
include("navbar.php"); ?>
     <?php include("db.php"); ?>
    <?php 
        $id=$_GET['courseid'];
        $get_course=$con->prepare("select * from course where course_id=$id");
        $get_course->setFetchMode(PDO::FETCH_ASSOC);
        $get_course->execute();
        $count=$get_course->rowCount();
        while($row=$get_course->fetch()):
            {
                $course_name=$row['course_name'];
                $course_icon=$row['course_icon'];
                $course_desc=$row['course_desc'];
                $course_ins=$row['course_ins'];
                $course_fee=$row['course_fee'];  
                $course_icon=$row['course_icon'];               
            }
            endwhile;
        ?>
    <?php
    if($count == 0)
    {
        echo"Error Found OOPs";

    }
    else
    {
    ?>
    <div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="image/<?php echo $course_icon;?>">
        </div>
        <div class="col-md-8">
            <h4>Course name:<?php echo $course_name;  ?></h4>
            <p>Rating*****</p>
            <p><b>Description</b>:-<?php echo $course_desc;  ?></p>
            <div class="enroll">
                <a href="#">Enroll Now</a>
                <p>Price : <?php echo $course_fee;  ?></p>    
            </div>    
        </div>
    </div>
    </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8" id="course_content">
                    <h4> Course Content</h4>
                        <ul>
                            <li id="section_list">
                                <div class="section-header" >
                                    
                                        <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#section1">
                                            <p>Section 1</p>
                                            <p> <i class="fa fa-plus"></i></p>
                                        </button>                                  
                                  
                                </div>
                                <div id="section1" class="collapse"  >
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Lesson 1</a></li>
                                            <li><a href="#">Lesson 2</a></li>
                                            <li><a href="#">Lesson 3</a></li>
                                            <li><a href="#">Lesson 4</a></li>
                                            <li><a href="#">Lesson 5</a></li>
                                        </ul>
                                    </div>
                                </div>                         
                            </li>
                            <li id="section_list">
                                <div class="section-header" >
                                    
                                        <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#section2">
                                            <p>Section 2</p>
                                            <p> <i class="fa fa-plus"></i></p>
                                        </button>                                  
                                  
                                </div>
                                <div id="section2" class="collapse"  >
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Lesson 1</a></li>
                                            <li><a href="#">Lesson 2</a></li>
                                            <li><a href="#">Lesson 3</a></li>
                                            <li><a href="#">Lesson 4</a></li>
                                            <li><a href="#">Lesson 5</a></li>
                                        </ul>
                                    </div>
                                </div>                         
                            </li>
                            <li id="section_list">
                                <div class="section-header" >
                                    
                                        <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#section3">
                                            <p>Section 3</p>
                                            <p> <i class="fa fa-plus"></i></p>
                                        </button>                                  
                                  
                                </div>
                                <div id="section3" class="collapse"  >
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Lesson 1</a></li>
                                            <li><a href="#">Lesson 2</a></li>
                                            <li><a href="#">Lesson 3</a></li>
                                            <li><a href="#">Lesson 4</a></li>
                                            <li><a href="#">Lesson 5</a></li>
                                        </ul>
                                    </div>
                                </div>                         
                            </li>
                            <li id="section_list">
                                <div class="section-header" >
                                    
                                        <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#section4">
                                            <p>Section 4</p>
                                            <p> <i class="fa fa-plus"></i></p>
                                        </button>                                  
                                  
                                </div>
                                <div id="section4" class="collapse"  >
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Lesson 1</a></li>
                                            <li><a href="#">Lesson 2</a></li>
                                            <li><a href="#">Lesson 3</a></li>
                                            <li><a href="#">Lesson 4</a></li>
                                            <li><a href="#">Lesson 5</a></li>
                                        </ul>
                                    </div>
                                </div>                         
                            </li>
                        </ul>
                    
                </div>
                <div class="col-lg-4">
                    <h5>About Instructor</h5>
                    <div class="d-flex instructor">
                        <h4 >Name-<?php echo $course_ins;  ?></h4>
                        <div>
                          <img class="m-auto" src="image/img1.jpg" width="100px" height="100px;">
                        </div>
                    </div>
                    <p>Put it all together and your pages should look like this:Description:-Be sure to have Be sure to have your pages set up with the latest design and development standards. Thaaviors.
                     Put it all together and your pages should look like this:Description:-Be sure to have your pages set up with theor proper responsive behaviors. Put it all together a your pages set up with theor proper responsive behaviors. Put it all together and your pages should look like this: your pages should look like this:</p>
                </div>
                
            </div>
            
        </div>

        <div class=" text-center" >
  <h4 id="copyright" >
  copyright@2020 Rajnitigya Kumar</h4>
  
</div>




         
        <script>
            $(document).ready(function(){
                // Add minus icon for collapse element which is open by default
                $(".collapse.show").each(function(){
                    $(this).prev(".section-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
                });
                
                // Toggle plus minus icon on show hide of collapse element
                $(".collapse").on('show.bs.collapse', function(){
                    $(this).prev(".section-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
                }).on('hide.bs.collapse', function(){
                    $(this).prev(".section-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
                });
            });
        </script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

</body>
</html>
<?php
}
?>
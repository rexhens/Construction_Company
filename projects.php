<!DOCTYPE html>
<?php 
include("php_config/config.php");
include("backend_processes/db_functions.php"); 
include("backend_processes/insert_project.php"); 

?>
<html lang="en">
   <head>

      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Projects</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;800&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">

   </head>
   <body>
        <!-- header top section start -->
        <div class="header_top_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="header_top_main">
                     <div class="call_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> +355-68-114-6855</a></div>
                     <div class="call_text_2"><a href="mailto:rexhi@bobthebuilder.com"><i class="fa fa-envelope" aria-hidden="true"></i> rexhi@bobthebuilder.com</a></div>
                     <div class="call_text_1"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Tirana, Albania</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- header top section start -->
      <!-- header section start -->
      <div class="header_section header_bg">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="projects.html">Projects</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="testimonial.html">Testimonial</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                     </li>
                     <?php
                     
                     ?>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_text">
                        <ul>
                           <li><a href="#">Login</a></li>
                            <!-- go to the user's account -->
                           <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
      
      </div>
      <!-- header section end -->
      <!-- projects section start -->
      <div class="projects_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="container">
                     <div class="row">
                         <div class="col-md-3">
                             <h1 class="projects_taital">Projects</h1>
                         </div>
                         <div class="col-md-8 m-2">
                             <button class="btn btn-warning" id = "createNewProjBtn">Create a new Project</button>
                         </div>
                     </div>
                 </div>

                      <!-- Bootstrap modal for success message -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Your success message goes here.
            </div>
        </div>
    </div>
</div>


                    <!-- Create new project modal -->
                    <div class="modal fade" id="createNewProjModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered">
                           <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Create a new Project</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body">
                                 <form method="post" id="createProjForm">
                                       <div class="mb-3">
                                          <label for="recipient-name" class="col-form-label">Project Name:</label>
                                          <input type="text" class="form-control" name="project_name">
                                       </div>
                                       <div class="mb-3">
                                          <label for="message-text" class="col-form-label">Start Date:</label>
                                          <input type="date" class="form-control" name="start_date">
                                       </div>
                                       <div class="mb-3">
                                          <label for="message-text" class="col-form-label">Expected End Date:</label>
                                          <input type="date" class="form-control" name="end_date">
                                       </div>
                                       <div class="mb-3">
                                          <label for="message-text" class="col-form-label">Budget:</label>
                                          <input type="number" class="form-control" name="budget">
                                       </div>
                                       <div class="mb-3">
                                          <label for="message-text" class="col-form-label">Location:</label>
                                          <input type="text" class="form-control" name="location">
                                       </div>
                                       <div class="mb-3">
                                          <label for="message-text" class="col-form-label">Description:</label>
                                          <textarea class="form-control" id="message-text" name="description"></textarea>
                                       </div class="mb-3">
                                          <label for="message-text" class="col-form-label">Assign Team:</label>
                                          <select name="options">
                                       <?php
                                      $result = getTeams();
                                      while ($row = $result->fetch_assoc()) {
                                          echo "<option value='{$row['team_id']}'>{$row['team_name']}</option>";
                                      }
                                      
                                       ?>
                                          </select>
                                          <div class="mb-3">
                                          <input type="submit" class="btn btn-close" value="Create" name="submit_btn">
                                          </div>

                                 </form>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                                 </div>
                           </div>
                        </div>
                     </div>
                      <!-- Script for sending data with ajax -->
                     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                     <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>
                           <script>
                              $(document).ready(function(){
                                 $('#createProjForm').submit(function(){
                                    e.preventDeafult();
                                    var formdata = $(this).serialize();
                                    
                                    $.ajax({
                                 type: 'post',
                                 url : "backend_processes/insert_project.php",
                                 data:  formdata,
                                 success:function(){
                                    $('#successModal').modal('show');
                                 }
                                 error: function(xhr, status, error){
                                   // Handle error if needed
                                  console.error(xhr.responseText);
                                 }
                              });
                           });
                        });
                             
                           
                           </script>            
                  
                  <div class="nav-tabs-navigation">
                     <div class="nav-tabs-wrapper">
                        <ul class="nav " data-tabs="tabs">
                           <li class="nav-item">
                              <a class="nav-link active" href="#" data-toggle="tab">Category  filter</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="#" data-toggle="tab">All</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="#" data-toggle="tab">Paintingl</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="#" data-toggle="tab">Reconstructionl</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="#" data-toggle="tab">Repairsl</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="#" data-toggle="tab">Residentall</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      
      


<div class="projects_section_2 layout_padding">
    <div class="container">
        <div class="pets_section">
            <div class="pets_section_2">
                <div id="main_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <?php
                                $i = 1;
                               

                           $result = get_projects();
                           while($row = $result->fetch_assoc())
                           {
                              ?>
                              <div class="col-md-4">
                                    <div class="container_main">
                                       <img src="images/img-1.png" alt="" class="image" data-bs-toggle="modal" data-bs-target="#modal<?php echo $i;?>" data-modal-id="<?php echo $i;?>">  
                                    </div>
                                    <div class="project_main">
                                       <h2 class="work_text"></h2>
                                       <p class="dummy_text"><?php echo $row['project_name'] ?></p>
                                    </div>
                                 </div>


            
                                            <!-- Modal -->
                          <div class="modal fade" id="modal<?php echo $i;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
                              <div class="modal-dialog modal-dialog-centered">
                                 <div class="modal-content">
                                       <div class="modal-header text-center">
                                          <h5 class="modal-title" id="exampleModalLabel"><?php echo "Project name: ".$row['project_name'] ?></h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                       </div>
                                       <div class="modal-body text-center">
                                          <h5>Details of the Project</h5>
                                          <?php echo "Start Date: ".$row['start_date'];?>
                                          <br>
                                          <?php echo "Expected Ending Date: ".$row['end_date'];?>
                                          <br>
                                          <?php echo "Budget: ".$row['budget'];?>
                                          <br>
                                          <?php echo "Location: ".$row['location'];?>
                                          <br>
                                          <?php echo "Description: ".$row['description'];?>
                                          <br> 
                                       
                                       </div>
                                       <div class="modal-footer">
                                          <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
                                       </div>
                                 </div>
                              </div>
                           </div>



                                <?php
                                    if ($i % 3 == 0) {
                                        echo '</div><div class="row">'; // Close the row and start a new one after every third project
                                    }
                                    $i++;
                                
  
}
?>
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
</div> 


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('.image').click(function() {
            var modalId = $(this).data('modal-id');
            $('#modal' + modalId).modal('show');
            $('.modal-backdrop').removeClass('modal-backdrop');
        });

        $('#createNewProjBtn').click(function() {
            $('#createNewProjModal').modal('show');
         
        });
    });
</script>

      <!-- projects section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#"><span class="padding_15"><i class="fa fa-mobile" aria-hidden="true"></i></span> <br>Call +01 1234567890</a>
                        </li>
                        <li class="active">
                           <a href="#"><span class="padding_15"><i class="fa fa-envelope" aria-hidden="true"></i></span> <br>demo@gmail.com</a>
                        </li>
                        <li>
                           <a href="#"><span class="padding_15"><i class="fa fa-map-marker" aria-hidden="true"></i></span> <br>Location</a>
                        </li> 
                     </ul>
                  </div>
               </div>
            </div>
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <h2 class="useful_text">QUICK LINKS</h2>
                     <div class="footer_menu">
                        <ul>
                           <li><a href="index.html">Home</a></li>
                           <li><a href="about.html">About</a></li>
                           <li><a href="services.html">Services</a></li>
                           <li><a href="projects.html">Projects</a></li>
                           <li><a href="testimonial.html">Testimonial</a></li>
                           <li><a href="blog.html">Blog</a></li>
                           <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <h2 class="useful_text">Work Portfolio</h2>
                     <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                  </div>
                  <div class="col-md-4">
                     <h2 class="useful_text">SIGN UP TO OUR NEWSLETTER</h2>
                     <div class="form-group">
                        <textarea class="update_mail" placeholder="Enter Your Email" rows="5" id="comment" name="Enter Your Email"></textarea>
                        <div class="subscribe_bt"><a href="#">Subscribe</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="social_icon">
               <ul>
                  <li>
                     <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">2019 All Rights Reserved. Design by <a href="https://html.design" rel="nofollow">HTML.DESIGN</a> Distribution by <a href="https://themewagon.com">ThemeWagon</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
   </body>
</html>
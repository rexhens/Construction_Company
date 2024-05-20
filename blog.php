<!DOCTYPE html>

<?php
require_once("php_config/config.php");
include("backend_processes/create_blogs.php"); 
include("backend_processes/read_blogs.php"); 
include("backend_processes/update_blogs.php"); 
include("backend_processes/delete_blogs.php"); 
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
                     <div class="call_text_2"><a href="mailto:tea@bobthebuilder.com"><i class="fa fa-envelope" aria-hidden="true"></i> tea@bobthebuilder.com</a></div>
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
                        <a class="nav-link" href="blog.php">Blog</a>
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
      <!-- blog section start -->
      <div class="projects_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="container">
                     <div class="row">
                         <div class="col-md-3">
                             <h1 class="projects_taital">Blog</h1>
                         </div>
                         <div class="col-md-8 m-2">
                             <button class="btn btn-warning" id = "createNewProjBtn">Create a new Blog</button>
                           </div>
                     </div>
                 </div>

                 <!-- Form to add a new blog post -->
    <form id="blogForm" class="blog-form" enctype="multipart/form-data" style="display: none;">
        <div class="form-group">
            <label for="blog_title">Blog Title:</label><br>
            <input type="text" id="blog_title" name="blog_title">
        </div>
        <div class="form-group">
            <label for="blog_text">Blog Content:</label><br>
            <textarea id="blog_text" name="blog_text"></textarea>
        </div>
        <div class="form-group">
            <label for="blog_image">Blog Image:</label><br>
            <input type="file" id="blog_image" name="blog_image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

<!-- Form to update an existing blog post -->
<form id="updateForm" class="blog-form" enctype="multipart/form-data" action="update_blogs.php" method="POST" style="display: none;">
    <div class="form-group">
        <label for="update_blog_title">Blog Title:</label><br>
        <input type="text" id="update_blog_title" name="update_blog_title">
    </div>
    <div class="form-group">
        <label for="update_blog_text">Blog Content:</label><br>
        <textarea id="update_blog_text" name="update_blog_text"></textarea>
    </div>
    <div class="form-group">
        <label for="update_blog_image">Blog Image:</label><br>
        <input type="file" id="update_blog_image" name="update_blog_image">
    </div>
    <!-- Yellow submit button for update -->
    <button type="submit" class="btn btn-primary btn-yellow">Update</button>
</form>


<!-- Form to delete a blog post -->
<form id="deleteForm" class="blog-form" style="display: none;">
    <div class="form-group">
        <label for="delete_blog_id">Blog ID:</label><br>
        <input type="text" id="delete_blog_id" name="delete_blog_id">
    </div>
    <!-- Yellow delete button -->
    <button type="submit" class="btn btn-danger btn-yellow">Delete</button>
</form>


    <!-- Buttons for CRUD operations -->
    <div>
            <!-- Button to add a new blog post -->
    <button id="addBlogButton" class="btn btn-success">Add Blog Posts</button>
        <!-- Button to view all blog posts -->
        <a href="blog.php" class="btn btn-primary">View Blog Posts</a>
        <!-- Button to update a blog post (requires passing blog post ID) -->
        <a href="update_blogs.php?blog_id=1" class="btn btn-secondary">Update Blog Post</a>
        <!-- Button to delete a blog post (requires passing blog post ID) -->
        <a href="delete_blogs.php?blog_id=1" class="btn btn-danger">Delete Blog Post</a>
    </div>
</div>

<script>
    // JavaScript to toggle visibility of the add blog post form
    document.getElementById("addBlogButton").addEventListener("click", function() {
        // Toggle display of the form
        document.getElementById("blogForm").style.display = "block";
        // Scroll to the form
        document.getElementById("blogForm").scrollIntoView({ behavior: "smooth" });
    });

    // JavaScript for form submission (as shown in your original code)
    document.getElementById("blogForm").addEventListener("submit", function(event) {
        event.preventDefault();

        var formData = new FormData(this);
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
            }
        };
        xhttp.open("POST", "backend_processes/add_blog_post.php", true);
        xhttp.send(formData);
    });
</script>

<div class="footer_section layout_padding">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
            <div class="location_text">
               <ul style="list-style: none; padding: 0; margin: 0;">
                   <li style="display: inline-block;">
                       <a href="#"><span class="padding_15"><i class="fa fa-mobile" aria-hidden="true"></i></span> Call +01 1234567890</a>
                   </li>
                   <li style="display: inline-block;">
                       <a href="#"><span class="padding_15"><i class="fa fa-envelope" aria-hidden="true"></i></span> bobthebuilder@gmail.com</a>
                   </li>
                   <li style="display: inline-block;">
                       <a href="#"><span class="padding_15"><i class="fa fa-map-marker" aria-hidden="true"></i></span> Epoka University</a>
                   </li>
               </ul>
           </div>
           <br>
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
                      <li><a href="projects.php">Projects</a></li>
                      <li><a href="testimonial.php">Testimonial</a></li>
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
                        <li><a href="index.php">Home</a></li>
                           <li><a href="about.html">About</a></li>
                           <li><a href="services.html">Services</a></li>
                           <li><a href="projects.php">Projects</a></li>
                           <li><a href="testimonial.php">Testimonial</a></li>
                           <li><a href="blog.php">Blog</a></li>
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
                  <a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="https://x.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="https://al.linkedin.com"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                  </li>
                  <li>
                     <a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
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
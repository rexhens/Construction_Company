<!DOCTYPE html>
<html lang="en">
<?php
require_once("php_config/config.php");
?>
<head>
   <?php
   include_once("head.php");
   ?>

<style>
      #addbutton {
    background-color: orange;
    color: white;
    border: none;
    padding: 15px 30px; 
    font-size: 16px;
    cursor: pointer;
    border-radius: 50px; 
    transition: background-color 0.3s ease; 
}
   </style>
</head>
<body>

<div class="blog_section layout_padding">
   <div class="container">
      <div class="section_header">
         <h1 class="section_title">Our Latest Blogs</h1>
         <p class="section_subtitle">Stay updated with our latest news and articles</p>
      </div>
      <div class="row">
         <div class="col-md-4">
            <div class="blog_post">
               <img src="images/img-1.png" class="blog_img" alt="Blog Image">
               <h2 class="blog_title">The Importance of Sustainable Construction Practices</h2>
               <p class="blog_text">Explore how sustainable construction methods can reduce environmental impact, lower costs, and create healthier buildings for the future.</p>

            </div>
         </div>
         <div class="col-md-4">
            <div class="blog_post">
               <img src="images/img-2.png" class="blog_img" alt="Blog Image">
               <h2 class="blog_title">Top 10 Construction Trends to Watch in 2024</h2>
               <p class="blog_text">Stay ahead of the curve with the latest trends in the construction industry, from smart technologies to innovative materials and techniques.</p>

            </div>
         </div>
         <div class="col-md-4">
            <div class="blog_post">
               <img src="images/img-3.png" class="blog_img" alt="Blog Image">
               <h2 class="blog_title">The Role of Technology in Modern Construction</h2>
               <p class="blog_text">How advancements in technology, such as drones, 3D printing, and BIM (Building Information Modeling), are revolutionizing the construction industry.</p>

            </div>
         </div>
      </div>
      <div class="add_button_section">
    <a href="bindex.php">
        <button id="addbutton" class="add_button">MODIFY</button>
        <br>
    </a>
</div>
   </div>
</div>
<!-- Blog section end -->
</body>
<?php
   include_once("footer.html");
   ?>
</html>
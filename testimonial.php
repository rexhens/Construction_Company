<!DOCTYPE html>
<html lang="en">
<head>
   <?php
   include_once("head.html");
   ?>
   <style>
      .rating_text {
    font-size: 1.2em;
    color: #ffcc00; 
}
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
   <!-- testimonial section start -->
   <div class="testimonial_section layout_padding">
      <div class="container">
         <div id="costum_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <?php
               include_once("php_config/config.php");

               $query = "SELECT * FROM Testimonials";
               $result = mysqli_query($conn, $query);

               if ($result) {
                   $active = true;
                   while ($row = mysqli_fetch_assoc($result)) {
                       $client_name = htmlspecialchars($row['client_name']);
                       $content = htmlspecialchars($row['content']);
                       $rating = htmlspecialchars($row['rating']);
                       $project_id = htmlspecialchars($row['project_id']);

                       echo '<div class="carousel-item' . ($active ? ' active' : '') . '">';
                       echo '<div class="row">';
                       echo '<div class="col-md-12">';
                       echo '<h1 class="testimonial_taital">Testimonial</h1>';
                       echo '<div>';
                       echo '<h2><a href="tindex.php"><button id="addbutton">ADD</button></a></h2>';
                       echo '</div>';
                       echo '<div class="testimonial_section_2">';
                       echo '<h2 class="client_name_text">' . $client_name . ' <span style="float: right;"><img src="images/quick-icon.png"></span></h2>';
                       echo '<p class="textimonial_text">' . $content . '</p>';
                       echo '<p class="rating_text">Rating: ' . $rating . '/5</p>'; 
                       echo '</div>';
                       echo '</div>';
                       echo '</div>';
                       echo '</div>';

                       $active = false;
                   }
               } else {
                   echo '<div class="carousel-item active">';
                   echo '<div class="row">';
                   echo '<div class="col-md-12">';
                   echo '<h1 class="testimonial_taital">No Testimonials Found</h1>';
                   echo '</div>';
                   echo '</div>';
                   echo '</div>';
               }
               ?>
            </div>
            <a class="carousel-control-prev" href="#costum_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#costum_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
   </div>
   <!-- testimonial section end -->
   <?php
   include_once("footer.html");
   ?>
</body>
</html>

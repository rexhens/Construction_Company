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
                     <div class="call_text_2"><a href="mailto: bobthebuilder@bobthebuilder.com"><i class="fa fa-envelope" aria-hidden="true"></i>  bobthebuilder@bobthebuilder.com</a></div>
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
                        <a class="nav-link" href="staff.php">Staff</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="users.php">Users</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="projects.php">Projects</a>
                     </li>
                    
                     <?php
                     
                     ?>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_text">
                        <ul>
                           <li><a href="client_index.php">Logout</a></li>
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
                        <label for="message-text" class="col-form-label">Budget($):</label>
                        <input type="number" class="form-control" name="budget">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Location:</label>
                        <input type="text" class="form-control" name="location">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Description:</label>
                        <textarea class="form-control" id="message-text" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Assign Team:</label>
                        <select name="options" class="form-select">
                            <?php
                            $result = getTeams();
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='{$row['team_id']}'>{$row['team_name']}</option>";
                            }
                            ?>
                        </select>
                        
                    </div>
                    <div class="mb-3">
                        <button type="button" class="btn btn-close mx-2" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-warning mx-2" value="Create" name="submit_btn">
                     </div>
                </form>
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
                                    alert("A new Project was susccesfully inserted!");
                                    history.replaceState(null, null, location.href);
                                 },
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
                              <a class="nav-link " href="#" data-toggle="tab">Sort By Date</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="#" data-toggle="tab">Finished Projects</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link " href="#" data-toggle="tab">Destination</a>
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
                              <!-- Php code for pagination-->
                                <?php
                                $i = 1;
                                $photo_no = 1;
                                $items_per_page = 6;
                                $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                                $offset = ($current_page - 1) * $items_per_page;
                                
                                // Fetch the projects for the current page
                                $result = get_projects($offset, $items_per_page);
                                
                                // Fetch total number of projects for pagination calculation
                                $total_projects_query = "SELECT COUNT(*) as count FROM Projects";
                                $total_projects_result = $conn->query($total_projects_query);
                                $total_projects = $total_projects_result->fetch_assoc()['count'];
                                $total_pages = ceil($total_projects / $items_per_page);
                                
                           while($row = $result->fetch_assoc())
                           {
                              ?>
                             <div class="col-md-4">
    <div class="container_main">
        <img src="images/img-<?php echo $photo_no;?>.png" alt="" class="image" data-bs-toggle="modal" data-bs-target="#modal<?php echo $i;?>" data-modal-id="<?php echo $i;?>">  
    </div>
    <div class="project_main">
    <h2 class="work_text"></h2>
    <p class="dummy_text text-center"><?php echo $row['project_name'] ?></p>
    <div class="d-flex justify-content-center">
        <button class="btn btn-warning modifyBtn mx-2">Modify</button>
        <button class="btn btn-close detailsBtn mx-2">Details</button>
        <?php
            if($row['status'] == "active"){
                echo '<form id="changeStatusForm' . $row["project_id"] . '" class="d-inline">
                        <input type="hidden" name="project_id" value="' . $row["project_id"] . '">
                        <input type="submit" class="btn btn-secondary" name="ChangeStatusBtn" value="Finish Project">
                      </form>';
            }
        ?>
    </div>
</div>

</div>



            
                                            <!-- Details Modal -->
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
                                          <?php echo "Budget($): ".$row['budget'];?>
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

                                            <!-- Edit Modal -->
                                          
<div class="modal fade" id="edit_modal<?php echo $i;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" id="editProjForm">
      <input type="hidden" name="project_id" value="<?php echo $row['project_id']; ?>">

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Project Name:</label>
                        <input type="text" class="form-control" name="project_name_edit" value="<?php echo $row['project_name']?>">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Expected End Date:</label>
                        <input type="date" class="form-control" name="end_date_edit" value="<?php echo $row['end_date']?>">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Budget($):</label>
                        <input type="number" class="form-control" name="budget_edit" value="<?php echo $row['budget']?>">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Location:</label>
                        <input type="text" class="form-control" name="location_edit" value="<?php echo $row['location']?>">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Description:</label>
                        <textarea class="form-control" id="message-text" name="description_edit"><?php echo $row['description']?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Assign Team:</label>
                        <select name="options_edit">
    <?php
    $base = getTeams();
    while ($row = $base->fetch_assoc()) {
        echo "<option value='{$row['team_id']}'>{$row['team_name']}</option>";
    }
    ?>
</select>

                    </div>
                    <div class="mb-3">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-warning" value="Save Changes" name="edit_project_submit_btn" id="edit_project_submit_btn">
        </div>
                </form>
      </div>
    </div>
  </div>
</div>





                                <?php
                                    if ($i % 3 == 0) {
                                        echo '</div><div class="row">'; // Close the row and start a new one after every third project
                                       $photo_no = 0;
                                       }
                                    $i++;
                                    $photo_no++;
                                
  
}
?>
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
        <style>
.pagination .page-link {
    color: orange; /* Change the text color to orange */
}

.pagination .page-link:hover {
    color: darkorange; /* Change the text color to dark orange on hover */
}

.pagination .page-item.active .page-link {
    background-color: orange; /* Change the background color to orange for the active page */
    border-color: orange; /* Change the border color to orange for the active page */
}

.pagination .page-item.disabled .page-link {
    color: gray; /* Optionally, change the color of disabled links */
}

        </style>
        <!--Pagination-->
        <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item <?php if ($current_page == 1) echo 'disabled'; ?>">
            <a class="page-link" href="?page=<?php echo $current_page - 1; ?>" tabindex="-1">Previous</a>
        </li>
        <?php for ($page = 1; $page <= $total_pages; $page++) { ?>
            <li class="page-item <?php if ($current_page == $page) echo 'active'; ?>">
                <a class="page-link" href="?page=<?php echo $page; ?>"><?php echo $page; ?></a>
            </li>
        <?php } ?>
        <li class="page-item <?php if ($current_page == $total_pages) echo 'disabled'; ?>">
            <a class="page-link" href="?page=<?php echo $current_page + 1; ?>">Next</a>
        </li>
    </ul>
</nav>

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

        $('.detailsBtn').click(function() {
         var modalId = $(this).closest('.project_main').prev().find('.image').data('modal-id');
         console.log(modalId)  
         $('#modal' + modalId).modal('show');
            $('.modal-backdrop').removeClass('modal-backdrop');
        });

        $('#createNewProjBtn').click(function() {
            $('#createNewProjModal').modal('show');
         
        });
        $('.modifyBtn').click(function() {
         var modalId = $(this).closest('.project_main').prev().find('.image').data('modal-id');
         console.log(modalId);
         $('#edit_modal'+modalId).modal('show');
         $('.modal-backdrop').removeClass('modal-backdrop');
         
        });
        $(document).on('submit', 'form[id^="editProjForm"]', function(e) {
        e.preventDefault(); 
        var formdata = $(this).serialize();
        $.ajax({
            type: 'post',
            url: "backend_processes/edit_project.php",
            data: formdata,
            success: function(response){
                alert("Project was sucessfully edited!");
                location.reload();
            },
            error: function(xhr, status, error){
                console.error(xhr.responseText);
            }
        });
    });

   })

</script>
<script>
$(document).ready(function() {
    $(document).on('submit', 'form[id^="changeStatusForm"]', function(e) {
        e.preventDefault(); 
        
        var formdata = $(this).serialize();
        
        $.ajax({
            type: 'post',
            url: "backend_processes/change_project_status.php",
            data: formdata,
            success: function(response){
               location.reload();
               alert("Successfuly changed status!");               
            },
            error: function(xhr, status, error){
                console.error(xhr.responseText);
                // Optionally handle error response
                // For example, you can display an error message to the user
            }
        });
    });
});

</script>
<?php
include_once("footer.html");
?>
   </body>
</html>
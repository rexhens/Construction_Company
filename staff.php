<!DOCTYPE html>
<?php
require_once("php_config/config.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff</title>
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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
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
                    
                     <li class="nav-item active">
                        <a class="nav-link" href="staff.php">Staff</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="user.php">Users</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="projects.php">Project</a>
                     </li>
                     
                   
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
<div class="container mt-5">
    <h2 class="mb-4">Staff information</h2>
    <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addModal">Add New</button>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Job Title</th>
                <th>Salary</th>
                <th>Status</th>
                <th>Team ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="datatable">
        <?php
        $sql = "SELECT * FROM Staff";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["staff_id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["surname"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["phone_number"] . "</td>";
                echo "<td>" . $row["job_tittle"] . "</td>";
                echo "<td>" . $row["salary"] . "</td>";
                echo "<td>" . $row["status"] . "</td>";
                echo "<td>" . $row["team_id"] . "</td>";
                echo '<td>
                <button class="btn btn-info btn-sm edit-btn" 
  data-id="'.$row["staff_id"].'" 
  data-name="'.$row["name"].'" 
  data-surname="'.$row["surname"].'" 
  data-email="'.$row["email"].'" 
  data-phone_number="'.$row["phone_number"].'" 
  data-job_tittle="'.$row["job_tittle"].'" 
  data-salary="'.$row["salary"].'" 
  data-status="'.$row["status"].'" 
  data-team_id="'.$row["team_id"].'">Edit</button>
                <button class="btn btn-danger btn-sm delete-btn" data-id="'.$row["staff_id"].'" data-toggle="modal" data-target="#deleteModal">Delete</button>
              </td>';
                echo "</tr>";
            }
        }
        $conn->close();
        ?>
        </tbody>
    </table>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add New Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  method="POST" id="addForm" action="backend_processes/addStaff.php">
                    <div class="form-group">
                        <label for="addName">Name</label>
                        <input type="text" class="form-control" id="addName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="addSurname">Surname</label>
                        <input type="text" class="form-control" id="addSurname" name="surname" required>
                    </div>
                    <div class="form-group">
                        <label for="addEmail">Email</label>
                        <input type="email" class="form-control" id="addEmail" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="addPhoneNumber">Phone Number</label>
                        <input type="text" class="form-control" id="addPhoneNumber" name="phone_number" required>
                    </div>
                    <div class="form-group">
                        <label for="addJobTitle">Job Title</label>
                        <input type="text" class="form-control" id="addJobTitle" name="job_title" required>
                    </div>
                    <div class="form-group">
                        <label for="addSalary">Salary</label>
                        <input type="number" step="0.01" class="form-control" id="addSalary" name="salary" required>
                    </div>
                    <div class="form-group">
                        <label for="addStatus">Status</label>
                        <input type="text" class="form-control" id="addStatus" name="status" required>
                    </div>
                    <div class="form-group">
                        <label for="addTeamId">Team ID</label>
                        <input type="number" class="form-control" id="addTeamId" name="team_id" required>
                    </div>
                    <input type="submit" id="Submit" class="btn btn-primary" value="Create" name="submit_btn">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm" method="POST" action="backend_processes/updateStaff.php">
                    <input type="hidden" id="editId">
                    <div class="form-group">
                        <label for="editName">Name</label>
                        <input type="text" class="form-control" id="editName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="editSurname">Surname</label>
                        <input type="text" class="form-control" id="editSurname" name="surname" required>
                    </div>
                    <div class="form-group">
                        <label for="editEmail">Email</label>
                        <input type="email" class="form-control" id="editEmail1" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="editPhoneNumber">Phone Number</label>
                        <input type="text" class="form-control" id="editPhoneNumber" name="phone_number" required>
                    </div>
                    <div class="form-group">
                        <label for="editJobTitle">Job Title</label>
                        <input type="text" class="form-control" id="editJobTitle" name="job_title" required>
                    </div>
                    <div class="form-group">
                        <label for="editSalary">Salary</label>
                        <input type="number" step="0.01" class="form-control" id="editSalary" name="salary" required>
                    </div>
                    <div class="form-group">
                        <label for="editStatus">Status</label>
                        <input type="text" class="form-control" id="editStatus" name="status" required>
                    </div>
                    <div class="form-group">
                        <label for="editTeamId">Team ID</label>
                        <input type="number" class="form-control" id="editTeamId" name="team_id" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit_btn">Save Changes</button>
                </form>
            </div>
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
                Success
            </div>
        </div>
    </div>
</div>
<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this staff member?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    let records = [];

    function refreshTable() {
        $('#datatable').empty();
        records.forEach(record => {
            $('#datatable').append(`
                <tr>
                    <td>${record.staff_id}</td>
                    <td>${record.name}</td>
                    <td>${record.surname}</td>
                    <td>${record.email}</td>
                    <td>${record.phone_number}</td>
                    <td>${record.job_title}</td>
                    <td>${record.salary}</td>
                    <td>${record.status}</td>
                    <td>${record.team_id}</td>
                    <td>
                        <button class="btn btn-info btn-sm edit-btn" data-id="${record.staff_id}" data-name="${record.name}" data-surname="${record.surname}" data-email="${record.email}" data-phone_number="${record.phone_number}" data-job_title="${record.job_title}" data-salary="${record.salary}" data-status="${record.status}" data-team_id="${record.team_id}">Edit</button>
                        <button class="btn btn-danger btn-sm delete-btn" data-id="${record.staff_id}">Delete</button>
                    </td>
                </tr>
            `);
        });
    }
    
    $(document).on('click', '.edit-btn', function() {
    const id = $(this).data('id');
    $('#editId').val(id);
    $('#editName').val($(this).data('name'));
    $('#editSurname').val($(this).data('surname'));
    $('#editEmail').val($(this).data('email'));
    $('#editPhoneNumber').val($(this).data('phone_number'));
    $('#editJobTitle').val($(this).data('job_title'));
    $('#editSalary').val($(this).data('salary'));
    $('#editStatus').val($(this).data('status'));
    $('#editTeamId').val($(this).data('team_id'));
    $('#editModal').modal('show');
});
    fetchRecords();
});
</script>
<script>
    $(document).ready(function() {
    // Handle click on delete team button
    $('.delete-btn').click(function() {
        var staffId = $(this).data('id');
        $('#confirmDeleteBtn').data('staff-id', staffId);
    });
    $('#confirmDeleteBtn').click(function() {
        var staffId = $(this).data('staff-id');
        $.ajax({
            type: 'post',
            url: 'backend_processes/deleteStaff.php',
            data: {
                delete_staff: 1,
                staff_id: staffId
            },
            success: function(response) {
                alert(response);
                location.reload(); // Reload the page to refresh the table
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});

</script>

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
</body>
</html>

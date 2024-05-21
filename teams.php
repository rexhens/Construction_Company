<!DOCTYPE html>
<?php 
include("php_config/config.php");
?>

<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Teams</title>
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
    <!-- header top section end -->

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
                        <li class="nav-item">
                            <a class="nav-link" href="projects.php">Projects</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="teams.php">Teams</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="testimonial.php">Testimonial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
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


    <!-- teams section start -->
    <div class="projects_section layout_padding">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="projects_taital">Teams</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <button class="btn btn-warning" id = "addNewTeamBtn">Add New Team</button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <!-- View Projects Modal -->
         <div class="modal fade" id="viewProjectsModal" tabindex="-1" aria-labelledby="viewProjectsLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewProjectsLabel">Projects</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="projectsList">
                            <!-- Projects will be loaded here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add new team modal -->
        <div class="modal fade" id="addNewTeamModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add a new Team</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="backend_processes/teams_add.php">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Team Name:</label>
                            <input type="text" class="form-control" name="team_name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Supervisor:</label>
                            <input type="text" class="form-control" name="team_supervisor">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-warning" value="Create" name="submit_btn">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<!-- Modify team modal -->
<div class="modal fade" id="modifyTeamModal" tabindex="-1" aria-labelledby="modifyTeamLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modifyTeamLabel">Modify Team</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="modifyTeamForm">
                    <input type="hidden" id="modifyTeamId" name="team_id">
                    <div class="mb-3">
                        <label for="modifyTeamName" class="col-form-label">Team Name:</label>
                        <input type="text" class="form-control" id="modifyTeamName" name="team_name">
                    </div>
                    <div class="mb-3">
                        <label for="modifyTeamSupervisor" class="col-form-label">Supervisor:</label>
                        <input type="text" class="form-control" id="modifyTeamSupervisor" name="team_supervisor">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


 <!-- table with view projects, delete and modify button -->
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Team Name</th>
                    <th>Supervisor</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // SQL query to select all teams
                $sql = "SELECT * FROM Teams";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["team_name"] . "</td>";
                        echo "<td>" . $row["team_supervisor"] . "</td>";
                        echo "<td>";
                        echo "<button class='btn btn-warning view-projects-btn' data-team-id='" . $row["team_id"] . "'>View Projects</button>";
                        echo " <button class='btn btn-info modify-team-btn' data-team-id='" . $row["team_id"] . "' data-team-name='" . $row["team_name"] . "' data-team-supervisor='" . $row["team_supervisor"] . "'>Modify</button>";
                        echo " <button class='btn btn-danger delete-team-btn' data-team-id='" . $row["team_id"] . "'>Delete</button>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No teams found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>


            <?php
            // SQL query to select all teams and their staff
            $sql = "SELECT Teams.team_id, Teams.team_name, Teams.team_supervisor, Staff.name AS staff_name, Staff.surname AS staff_surname, Staff.email, Staff.phone_number, Staff.job_tittle, Staff.salary, Staff.status
                    FROM Teams 
                    LEFT JOIN Staff ON Teams.team_id = Staff.team_id 
                    ORDER BY Teams.team_id, Staff.name";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $current_team = null;
                $first = true;
            
                while ($row = $result->fetch_assoc()) {
                    if ($current_team !== $row['team_id']) {
                        if (!$first) {
                            echo "</tbody></table>";
                        }
                        $first = false;
                        $current_team = $row['team_id'];
                        echo "<br><h2>{$row['team_name']}</h2>";
                        echo "<h4>Supervisor: {$row['team_supervisor']}</h4>";
                        echo "<table class='table table-striped table-hover'>";
                        echo "<thead><tr><th>Name</th><th>Surname</th><th>Email</th><th>Phone no.</th><th>Job Title</th><th>Salary</th><th>Status</th></tr></thead><tbody>";
                    }
                    if (!is_null($row["staff_name"])) {
                        echo "<tr><td>" . $row["staff_name"] . "</td><td>" . $row["staff_surname"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone_number"] . "</td><td>" . $row["job_tittle"] . "</td><td>" . $row["salary"] . "</td><td>" . $row["status"] . "</td></tr>";
                    } else {
                        echo "<tr><td colspan='7'>No staff assigned</td></tr>";
                    }
                }
                echo "</tbody></table>";
            
            } else {
                echo "<p>No teams found</p>";
            }
            ?>
        </div>
    </div>
</div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>

<!-- View projects script -->
<script>
        $(document).ready(function() {
            // Code for viwing team projects
            $('.view-projects-btn').click(function() {
                var teamId = $(this).data('team-id');
                
                $.ajax({
                    type: 'post',
                    url: 'backend_processes/team_projects.php', // PHP script to fetch projects
                    data: { team_id: teamId },
                    success: function(response) {
                        $('#projectsList').html(response);
                        $('#viewProjectsModal').modal('show');
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });

            // Code for deleting a team
            $('.delete-team-btn').click(function() {
                var teamId = $(this).data('team-id');
            });

            // Code for modifying a team
            $('.modify-team-btn').click(function() {
                var teamId = $(this).data('team-id');
                var teamName = $(this).data('team-name');
                var teamSupervisor = $(this).data('team-supervisor');

                $('#modifyTeamId').val(teamId);
                $('#modifyTeamName').val(teamName);
                $('#modifyTeamSupervisor').val(teamSupervisor);

                $('#modifyTeamModal').modal('show');
            });

            $('#modifyTeamForm').submit(function(event) {
                event.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    type: 'post',
                    url: 'backend_processes/teams_modify.php',
                    data: formData,
                    success: function(response) {
                        // Handle the response from the server
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>

<!-- Add new Team script -->
<script>
$(document).ready(function() {
    $('#addNewTeamBtn').click(function() {
        $('#addNewTeamModal').modal('show');
    });
    $(document).on('submit', 'form[id^="editProjForm"]', function(e) {
        e.preventDefault(); 
        var formdata = $(this).serialize();
        $.ajax({
            type: 'post',
            url: "backend_processes/teams_add.php",
            data: formdata,
            success: function(response){
                console.log(response);
                location.reload();
            },
            error: function(xhr, status, error){
                console.error(xhr.responseText);
            }
        });
    });
});
</script>

<!-- Delete team script -->
<script>
    $(document).ready(function() {
    // Handle click on delete team button
    $('.delete-team-btn').click(function() {
        var teamId = $(this).data('team-id');
        if (confirm("Are you sure you want to delete this team?")) {
            $.ajax({
                type: 'post',
                url: 'backend_processes/teams_delete.php',
                data: {
                    delete_team: 1,
                    team_id: teamId
                },
                success: function(response) {
                    alert(response);
                    location.reload();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
    });

    // Handle click on modify team button
    $('.modify-team-btn').click(function() {
        var teamId = $(this).data('team-id');
        var teamName = $(this).data('team-name');
        var teamSupervisor = $(this).data('team-supervisor');

        $('#modifyTeamId').val(teamId);
        $('#modifyTeamName').val(teamName);
        $('#modifyTeamSupervisor').val(teamSupervisor);

        $('#modifyTeamModal').modal('show');
    });

    // Handle modify team form submission
    $('#modifyTeamForm').submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();

        $.ajax({
            type: 'post',
            url: 'backend_processes/teams_modify.php',
            data: formData,
            success: function(response) {
                alert(response);
                $('#modifyTeamModal').modal('hide');
                location.reload();
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});
</script>
    <!-- teams section end -->

    

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

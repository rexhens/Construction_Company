<!DOCTYPE html>
<?php
require_once("php_config/config.php");
?>
<html lang="en">
<head>
<?php
include_once("headd.html");
?>
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
                <button class="btn btn-info btn-sm edit-btn" data-id="'.$row["staff_id"].'" data-name="'.$row["name"].'" data-surname="'.$row["surname"].'" data-email="'.$row["email"].'" data-phone_number="'.$row["phone_number"].'" data-job_tittle="'.$row["job_tittle"].'" data-salary="'.$row["salary"].'" data-status="'.$row["status"].'" data-team_id="'.$row["team_id"].'">Edit</button>
                <button class="btn btn-danger btn-sm delete-btn" data-id="'.$row["staff_id"].'">Delete</button>
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


    $(document).on('click', '.delete-btn', function() {
    const id = $(this).data('id');
    $.ajax({
        url: 'backend_processes/deleteStaff.php',
        method: 'POST',
        data: { staff_id: id },
        success: function() {
            fetchRecords();
        }
    });
});

    fetchRecords();
});
</script>
</body>
<?php
include_once("footeradmin.html");
?>
</html>

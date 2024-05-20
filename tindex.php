<!DOCTYPE html>
<html lang="en">
<?php
    include_once("head.html");
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Testimonial</title>
    <link rel="stylesheet" type="text/css" href="css/addt.css">
</head>
<body>
    <div class="container">
        <h2>Add Testimonial</h2>
        <form id="testimonialForm">
            <label for="client_name">Client Name:</label><br>
            <input type="text" id="client_name" name="client_name"><br>
            <label for="content">Content:</label><br>
            <textarea id="content" name="content"></textarea><br>
            <label for="rating">Rating:</label><br>
            <input type="number" id="rating" name="rating" min="1" max="5"><br>
            <label for="project_id">Project ID:</label><br>
            <input type="text" id="project_id" name="project_id"><br>
            <button type="submit">Add</button>
        </form>
    </div>

    <script>
        document.getElementById("testimonialForm").addEventListener("submit", function(event) {
            event.preventDefault(); 

            var formData = new FormData(this);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    alert(this.responseText);
                }
            };
            xhttp.open("POST", "backend_processes/add_testimonial.php", true);
            xhttp.send(formData);
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    include_once("head.html");
    ?>
  </head>
<body>
<div class="container">
 <h2>Add, Update, or Delete Blog Posts</h2>
 <!-- Button to add a new blog post -->
 <button id="addBlogButton" class="btn btn-success">Add Blog Post</button>



 <!-- Form to add a new blog post -->
 <form id="blogForm" class="blog-form" enctype="multipart/form-data" style="display: none;">

 <div class="form-group">
 <label for="blog_id">Blog ID:</label><br>
 <input type="text" id="blog_id" name="blog_id">
 </div>
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
 <!-- Submit button for adding a blog post -->
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
<!-- Form to update an existing blog post -->
<form id="updateForm" class="blog-form" enctype="multipart/form-data" style="display: none;">
            <div class="form-group">
                <label for="update_blog_id">Blog ID:</label><br>
                <input type="text" id="update_blog_id" name="update_blog_id" class="form-control">
            </div>
            <div class="form-group">
                <label for="update_blog_title">Blog Title:</label><br>
                <input type="text" id="update_blog_title" name="update_blog_title" class="form-control">
            </div>
            <div class="form-group">
                <label for="update_blog_text">Blog Content:</label><br>
                <textarea id="update_blog_text" name="update_blog_text" class="form-control"></textarea>
            </div>

            <!-- Yellow submit button for update -->
            <button type="submit" class="btn btn-primary btn-yellow">Update</button>
        </form>

    <!-- Form to delete a blog post -->
    <form id="deleteForm" class="blog-form" style="display: none;">
            <div class="form-group">
                <label for="delete_blog_id">Blog ID:</label><br>
                <input type="text" id="delete_blog_id" name="delete_blog_id" class="form-control">
            </div>
            <!-- Yellow delete button -->
            <button type="submit" class="btn btn-danger btn-yellow">Delete</button>
        </form>

    <!-- Buttons for CRUD operations -->
    <div class="mt-3">

            <button id="showUpdateFormButton" class="btn btn-primary">Update Blog Post</button>
            <button id="showDeleteFormButton" class="btn btn-danger">Delete Blog Post</button>
        </div>
<script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js"></script>
 <script>
 $(document).ready(function(){
 $('#blogForm').submit(function(e){
 e.preventDefault(); // Prevent default form submission
 
 // Serialize form data
 var formdata = $(this).serialize();
 
 // Send AJAX request
 $.ajax({
 type: 'post',
 url: "backend_processes/create_blog.php",
 data: formdata,
 success: function(response){
 alert("A new blog post was successfully inserted!");
 location.reload();
 },
 error: function(xhr, status, error){
 console.error(xhr.responseText);
 alert("Error: Unable to create blog post.");
 }
 });
 });
});

 
 
 </script>
<script>
 document.getElementById("addBlogButton").addEventListener("click", function() {
 // Toggle display of the form
 document.getElementById("blogForm").style.display = "block";
 // Scroll to the form
 document.getElementById("blogForm").scrollIntoView({ behavior: "smooth" });
 });

 

 // JavaScript for form submission (update blog post)
 document.getElementById("updateForm").addEventListener("submit", function(event) {
 event.preventDefault();

 var formData = new FormData(this);
 var xhttp = new XMLHttpRequest();
 xhttp.onreadystatechange = function() {
 if (this.readyState == 4 && this.status == 200) {
 alert(this.responseText);
 }
 };
 xhttp.open("POST", "update_blogs.php", true);
 xhttp.send(formData);
 });

 // JavaScript for form submission (delete blog post)
 document.getElementById("deleteForm").addEventListener("submit", function(event) {
 event.preventDefault();

 var formData = new FormData(this);
 var xhttp = new XMLHttpRequest();
 xhttp.onreadystatechange = function() {
 if (this.readyState == 4 && this.status == 200) {
 alert(this.responseText);
 }
 };
 xhttp.open("POST", "delete_blogs.php", true);
 xhttp.send(formData);
 });
</script>
</body>
</html>

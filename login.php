<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color:  hsl(40, 90%, 24%) !important;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: hsl(40, 89%, 47%) !important;
    color: #fff;
}
</style>
<?php
session_start();
?>
<div class="sidenav">
    <div class="login-main-text">
        <h1>Construction Company<br> Login Page</h1>
        <p>Login or register from here to access.</p>
    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <form method="post" action="backend_processes/login_process.php">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <input type="submit" class="btn btn-black" value="Login">
            </form>
        </div>
    </div>
</div>
<?php
// Display the error message if it exists
if (isset($_SESSION['error_message'])) {
    ?>
    <div class="alert alert-danger" role="alert">
        <?php
        echo $_SESSION['error_message'];
        unset($_SESSION['error_message']); // Clear the error message after displaying it
        ?>
    </div>
    <?php
}
?>
<div class="alert alert-danger" role="alert">
      <h1>asdasdh</h1>
    </div>


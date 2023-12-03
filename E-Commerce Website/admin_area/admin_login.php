<?php include('../includes/connect.php');
@session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
        <!-- ICON BROWSER TAB -->
        <link rel="shortcut icon" type="x-icon" href="../images/LUGO.png">
    <!-- BOOTSTRAP CSS LINK -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- FONT AWESOME LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS FILE -->
    <link rel="stylesheet" href="../style.css">
<style>
    body{
        overflow:hidden;
    }
</style>
</head>
<body style="background-color: pink">
    <div class="container-fluid">
<h1 class="text-center mb-5">Admin Login</h1>
<div class="row d-flex justify-content-center">
    <div class="col-lg-6 col-xl-5">
        <img src="../images/admin_log.jpg" alt="Admin Registration" class="img-fluid">
    </div>
    <div class="col-lg-6 col-xl-4 mt-5">
        <form action="" method="post">
            <div class="form-outline mb-4">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" autocomplete="off" required="required" class="form-control">
            </div>
            <div class="form-outline mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" autocomplete="off" required="required" class="form-control">
            </div>
            <div>
                <input type="submit" class="btn btn-danger px-3 my-3" name="admin_login" value="Login">
            </div>
            <b><p class="small">Don't have an account ? <a href="admin_registration.php" class="text-danger">Register</a></p></b>
        </form>
    </div>
</div>
    </div>
</body>
</html>

<?php
if(isset($_POST['admin_login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $select_query="Select * from `admin_table` where admin_name='$username'";
    $result=mysqli_query($con,$select_query);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);
    if($row_count>0){
        $_SESSION['admin_name']=$username;
        if(password_verify($password,$row_data['admin_password'])){
            echo "<script>alert('Login Successful!')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }else{
            $_SESSION['admin_name']=$username;
            echo "<script>alert('Invalid Credentials!')</script>";
        }

    }else{
        $_SESSION['admin_name']=$username;
        echo "<script>alert('Invalid Credentials!')</script>";
    }

}
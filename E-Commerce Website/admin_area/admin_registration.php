<?php include('../includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
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
<h1 class="text-center mb-5">Admin Registration</h1>
<div class="row d-flex justify-content-center">
    <div class="col-lg-6 col-xl-5">
        <img src="../images/admin.jpg" alt="Admin Registration" class="img-fluid">
    </div>
    <div class="col-lg-6 col-xl-4 mt-5">
        <form action="" method="post">
            <div class="form-outline mb-4">
                <label for="username" class="form-label">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" autocomplete="off" required="required" class="form-control">
            </div>
            <div class="form-outline mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" autocomplete="off" required="required" class="form-control">
            </div>
            <div class="form-outline mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" autocomplete="off" required="required" class="form-control">
            </div>
            <div class="form-outline mb-4">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password" autocomplete="off" required="required" class="form-control">
            </div>
            <div>
                <input type="submit" class="btn btn-danger px-3 my-3" name="admin_registration" value="Register">
            </div>
            <b><p class="small">Already have an account ? <a href="admin_login.php" class="text-danger">Login</a></p></b>
        </form>
    </div>
</div>
    </div>
</body>
</html>

<!-- PHP CODE --> 

<?php
if(isset($_POST['admin_registration'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $hash_password=password_hash($password,PASSWORD_DEFAULT);
    $confirm_password=$_POST['confirm_password'];


    // select_query

    $select_query="Select * from `admin_table` where admin_name='$username' or admin_email='$email'";
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
        echo "<script>alert('Username and Email already exist!')</script>";
    }else if($password!=$confirm_password){
        echo "<script>alert('Password do not match!')</script>";
    }
    
    else{
    // insert_query
    $insert_query="insert into `admin_table` (admin_name,admin_email,admin_password) values ('$username','$email','$hash_password')";
    $sql_execute=mysqli_query($con,$insert_query);
    if($sql_execute){
        echo "<script>alert('Data inserted successfully!')</script>";
        echo "<script>window.open('admin_login.php','_self')</script>";
    }else{
        die(mysqli_error($con));
    }

    }
}


?>
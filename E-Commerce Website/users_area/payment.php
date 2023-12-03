<?php include('../includes/connect.php');
include('../functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment page</title>
    <!-- ICON BROWSER TAB -->
    <link rel="shortcut icon" type="x-icon" href="./images/LUGO.png">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<style>
    .payment_img{
        width:90%;
        margin:auto;
        display:block;
    }
</style>
<body style="background-color: pink">
<!-- PHP CODE TO ACCESS USER ID -->
<?php
$user_ip=getIPAddress();
$get_user="Select * from `user_table` where user_ip='$user_ip'";
$result=mysqli_query($con,$get_user);
$run_query=mysqli_fetch_array($result);
$user_id=$run_query['user_id'];

?>
    <div class="container">
        <h1 class="text-center text-danger my-4">Payment options</h1>
        <div class="row d-flex justify-content-center align-items-center my-5">
            <div class="col-md-6">
                <a href="https://www.google.com" target="_blank"><img src="../images/GSAS.jpg" alt="" class="payment_img"></a> 
            </div> 
            <div class="col-md-6">
                <a href="order.php?user_id=<?php echo $user_id ?>"><img src="../images/offline_payment.jpg" alt="" class="payment_img"></a>
            </div>  
        </div>
    </div>
    
</body>
</html>
<?php

if(isset($_GET['delete_payment'])){
    $delete_id=$_GET['delete_payment'];
    
    // DELETE QUERY

    $delete_payment="Delete from `user_payments` where order_id=$delete_id";
    $result_payment=mysqli_query($con,$delete_payment);
    if($result_payment){
        echo "<script>alert('Payment deleted successfully!')</script>";
        echo "<script>window.open('./index.php?list_payments','_self')</script>";
    }
}


?>
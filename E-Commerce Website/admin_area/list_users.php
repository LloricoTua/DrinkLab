<h1 class="text-center">All Users</h1>
<table class="table table-bordered mt-4">
    <thead>

    <?php
$get_payments="Select * from `user_table`";
$result=mysqli_query($con,$get_payments);
$row_count=mysqli_num_rows($result);


if($row_count==0){
    echo "<h1 class='text-danger text-center mt-4'>No Users yet!</h1>";
}else{
    echo "<tr>
<th class='bg-danger text-light text-center'>SL NO.</th>
<th class='bg-danger text-light text-center'>Username</th>
<th class='bg-danger text-light text-center'>User Email</th>
<th class='bg-danger text-light text-center'>User Image</th>
<th class='bg-danger text-light text-center'>User Address</th>
<th class='bg-danger text-light text-center'>User Mobile</th>
<th class='bg-danger text-light text-center'>Delete</th>
</tr>
</thead>
<tbody>";
    $number=0;
    while($row_data=mysqli_fetch_assoc($result)){
        $user_id=$row_data['user_id'];
        $username=$row_data['username'];
        $user_email=$row_data['user_email'];
        $user_image=$row_data['user_image'];
        $user_address=$row_data['user_address'];
        $user_mobile=$row_data['user_mobile'];
        $number++;
        echo "<tr>
        <td class='bg-dark text-light text-center'>$number</td>
        <td class='bg-dark text-light text-center'>$username</td>
        <td class='bg-dark text-light text-center'>$user_email</td>
        <td class='bg-dark text-light text-center'><img src='../users_area/user_images/$user_image' alt='$username' class='product_img'/></td>
        <td class='bg-dark text-light text-center'>$user_address</td>
        <td class='bg-dark text-light text-center'>$user_mobile</td>
        <td class='bg-dark text-light text-center'><a href='index.php?delete_user=$user_id' 
            type='button' class='text-light' data-toggle='modal' data-target='#exampleModal'><i class='fa-solid fa-trash'></td>
    </tr>";

    }
}

?>
        
        
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Are you sure you want to delete this order?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="./index.php?list_orders" class="text-light text-decoration-none">No</a></button>
        <button type="button" class="btn btn-danger"><a href='index.php?delete_order=<?php echo $order_id ?>' 
         class="text-light text-decoration-none">Yes</a></button>
      </div>
    </div>
  </div>
</div>
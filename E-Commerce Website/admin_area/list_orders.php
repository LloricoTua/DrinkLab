<h1 class="text-center">All Orders</h1>
<table class="table table-bordered mt-4">
    <thead>

    <?php
$get_orders="Select * from `user_orders`";
$result=mysqli_query($con,$get_orders);
$row_count=mysqli_num_rows($result);


if($row_count==0){
    echo "<h1 class='text-danger text-center mt-4'>No orders yet!</h1>";
}else{
    echo "<tr>
<th class='bg-danger text-light text-center'>SL NO.</th>
<th class='bg-danger text-light text-center'>Due Amount</th>
<th class='bg-danger text-light text-center'>Invoice Number</th>
<th class='bg-danger text-light text-center'>Total Products</th>
<th class='bg-danger text-light text-center'>Order Date</th>
<th class='bg-danger text-light text-center'>Status</th>
<th class='bg-danger text-light text-center'>Delete</th>
</tr>
</thead>
<tbody>";
    $number=0;
    while($row_data=mysqli_fetch_assoc($result)){
        $order_id=$row_data['order_id'];
        $user_id=$row_data['user_id'];
        $amount_due=$row_data['amount_due'];
        $invoice_number=$row_data['invoice_number'];
        $total_products=$row_data['total_products'];
        $order_date=$row_data['order_date'];
        $order_status=$row_data['order_status'];
        $number++;
        echo "<tr>
        <td class='bg-dark text-light text-center'>$number</td>
        <td class='bg-dark text-light text-center'>$amount_due</td>
        <td class='bg-dark text-light text-center'>$invoice_number</td>
        <td class='bg-dark text-light text-center'>$total_products</td>
        <td class='bg-dark text-light text-center'>$order_date</td>
        <td class='bg-dark text-light text-center'>$order_status</td>
        <td class='bg-dark text-light text-center'><a href='index.php?delete_order=$order_id' 
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
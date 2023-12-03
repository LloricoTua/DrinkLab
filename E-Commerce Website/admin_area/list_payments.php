<h1 class="text-center">All Payments</h1>
<table class="table table-bordered mt-4">
    <thead>

    <?php
$get_payments="Select * from `user_payments`";
$result=mysqli_query($con,$get_payments);
$row_count=mysqli_num_rows($result);


if($row_count==0){
    echo "<h1 class='text-danger text-center mt-4'>No payments received yet!</h1>";
}else{
    echo "<tr>
<th class='bg-danger text-light text-center'>SL NO.</th>
<th class='bg-danger text-light text-center'>Invoice Number</th>
<th class='bg-danger text-light text-center'>Amount</th>
<th class='bg-danger text-light text-center'>Payment Mode</th>
<th class='bg-danger text-light text-center'>Order Date</th>
<th class='bg-danger text-light text-center'>Delete</th>
</tr>
</thead>
<tbody>";
    $number=0;
    while($row_data=mysqli_fetch_assoc($result)){
        $order_id=$row_data['order_id'];
        $payment_id=$row_data['payment_id'];
        $amount=$row_data['amount'];
        $invoice_number=$row_data['invoice_number'];
        $payment_mode=$row_data['payment_mode'];
        $date=$row_data['date'];
        $number++;
        echo "<tr>
        <td class='bg-dark text-light text-center'>$number</td>
        <td class='bg-dark text-light text-center'>$invoice_number</td>
        <td class='bg-dark text-light text-center'>$amount</td>
        <td class='bg-dark text-light text-center'>$payment_mode</td>
        <td class='bg-dark text-light text-center'>$date</td>
        <td class='bg-dark text-light text-center'><a href='index.php?delete_payment=$order_id' 
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
        <h5>Are you sure you want to delete this payment?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="./index.php?list_payments" class="text-light text-decoration-none">No</a></button>
        <button type="button" class="btn btn-danger"><a href='index.php?delete_payment=<?php echo $order_id ?>' 
         class="text-light text-decoration-none">Yes</a></button>
      </div>
    </div>
  </div>
</div>
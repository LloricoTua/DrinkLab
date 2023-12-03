<h1 class="text-center">All Products</h1>
<table class="table table-bordered mt-4">
    <thead>
        <tr>
            <th  class="bg-danger text-light text-center">Product ID</th>
            <th  class="bg-danger text-light text-center">Product Title</th>
            <th  class="bg-danger text-light text-center">Product Image</th>
            <th  class="bg-danger text-light text-center">Product Price</th>
            <th  class="bg-danger text-light text-center">Total Sold</th>
            <th  class="bg-danger text-light text-center">Status</th>
            <th  class="bg-danger text-light text-center">Edit</th>
            <th  class="bg-danger text-light text-center">Delete</th>
        </tr>
    </thead>
<tbody>
    <?php
$get_products="Select * from `products`";
$result=mysqli_query($con,$get_products);
$number=0;
while($row=mysqli_fetch_assoc($result)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_image1=$row['product_image1'];
    $product_price=$row['product_price'];
    $status=$row['status'];
    $number++;
    ?>
    <tr>
    <td class='bg-dark text-light text-center'><?php echo $number ?></td>
    <td class='bg-dark text-light text-center'><?php echo $product_title ?></td>
    <td class='bg-dark text-light text-center'><img src='./product_images/<?php echo $product_image1 ?>' class='product_img'/></td>
    <td class='bg-dark text-light text-center'><?php echo $product_price ?>/-</td>
    <td class='bg-dark text-light text-center'><?php 
    $get_count="Select * from `orders_pending` where product_id=$product_id";
    $result_count=mysqli_query($con,$get_count);
    $rows_count=mysqli_num_rows($result_count);
    echo $rows_count;

    ?></td>
    <td class='bg-dark text-light text-center'><?php echo $status ?></td>
    <td class='bg-dark text-light text-center'><a href='index.php?edit_products=<?php echo $product_id ?>'><i class='fa-solid fa-pen-to-square text-light'></i></a></td>
    <td class='bg-dark text-light text-center'><a href='index.php?delete_product=<?php echo $product_id ?>'
        type="button" class="text-light" data-toggle="modal" data-target="#exampleModal"><i class='fa-solid fa-trash text-light'></td>
</tr>
<?php
}
?>
    
</tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Are you sure you want to delete this product?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="./index.php?view_products" class="text-light text-decoration-none">No</a></button>
        <button type="button" class="btn btn-danger"><a href='index.php?delete_product=<?php echo $product_id ?>' 
         class="text-light text-decoration-none">Yes</a></button>
      </div>
    </div>
  </div>
</div>
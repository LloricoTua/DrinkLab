<h1 class="text-center">All Categories</h1>
<table class="table table-bordered mt-4">
    <thead class="bg-danger">
        <tr>
            <th class='bg-danger text-light text-center'>SL NO.</th>
            <th class='bg-danger text-light text-center'>Category title</th>
            <th class='bg-danger text-light text-center'>Edit</th>
            <th class='bg-danger text-light text-center'>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $select_cat="Select * from `categories`";
        $result=mysqli_query($con,$select_cat);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
            $category_id=$row['category_id'];
            $category_title=$row['category_title'];
            $number++;
?>
        <tr>
            <td class='bg-dark text-light text-center'><?php echo $number; ?></td>
            <td class='bg-dark text-light text-center'><?php echo $category_title; ?></td>
            <td class='bg-dark text-light text-center'><a href='index.php?edit_category=<?php echo $category_id ?>'><i class='fa-solid fa-pen-to-square text-light'></i></a></td>
            <td class='bg-dark text-light text-center'><a href='index.php?delete_category=<?php echo $category_id ?>'
            type="button" class="text-light" data-toggle="modal" data-target="#exampleModal"><i class='fa-solid fa-trash text-light'></td>
        </tr>
<?php

}?>
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Are you sure you want to delete this category?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="./index.php?view_categories" class="text-light text-decoration-none">No</a></button>
        <button type="button" class="btn btn-danger"><a href='index.php?delete_category=<?php echo $category_id ?>' 
         class="text-light text-decoration-none">Yes</a></button>
      </div>
    </div>
  </div>
</div>
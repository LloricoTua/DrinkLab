<?php
include('../includes/connect.php');
if(isset($_POST['insert_cat'])){
  $category_title=$_POST['cat_title'];

  $select_query="Select * from `categories` where category_title='$category_title'";
  $result_select=mysqli_query($con,$select_query);
  $number=mysqli_num_rows($result_select);
  if($number>0){
    echo "<script>alert('This Category is present inside the database.')</script>";
  }else{

  $insert_query="insert into `categories` (category_title) values ('$category_title')";
  $result=mysqli_query($con,$insert_query);
  if($result){
      echo "<script>alert('Category has been inserted successfully!')</script>";
  }
}}
?>
<h1 class="text-center text-dark mb-4">Insert Categories</h1>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-secondary" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="Categories" aria-describedby="basic-addon1" autocomplete="off">
</div>
<div class="input-group w-10 mb-2 m-auto">

  <input type="submit" class="bg-danger text-light p-2 pt-1 pb-2 my-3 border-1"name="insert_cat" value="Save">
  <a href="index.php"><input type="button"  class="bg-danger text-light p-2 pt-1 pb-2 my-3 mx-2 border-1" value="Cancel"></a>

</div>
</form>
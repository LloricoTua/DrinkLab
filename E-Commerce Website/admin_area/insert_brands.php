<?php
include('../includes/connect.php');
if(isset($_POST['insert_brand'])){
  $brand_title=$_POST['brand_title'];

  $select_query="Select * from `brands` where brand_title='$brand_title'";
  $result_select=mysqli_query($con,$select_query);
  $number=mysqli_num_rows($result_select);
  if($number>0){
    echo "<script>alert('This Brand is present inside the database.')</script>";
  }else{

  $insert_query="insert into `brands` (brand_title) values ('$brand_title')";
  $result=mysqli_query($con,$insert_query);
  if($result){
      echo "<script>alert('Brand has been inserted successfully!')</script>";
  }
}}
?>

<h1 class="text-center text-dark mb-4">Insert Brands</h1>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-secondary" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="brand_title" placeholder="Insert Brands" aria-label="brands" aria-describedby="basic-addon1" autocomplete="off">
</div>
<div class="input-group w-10 mb-2 m-auto">

  <input type="submit" class="bg-danger text-light p-2 pt-1 pb-2 my-3 border-1"name="insert_brand" value="Save">
  <a href="index.php"><input type="button"  class="bg-danger text-light p-2 pt-1 pb-2 my-3 mx-2 border-1" value="Cancel"></a>

</div>
</form>
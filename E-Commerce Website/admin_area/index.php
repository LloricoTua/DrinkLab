<!-- connect file -->
<?php
include('../includes/connect.php');
include('../functions/common_function.php');
@session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
        overflow-x:hidden;
    }
.admin-image{
    width: 100px;
    object-fit: contain;
}
.footer{
    position:absolute;
    bottom:0;
}
.product_img{
    width:100px;
    object-fit:contain;
}
    </style>

</head>
<body style="background-color: pink">
    <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: pink";>
            <div class="container-fluid">
                <img src="../images/LOGOOO.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                    <?php
        if(!isset($_SESSION['admin_name'])){
          echo "<li class='nav-item'>
          <a class='nav-link' href='#'>Welcome Guest</a>
        </li>";
        }else{
          echo "<li class='nav-item'>
          <a class='nav-link' href='#'>Welcome ".$_SESSION['admin_name']." !</a>
        </li>";
        }
        ?>
                    </ul>
                </nav>
            </div>
        </nav>

        <div class="bg-dark">
            <h1 class="text-center text-light p-2">Manage Details</h1>
        </div>
<hr>
        <div class="row">
            <div class="col-md-12 bg-pink pt-3 d-flex justify-content-center align-items-center">
                <!-- <div class="px-5">
                    <a href="#"><img src="../images/10.jpg" alt="" class="admin-image"></a>
                    <p class="text-dark text-center">Admin Name</p>
                </div> -->
                <!--button*10>a.nav-link.text-light.bg-info.my-1-->
                <div class="button text-center px-5">
                    <button><a href="insert_product.php" class="nav-link text-light bg-secondary p-3 m-1">Insert Products</a></button>
                    <button><a href="index.php?view_products" class="nav-link text-light bg-secondary p-3 m-1">View Products</a></button>
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-secondary p-3 m-1">Insert Categories</a></button>
                    <button><a href="index.php?view_categories" class="nav-link text-light bg-secondary p-3 m-1">View Categories</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light bg-secondary p-3 m-1">Insert Brands</a></button>
                    <button><a href="index.php?view_brands" class="nav-link text-light bg-secondary p-3 m-1">View Brands</a></button>
                    <button><a href="index.php?list_orders" class="nav-link text-light bg-secondary p-3 m-1">All Orders</a></button>
                    <button><a href="index.php?list_payments" class="nav-link text-light bg-secondary p-3 m-1">All Payments</a></button>
                    <button><a href="index.php?list_users" class="nav-link text-light bg-secondary p-3 m-1">List User</a></button>
                    <button><a href="admin_login.php" class="nav-link text-light bg-secondary p-3 m-1">Log Out</a></button>
                </div>           
            </div>
        </div>

        <div class="container my-3">
            <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');
            }
            if(isset($_GET['view_products'])){
                include('view_products.php');
            }
            if(isset($_GET['edit_products'])){
                include('edit_products.php');
            }
            if(isset($_GET['delete_product'])){
                include('delete_product.php');
            }
            if(isset($_GET['view_categories'])){
                include('view_categories.php');
            }
            if(isset($_GET['view_brands'])){
                include('view_brands.php');
            }
            if(isset($_GET['edit_category'])){
                include('edit_category.php');
            }
            if(isset($_GET['edit_brands'])){
                include('edit_brands.php');
            }
            if(isset($_GET['delete_category'])){
                include('delete_category.php');
            }
            if(isset($_GET['delete_brands'])){
                include('delete_brands.php');
            }
            if(isset($_GET['list_orders'])){
                include('list_orders.php');
            }
            if(isset($_GET['delete_order'])){
                include('delete_order.php');
            }
            if(isset($_GET['list_payments'])){
                include('list_payments.php');
            }
            if(isset($_GET['list_users'])){
                include('list_users.php');
            }
            if(isset($_GET['delete_payment'])){
                include('delete_payment.php');
            }
            ?>
        </div>

           <!-- INCLUDE FOOTER -->
    <?php
      include("../includes/footer.php") ?>

<!-- BOOTSRAP JS LINK -->

    <script src="js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
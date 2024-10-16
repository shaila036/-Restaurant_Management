<?php 
//Link database
require('../db.php');
session_start();

//Admin Login Check
if(!isset($_SESSION["admin_id"])){
    header('Location: login.php');
}

if(isset($_POST['add_product'])){
    //echo "Medehi poca";
    $title = $_POST['title'];
    $price = $_POST['price'];
    
    $target_path = "assets/";
    $target_path = $target_path.basename( $_FILES['photo']['name']);

    move_uploaded_file($_FILES['photo']['tmp_name'], $target_path);
    $img=$target_path;
    $query=mysqli_query($conn, "insert into products(`title`, `img`, `price`)values('$title', '$img', '$price')");
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--font awesomw cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!--custom css file link-->
    <link rel="stylesheet" href="../style.css">
    <title>admin login</title>
</head>
<body>
    <div class="admin_nav">
        <p>Admin panel</p>
        <a href="../index.php">Home</a>
    </div>
    <div class="control">
        <a href="./dashboard.php">Dashboard</a>
        <a href="./orders.php">Order</a>
    </div>
    <div class="add_form">
        <p>Add you product</p>
        <form action="" method="post" enctype="multipart/form-data">
            <label>Product Name:</label>
            <input type="text" placholder="Name" name="title">
            <label>Product price:</label>
            <input type="text" placholder="Price" name="price">
            <label>Product image:</label>
            <input type="file" name="photo">
            <input type="submit" value="submit" class="submit" name="add_product">
        </form>
    </div>
</body>
</html>
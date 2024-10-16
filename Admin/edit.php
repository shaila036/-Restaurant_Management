<?php 
//Link database
require('../db.php');
session_start();

//Admin Login Check
if(!isset($_SESSION["admin_id"])){
    header('Location: login.php');
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    header('Location: dashboard.php');
}

//Get Product Information 
$query=mysqli_query($conn,"select * from products where id = '$id'");
if(mysqli_num_rows($query) > 0){
    while($row=mysqli_fetch_array($query)){
        $old_title = $row['title'];
        $old_price = $row['price'];
    } 
}

//Update Product information
if(isset($_POST['update'])){
    
    $title = $_POST['title'];
    $price = $_POST['price'];    
    
    $query=mysqli_query($conn,"update products set title='$title', price='$price' where id='$id'");
    
    if($query){
        header('Location: dashboard.php');
    }
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
        <p>Edit you product</p>
        <form action="" method="post">
            <label>Product Name:</label>
            <input type="text" placholder="Name" name="title" value="<?=$old_title?>">
            <label>Product price:</label>
            <input type="text" placholder="Price" name="price" value="<?=$old_price?>">
            <input type="submit" value="save" class="submit" name="update">
        </form>
    </div>
</body>
</html>
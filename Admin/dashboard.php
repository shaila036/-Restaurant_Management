<?php 
//Link database
require('../db.php');
session_start();

//Admin Login Check
if(!isset($_SESSION["admin_id"])){
    header('Location: login.php');
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
   
    <div class="control_table">

        <div class="add">
                <a href="./add.php">Add items</a>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>price</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $query=mysqli_query($conn,"select * from products");
                if(mysqli_num_rows($query) > 0){
                while($row=mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td class="food_image"> <img src="<?=$row['img']?>" alt="food image"></td>
                    <td><?=$row['title']?></td>
                    <td>$<?=$row['price']?></td>
                    <td><a href="./edit.php?id=<?=$row['id']?>" class="edit">edit</a></td>
                    <td><a href="#" class="delete">delete</a></td>
                    
                </tr>
                <?php } }?>
            </tbody>
        </table>
    </div>
</body>
</html>
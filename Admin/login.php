<?php 
//Connect database
require('../db.php');
session_start();

//Login
if(isset($_POST['login'])){
    //echo "Medehi poca";
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query=mysqli_query($conn,"select * from admin where email = '$email' and password = '$password'");
    if(mysqli_num_rows($query) > 0){
        while($row=mysqli_fetch_array($query)){
            $_SESSION["admin_id"] = $row['id'];
            //echo $_SESSION["admin_id"];
            header('Location: dashboard.php');
        }
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
    <section class="admin_login">
        <div class="login_title">
            <P>Admin Login</P>
        </div>
        <form action="" method="post">
            <input type="text" placeholder="Email" name="email">
            <input type="text" placeholder="password" name="password">
            <input type="submit" value="LOGIN" class="login" name="login">
        </form>
        
    </section>
    
</body>
</html>
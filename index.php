<?php 
//Link database
require('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width,initial-scale=1.0"> -->
    <title> Food Website</title>
    <!--font awesomw cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!--custom css file link-->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!--header section starts-->
    <header>
        <a href="#" class="logo"><i class="fas fa-utensils"></i>food</a>

        <!--  <div id="menu-bar" class="fas fa-bars"></div> -->

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#speciality">speciality</a>
            <a href="#popular">popular</a>
            <a href="#review">review</a>
            <a href="#order">order</a>
        </nav>
    </header>
    <!--header section ends-->

    <!--home section starts-->

    <section class="home" id="home">
        <div class="content">
            <h3>food made with love</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Voluptas accusamus tempore temporibus rem amet laudantium animi optio voluptatum.
                Natus obcaecati unde porro nostrum ipsam itaque impedit incidunt rem quisquam eos! </p>
            <a href="#order" class="btn">order now</a>

        </div>
        <div class="image">
            <img src="./image/home-img.png" alt="">

        </div>

    </section>

    <!--home section ends-->

    <!--speciality section starts-->

    <section class="speciality" id="speciality">

        <h1 class="heading">our <span>speciality</span> </h1>

        <div class="box-container">

            <div class="box">
                <img class=image src="./image/s-img-1.jfif" alt="">
                <div class="content">
                    <img src="./image/s-1.png" height="50" alt="">
                    <h3>tasty burger</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Consequatur facilis
                        possimus tenetur voluptatem reiciendis magnam eos quo eaque,pariatur laboriosam?
                    </p>

                </div>

            </div>
            <div class="box">
                <img class=image src="./image/s-img-2.png" alt="">
                <div class="content">
                    <img src="./image/s-2.png" height="50" alt="">
                    <h3>tasty pizza</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Consequatur facilis
                        possimus tenetur voluptatem reiciendis magnam eos quo eaque,pariatur laboriosam?
                    </p>

                </div>

            </div>
            <div class="box">
                <img class=image src="./image/s-img-3.jpg" alt="">
                <div class="content">
                    <img src="./image/s-3.png" height="50" alt="">
                    <h3>cold ice-cream</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Consequatur facilis
                        possimus tenetur voluptatem reiciendis magnam eos quo eaque,pariatur laboriosam?
                    </p>

                </div>

            </div>
            <div class="box">
                <img class=image src="./image/s-img-4.jpg" alt="">
                <div class="content">
                    <img src="./image/s-4.jpg" height="50" alt="">
                    <h3>cold drinks</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Consequatur facilis
                        possimus tenetur voluptatem reiciendis magnam eos quo eaque,pariatur laboriosam?
                    </p>

                </div>

            </div>
            <div class="box">
                <img class=image src="./image/s-img-5.jpg" alt="">
                <div class="content">
                    <img src="./image/s-5.jfif" height="50" alt="">
                    <h3>tasty sweets</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Consequatur facilis
                        possimus tenetur voluptatem reiciendis magnam eos quo eaque,pariatur laboriosam?
                    </p>

                </div>

            </div>
            <div class="box">
                <img class=image src="./image/s-img-6.jpg" alt="">
                <div class="content">
                    <img src="./image/s-6.png" height="50" alt="">
                    <h3>healty breakfast</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.Consequatur facilis
                        possimus tenetur voluptatem reiciendis magnam eos quo eaque,pariatur laboriosam?
                    </p>

                </div>

            </div>
        </div>

    </section>
    <!--speciality section ends-->

    <section class="popular" id="popular">
        <h1 class="heading"> most <span>popular</span> foods </h1>

        <div class="box-container">
            <?php 
            $query=mysqli_query($conn,"select * from products");
            if(mysqli_num_rows($query) > 0){
                while($row=mysqli_fetch_array($query)){
            ?>

            <div class="box">
                <span class="price"> $<?=$row['price']?> </span>
                <img src="admin/<?=$row['img']?>" height="400" width="470" alt="">
                <h3><?=$row['title']?></h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>


                </div>
                <a href="#order" class="btn">order now</a>
            </div>
            <?php }}?>
        </div>
    </section>
    <!--popular section ends-->

    <!--steps section stars-->
    <div class="step-container">

        <h1 class="heading">how it <span>works</span></h1>

        <section class="steps">

            <div class="box">
                <img src="./image/step-1.jfif" height="150" width="150" alt="">
                <h3>choose your favorite food</h3>
            </div>
            <div class="box">
                <img src="./image/step-2.webp" height="150" width="150" alt="">
                <h3>free and fast delivery</h3>
            </div>

            <div class="box">
                <img src="./image/step-3.png" height="150" width="150" alt="">
                <h3>easy payments methdos</h3>
            </div>
            <div class="box">
                <img src="./image/step-4.webp" height="150" width="150" alt="">
                <h3>and finally,enjoy your food</h3>
            </div>

        </section>

    </div>

    <!--steps section ends-->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> our customers <span>reviews</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="./image/pic1.jpg" alt="">
                <h3>Samira Rahman</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus, ducimus facere quod ratione vel laboriosam? Est, maxime rem. Itaque.</p>
            </div>
            <div class="box">
                <img src="./image/pic2.jfif" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus, ducimus facere quod ratione vel laboriosam? Est, maxime rem. Itaque.</p>
            </div>
            <div class="box">
                <img src="./image/pic3.jpg" alt="">
                <h3>Fatima</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus, ducimus facere quod ratione vel laboriosam? Est, maxime rem. Itaque.</p>
            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- order section starts  -->

    <section class="order" id="order">

        <h1 class="heading"> <span>order</span> now </h1>

        <div class="row">

            <div class="image">
                <img src="./image/order-img1.jpg" alt="">
            </div>

            <form action="" method="post">

                <div class="inputBox">
                    <input type="text" placeholder="name" name="name">
                    <input type="email" placeholder="email" name="email">
                </div>

                <div class="inputBox">
                    <input type="number" placeholder="number" name="phone">
                    <input type="text" placeholder="food name" name="food_name">
                </div>

                <textarea placeholder="address" name="address" id="address" cols="30" rows="10"></textarea>

                <input type="submit" value="order now" class="btn" name="order">

            </form>

        </div>

    </section>
    <?php 
    if(isset($_POST['order'])){
        //echo "Medehi poca";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $food_name = $_POST['food_name'];
        $address = $_POST['address'];

        $query=mysqli_query($conn, "insert into orders(`name`, `email`, `phone`, `food_name`, `address`)values('$name', '$email', '$phone', '$food_name', '$address')");

    }
    ?>
    <!-- order section ends -->

    <!-- footer section  -->

    <section class="footer">

        <div class="share">
            <a href="#" class="btn">facebook</a>
            <a href="#" class="btn">twitter</a>
            <a href="#" class="btn">instagram</a>
            <a href="#" class="btn">pinterest</a>
            <a href="#" class="btn">linkedin</a>
        </div>



    </section>

    <!-- scroll top button  --
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a> 
-->
    <!-- loader  -->
    <div class="loader-container">
        <img src="./image/loader.gif" alt="">
    </div>



    <!--customer js file link-->
    <script src="Task3.js"></script>


</body>

</html>

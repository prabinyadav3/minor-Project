<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}

if (isset($_POST['add_to_cart'])) {

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if (mysqli_num_rows($check_cart_numbers) > 0) {
      $message[] = 'already added to cart!';
   } else {
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="2.css">
   <link rel="stylesheet" href="1.css">
   <!-- <link rel="stylesheet" href="home.css"> -->
   <style>
      .home-contact{
         background-color: 	#20b2aa;
      }
      .home-contact .content p{
         color: black;
      }
      body {
         background-color: #eaeaea;
         overflow: hidden;
      }

      .home{
      height: 680px;
   background-size: cover;
   background-position: center;
   display: flex;
   align-items: center;
   justify-content: center;
 
   
}
     
      .slide {
         width: max-content;
         margin-top: 50px;
      }

      .item {
         width: 200px;
         height: 300px;
         background-position: center;
         display: inline-block;
         transition: 0.5s;
         background-size: cover;
         position: absolute;
         z-index: 1;
         top: 50%;
         transform: translate(0, -50%);
         border-radius: 20px;
         box-shadow: 0 30px 50px #505050;
         display: flex;
      }

      .item:nth-child(1),
      .item:nth-child(2) {
         left: 0;
         top: 0;
         transform: translate(0, 0);
         border-radius: 0;
         width: 100%;
         height: 100%;
         box-shadow: none;
      }

      .item:nth-child(3) {
         left: 50%;
      }

      .item:nth-child(4) {
         left: calc(50% + 220px);
      }

      .item:nth-child(5) {
         left: calc(50% + 440px);
      }

      .item:nth-child(n+6) {
         left: calc(50% + 660px);
         opacity: 0;
      }

      .item .content {
         position: absolute;
         top: 50%;
         left: 100px;
         width: 300px;
         text-align: left;
         padding: 0;
         color: #eee;
         transform: translate(0, -50%);
         display: none;
         font-family: system-ui;
      }

      .item:nth-child(2) .content {
         display: block;
         z-index: 11111;
      }

      .item .name {
         font-size: 40px;
         font-weight: bold;
         opacity: 0;
         animation: showcontent 1s ease-in-out 1 forwards
      }

      .item .des {
         margin: 20px 0;
         opacity: 0;
         animation: showcontent 1s ease-in-out 0.3s 1 forwards
      }

      .item button {
         padding: 10px 20px;
         border: none;
         opacity: 0;
         animation: showcontent 1s ease-in-out 0.6s 1 forwards
      }

      @keyframes showcontent {
         from {
            opacity: 0;
            transform: translate(0, 100px);
            filter: blur(33px);
         }

         to {
            opacity: 1;
            transform: translate(0, 0);
            filter: blur(0);
         }
      }

      .buttons {
         position: absolute;
         bottom: 30px;
         z-index: 222222;
         text-align: center;
         width: 100%;
      }

      .buttons button {
         width: 50px;
         height: 50px;
         border-radius: 50%;
         border: 1px solid #555;
         transition: 0.5s;
      }

      .buttons button:hover {
         background-color: #bac383;
      }
   </style>
</head>

<body>

   <?php include 'header.php'; ?>
   <section class="home">
      <div id="slide">
         <div class="item" style="background-image: url('/project/Image/out5.png');">
            <div class="content">
               <div class="name">HARDCOPY</div>
               <div class="des">Buy books and prove your richness</div>
               <button><a href="about.php">Discover more</a></button>
            </div>
         </div>
         <div class="item" style="background-image: url('/project/Image/out1.png');">
            <div class="content">
               <div class="name">PYTHON</div>
               <div class="des">You deserve a book, give us a chance.</div>
               <button><a href="about.php">Discover more</a></button>
            </div>
         </div>
         <div class="item" style="background-image: url('/project//Image/out2.png');">
            <div class="content">
               <div class="name">JAVA</div>
               <div class="des">We provide you a readers choice service.</div>
               <button><a href="about.php">Discover more</a></button>
            </div>
         </div>
         <div class="item" style="background-image: url('/project/Image/out3.png');">
            <div class="content">
               <div class="name">WEB</div>
               <div class="des">Great your dream book here.</div>
               <button><a href="about.php">Discover more</a></button>
            </div>
         </div>
         <div class="item" style="background-image: url('/project/Image/out6.png');">
            <div class="content">
               <div class="name">DATA</div>
               <div class="des">Choose us and you feel satisfied.</div>
               <button><a href="about.php">Discover more</a></button>
            </div>
         </div>
         <div class="item" style="background-image: url('/project/Image/out7.png');">
            <div class="content">
               <div class="name">SOFTWARE</div>
               <div class="des">Drive the road of knowledge with the best collection of books</div>
               <button><a href="about.php">Discover more</a></button>
            </div>
         </div>
      </div>
      <div class="buttons">
         <button id="prev"><i class="fa-solid fa-angle-left"></i></button>
         <button id="next"><i class="fa-solid fa-angle-right"></i></button>
      </div>

   </section>


   <section class="products">

      <h1 class="title">latest products</h1>

      <div class="box-container">

         <?php
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if (mysqli_num_rows($select_products) > 0) {
            while ($fetch_products = mysqli_fetch_assoc($select_products)) {
         ?>
               <form action="" method="post" class="box">
                  <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
                  <div class="name"><?php echo $fetch_products['name']; ?></div>
                  <div class="price">Rs.<?php echo $fetch_products['price']; ?>/-</div>
                  <input type="number" min="1" name="product_quantity" value="1" class="qty">
                  <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                  <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                  <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                  <input type="submit" value="add to cart" name="add_to_cart" class="btn">
               </form>
         <?php
            }
         } else {
            echo '<p class="empty">no products added yet!</p>';
         }
         ?>
      </div>

      <div class="load-more" style="margin-top: 2rem; text-align:center">
         <a href="shop.php" class="option-btn">load more</a>
      </div>

   </section>

   <section class="about">

      <div class="flex">

         <div class="image">
            <img src="image/home1.jpg" alt="">
         </div>

         <div class="content">
            <h3>about us</h3>
            <p>Running a bookshop isn't as easy as it may seem, owing to the massive competition in the already existing world.</p>
            <a href="about.php" class="btn">read more</a>
         </div>

      </div>

   </section>

   <section class="home-contact">

      <div class="content">
         <h3>have any questions?</h3>
         <p>BookStore are an ever-increasing business and something which is in heavy demand because of the presence of readers.</p>
         <a href="contact.php" class="white-btn">contact us</a>
      </div>

   </section>





   <?php include 'footer.php'; ?>

   <!-- custom js file link  -->
   <script src="home.js"></script>
   <script src="slide.js"></script>

</body>

</html>
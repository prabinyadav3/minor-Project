<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="2.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="/project/Image/about.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>BookStore have always been so popular, not only because of the various kinds of books available there but also because of the experience they provide to the readers.</p>
         <p>This is one of the very basics of branding and has the potential to take your company from nil to successful. </p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="/project/Image/Abhishek.jpg" alt="">
         <p>I'm so grateful to have discovered this bookstore. The diverse selection and knowledgeable staff make every visit a memorable experience.I can always count on finding it here.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Abhishek Adhikari</h3>
      </div>

      <div class="box">
         <img src="/project/Image/anish.jpg" alt="">
         <p>I appreciate the attention to detail in organizing the books, making it easy to explore different genres and authors.Shop online and open new chapters in your life.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Anish Yadav</h3>
      </div>

      <div class="box">
         <img src="/project/Image/binod.jpg" alt="">
         <p>This bookstore has become my happy place. The shelves are filled with an impressive selection of books, spanning various genres and interests.A must-visit for any book enthusiast.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Umesh Shah</h3>
      </div>

      <div class="box">
         <img src="/project/Image/mamita.jpg" alt="">
         <p>Shopping for books at this store is an absolute delight. The customer service to the staff genuinely cares about connecting readers with the perfect books. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mamita Chaudhary</h3>
      </div>

      <div class="box">
         <img src="/project/Image/dipesh.jpg" alt="">
         <p>If you want to set yourself apart in this particular sector with your own bookstore, you would certainly need the help of a fitting tagline that will express your intent with the company</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rajan Raj</h3>
      </div>

      <div class="box">
         <img src="/project/Image/umesh.jpg" alt="">
         <p>When your intent and objective make their way into people's hearts, your hurdles are lowered significantly, and you get the opportunity to overtake your rivals. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bibek Pandit</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">great authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="/project/Image/Nirajan.jpg" alt="">
         <div class="share">
            <a href="https://www.facebook.com/nirajan.chaudhary.31521/photos_by" class="fab fa-facebook-f"></a>
            <a href="https://twitter.com/NirajanCha68286" class="fab fa-twitter"></a>
            <a href="https://www.instagram.com/nirajanchaudhary026/?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-telegram"></a>
         </div>
         <h3>Nirajan Chaudhary</h3>
      </div>

      <div class="box">
         <img src="image/binay.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-viber"></a>
         </div>
         <h3>Binay Chaudhary</h3>
      </div>

      <div class="box">
         <img src="image/sahadev.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-viber"></a>
         </div>
         <h3>Sahadev Khadka</h3>
      </div>

      <div class="box">
         <img src="image/uttam.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-viber"></a>
         </div>
         <h3>Uttam Ghimire</h3>
      </div>

      <div class="box">
         <img src="image/paru.jpeg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-viber"></a>
         </div>
         <h3>Paru Rai</h3>
      </div>

      <div class="box">
         <img src="image/bijay.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-viber"></a>
         </div>
         <h3>Vijay Pandit</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="home.js"></script>
</body>
</html>
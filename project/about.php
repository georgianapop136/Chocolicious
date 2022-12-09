<?php

include 'config.php';
//$conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed');

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

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Elegant Packing
             <br>
             Personalized message chocolates
             <br>
             On time delivery
             <br>
             Best quality product
             <br>
             Mixed flavoured chocolates
             <br>
             We constantly scout for local and unique ingredients to experiment with , which helps us to create unique flavours just for you.
             Unlike mass produced chocolates, our chocolates come with personalized flavours and even designs.</p>
          <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Great chocolate shop! Very different and modern to the others (very pink!) they have different style of chocolates and good value deals on gifts!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Norma Banks</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Always works well, and shipped to Denmark quickly and without any issues. The selection is good and it is always an opportunity to get the best Belgian chocolates for any holiday. The Valentines sets with chocolates and teddy bears always are a blast with our young daughters.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Haris Mcleod</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Very quick delivery (though very expensive) beautiful experience, delicious chocolates. Highly recommend.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sylvia Olsen</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>A brilliant selection of dark mixed and caramel chocolates.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Niall Mcgrath</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Great site - easy to navigate. masses of information on the individual chocolates if required (useful when people have allergies).
             Some offers add to the joy of shopping. Sensible postage prices. Best of all I mistakenly ordered the same item twice for one person, the owner e-mailed and asked if I wished to cancel one and receive a refund. Which they did.
             What service! The recipient has since telephoned to extol the wonders of her chocolates - very pleasing.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ian Harvey</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>My order was handled super fast. My chocolates arrived in perfect condition. The fragile liquor ones were very carefully packed and little stickers were affixed to denote different contents for similarly packaged boxes. The wrapping is beautiful. A small thank you token was also enclosed with my package.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Grace Haley</h3>
      </div>

   </div>

</section>
<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
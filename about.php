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
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About Us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/home-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why Choose Us?</h3>
         <p>Why choose us? We use only the finest, freshest ingredients to ensure every bite is delicious and satisfying. Each of our donuts and cupcakes is handcrafted with care and attention to detail, offering a unique and delectable experience. Our coffee is brewed to perfection, using premium beans for a rich, smooth flavor that complements our sweet treats. </p>
         <p>From classic glazed donuts to decadent chocolate cupcakes, our menu offers something for everyone, catering to diverse tastes and preferences. Our team is dedicated to providing a warm and welcoming atmosphere, ensuring every visit is a pleasant one. We are passionate about what we do, constantly striving to improve and innovate so you always get the best. Experience the perfect combination of coffee, donuts, and cupcakes at our place. We can't wait to serve you!</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Client's Reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Incredible find! Top-notch coffee, mouthwatering donuts, and heavenly cupcakes. A must-try!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Norman Reedus</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Love this place! Best coffee, donuts, and cupcakes in town!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Eliza Mae</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Obsessed with this shop! Amazing coffee, donuts, and cupcakes. Always fresh, always delicious.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Dawson Bright</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>Hidden gem alert! Incredible coffee, heavenly donuts, and divine cupcakes. Must-visit spot!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Olivia Harris</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Favorite spot alert! Exceptional coffee, delicious donuts, and irresistible cupcakes. Love it here!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Reed Steall</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>This place is a dream! Fantastic coffee, heavenly donuts, and perfect cupcakes.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ava Campbell</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">FOUNDERS</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>BELIGAN BRITNEY</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>BITOON RAYLEEN</h3>
      </div>

      <div class="box">
         <img src="images/author-3.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>EDROSO HARBEY</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>ENAJE ERIKKA MARIELLE</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>RODRIGUEZ BABYLENE</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
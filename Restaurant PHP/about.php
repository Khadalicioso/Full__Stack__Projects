<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'components/user_header.php'; ?>

<div class="heading">
   <h3>About us</h3>
   <p><a href="home.php">Home</a> <span> / About</span></p>
</div>
<section class="about">
   <div class="row">
      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>
      <div class="content">
         <h3>Why Choose Us?</h3>
         <p>"At Yumtopia, we're more than just a restaurant. We're a culinary destination where flavor meets innovation. Experience the magic of our handcrafted dishes, made with the freshest ingredients and a passion for perfection. From our cozy atmosphere to our exceptional service, Yumtopia offers a dining experience that's truly unforgettable."</p>
         <a href="menu.html" class="btn">Our menu</a>
      </div>
   </div>
</section>
<section class="steps">
   <h1 class="title">Simple Steps</h1>
   <div class="box-container">
      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>Choose Your Order</h3>
         <p>Browse our menu and select your favorite dishes. Quickly and easily place your order through our website.</p>
      </div>
      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>Fast Delivery</h3>
         <p>Sit back and relax while we prepare and deliver your food right to your doorstep.</p>
      </div>
      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>Enjoy Your Food</h3>
         <p>Savor the delicious flavors of our dishes in the comfort of your home.</p>
      </div>
   </div>
</section>
<section class="reviews">
   <h1 class="title">Flavorful Feedback</h1>
   <div class="swiper reviews-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <p>"Food coma bliss!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Jerick Ybarreta</h3>
         </div>
         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <p>Flavor explosion in every bite!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Antonette Bayan</h3>
         </div>
         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <p>"The best pizza I've ever had!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Mico Intertas</h3>
         </div>
         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>"Absolutely delicious and fresh!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Patricia Nicole Villanueva</h3>
         </div>
         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>"Yumtopia is my new favorite spot!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>John Powell Delos Santos</h3>
         </div>
         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <p>"The portions are huge and the prices are great!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Mhel Bandibad</h3>
         </div>
      </div>
      <div class="swiper-pagination"></div>
   </div>
</section>

<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>
</body>
</html>
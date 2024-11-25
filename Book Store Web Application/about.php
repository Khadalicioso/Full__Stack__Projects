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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
         <img src="images/about-img.jpg" alt="">
      </div>
      <div class="content">
         <h3>Why Choose Us?</h3>
         <p>Our bookshop isn’t just shelves and paper; it’s a haven where stories embrace you like old friends. Curated with love, our books whisper secrets, ignite imaginations, and invite you to wander through endless worlds. Come, choose magic. Amidst our cozy shelves, stories bloom like wildflowers. We’re not just a bookstore; we’re a portal to other lives, and other worlds.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>
   </div>
</section>
<section class="reviews">
   <h1 class="title">Client's Reviews</h1>
   <div class="box-container">
      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Lost in the labyrinth of shelves, I stumbled upon this hidden gem—the bookshop that dances with moonbeams. The smell of old paper and fresh dreams wrapped around me like a warm scarf. A magical experience! Highly recommend. Thanks, Read Right!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Mcrey Ronquillo</h3>
      </div>
      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p> As I stepped over the threshold, the bell tinkled—a celestial chime, surely tuned by bookish fairies. The shelves leaned in, conspiring. Now, I’m a character in my own story, sipping tea with Mr. Darcy and discussing quantum physics with Alice. Five stars!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Mhel Bandibad</h3>
      </div>
      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>The owner wore mismatched socks and spoke in riddles. ‘Books are keys,’ they said, handing me a worn copy of ‘The Hitchhiker’s Guide.’ ‘Unlock the universe.’ I did. Now, I know the meaning of life (it involves tea and a towel). Highly recommend. Thanks, Read Right!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>John Powell Delos Santos</h3>
      </div>
      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>The cat—Professor Whiskerbottom—gave me a disdainful look. ‘Choose wisely,’ he purred. I picked ‘The Book Thief.’ Suddenly, I could hear whispers—the stories trapped between pages. Also, I think I’m fluent in cat now. A magical experience!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Stephanie Dawn Bauza</h3>
      </div>
      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>The sign said, ‘Beware: Time Travel Zone.’ I scoffed. But then I found myself in ancient Egypt, arguing with Cleopatra about plot twists. The owner winked. ‘Told you.’ Now, I’m never leaving. Also, they serve excellent scones.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Dan Gajultos</h3>
      </div>
      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>The teapot read my fortune: ‘You’ll find love in Chapter 7.’ I blushed. The romance section beckoned. And there, among dog-eared paperbacks, I met someone who quoted Neruda. Thanks, Read Right!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
         </div>
         <h3>Angel Mae Agustin</h3>
      </div>
   </div>
</section>
<section class="authors">
   <h1 class="title">Great Authors</h1>
   <div class="box-container">
      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Ezer Jan Andalan</h3>
      </div>
      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Heanna Menoella Tan</h3>
      </div>
      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Jerick Ybarreta</h3>
      </div>
      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Erica Claudette Bonabon</h3>
      </div>
      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Mico Intertas</h3>
      </div>
      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Antonette Bayan</h3>
      </div>
   </div>
</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>
</body>
</html>
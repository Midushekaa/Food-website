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
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/woman.webp" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Exceptional Quality: We use only the freshest, highest-quality ingredients to ensure every dish is a delight to your taste buds.</p>
         <a href="menu.html" class="btn">our menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/images o.png" alt="">
         <h3>choose order</h3>
         <p>Enjoy our lightning-fast delivery, and savor the delicious food. We've got you covered from start to finish for a seamless dining experience.</p>
      </div>

      <div class="box">
         <img src="images/image 1.webp" alt="">
         <h3>fast delivery</h3>
         <p>Enjoy our mouth-watering food delivered to your door in no time. Fast delivery ensures your meal arrives hot and ready to savor, making every bite deliciously satisfying.</p>
      </div>

      <div class="box">
         <img src="images/image 2.jpg" alt="">
         <h3>enjoy food</h3>
         <p>Relish the delightful flavors of your meal, crafted to perfection. Each bite brings satisfaction, making your dining experience truly enjoyable</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">customer's reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/ima 15.webp" alt="">
            <p>Presentation The dishes were beautifully presented, making them almost too pretty to eat.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Arjun</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/ima 12.png" alt="">
            <p>Taste The Margherita pizza had a perfect balance of rich tomato sauce, fresh mozzarella, and fragrant basil.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ananya</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/ima 14.avif" alt="">
            <p>Texture The pasta was cooked to al dente perfection, and the creamy Alfredo sauce was velvety smooth.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
              
            </div>
            <h3>Kavin</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/ima 13.webp" alt="">
            <p>Value for Money For the quality and portion sizes, the prices were very reasonable. It felt like excellent value for money.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Priya</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/ima 16.jpg" alt="">
            <p>Portion Size The portions were generous, leaving us feeling pleasantly satisfied</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Suriya</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/ima 11.webp" alt="">
            <p>he delicious food, combined with the cozy ambiance and excellent service, made for a memorable meal.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               
            </div>
            <h3>Mala </h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
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
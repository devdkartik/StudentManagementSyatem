<?php 
include 'navbar.php'; 
include './arrow.php'; 
   
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Home Page</title>
 <style>
   * {
      box-sizing: border-box;
   }

   body {
      font-family: Verdana, sans-serif;
   }

   .mySlides {
      display: none;
   }

   img {
      vertical-align: middle;
   }

   /* Slideshow container */
   .slideshow-container {
      max-width: 1494px;
      position: relative;
      margin: auto;
      position: relative;
      height: 31rem;
      overflow-x: hidden;
      overflow-y: hidden;
   }

   /* Caption text */
   .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
   }

   /* Number text (1/3 etc) */
   .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
   }

   /* The dots/bullets/indicators */
   .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
   }

   .active {
      background-color: #717171;
   }

   /* Fading animation */
   .fade {
      animation-name: fade;
      animation-duration: 1.5s;
   }

   @keyframes fade {
      from {
         opacity: .4
      }

      to {
         opacity: 1
      }
   }

   /* On smaller screens, decrease text size */
   @media only screen and (max-width: 300px) {
      .text {
         font-size: 11px
      }
   }
   .card{
      width: 25%;
      float: left;
      margin-left: 2rem;

   }
   @media only screen and (max-width: 420px) {
      .container-xxl{
       height: 100rem!important;
      }
      .card{
      margin-top: 2rem;
      }
   }
</style>
<?php include './top.php'; ?>
</head>
<body>

   <div class="container-xl" style="margin-top: 2rem;">
      <div class="slideshow-container">

         <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="./include/images/Nalanda-University-Glorious-India-1140x570.jpg" style="width:100%">
            <div class="text">Front Views</div>
         </div>
         <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="./include/images/Nalanda-University-3.jpg" style="width:100%">
            <div class="text">Main views</div>
         </div>
         <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="./include/images/Nalanda-University-2.jpg" style="width:100%">
            <div class="text">Ground Views</div>
         </div>
         <a class="prev" onclick="plusSlides(-1)">❮</a>
         <a class="next" onclick="plusSlides(1)">❯</a>
      </div>
      <br>
      <div style="text-align:center">
         <span class="dot" onclick="currentSlide(1)"></span>
         <span class="dot" onclick="currentSlide(2)"></span>
         <span class="dot" onclick="currentSlide(3)"></span>
      </div>
   </div>
   <div class="container-xxl secondBox" style="height:28rem;margin-top: 3rem;">
      <div class="card text-center" style="width: 18rem;">
         <img src="./homeImages/couse.jpg" class="card-img-top" alt="couse thum image" style="height: 184px;">
         <div class="card-body">
            <h5 class="card-title ">COURSE OFFER</h5>
            <p class="card-text">We will offer lots of bachelor and Master course with less Price.we offer bachelor and master course.</p>
            <a href="./courseOffer.php" class="btn btn-primary">more details</a>
         </div>
      </div>
      <div class="card text-center" style="width: 18rem;">
      <img src="./homeImages/couse fee.jpg" class="card-img-top" alt="couse thum image" style="height: 184px;">
         <div class="card-body">
            <h5 class="card-title ">COURSE PRICING</h5>
            <p class="card-text">You can check all Couse Price .We try to provide Best quality Education in less Price.</p>
            <a href="./courseFee.php" class="btn btn-primary">check price</a>
         </div>
      </div>
      <div class="card text-center" style="width: 18rem;">
      <img src="./homeImages/info.jpg" class="card-img-top" alt="couse thum image" style="height: 184px;">
         <div class="card-body">
            <h5 class="card-title">CAMPUS INFO</h5>
            <p class="card-text">Ours Campus in 2500 squre feet , 12 Block and 5 Hostel Building with 250+ rooms.</p>
            <a href="#" class="btn btn-primary">know more</a>
         </div>
      </div>
      <div class="card text-center" style="width: 18rem;">
      <img src="./homeImages/ours history.jpg" class="card-img-top" alt="couse thum image" style="height: 184px;">
         <div class="card-body">
            <h5 class="card-title">OURS HISTORY</h5>
            <p class="card-text"> Ours jurney Start in 1990, we are Provide Best Education ever.</p>
            <a href="#" class="btn btn-primary">know more</a>
         </div>
      </div>

   </div>
   <!-- <div class="container shadow-lg p-3 mb-5 bg-body rounded"style="height: 12.4rem;background: currentColor;border-radius: 7rem;"> -->
   <!-- <div class="row">
         <img src="./images/icons8-student-100.png" alt="..."
            style="border-radius: 49%;padding: 2rem;background: aqua;">
            <!-- <span>ours Program</span> 
         <img src="./images/icons8-student-100.png" alt="..."
            style="border-radius: 49%;padding: 2rem;background: aqua;margin-left: 27%;">
         <img src="./images/icons8-student-100.png" alt="..."
            style="border-radius: 49%;padding: 2rem;background: aqua;float: right;">
      </div>

   </div>
   <div class="container" style="background-color: #bbb;">

   </div> -->
   <script src="./bootstrap.js"></script>
</body>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
   let i;
   let slides = document.getElementsByClassName("mySlides");
   let dots = document.getElementsByClassName("dot");
   for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
   }
   slideIndex++;
   if (slideIndex > slides.length) {
      slideIndex = 1
   }
   for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
   }
   slides[slideIndex - 1].style.display = "block";
   dots[slideIndex - 1].className += " active";
   setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<?php 
include 'footer.php';
include './include/bootstrapJS.php';
?>
 
</html>
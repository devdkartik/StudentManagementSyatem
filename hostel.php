<!DOCTYPE html>
<html lang='en'>

<head>
   <?php
    include_once 'top.php';
    include_once 'navbar.php';
    include './include/arrow.php'; 
?>
<style>

@media screen and (max-device-width: 920px) and (max-width: 920px) { 
   .img img{
      width: 100%!important;
   }
    }
@media screen and (max-device-width: 420px) and (max-width: 420px) { 
   .img img{
      width: 100%!important;
   }
    }
</style>
</head>

<body>
   <div class="container-xxl">
   <div class="card mb-3">
<div class="img" style="float:left">
<img src="./include/images/Hostel-views.jpg" class="card-img-top" alt="Hostel Image" style="height:27rem;width: 49%;margin-left:.5%;">
<img src="./include/images/second-hostel.jfif" class="card-img-top" alt="Hostel Image" style="height:27rem;width: 50%;">
</div>
  <div class="card-body">
    <h5 class="card-title">Hostel Fee Details</h5>
    <div class="row">
    <div class="col-md-6">
       <h2 class="text-center">Hostel/Room Details</h2>
       <ul>
       <li> We have 10 Building For Hostel. </li>
       <li> Six to Seven Flor each building. </li>
       <li> 2 and 3 bed room available. </li>
       <li> After 20:00 (Night) enter ban in hostel. </li>
       <li> One time breakfast and Two time food provide in hostel . </li>
       <li> 300 Unit electricity bill free after that you should pay . </li>
       </ul>
    </div>
    <div class="col-md-6">
       <h2 class="text-center">Fee Details</h2>
       <ul>
          <li>hostel fee pay only Yearly base.(1,00,000 LPA)</li>
          <li>hostel fee naver return only manage with your semester fee.</li>
          <li>Late fee vary on demand of room</li>
       </ul>
    </div>
    </div>
    <p class="card-text"><small class="text-muted">Last updated  1 month ago</small></p>
  </div>
</div>

   </div>
   <?php include './include/bootstrapJS.php'; ?>
   <?php include_once 'footer.php'; ?>
</body>

</html>
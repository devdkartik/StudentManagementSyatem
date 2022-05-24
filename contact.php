<?php
    require './include/connection.php';
$error="";
$ferror="";
if(isset($_POST['submit']))
{
$name=mysqli_escape_string($conn,$_POST['name']);
$mobile=mysqli_escape_string($conn,$_POST['mobile']);
$email=mysqli_escape_string($conn,$_POST['email']);
$message=mysqli_escape_string($conn,$_POST['message']);
$date=date('Y'."-".'m'."-".'d');
$quer=mysqli_query($conn,"INSERT INTO contact(date,name,mobile,email,message) VALUES('$date','$name','$mobile','$email','$message')");
if($quer){
   echo ("<script LANGUAGE='JavaScript'>
         window.alert('Wait for ours call , email .we will solve your Query in few Hrs');
      window.location.href='http://localhost/studentMangementSystem/OneDrive/contact.php';
         </script>");
   $error="Form Submit Successfully !";

}else{
   $ferror="Form Submit Failed !";
}

   }
?>
<!DOCTYPE html>
<html lang='en'>

<head>
   <?php

    include_once 'top.php';
    include_once 'navbar.php';
?>
</head>

<body>
   <form action="" method="post">
   <div class="container mt-5">
      <div style="color: green;"><?php echo $error; ?></div>
      <div style="color: red;"><?php echo $ferror; ?></div>
      <h2 class="text-center">Contact Us! Form</h2>
      <h4 class="text-center"></h4>
      <div class="row">
         <div class="col-md-12">
            <div class="form-floating mb-3">
               <input type="text" class="form-control" id="floatingInput" name="name" placeholder="name@example.com" required>
               <label for="floatingInput">Email Name *</label>
            </div>

         </div>
         <div class="col-md-12">
            <div class="form-floating mb-3">
               <input type="text" class="form-control" id="floatingPassword" name="mobile" placeholder="Password" required>
               <label for="floatingPassword">Enter Mobile No. *</label>
            </div>
         </div>
         <div class="col-md-12">
            <div class="form-floating mb-3">
               <input type="email" class="form-control" id="floatingPassword" name="email" placeholder="Password" required>
               <label for="floatingPassword">Enter Email Address *</label>
            </div>
         </div>
         <div class="col-md-12 mb-5">
            <div class="form-floating mb-3">
               <textarea class="form-control" placeholder="Leave a comment here" name="message" id="floatingTextarea2"
                  style="height: 100px" ></textarea>
               <label for="floatingTextarea2">Enter Queries/Message</label>
            </div>
         </div>
         <div class="form-floating mb-3">
            <button type="submit" class="btn btn-outline-success" name="submit">submit</button>
         </div>
      </div>
      <!--row colse -->
   </div>
   </form>
   <?php include_once 'footer.php'; ?>
   <script src='./bootstrap.js'></script>
</body>

</html>
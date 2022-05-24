<?php
    include_once './include/connection.php';
    include_once 'navbar.php';
?>
<!DOCTYPE html>
<html lang='en'>

<head>
   <?php  include_once 'top.php'; ?>
   <style>
   @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap');

   * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      /* font-family: 'Prompt', sans-serif; */
   }
   .mybutton{
      background: #016cb8;
      color: white;
   }
   .mybutton:hover{
      background: #fbfbfb;
    color: #52b5cc;
   }
   .myimage img{
      height: 6rem;
   }
   @media screen and (max-device-width:420px) and (max-width:420px) { 
      
   }
   @media screen and (max-device-width:920px) and (max-width:920px) { 

   }
   @media screen and (max-device-width:420px) and (max-width:420px) { 
    .maniContainer{
      height: 51rem!important;
    }
   }
   </style>
</head>

<body>
   <div class="container-xxl maniContainer" style="font-family: 'Prompt', sans-serif;">
      <div class="container mt-5 " style="height: 20rem;">
         <div class="row">
            <div class="col-md-3 center">
               <div class="text-center myimage"><img src="./include/images/icon/icons8-admin-100.png" alt=""> </div>
               <!--height:3rem;border-radius: 50%; -->
               <div class="text-center mt-3">Administrator Login <br>  Login and manage ours junior Details<br>
                <a href="./admin/index.php"><button class="btn mybutton" type="button">Administrator Login</button></a>
               </div>
            </div>
            <div class="col-md-3">
            <div class="text-center myimage"><img src="./include/images/icon/icons8-teacher-100.png" alt=""
                     > </div>
               <!--height:3rem;border-radius: 50%; -->
               <div class="text-center mt-3">Teacher Login !<br>Teacher manage student Details<br>
                <a href="./teacher/index.php"><button class="btn mybutton" type="button">Teacher Login</button></a>
               </div>
            </div>
            <div class="col-md-3">
            <div class="text-center myimage"><img src="./include/images/icon//icons8-manager-100.png" alt=""
                     > </div>
               <!--height:3rem;border-radius: 50%; -->
               <div class="text-center mt-3">Manager Login !<br>Manage teacher and student details<br>
                <a href="./manager/index.php"><button class="btn mybutton" type="button">Manager Login</button></a>
               </div>
            </div>
            <div class="col-md-3">
            <div class="text-center myimage"><img src="./include/images/icon/icons8-student-100.png" alt=""
                     > </div>
               <!--height:3rem;border-radius: 50%; -->
               <div class="text-center mt-3">Student Login !<br>Student manage and see there details<br>
                <a href="./student/index.php"><button class="btn mybutton" type="button">Student Login</button></a>
               </div>
            </div>
         </div>
      </div>
   </div>

<?php include_once 'footer.php'; ?>
<?php include './include/bootstrapJS.php'; ?>
</body>

</html>
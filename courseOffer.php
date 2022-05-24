<?php
if(isset($_POST['back'])){
   echo ("<script LANGUAGE='JavaScript'>
         window.location.href='http://localhost/studentMangementSystem/OneDrive/index.php';
         </script>");
}
include './include/arrow.php'; 
?>
<!DOCTYPE html>
<html lang='en'>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="icon" type="image/x-icon" href="./images/logo/1650185736.ico">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="icon" type="image/x-icon" href="./images/logo/1650185736.ico">
   <?php
    require './include/connection.php';
    include_once 'navbar.php';
?>
   <style>
   button{
      float: right;
      cursor: pointer;
   }
   </style>
</head>

<body>
   <form action="" method="post">
      <div class="container-xxl">
         <h2>Course Details for see details click perticular course</h2>
         <button title="go to home" type="submit" style="font-size: 24px;background: transparent;border: none;"<i style="font-size:24px" class="fa" name="back">&#xf0a8;</i></button>
         <!-- <button type="button" class="btn-close" aria-label="Close"></button> -->
         <div class="row">
            <div class="col-md-6">
               <h3>Bachelor</h3>
               <p data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"
                  style="cursor: pointer;">
                  01.Bachelor of Arts (B.A)</p>
               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Arts (B.A)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  02.Bachelor of Arts Bachelor of Education (B.A. B.Ed)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Arts Bachelor of Education (B.A. B.Ed)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  03 Bachelor of Arts Bachelor of Education (B.A. B.Ed)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Arts Bachelor of Education (B.A. B.Ed)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  04 Bachelor of Arts Bachelor of Law (B.A.B.L)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">04 Bachelor of Arts Bachelor of Law (B.A.B.L)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  05 Bachelor of Arts Bachelor of Law (B.A.LLB)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Arts Bachelor of Law (B.A.LLB)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  06 Bachelor of Ayurvedic Medicine and Surgery (B.A.M.S)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Ayurvedic Medicine and Surgery (B.A.M.S)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  07 Bachelor of Applied Sciences (B.A.S)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Applied Sciences (B.A.S)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  08 Bachelor of Arts (B.A.S.L.P)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Arts (B.A.S.L.P)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  09 Bachelor of Audiology and Speech Language Pathology (B.A.S.L.P)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Audiology and Speech Language Pathology (B.A.S.L.P)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  10 Bachelor of Architecture (B.Arch)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Architecture (B.Arch)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  11 Bachelor of Business Administration (B.B.A)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Business Administration (B.B.A)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  12 Bachelor of Business Administration Bachelor of Law (B.B.A LL.B)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Business Administration Bachelor of Law (B.B.A LL.B)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  13 Bachelor of Business Management (B.B.M)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Business Management (B.B.M)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  14 Bachelor of Business Studies (B.B.S)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Business Studies (B.B.S)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  15 Bachelor of Computer Applications (B.C.A)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Computer Applications (B.C.A)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  16 Bachelor of Communication Journalism (B.C.J)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Communication Journalism (B.C.J)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  17 Bachelor of Computer Science (B.C.S)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Computer Science (B.C.S)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  18 Bachelor of Commerce (B.Com)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Commerce (B.Com)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  19 Bachelor of Divinity (B.D)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Divinity (B.D)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  20 Bachelor of Dental Surgery (B.D.S)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Dental Surgery (B.D.S)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  21 Basic Development Therapy (B.D.T)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Basic Development Therapy (B.D.T)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  22 Bachelor of Design (B.Des)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Design (B.Des)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  23 Bachelor of Engineering (B.E)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Communication Journalism (B.C.J)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  24 Bachelor of Electronic Science (B.E.S)</p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Bachelor of Electronic Science (B.E.S)</h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <h3>Master </h3>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  01
                  Master of Law (LL.M) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Master of Law (LL.M) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  02
                  Master of Arts (M.A) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Master of Arts (M.A) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  03Master of Arts in Management (M.A.M) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Master of Arts in Management (M.A.M) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  04
                  Master of Architecture (M.Arch) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Master of Architecture (M.Arch) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  05
                  Master of Business Administration (M.B.A) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Master of Business Administration (M.B.A) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  06
                  Master of Business Management (M.B.M) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Master of Business Management (M.B.M) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  07
                  Master of Computer Applications (M.C.A) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Master of Computer Applications (M.C.A) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  08
                  Master of Comparative Laws (M.C.L) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Master of Comparative Laws (M.C.L) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  09Master of Computer Management (M.C.M) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Master of Computer Management (M.C.M) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  10
                  Master of Chirurgical (M.Ch) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Master of Chirurgical (M.Ch) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  11
                  Master of Commerce (M.Com) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Master of Commerce (M.Com) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  12
                  Doctor of Medicine (M.D) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Doctor of Medicine (M.D) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  13
                  Masters in Design (M.Des) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel"> Masters in Design (M.Des) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  14
                  Master of Engineering (M.E) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Master of Engineering (M.E) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  15
                  Master of Education (M.Ed) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Master of Education (M.Ed) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  16
                  Master of Fine Arts (M.F.A) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Master of Fine Arts (M.F.A) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  17
                  Master of Finance And Control (M.F.C) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Master of Finance And Control (M.F.C) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  18
                  Master of Film Management (M.F.M) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Master of Film Management (M.F.M) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  19
                  Master of Financial Services (M.F.S) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Master of Financial Services (M.F.S) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  20
                  Master of Fishery Sciences (M.F.Sc) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel"> Master of Fishery Sciences (M.F.Sc) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  21
                  Master of Foreign Trade (M.F.T) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel"> Master of Foreign Trade (M.F.T) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  22
                  Master of Hospital Administration (M.H.A) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel"> Master of Hospital Administration (M.H.A) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  23
                  Master of Hospitality Management (M.H.M) </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel"> Master of Hospitality Management (M.H.M) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
               <p type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                  24
                  Master of Business Administration (MBA)
               </p>

               <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                  <div class="offcanvas-header">
                     <h5 id="offcanvasTopLabel">Master of Business Administration (MBA) </h5>
                     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                     Bachelor of Arts focuses on subjects such as Humanities, Social Studies and Liberal Arts. There are
                     a
                     variety of specializations like History, English, Philosophy, Economics, Political Science,
                     Geography,
                     Sociology, etc to pursue in Bachelor of Arts. The average duration of a Bachelor of Arts ranges
                     from 3
                     years for both regular and distance courses. Post completing BA degree, students can choose to
                     study
                     further such as MA and PhD in the same or relevant discipline.
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>
   <?php
   
   include_once 'footer.php'; 
   include_once './include/bootstrapJS.php'; 
   
   ?>
</body>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

</html>
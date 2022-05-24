<?php
 error_reporting(0); 

    require  './include/connection.php';;
    include 'navbar.php';
    $msg="";
    $masg="";
    $error="";
   if(isset($_POST['admit']))
   {
         $status=1;
         $first_name=mysqli_escape_string($conn,$_POST['first_name']);
         $last_name=mysqli_escape_string($conn,$_POST['last_name']);
         $student_gender=mysqli_escape_string($conn,$_POST['student_gender']);
         $student_dob=mysqli_escape_string($conn,$_POST['student_dob']);
         $blood_group=mysqli_escape_string($conn,$_POST['blood_group']);
         $caste=mysqli_escape_string($conn,$_POST['caste']);
         $religion=mysqli_escape_string($conn,$_POST['religion']);
         // student Pic blow
         $filenamestudentImage =$_FILES["studentImage"]["name"];
         $tempname = $_FILES["studentImage"]["tmp_name"];
         $folder = "student_image/".$filenamestudentImage;
         // student Pic up
            $student_mobile   =mysqli_escape_string($conn,$_POST['student_mobile']);
            $student_email    =mysqli_escape_string($conn,$_POST['student_email']);
            $student_proof    =mysqli_escape_string($conn,$_POST['student_proof']);
            $student_proof_no      =mysqli_escape_string($conn,$_POST['student_proof_no']);
        // student id pic blow
            $stuidpic = $_FILES["stuidpic"]["name"];
            $tempstuidpic = $_FILES["stuidpic"]["tmp_name"];	
            $folderstuidpic = "student_image/".$stuidpic;
      //   student id pic up
      // parents variable blow
         $father_name=mysqli_escape_string($conn,$_POST['father_name']);
         $mother_name=mysqli_escape_string($conn,$_POST['mother_name']);
         $parent_mobile=mysqli_escape_string($conn,$_POST['parent_mobile']);
         $parent_email=mysqli_escape_string($conn,$_POST['parent_email']);
         $parent_proof=mysqli_escape_string($conn,$_POST['parent_proof']);
         $parent_proof_no=mysqli_escape_string($conn,$_POST['parent_proof_no']);
      // student parents id pic blow
         $paridpic = $_FILES["paridpic"]["name"];
         $tempparidpic = $_FILES["paridpic"]["tmp_name"];	
         $folderparidpic = "student_image/".$paridpic;
      // student parents id pic up
      // Education variable up
         $stream=$_POST['stream'];
         $course=$_POST['course'];
         $hostel_located=$_POST['hostel_located'];

         $ten_board      =mysqli_escape_string($conn,$_POST['ten_board']);
         $ten_marks           =mysqli_escape_string($conn,$_POST['ten_marks']);
      // student 10th Marksheet pic blow
         $tenMarksheet = $_FILES["tenMarksheet"]["name"];
         $temptenMarksheet = $_FILES["tenMarksheet"]["tmp_name"];	
         $foldertenMarksheet = "student_image/".$tenMarksheet;
      // student 10th Marksheet pic up

         $twelve_board      =mysqli_escape_string($conn,$_POST['twelve_board']);
         $twelve_marks      =mysqli_escape_string($conn,$_POST['twelve_marks']);
      // student 12th Marksheet pic blow
         $twelveMarksheet = $_FILES["twelveMarksheet"]["name"];
         $temptwelveMarksheet = $_FILES["twelveMarksheet"]["tmp_name"];	
         $foldertwelveMarksheet = "student_image/".$twelveMarksheet;
      // student 12th Marksheet pic up
         $student_village=$_POST['student_village'];
         $student_city=$_POST['student_city'];
         $student_state=$_POST['student_state'];
         $student_pincode=$_POST['student_pincode'];

      //Default variable
      
      $admission_date=date('Y'.'-'.'m'.'-'.'d');
         $start_uid =rand(1000,4000);
         $uid=date('y')."SMS".$start_uid;
         $account_no =rand(100,1000000);
         $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@#$%^&*()0123456789";
        $shfl = str_shuffle($comb);
        $pwd = substr($shfl,0,8);
            // 
         $query =mysqli_query($conn,"INSERT INTO students (s_status,first_name,last_name,student_gender,student_image,student_dob,blood_group,caste,religion,student_mobile,student_email,student_proof,student_proof_no,student_proof_pic,father_name,mother_name,parent_mobile,parent_email,parent_proof,parent_proof_no,parent_proof_pic,stream,course,hostel_located,student_village,student_city,student_state,student_pincode,admission_date,uid,account_no,password) VALUES('$status','$first_name','$last_name','$student_gender','$filenamestudentImage','$student_dob','$blood_group','$caste','$religion','$student_mobile','$student_email','$student_proof','$student_proof_no','$stuidpic','$father_name','$mother_name','$parent_mobile','$parent_email','$parent_proof','$parent_proof_no','$paridpic','$stream','$course','$hostel_located','$student_village','$student_city','$student_state','$student_pincode','$admission_date','$uid','$account_no','$pwd')");
         move_uploaded_file($tempname, $folder);
         move_uploaded_file($tempstuidpic, $folderstuidpic);
         move_uploaded_file($tempparidpic, $folderparidpic);
         move_uploaded_file($temptenMarksheet, $foldertenMarksheet);
         move_uploaded_file($temptwelveMarksheet, $foldertwelveMarksheet);

            if($query){
               echo ("<script LANGUAGE='JavaScript'>
         window.alert('we Will send sms for pay fee');
         // window.location.href='index.php';
         </script>");
               $smsg="Registration Success!";
               // header('location:index.php');
            }else{
               $msg="My be server error try Again or Contect Help center 998877665544";
            }

   }

   // $to = $student_email;
   // $subject = "This is subject";
   
   // $message = "<b>Your uid/ account No. and password here. account No:".$account_no."Password".$password." go to ours website</b>";
   // $message .= "<h1>Your uid/ account no and password</h1>";
   
   // $header = "From:nubhuniversity@gmail.com \r\n";
   // $header .= "Cc:nubhuniversity@gmail.com \r\n";
   // $header .= "MIME-Version: 1.0\r\n";
   // $header .= "Content-type: text/html\r\n";
   
   // $retval = mail ($to,$subject,$message,$header);
   
   // if( $retval == true ) {
   //   $mmsg="we will send you mail our id and password wait for mail to access account";;
   // }else {
   //    echo "Message could not be sent...";
   // }   
?>
<!DOCTYPE html><br>
<html lang="en">

<head>
   <?php include 'top.php'; ?>
   <title>Student Admission | officer side only</title>
   <style>
   * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
   }

   a {
      text-decoration: none;
      color: darkblue;
   }

   .container-xl {
      background-image: url(../images/collegeImageBlur.gif);
      background-repeat: no-repeat;
      background-size: cover;
   }
   </style>
</head>

<body>
   <div class="container-xl shadow-sm p-3 mb-5 bg-body rounded">
      <div style="color:red"><?php echo $msg;?></div>
      <div style="color:green"><?php echo $smsg;?></div>
      <div class="d-flex bd-highlight">
         <div class="text-center" style="width: 100%;">
            <h3 class="text-center">admission Form</h3><br>
            <h4>please fill correct information</h4>
         </div>
      </div>
      <div class="container-xl">
         <form method="post" method="POST" name="registerform" enctype="multipart/form-data" class="row g-3"
            onsubmit="return validateform()">
            <div class="col-md-3">

               <label for="exampleFormControlInput1" class="form-label"> <strong>First Name</strong></label>
               <input class="form-control" type="text" name="first_name" id="first_name">
            </div>
            <div class="col-md-3">
               <label for="exampleFormControlInput1" class="form-label"><strong>Lart Name</strong></label>
               <input class="form-control" type="text" name="last_name" id="last_name">
            </div>
            <div class="col-md-3">
               <label for="exampleFormControlInput1" class="form-label"><strong>Gender</strong></label>
               <select id="student_gender" name="student_gender" class="form-select">
                  <option value="">choose Gender</option>
                  <option value="male">male</option>
                  <option value="female">female</option>
                  <option value="other">other</option>
                  </optgroup>
               </select>
            </div>
            <div class="col-md-3">
               <label for="exampleFormControlInput1" class="form-label"><strong>upload your image</strong></label>
               <input class="form-control" type="file" name="studentImage" id="studentImage">

            </div>
            <div class="col-md-3">
               <label for="exampleFormControlInput1" class="form-label"><strong>DOB</strong></label>
               <input class="form-control" type="date" name="student_dob" id="student_dob">
            </div>
            <div class="col-md-3">

               <label for="exampleFormControlInput1" class="form-label"> <strong>Blood Group</strong></label>
               <input class="form-control" type="text" name="blood_group" id="blood_group">
            </div>
            <div class="col-md-3">
               <label for="exampleFormControlInput1" class="form-label"><strong>Caste</strong></label>
               <input class="form-control" type="text" name="caste" id="religion">
            </div>
            <div class="col-md-3">
               <label for="exampleFormControlInput1" class="form-label"><strong>Religion</strong></label>
               <input class="form-control" type="text" name="religion" id="religion">
            </div>
            <div class="col-md-6">
               <label for="exampleFormControlInput1" class="form-label"><strong>Your Mobile No.</strong></label>
               <input class="form-control" type="text" name="student_mobile" id="student_mobile">
            </div>
            <div class="col-md-6">
               <label for="exampleFormControlInput1" class="form-label"><strong>Your Email</strong></label>
               <input class="form-control" type="email" name="student_email" id="student_email">
            </div>
            <div class="col-md-4">
               <label for="exampleFormControlInput1" class="form-label"><strong>Your Proof id/card</strong></label>
               <select id="student_proof" name="student_proof" class="form-select">
                  <option value="">Choose Proof id</option>
                  <option value="aadhar card">aadhar card</option>
                  <option value="PAN card">PAN card</option>
                  <option value="Driver lience">Driver lience</option>
                  <option value="voter id card">voter id card</option>
                  </optgroup>
               </select>
            </div>
            <div class="col-md-4">
               <label for="exampleFormControlInput1" class="form-label"><strong>Your id Number</strong></label>
               <input class="form-control" type="text" name="student_proof_no" id="student_proof_no">
            </div>
            <div class="col-md-4">
               <label for="exampleFormControlInput1" class="form-label"><strong>upload Your id pic</strong></label>
               <input class="form-control" type="file" name="stuidpic" id="stuidpic">
            </div>
            <div class="col-md-3">
               <label for="exampleFormControlInput1" class="form-label"><strong>Father Name</strong></label>
               <input class="form-control" type="text" name="father_name" id="father_name">
            </div>
            <div class="col-md-3">
               <label for="exampleFormControlInput1" class="form-label"><strong>Mother Name</strong></label>
               <input class="form-control" type="text" name="mother_name" id="mother_name">
            </div>
            <div class="col-md-3">
               <label for="exampleFormControlInput1" class="form-label"><strong>Parent Mobile No.</strong></label>
               <input class="form-control" type="text" name="parent_mobile" id="parent_mobile">
            </div>
            <div class="col-md-3">
               <label for="exampleFormControlInput1" class="form-label"><strong>Parent Email</strong></label>
               <input class="form-control" type="email" name="parent_email" id="parent_email">
            </div>
            <div class="col-md-4">
               <label for="exampleFormControlInput1" class="form-label"><strong>Parent Proof id/card</strong></label>
               <select id="parent_proof" name="parent_proof" class="form-select">
                  <option value="">Choose Proof id</option>
                  <option value="aadhar card">aadhar card</option>
                  <option value="PAN card">PAN card</option>
                  <option value="Driver lience">Driver lience</option>
                  <option value="voter id card">voter id card</option>
                  </optgroup>
               </select>
            </div>
            <div class="col-md-4">
               <label for="exampleFormControlInput1" class="form-label"><strong>Parent id Number</strong></label>
               <input class="form-control" type="text" name="parent_proof_no" id="parent_proof_no">
            </div>
            <div class="col-md-4">
               <label for="exampleFormControlInput1" class="form-label"><strong>upload parent id pic</strong></label>
               <input class="form-control" type="file" name="paridpic" id="paridpic">
            </div>
            <div class="col-md-4">
               <label for="exampleFormControlInput1" class="form-label"><strong>qualification</strong></label>
               <select id="stream" name="stream" class="form-select">
                  <option value="">Choose qulification</option>
                  <option value="12th non medical">12th non medical</option>
                  <option value="12th medical">12th medical</option>
                  <option value="12th commerce">12th commerce</option>
                  <option value="bachelor complete">bachelor complete</option>
               </select>
            </div>
            <div class="col-md-4">
               <label for="exampleFormControlInput1" class="form-label"><strong>Choose Admission Course</strong></label>
               <select id="course" name="course" class="form-select">
                  <option value="Bachelor of Arts">Choose Deparment </option>
                  <optgroup label="Bachelor" class="optionGroup">
                     <option value="Bachelor of Arts (B.A)"> Bachelor of Arts (B.A) </option>
                     <option value="Bachelor of Arts Bachelor of Education (B.A. B.Ed)"> Bachelor of Arts Bachelor of
                        Education (B.A. B.Ed) </option>
                     <option value="Bachelor of Arts Bachelor of Law (B.A.B.L)"> Bachelor of Arts Bachelor of Law
                        (B.A.B.L) </option>
                     <option value="Bachelor of Arts Bachelor of Law (B.A.LLB)"> Bachelor of Arts Bachelor of Law
                        (B.A.LLB) </option>
                     <option value="Bachelor of Ayurvedic Medicine and Surgery (B.A.M.S)"> Bachelor of Ayurvedic
                        Medicine and Surgery (B.A.M.S) </option>
                     <option value="Bachelor of Applied Sciences (B.A.S)"> Bachelor of Applied Sciences (B.A.S)
                     </option>
                     <option value="Bachelor of Arts (B.A.S.L.P)"> Bachelor of Arts (B.A.S.L.P) </option>
                     <option value="Bachelor of Audiology and Speech Language Pathology (B.A.S.L.P)"> Bachelor of
                        Audiology and Speech Language Pathology (B.A.S.L.P) </option>
                     <option value="Bachelor of Architecture (B.Arch)"> Bachelor of Architecture (B.Arch) </option>
                     <option value="Bachelor of Business Administration (B.B.A)"> Bachelor of Business Administration
                        (B.B.A) </option>
                     <option value="Bachelor of Business Administration Bachelor of Law (B.B.A LL.B)"> Bachelor of
                        Business Administration Bachelor of Law (B.B.A LL.B) </option>
                     <option value="Bachelor of Business Management (B.B.M)"> Bachelor of Business Management (B.B.M)
                     </option>
                     <option value="Bachelor of Business Studies (B.B.S)"> Bachelor of Business Studies (B.B.S)
                     </option>
                     <option value="Bachelor of Computer Applications (B.C.A)"> Bachelor of Computer Applications
                        (B.C.A) </option>
                     <option value="Bachelor of Communication Journalism (B.C.J)"> Bachelor of Communication Journalism
                        (B.C.J) </option>
                     <option value="Bachelor of Computer Science (B.C.S)"> Bachelor of Computer Science (B.C.S)
                     </option>
                     <option value="Bachelor of Commerce (B.Com)"> Bachelor of Commerce (B.Com) </option>
                     <option value="Bachelor of Divinity (B.D)"> Bachelor of Divinity (B.D) </option>
                     <option value="Bachelor of Dental Surgery (B.D.S)"> Bachelor of Dental Surgery (B.D.S) </option>
                     <option value="Basic Development Therapy (B.D.T)"> Basic Development Therapy (B.D.T) </option>
                     <option value="Bachelor of Design (B.Des)"> Bachelor of Design (B.Des) </option>
                     <option value="Bachelor of Engineering (B.E)"> Bachelor of Engineering (B.E) </option>
                     <option value="Bachelor of Electronic Science (B.E.S)"> Bachelor of Electronic Science (B.E.S)
                     </option>
                  </optgroup>
                  <optgroup label="Masterr" class="optionGroup">
                     <option value="Master of Law (LL.M)"> Master of Law (LL.M) </option>
                     <option value="Master of Arts (M.A)"> Master of Arts (M.A) </option>
                     <option value="Master of Arts in Management (M.A.M)"> Master of Arts in Management (M.A.M)
                     </option>
                     <option value="Master of Architecture (M.Arch)"> Master of Architecture (M.Arch) </option>
                     <option value="Master of Business Administration (M.B.A)"> Master of Business Administration
                        (M.B.A) </option>
                     <option value="Master of Business Laws (M.B.L)"> Master of Business Laws (M.B.L) </option>
                     <option value="Master of Business Management (M.B.M)"> Master of Business Management (M.B.M)
                     </option>
                     <option value="Master of Computer Applications (M.C.A)"> Master of Computer Applications (M.C.A)
                     </option>
                     <option value="Master of Comparative Laws (M.C.L)"> Master of Comparative Laws (M.C.L) </option>
                     <option value="Master of Computer Management (M.C.M)"> Master of Computer Management (M.C.M)
                     </option>
                     <option value="Master of Chirurgical (M.Ch)"> Master of Chirurgical (M.Ch) </option>
                     <option value="Master of Commerce (M.Com)"> Master of Commerce (M.Com) </option>
                     <option value="Doctor of Medicine (M.D)"> Doctor of Medicine (M.D) </option>
                     <option value="Masters in Design (M.Des)"> Masters in Design (M.Des) </option>
                     <option value="Master of Engineering (M.E)"> Master of Engineering (M.E) </option>
                     <option value="Master of Education (M.Ed)"> Master of Education (M.Ed) </option>
                     <option value="Master of Fine Arts (M.F.A)"> Master of Fine Arts (M.F.A) </option>
                     <option value="Master of Finance And Control (M.F.C)"> Master of Finance And Control (M.F.C)
                     </option>
                     <option value="Master of Film Management (M.F.M)"> Master of Film Management (M.F.M) </option>
                     <option value="Master of Financial Services (M.F.S)"> Master of Financial Services (M.F.S)
                     </option>
                     <option value="Master of Fishery Sciences (M.F.Sc)"> Master of Fishery Sciences (M.F.Sc) </option>
                     <option value="Master of Foreign Trade (M.F.T)"> Master of Foreign Trade (M.F.T) </option>
                     <option value="Master of Hospital Administration (M.H.A)"> Master of Hospital Administration
                        (M.H.A) </option>
                     <option value="Master of Hospitality Management (M.H.M)"> Master of Hospitality Management (M.H.M)
                     </option>
                     <option value="Master of Technology (M.Tech)"> Master of Technology (M.Tech) </option>
                     <option value="Master of Theology (M.Th)"> Master of Theology (M.Th) </option>
                     <option value="Master of Business Administration (MBA)"> Master of Business Administration (MBA)
                     </option>
                     <option value="Master of Personnel Management (MPM)"> Master of Personnel Management (MPM)
                     </option>
                  </optgroup>
               </select>
            </div>
            <div class="col-md-4">
               <label for="exampleFormControlInput1" class="form-label"><strong>Choose yes if you want to university hostel</strong></label>
               <select id="hostel_located" name="hostel_located" class="form-select">
                  <option value="">Choose qulification</option>
                  <option value="yes">yes</option>
                  <option value="no">no</option>

               </select>
            </div>
            <div class="col-md-4">
               <label for="exampleFormControlInput1" class="form-label"><strong>10th Board Name</strong></label>
               <input class="form-control" type="text" name="ten_board" id="ten_board">
            </div>
            <div class="col-md-4">
               <label for="exampleFormControlInput1" class="form-label"><strong>10th Marks / CGPA</strong></label>
               <input class="form-control" type="text" name="ten_marks" id="ten_marks">
            </div>
            <div class="col-md-4">
               <label for="exampleFormControlInput1" class="form-label"><strong>Upload 10th marksheet</strong></label>
               <input class="form-control" type="file" name="tenMarksheet" id="tenMarksheet">
            </div>
            <div class="col-md-4">
               <label for="exampleFormControlInput1" class="form-label"><strong>12th Board Name</strong></label>
               <input class="form-control" type="text" name="twelve_board" id="twelve_board">
            </div>
            <div class="col-md-4">
               <label for="exampleFormControlInput1" class="form-label"><strong>12th Marks / CGPA </strong></label>
               <input class="form-control" type="text" name="twelve_marks" id="twelve_marks">
            </div>
            <div class="col-md-4">
               <label for="exampleFormControlInput1" class="form-label"><strong>Upload 12th marksheet</strong></label>
               <input class="form-control" type="file" name="twelveMarksheet" id="twelveMarksheet">
            </div>

            <div class="col-md-4">
               <label for="exampleFormControlInput1" class="form-label"><strong>address 1</strong></label>
               <input class="form-control" type="text" name="student_village" id="student_village"
                  placeholder="house no. , street">
            </div>
            <div class="col-md-3">
               <label for="exampleFormControlInput1" class="form-label"><strong>District/City</strong></label>
               <input class="form-control" type="text" name="student_city" id="student_city" placeholder="district">
            </div>
            <div class="col-md-3">
               <label for="exampleFormControlInput1" class="form-label"><strong>State</strong></label>
               <input class="form-control" type="text" name="student_state" id="student_state" placeholder="state">
            </div>
            <div class="col-md-2">
               <label for="exampleFormControlInput1" class="form-label"><strong>PIN Code</strong></label>
               <input class="form-control" type="number" name="student_pincode" id="student_pincode"
                  placeholder="123456" minlength="6">
            </div>
            <div class="form-check">
               <input class="form-check-input" type="checkbox" name="accept" value="" id="flexCheckIndeterminate">
               <label class="form-check-label" for="flexCheckIndeterminate">
                  by click checkbox you accept <a href=""> ours term </a>&<a href=""> consition </a>
               </label>
            </div>
            <button title="redirect Payment Page for pay admission fee" type="submit" name="admit"
               class="btn btn-dark sm" style="width: 23%;;margin-left: 40%;">SUBMIT</button>
      </div>
   </div>
   </form>
   <?php include_once './footer.php';?>

   <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
</body>

</html>
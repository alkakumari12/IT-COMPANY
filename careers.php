<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Company Website</title>
    <link rel="stylesheet" href="./css/careers.css">
    <style>
      #career-heading{
        margin-top: -40px;
      }
      @media only screen and (max-width: 768px) {
        #career-heading{
        margin-top: -40px;
      }
      #career-card1{
        padding-top: 20px;
      }
      #career-card2{
          padding-top: 20px;
      }
      #career-card3{
          padding-top: 20px;
      }
      }
    </style>
    
</head>
<body>

<div class="loader">
    <div></div>
</div>
    
    <?php include 'header.php' ?>

    <section id="home1" class="home1"></section>

    <section id="career-heading" class="career-heading">
        <h1 class="heading">Career</h1>
        <p>Job Opening in Our Company for this post. Apply Now!</p>
    </section>

<div class="care-cont" style="margin-left: 60px; margin-right:40px;">
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col" id="career-card1">
    <div class="card h-100">
      <img src="./images/webdev.avif" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" style="font-size: 20px;">Web Developement:-</h5>
        <h2 class="card-title" style="font-size: 20px; font-family: outfit;">Skills Requirement For This Post</h2>
        <h4 style="font-family: outfit;">-Good knowledge of Css</h4>
        <h4 style="font-family: outfit;">-Good knowledge of Html</h4>
        <h4 style="font-family: outfit;">-Good knowledge of Javascript</h4>
        <h4 style="font-family: outfit;">- also Familier with Js Libraries and Frameworks.....<h4>

      </div>
      
    </div>
  </div>
  <div class="col" id="career-card2">
    <div class="card h-100">
      <img src="./images/softdev.avif" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" style="font-size: 20px;">Software Developement:-</h5>
        <h2 class="card-title" style="font-size: 20px; font-family: outfit;">Skills Requirement For This Post</h2>
        <h4 style="font-family: outfit;">-Good knowledge of php</h4>
        <h4 style="font-family: outfit;">-Good knowledge of c</h4>
        <h4 style="font-family: outfit;">-Good knowledge of Java</h4>
        <h4 style="font-family: outfit;">- also Familier with Js Libraries and Frameworks.....<h4>
      </div>
      
    </div>
  </div>
  <div class="col" id="career-card3">
    <div class="card h-100">
      <img src="./images/dsm.avif" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" style="font-size: 20px;">Digital Marketing:-</h5>
        <h2 class="card-title" style="font-size: 20px; font-family: outfit; ">Skills Requirement For This Post</h2>
        <h4 style="font-family: outfit;">-Good knowledge of SEO</h4>
        <h4 style="font-family: outfit;">-Good knowledge of Content Marketing</h4>
        <h4  style="font-family: outfit;">-Good knowledge of Data Analytics</h4>
        <h4 style="font-family: outfit;">-also Familier with Product/UX Design and Social Media Marketing.....<h4>
      </div>
      
    </div>
  </div>
</div>
</div>

    <h1 class="h4-xs text-center mb-20" style="margin-top: 40px;">Come, be a part of the amazing family @ work!</h1>
    <h2 class="h6-md text-center" style="font-size:15px;">"We're working to find new and better ways to help businesses succeed,and we're looking for people like you to help<br> shape tomorrow at PSS"</h2>

    <div class="career">
        <div class="career-form">
            <form action="./careers.php" method="POST" enctype="multipart/form-data" id="frmcareer">
                <input type="text"  id="fname" name="name" placeholder="Name" class="career-form-txt" required>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required placeholder="Contact number" maxlength="10" class="career-form-phone">
                <input type="email" id="email" name="email" placeholder="Email" class="career-form-email" required>
                <div class="radio-class" id="position" name="apply">
                    <h2 class="name">Apply For Which Post?</h2>
                
                <label class="radio">
                  <input class="radio-two" type="radio" name="status" value="Web Developer">
                  <span class="checkmark"></span>
                  Web Developer
                </label>
                <label class="radio">
                  <input class="radio-three" type="radio" name="status" value="Mobile App Designer">
                  <span class="checkmark"></span>
                  Software Developer
                </label>
                <label class="radio">
                    <input class="radio-four" type="radio" name="status" value="Mobile App Developer">
                    <span class="checkmark"></span>
                    Graphics Designer
                  </label>
                <label class="radio">
                  <input class="radio-five" type="radio"  name="status" value="Digital Marketer">
                  <span class="checkmark"></span>
                  Digital Marketing
                </label>
                </div>
                <input type="number" id="experience" name="experience" required placeholder="Years of Experience" class="career-form-experience">
                <textarea placeholder="Other Details" id="other" name="details" class="career-form-txtarea" required></textarea>
                <div class="file">
                    <h2 class="name">Upload Your Resume</h2>
                    <input class="upload"  id="uploadFile" type="file" name="fileToUpload" accept=".doc,.docx,.pdf"><br><br><br>
                </div>
                <input type="submit" value="Submit" name="submit" class="career-form-btn" id="frm-submit">
                <span style="color:green;" id="msg"></span></center>
            </form>
        </div>
    </div>


    <?php include 'footer.php' ?>

    <script>
       $(window).on('load',function(){
        $(".loader").fadeOut(1000);
        $(".content").fadeIn(1000);
       });
        </script>

</body>
</html>
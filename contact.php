<?php include 'config.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/style.css">
	<title>Contact</title>
</head>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        padding: 0;
    }

    * {
        box-sizing: border-box;
    }

    .home2 {
        height:430px;
        width: 100%;
        background-image: url(./images/connect.jpg);
        background-size: cover;
    }

    .top-section p {
        padding-top: 30px;
        font-family: 'Muli', sans-serif;
        font-size: 25px;
        text-align: center;
    }

    .top-section h2 {
        color: #1d165c;
        font-size: 36px;
        text-align: center;
    }

    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
        font-size: 16px;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 10px;
        font-size: 16px;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .main-cont {
        display: flex;
        flex-wrap: wrap; 
    }

    .main-cont .rt-image {
        background-image: url('./images/b2.png');
        height: 771px;
        width: 50%;
        padding: 50px;
        background-size: cover;
    }

    .container-con {
        background-color: #f2f2f2;
        height: 680px;
        width: 45%;
        border-radius: 5px;
        padding: 20px;
        margin: 80px auto 30px;
    }

    #frmContactus {
        font-size: 20px;
        font-family: outfit;
    }


    .loader {
        height: 100vh;
        width: 100vw;
        overflow: hidden;
        background-color: #16191e;
        position: absolute;
    }
    .loader>div {
        height: 100px;
        width: 100px;
        border: 15px solid #45474b;
        border-top-color: #2a88e6;
        position: absolute;
        margin: auto;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        border-radius: 50%;
        animation: spin 1.5s infinite linear;
    }

    @keyframes spin {
        100% {
            transform: rotate(360deg);
        }
    }


    @media screen and (max-width: 830px) {
        .main-cont .rt-image {
            height: 401px;
            width: 345px;
        }

        .container-con {
            padding: 10px; 
            width: 352px;
            height: 654px;
        }
        .home2 {
        min-height: 39vh;
        width: 100vw;
        background-image: url(./images/connect.jpg);
        background-size: cover;
    }
    
}
</style>
<body>
    <div class="loader">
        <div></div>
    </div>
	
	<?php include 'header.php' ?>
  
  <section id="home2" class="home2"></section>

<div class="top-section">
  <p>Contact Information</p>
    <h2>We’d love to hear from you anytime</h2>
</div>
		
<div class="main-cont">
	<div class="rt-image"></div>

    
    <div class="container-con">
  	<form method="POST" id="frmContactus">

    <label for="fname">Full Name</label>
    <input type="text" id="fname" name="fullname" placeholder="Your full name.." onkeydown="return/^[a-zA-Z\s]+$/.test(event.key)" required>
    

    <label for="lname">Phone</label>
    <input type="text" id="phone" name="phone" placeholder="Your phone number.." onkeypress="return validateNumber (event)" maxlength="10" minlength="10" required>

	  <label for="lname">Email</label>
    <input type="text" id="email" name="email" placeholder="Your Email" required>

    <label for="subject">Message</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

    <center><input class="submit-btn" type="submit" id="form-submit">
    <span style="color:green;" id="msg"></span></center>


  </form>
  
</div>

		

</div>
    </div>



    <div style="overflow:hidden;resize:none;width:100%;height:400px; padding-left:20px;padding-right:20px; padding-top : 20px; padding-bottom:25px;"><div id="canvas-for-googlemap" 
    style="height:100%; width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0"
     src="https://www.google.com/maps/embed/v1/place?q=PSS+Techno+Service+Digital+Marketing,+H+Block,+Sector+63,+Noida,+Uttar+Pradesh,
     +India&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="our-googlemap-code" rel="nofollow" 
     href="https://www.bootstrapskins.com/themes" id="enable-map-data">premium bootstrap themes</a>
     <style>#canvas-for-googlemap img{height:400px;width:100%!important;background:none!important;}</style></div>
        
		


<?php include 'footer.php' ?>
<script src="main.js"></script>

<script>
       $(window).on('load',function(){
        $(".loader").fadeOut(1000);
        $(".content").fadeIn(1000);
       });
</script>


<script>
    function validateNumber(e) {
        const pattern = /^[0-9]$/;
        return pattern.test(e.key);
    }
</script>



</body>
</html>
                                                                            
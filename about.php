<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: "Open Sans", sans-serif;
            box-sizing: border-box;
        }

        body {
            min-height: 100;
            flex-direction: column; 
            align-items: center;
            justify-content: center;
            background-color: #f1f1f1;
            margin: 0;
        }
        .home4{
         min-height: 75vh;
         width: 100vw;
         background-image: url('./images/abb.jpg');
         background-size: cover;
        }
        .cont{
            display: flex;
        }
        
        .cont .rt-image{
            background-image: url('./images/b1.png');
            height: 650px;
            width: 50%;
            padding: 220px;
            background-size: cover;
            margin-top: 50px;
        }
        .abt-cont{
            margin-top: 50px;
            margin-left: 50px;
            width: 50%;
        }
        .abt-cont p{
            padding-top:15px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size:18px;
        }
        .mission-vission{
            display: flex;
            padding-top:40px;

        }
        .card1 {
            text-align:center;
            width: 290px;
            height: 383px;
            margin: 13px;
            padding: 20px;
            border: 2px solid blue;
            border-radius: 8px;
            background-color: white;
            box-shadow: 1px 2px 3px 4px rgba(20,20,20,0.4);
        }
        .card1 p{
            font-size: 18px;
            padding-top:2px;
            font-family:outfit;
            text-align:center;

        }
        
        .card2 {
            text-align:center;
            width: 290px;
            height: 383px;
            margin: 13px;
            padding: 20px;
            border: 2px solid blue;
            border-radius: 8px;
            background-color: white;
            box-shadow: 1px 2px 3px 4px rgba(20,20,20,0.4);

        }
        .card2 p{
            font-size: 18px;
            padding-top:2px;
            font-family:outfit;
            text-align:center;

        }
        
        .about-section{
            margin-top: 50px;
        
        }
        .about-section .inner-container h1{
            text-align: center;
            
        
        }
        .about-section .inner-container h4{
            text-align: center;
            
        }
        .carsss{
            display: flex;
             margin-bottom:20px;
        }
        
        .card3{
            text-align:center;
            width: 900px;
            height: 300px;
            margin: 15px;
            padding: 20px;
            border: 3px solid black;
            border-radius: 8px;
            background-color: white;
            box-shadow: 1px 2px 3px 4px rgba(20,20,20,0.4);
        }
        .card3 h2{
            text-align:center;
        }
        .card3 p{
            font-size: 18px;
            padding-top:10px;
            font-family:outfit;
            text-align:center;
        }
        .card4{
            text-align:center;
            width: 900px;
            height: 300px;
            margin: 15px;
            padding: 20px;
            border: 3px solid black;
            border-radius: 8px;
            background-color: white;
            box-shadow: 1px 2px 3px 4px rgba(20,20,20,0.4);
        }
        .card4 h2{
            text-align:center;
        }
        .card4 p{
            font-size: 18px;
            padding-top:10px;
            font-family:outfit;
            text-align:center;
        }
        .card5{
            text-align:center;
            width: 900px;
            height: 300px;
            margin: 15px;
            padding: 20px;
            border: 3px solid black;
            border-radius: 8px;
            background-color: white;
            box-shadow: 1px 2px 3px 4px rgba(20,20,20,0.4);
        }
        .card5 h2{
            text-align:center;
        }
        .card5 p{
            font-size: 18px;
            padding-top:10px;
            font-family:outfit;
            text-align:center;
        }
        .card6{
            text-align:center;
            width: 900px;
            height: 300px;
            margin: 15px;
            padding: 20px;
            border: 3px solid black;
            border-radius: 8px;
            background-color: white;
            box-shadow: 1px 2px 3px 4px rgba(20,20,20,0.4);
        }
        .card6 h2{
            text-align:center;
        }
        .card6 p{
            font-size: 18px;
            padding-top:10px;
            font-family:outfit;
            text-align:center;
        }
        
        .loader{
            height: 100vh;
            width: 100vw;
            overflow: hidden;
            background-color: #16191e;
            position: absolute;
        }
        .loader>div{
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
        @keyframes spin{
            100%{
                transform: rotate(360deg);
            }
        }
        @media only screen and (max-width: 768px) {
        
        .home4{
            min-height: 28vh;
            width: 101vw;
            background-image: url('./images/abb.jpg');
            background-size: cover;
        }
        .cont .rt-image {
            height: 435px;
            width: 20%;
            margin-top: 50px;
            padding-left: 170px;
        }
        .abt-cont{
        
            width: 450px;
        }
        .abt-cont p{
                width: 307px;
            
        }
        .abt-cont h1{
            width: 330px;
        }
        .cont{
            display:block;
        }
        .mission-vission{
            display: block;

        }
        .carsss{
            display: block;
        }
        .card3{
            width: 359px;
        }
        .card4{
            width: 359px;
        }
        .card5{
            width: 359px;
        }
        .card6{
            width: 359px;
        }
        .card1{
            width: 297px;
            margin-left: -11px;
        }
        .card1 p{
            width: 262px;
        }
        .card2{
            width: 297px;
            margin-left: -11px;
        }
        .card2 p{
            width: 262px;

        }
        
    }
        
    </style>
</head>
<body> 

        <div class="loader">
            <div></div>
        </div>
       
       
       
    <?php include 'header.php' ?>

    <section class="home4"></section>
    
        <div class="cont">
            
            <div class="rt-image"></div>

            <div class="abt-cont"><h1>Powerful Technologies For Strong Features</h1>
            <p>It is our principle to offer projects that will add value to all humanity by providing quality and high customer satisfaction by producing innovative 
                solutions with up-to-date technologies in the field of Information Technologies. Our company, which analyzes the current market and produces end-to-end 
                technological solutions for your needs, will lead you in the digital environment.</p>
            <div class="mission-vission">
            
            <div class="card1">
                    <h2>Our Mission</h2><hr class="mx-auto w-75">
                    <p>"Our mission is that We persistently innovate and adapt to the ever-changing technologies to create the high quality solutions that
            could meet the needs of our client's specific situation. And prioritizing customer satisfaction, ethical practices that could help build long lasting."</p>
            </div>

            <div class="card2">
                    <h2>Our Vission</h2><hr class="mx-auto w-75">
                    <p>"Our vission is  that we are believes in innovation, customer relationship and the technology. We build software that saves our client’s
             time and money by reducing the amount of work they need to do prioritizing customer satisfaction, ethical practices that could help and very sufficient."</p>
                </div></p>

            </div>
</div>
</div>


<div class="pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="section-head-1 col-sm-12" style="text-align: center;">
          <h4 style="margin-top: -5rem;" id="portfolio"><span>Our</span> Projects</h4>
          
          <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">The objective of IT Company is to enable a large number of youth to take up <br>industry-relevant skill training that will help them<br> in securing a better livelihood.
            </p>
        </div>
        
        <div class="col-lg-4 col-sm-6">
          
          <div class="item"> <span class="icon feature_box_col_four"><i class="fa fa-database"></i></span>
            <h6>Project-1</h6>
            
            <p style=" font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.<br><br><br></p>
          </div>
        </div>
        
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_five"><i class="fa fa-upload"></i></span>
            <h6>Project-2</h6>
            <p style=" font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.<br><br><br></p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_six"><i class="fa fa-camera"></i></span>
            <h6>Project-3</h6>
            <p style=" font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.<br><br><br></p>
          </div>
        </div>
      </div>
    </div>
</div>

            

<!--<div class="about-section" >
        <div class="inner-container">
        <h2 class="h2-md" style="text-align: center;">Industries We Serve</h2>
        <p class="p-xl" style="font-size:15px; text-align:center; margin-left:80px; margin-right:60px;">PSS has focused practices in all of our core industries, providing clients with a partner that is not only expert in technology, but expert in their industries. Combining our industry knowledge &amp; technology expertise, we are able to help our clients adapt as their industries change. We work with a host of businesses from a variety of industries to build complex ERP &amp; CRM solutions along with Business Intelligence &amp; other third party tools in multi-lingual, multi-legal &amp; high regulatory environments.</p>
        </div>
           
        
        <div class="carsss">
            
            <div class="card3">
                    <h2>App Development</h2><hr class="mx-auto w-75">
                    <p>Mobile application development is the process of making software for smartphones, tablets and digital assistants, most commonly for the Android phones etc.</p>
                    
            </div>

            <div class="card4">
                    <h2>Digital Marketing</h2><hr class="mx-auto w-75">
                    <p>Digital marketing is the component of marketing that uses the Internet and online-based digital technologies such as desktop computers, mobile phones, etc.</p>

            </div></p>
            
            <div class="card5">
                    <h2>Email Marketing</h2><hr class="mx-auto w-75">
                    <p>Email marketing is the act of sending a commercial message, typically to a group of people, using email.It involves using email to send advertisements phones etc.</p>

                    
            </div>

            <div class="card6">
                    <h2>Web Design</h2><hr class="mx-auto w-75">
                    <p>Web design refers to the creating, building, and maintaining of websites. It includes aspects such as web design, web publishing,web programming phones etc.</p>
                
            </div></div>

        </div>
       
    </div>-->
    
    <?php include 'footer.php' ?>

    <script>
       $(window).on('load',function(){
        $(".loader").fadeOut(1000);
        $(".content").fadeIn(1000);
       });
        </script>
</body>

</html>

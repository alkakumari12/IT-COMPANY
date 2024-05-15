<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


<title>web development</title>
</head>
<style>
 @import url("https://fonts.googleapis.com/css2?family=Nunito&display=swap");

.home3{
        min-height: 75vh;
        width: 100vw;
        background-image: url('./images/servic.jpg');
        background-size: cover;
}
  .text-center {
    text-align: center !important;
  }

  .fw-bold {
    font-weight: 500 !important;
  }

  .mt-5 {
    margin-top: 3rem !important;
  }

  * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: "Nunito", sans-serif;
  }

  .theme-text {
    color: #474af0;
  }

  .card-img-top {
    height: 200px;
    width: 100%;
  }

  .card {
    z-index: 1;
    overflow: hidden;
    transition: 0.5s;
    margin-bottom: 20px; /* Add margin between cards */
  }

  .card:hover {
    color: white;
  }

  .card::before {
    content: "";
    position: absolute;
    left: -100%;
    top: 0%;
    background: #474af0;
    width: 100%;
    height: 100%;
    transition: 0.5s;
    z-index: -1;
  }

  .card:hover::before {
    left: 0%;
    color: white;
  }

  .container-fluid {
    background-image: url("blob-scene-haikei.svg");
    background-position: center;
    background-size: cover;
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
  

  /* Media Queries for Mobile Devices */
  @media only screen and (max-width: 768px) {
    .card {
      margin-bottom: 15px; /* Adjusted margin between cards for mobile view */
    }
    .home3{
    min-height: 28vh;
    width: 101vw;
    background-image: url('./images/servic.jpg');
    background-size: cover;
    }

  }
</style>
<body>

<div class="loader">
            <div></div>

        </div>
       


<?php include 'header.php' ?>

<section class="home3"></section>


<div class="container-fluid">
        <h1 class="text-center mt-5 display-3 fw-bold">Our <span class="theme-text">Services</span></h1>
        <hr class="mx-auto mb-5 w-25">
        <div class="row mb-5">
            <div class="col-12 col-sm-6 col-md-3 m-auto">
            
                <div class="card shadow">
                    <img src="./images/web.svg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Web Development</h3>
                        <hr class="mx-auto w-75">
                        <p style="font-size: 16px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                            Web development refers to the creating, building, and maintaining of websites. It includes aspects such as web design, web publishing, web programming etc.
                        </p>
                    </div>
                </div>
                
            </div>
            
            <div class="col-12 col-sm-6 col-md-3 m-auto">
    
                <div class="card shadow">
                    <img src="./images/app.svg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">App Development</h3>
                        <hr class="mx-auto w-75">
                        <p style="font-size: 16px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                            Mobile application development is the process of making software for smartphones, tablets and digital assistants, most commonly for the Android.
                        </p>
                    </div>
                </div>
                
            </div>
        
            <div class="col-12 col-sm-6 col-md-3 m-auto">
        
                <div class="card shadow">
                    <img src="./images/dm.svg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Digital Marketing</h3>
                        <hr class="mx-auto w-75">
                        <p style="font-size: 16px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                            Digital marketing is the component of marketing that uses the Internet and online-based digital technologies such as desktop etc such as desktop etc.
                        </p>
                    </div>
                </div>
                
            </div>
            
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                
                <div class="card shadow">
                    <img src="./images/seo.svg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Email Marketing</h3>
                        <hr class="mx-auto w-75">
                        <p style="font-size: 16px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                            Email marketing is the act of sending a commercial message, typically to a group of people, using email.It involves using email to send advertisements etc.
                        </p>
                    </div>
                </div>
    
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-12 col-sm-6 col-md-3 m-auto">
            
                <div class="card shadow">
                    <img src="./images/web.svg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Web Design</h3>
                        <hr class="mx-auto w-75">
                        <p style="font-size: 16px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                            Web design refers to the creating, building, and maintaining of websites. It includes aspects such as web design, web publishing, web programming etc.
                        </p>
                    </div>
                </div>
                
            </div>
            
            <div class="col-12 col-sm-6 col-md-3 m-auto">
    
                <div class="card shadow">
                    <img src="./images/app.svg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Software Develop</h3>
                        <hr class="mx-auto w-75">
                        <p style="font-size: 16px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                            Software application develop is the process of making software for smartphones, tablets and digital assistants, most commonly iOS such as desktop etc.
                        </p>
                    </div>
                </div>
                
            </div>
        
            <div class="col-12 col-sm-6 col-md-3 m-auto">
        
                <div class="card shadow">
                    <img src="./images/dm.svg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Graphics Design</h3>
                        <hr class="mx-auto w-75">
                        <p style="font-size: 16px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                            Graphics Design is the component of marketing that uses the Internet and online-based digital technologies such as desktop computers etc.
                        </p>
                    </div>
                </div>
                
            </div>
            
            <div class="col-12 col-sm-6 col-md-3 m-auto">
                
                <div class="card shadow">
                    <img src="./images/seo.svg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h3 class="text-center">Content Writing</h3>
                        <hr class="mx-auto w-75">
                        <p style="font-size: 16px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                            Content Writing is the act of sending a commercial message, typically to a group of people, using email.It involves using email to send advertisements etc.
                        </p>
                    </div>
                </div>
    
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

        <?php include 'footer.php' ?>



        <script>
       $(window).on('load',function(){
        $(".loader").fadeOut(1000);
        $(".content").fadeIn(2000);
       });
        </script>
</body>
</html>
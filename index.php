<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Company Website</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" href="./images/image.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <script src="./js/main.js"></script>
    <style>
        
        .title p{
            font-size: 20px;
            width: 1250px;
            padding-left: 170px;
            align-items: center;
            font-family: sans-serif;
        }
        .h3{
            font-size: 2.75rem;
        }
        .bt{
        font-family: sans-serif;
        font-weight: 500;
        font-size: 16px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 10px 30px;
        border-radius: 1px;
        transition: 0.5s;
        margin-top: 20px;
        color: #fff;
        background: black;
        border: 2px solid black;
        margin-bottom: 15px;

        }
        .row{
            margin-right: -79px;
            margin-left: -65px;
            padding-left: 20px;
            padding-right: 55px;
            margin-top: -5.5rem;
        }
        .container{
            margin-top:2.5rem;
        }
        #service{
            margin-top: -50px;
        }
        .section-header{
            margin-top: -150px;
        }
        #client{
            margin-top: -20px;
        }
        #client p{
            margin-top: -20px;
        }
        
        .title h3{
            margin-top:-29px;
        }
        #foot{
            justify-content: center;
        }
    
        .team .heading{
        margin-top: -47px;
        color: #00bfff;
        }
        .about .row .content h3{
        margin-top: 20px;
        font-size: 2rem;
        color: var(--color);
    }
    .testimonials {
    position: relative;
    padding: 53px 0 13px 0;
    background: #f2f2f2;
    }
    .communicate h3{
    margin-top: 1rem;
    font-size: 3rem;
}
        @media only screen and (max-width: 768px) {
            .title p{
            font-size: 15px;
            width: 100px;
            height: 100px;
            padding-top: 5px;
            margin-right: 60px;
            }
            .bt{
                width: 155px;
                margin-bottom: 13px;
            }
            .header .logo{
            width: 312px;
            height: 47px;
            margin-top: 10px;
        }
        .row{
            margin-right: -79px;
            margin-left: -44px;
            padding-left: 20px;
            padding-right: 25px;
            
        }
        .title h3{
            margin-top:-19px;
        }
        
        #after-abt p{
            width: 500px;
           
        }
        .about{
        min-height: 4vh;
        width: 100vw;
        margin-top: -3rem;
        margin-bottom: -2rem;
        top: -2rem;
        text-align: center;
        position: relative;
        overflow: hidden;
        line-height: 6rem;
    }
        
        .team .heading{
         margin-top: -47px;
        color: #00bfff;
        }
        
        }
    </style>


</head>

<body>
    
        <header class="header">
        <a href="#" class="logo"><img src="./images/obicule _redsyn-02.png" alt=""></a>
        <div class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
                <li><a href="index.php" style="margin-right: 30px; font-family: 'Playfair Display', serif;
                    font-family: 'Roboto Slab', serif;" >Home</a></li>
                <li><a href="about.php" style="margin-right: 30px; font-family: 'Playfair Display', serif;
                    font-family: 'Roboto Slab', serif;">About</a></li>
                <li><a href="services.php" style="margin-right: 30px; font-family: 'Playfair Display', serif;
    font-family: 'Roboto Slab', serif;">Services</a></li>
                <li><a href="careers.php" style="margin-right: 30px; font-family: 'Playfair Display', serif;
    font-family: 'Roboto Slab', serif;">Career</a></li>
                <li><a href="contact.php" style="margin-right: 30px; font-family: 'Playfair Display', serif;
    font-family: 'Roboto Slab', serif;">Contact</a></li>
            </ul>
        </nav>
    </header>

  <section id="home" class="home">
    <h1>Welcome To Our Startup</h1>
    <h2>with IT Company Services</h2>
    <div class="wave wave1"></div>
    <div class="wave wave2"></div>
    <div class="wave wave3"></div>
  </section>

  <section id="about" class="about">
    <h1 class="heading">about us</h1>
    <div class="row">
        <div class="content" style="padding-top: 15px;">
            <h3 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">We make creativity work for your brand!</h3>
            <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Ours is a team of creatives that is brainstorming on great ideas,<b> all. the. time.</b><br>
                With our skills put together, you get an ensemble capable of doing anything and everything your brand needs.</p>
            <a href="about.php"><button class="btn">Read More</button></a>
        </div>
    </div>
  </section>

  <div class="pt-5 pb-5" style="background-color: #f2f2f2;">
    <div class="container">
      <div class="row">
        <div class="section-head col-sm-12" id="service">
          <h1>Our Services</h1>
          <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">We help you to build high-quality digital solutions and products as well as deliver a wide range of related professional services. We are providing world-class service to our clients.
            </p>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_one"><i class="fa fa-laptop"></i></span>
            <h6>Web App Development</h6>
            <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Our Custom Web Development Services Include Both Front-End And Back-End Development. Whether It Is Enhancing An Existing App Or Architecting An Enterprise App, Our Developers Are Up For The Challenge.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_two"><i class="fa fa-android"></i></span>
            <h6>Mobile App Development</h6>
            <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">We Have Expertise In Creating Multi-Platform Mobile App Solutions For Both Android And IOS Devices. Using PhoneGap, Xamarin, And React Native, We Offer Custom Mobile App That Runs Smoothly On Multiple Platforms.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_three"><i class="fa fa-magic"></i></span>
            <h6>Digital Marketing</h6>
            <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">The digital marketing services that we provide have their own set of charms. By taking our digital marketing services, our clients will be able to increase visibility and engage with their customers at the online platform.</p>
          </div>
        </div>
      </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <section class="counters">
    <div class="container">
        <div>
            <i class="far fa-clock fa-4x"></i>
            <div class="counter" data-target="13500">0</div>
            <h3>Working Hours</h3>
        </div>
        <div>
            <i class="fas fa-gift fa-4x"></i>
            <div class="counter" data-target="720">0</div>
            <h3>Completed Projects</h3>
        </div>
        <div>
            <i class="fas fa-users fa-4x"></i>
            <div class="counter" data-target="480">0</div>
            <h3>Happy Clients</h3>
        </div>
        <div>
            <i class="fas fa-award fa-4x"></i>
            <div class="counter" data-target="120">0</div>
            <h3>Awards Received</h3>
        </div>
    </div>
</section>

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
            
            <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.<br><br><br></p>
          </div>
        </div>
        
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_five"><i class="fa fa-upload"></i></span>
            <h6>Project-2</h6>
            <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.<br><br><br></p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_six"><i class="fa fa-camera"></i></span>
            <h6>Project-3</h6>
            <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.<br><br><br></p>
          </div>
        </div>
      </div>
    </div>
</div>

<div class="communicate" style="margin-bottom: 15px;">
    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
    <p>Lorem ipsum dolor sit amet.</p>
    <a href="contact.php"><button class="btn">Contact Now</button></a>
</div>

<!--<div class="testimonials mt-100">
    <div class="container">
        <div class="section-header" style="text-align: center;">
            <h2>Testimonials</h2>
            <p style="font-size: 2rem;">
                See what people have to say about us
            </p>
        </div>

        <div class="owl-carousel testimonials-carousel">
            <div class="testimonial-item row align-items-center">
                <div class="testimonial-img">
                    <img src="./images/testimonial-1.jpg" alt="Testimonial image">
                </div>
                <div class="testimonial-text">
                    <h2>Shyam Singh</h2>
                    <h3>Designation</h3>
                    <p style="font-family: sans-serif;">
                    At first, I wasn’t sure about spending $100 for this course, but now that I’ve taken it, I’ve saved more than twice that amount on mistakes I might have made otherwise.
                    </p>
                </div>
            </div>
            <div class="testimonial-item row align-item s-center">
                <div class="testimonial-img">
                    <img src="./images/testimonial-1.jpg" alt="Testimonial image">
                </div>
                <div class="testimonial-text">
                    <h2>Ram Singh</h2>
                    <h3>Designation</h3>
                    <p style="font-family: sans-serif;">
                    At first, I wasn’t sure about spending $100 for this course, but now that I’ve taken it, I’ve saved more than twice that amount on mistakes I might have made otherwise.
                    </p>
                </div>
            </div>
            <div class="testimonial-item row align-items-center">
                <div class="testimonial-img">
                    <img src="./images/testimonial-1.jpg" alt="Testimonial image">
                </div>
                <div class="testimonial-text">
                    <h2>subham singh</h2>
                    <h3>Designation</h3>
                    <p style="font-family: sans-serif;">
                    At first, I wasn’t sure about spending $100 for this course, but now that I’ve taken it, I’ve saved more than twice that amount on mistakes I might have made otherwise.
                    </p>
                </div>
            </div>
            <div class="testimonial-item row align-items-center">
                <div class="testimonial-img">
                    <img src="./images/testimonial-1.jpg" alt="Testimonial image">
                </div>
                <div class="testimonial-text">
                    <h2>Dolly Bindre</h2>
                    <h3>Designation</h3>
                    <p style="font-family: sans-serif;">
                    At first, I wasn’t sure about spending $100 for this course, but now that I’ve taken it, I’ve saved more than twice that amount on mistakes I might have made otherwise.
                    </p>
                </div>
            </div>
            <div class="testimonial-item row align-items-center">
                <div class="testimonial-img">
                    <img src="./images/testimonial-1.jpg" alt="Testimonial image">
                </div>
                <div class="testimonial-text">
                    <h2>john Sinha</h2>
                    <h3>Designation</h3>
                    <p style="font-family: sans-serif;">
                    At first, I wasn’t sure about spending $100 for this course, but now that I’ve taken it, I’ve saved more than twice that amount on mistakes I might have made otherwise.
                     </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clients mt-100" id="client">
    <div class="container">
        <div class="section-header">
            <h2>Our Clients</h2>
            <p>
                We don't just build softwares, we build your business.
            </p>
        </div>
        <div class="owl-carousel clients-carousel">
            <img src="./images/image.png" alt="Client Logo">
            <img src="./images/image.png" alt="Client Logo">
            <img src="./images/image.png" alt="Client Logo">
            <img src="./images/image.png" alt="Client Logo">
            <img src="./images/image.png" alt="Client Logo">
            <img src="./images/image.png" alt="Client Logo">
            <img src="./images/image.png" alt="Client Logo">
            <img src="./images/image.png" alt="Client Logo">
        </div>
    </div>
</div>
<a href="#" class="back-to-top"><i class="ion-ios-arrow-up"></i></a>
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<section class="team" style="margin-top: 7rem;">
  <h1 class="heading" style="margin-top: -1.5rem;" id="team">our team</h1>
  <p></p>
  <div class="row">
      <div class="card">
          <div class="image">
              <img src="./images/pexels-andrea-piacquadio-845434.jpg" alt="Team member 1">
          </div>
          <div class="info">
              <h3>Ram Kumar</h3>
              <span>Web Developer</span>
              <div class="icons">
                  <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                  <a href="https://twitter.com/login" class="fab fa-twitter"></a>
                  <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                  <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
              </div>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="card">
          <div class="image">
              <img src="./images/pexels-vinicius-wiesehofer-1130624.jpg" alt="Team member 1">
          </div>
          <div class="info">
              <h3>Shalu Singh</h3>
              <span>Mobile Developer</span>
              <div class="icons">
                  <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                  <a href="https://twitter.com/login" class="fab fa-twitter"></a>
                  <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                  <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
              </div>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="card">
          <div class="image">
              <img src="./images/pexels-hussein-altameemi-2776353.jpg" alt="Team member 1">
          </div>
          <div class="info">
              <h3>Shayam Sinha</h3>
              <span>Graphic Designer</span>
              <div class="icons">
                  <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                  <a href="https://twitter.com/login" class="fab fa-twitter"></a>
                  <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                  <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
              </div>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="card">
          <div class="image">
              <img src="./images/pexels-andrea-piacquadio-745136.jpg" alt="Team member 1">
          </div>
          <div class="info">
              <h3>Rani Singh</h3>
              <span>Web Designer</span>
              <div class="icons">
                  <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                  <a href="https://twitter.com/login" class="fab fa-twitter"></a>
                  <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                  <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
              </div>
          </div>
      </div>
  </div>
</section>-->


<!--contact-->

<!--<section id="contact" class="contact">
    <h1 class="heading" style="margin-top:-29px;">get in touch</h1>
</section>
    <div class="title">
        <h3>
            <center><strong>Let's help you navigate your next</strong></center>
        </h3>
        <center><a href="contact.php" class="bt">Contact Us</a></center>
    </div>-->

    <?php include 'footer.php' ?>
</body>
</html>

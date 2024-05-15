<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer for all file</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" href="./images/image.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <script src="./js/main.js"></script>
    
    <style>
        .footer {
            position: relative;
            padding: 0 0 30px 0;
            background: #333;
        }
        
        .footer .footer-top {
            background: #002e5f;
            padding: 81px 0 30px 0;
        }
        
        .footer .footer-top .footer-info,
        .footer .footer-top .footer-links,
        .footer .footer-top .footer-contact,
        .footer .footer-top .footer-newsletter {
            margin-bottom: 30px;
        }
        
        .footer .footer-top .social-links a {
            font-size: 18px;
            display: inline-block;
            background: #ffffff;
            color: #00bfff;
            line-height: 1;
            padding: 9px 0;
            margin-right: 4px;
            text-align: center;
            width: 36px;
            height: 36px;
            transition: 0.3s;
        }
        
        .footer .footer-top .social-links a:hover {
            background: #00bfff;
            color: #ffffff;
        }
        
        .footer .footer-top h4 {
            font-size: 16px;
            font-weight: 700;
            color: #ffffff;
            text-transform: uppercase;
            position: relative;
            padding-bottom: 12px;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }
        
        .footer .footer-top h4::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            height: 0;
            width: 50px;
            border-bottom: 2px solid #ffffff;
        }
        
        .footer .footer-top .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .footer .footer-top .footer-links ul i {
            padding-right: 8px;
            color: #ffffff;
            font-size: 16px;
        }
        
        .footer .footer-top .footer-links ul li {
            border-bottom: 1px solid #ffffff;
            padding: 7px 0;
        }
        
        .footer .footer-top .footer-links ul li:first-child {
            padding-top: 0;
        }
        
        .footer .footer-top .footer-links ul a {
            font-size: 14px;
            color: #ffffff;
        }
        
        .footer .footer-top .footer-links ul a:hover {
            color: #00bfff;
        }
        
        .footer .footer-top .footer-contact p {
            color: #ffffff;
            line-height: 26px;
        }
        
        .footer .footer-top .footer-newsletter input[type="email"] {
            padding: 6px 8px;
            width: 60%;
            border: 1px solid #ffffff;
            background: transparent;
            color: #ffffff;
        }
        
        .footer .footer-top .footer-newsletter input[type="submit"] {
            border: 0;
            width: 40%;
            padding: 6px 0;
            text-align: center;
            color: black;
            border: 1px solid #ffffff;
            background: #ffffff;
            transition: 0.3s;
            cursor: pointer;
        }
        
        .footer .footer-top .footer-newsletter input[type="submit"]:hover {
            color: #ffffff;
            background: #00bfff;
            border: 1px solid #00bfff;
            letter-spacing: .2rem;
        }
        
        .footer .footer-top .footer-newsletter p {
            color: #ffffff;
            font-size: 14px;
        }
        
        .footer .credit,
        .footer .copyright {
            text-align: center;
            padding-top: 10px;
        }
        
        #foot{
            justify-content: center;
            padding-top: 30px;
        }
        @media (min-width: 768px) {
            .footer .credit {
                text-align: right;
            }
            
            .footer .copyright {
                text-align: center;
            }
        }

        #foot{
            justify-content: center;
        }
    </style>

</head>
<body>
<div class="footer">
      <div class="footer-top">
          <div class="container">
              <div class="row">
                  <div class="col-lg-3 col-md-6 footer-links">
                      <h4>About Us</h4>
                      <ul>
                          <li><i class="ion-ios-arrow-forward"></i> <a href="index.php">Home</a></li>
                          <li><i class="ion-ios-arrow-forward"></i> <a href="about.php">About us</a></li>
                          <li><i class="ion-ios-arrow-forward"></i> <a href="services.php">Our services</a></li>
                          <li><i class="ion-ios-arrow-forward"></i> <a href="#">Terms & condition</a></li>
                          <li><i class="ion-ios-arrow-forward"></i> <a href="#">Privacy policy</a></li>
                      </ul>
                  </div>

                  <div class="col-lg-3 col-md-6 footer-links">
                      <h4>Useful Links</h4>
                      <ul>
                          <li><i class="ion-ios-arrow-forward"></i> <a href="#portfolio">Portfolio</a></li>
                          <li><i class="ion-ios-arrow-forward"></i> <a href="index.php">Team</a></li>
                          <li><i class="ion-ios-arrow-forward"></i> <a href="careers.php">Career</a></li>
                          <li><i class="ion-ios-arrow-forward"></i> <a href="contact.php">Contact</a></li>

                      </ul>
                  </div>

                  <div class="col-lg-3 col-md-6 footer-contact" style="font-size: 1.5rem;">
                      <h4>Contact Us</h4>
                      <p>
                          Pss Tecno Services<br>
                          Noida , Sector-63<br>
                          Uttar Pradesh<br>
                          <strong>Phone:-</strong>+9111234567<br>
                          <strong>Email:-</strong>pss@gmail.com<br>
                      </p>

                      <div class="social-links">
                          <a href="https://www.facebook.com/"><i class="ion-logo-facebook"></i></a>
                          <a href="https://twitter.com/login?lang=en"><i class="ion-logo-twitter"></i></a>
                          <a href="https://www.linkedin.com/"><i class="ion-logo-linkedin"></i></a>
                          <a href="https://www.instagram.com/"><i class="ion-logo-instagram"></i></a>
                          <a href="https://accounts.google.com/servicelogin/signinchooser?flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="ion-logo-googleplus"></i></a>
                      </div>

                  </div>

                  <div class="col-lg-3 col-md-6 footer-newsletter">
                      <h4>Subscription</h4>
                      <p>With Our Skills Put Together, You Get An Ensemble Capable Of Doing Anything And Everything Your Brand Needs. Subscribe Here To Get Our Latest Updates.</p>
                      <form action="" method="post">
                          <input type="email" name="email"><input type="submit"  value="Subscribe">
                      </form>
                  </div>

              </div>
          </div>
      </div>

      <div class="container">
          <div class="row " id="foot">
              <div class="col-md-6 copyright" style="color: #fff; font-size: 1.3rem;">
              Copyright &copy; 2023  Designed By Obicule. All Rights Reserved.
              </div>
          </div>
      </div>
  </div>

  <a href="#" class="back-to-top"><i class="ion-ios-arrow-up"></i></a>
</body>
</html>
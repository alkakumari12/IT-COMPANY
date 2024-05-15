<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header for all file</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="icon" href="./images/image.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&family=Roboto+Slab&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./js/main.js">
    <style>
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            padding: 1rem 2rem;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            position: fixed;
        }

        .header .logo img {
            width: 130%;
            height: auto;
            top: 0;
            left: 0;
        }

        .header .navbar ul {
            list-style-type: none;
            display: flex;
            align-items: center;
            justify-content: space-around;
            margin: 0;
            padding: 0;
        }

        .header .navbar ul li {
            margin: 0 1.5rem;
        }

        .header .navbar ul li a {
            font-size: 2rem;
            color: black;
        }

        .header .navbar ul li a:hover {
            color: black;
            text-decoration: underline;
        }

        .header .logo i {
            padding: 0.5rem;
        }

        .header .fa-bars {
            color: #fff;
            cursor: pointer;
            font-size: 3rem;
            display: none;
        }

        * {
           
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-transform: capitalize;
            transition: all .2s linear;
            text-decoration: none;
            font-family: 'Playfair Display', serif;
            font-family: 'Roboto Slab', serif;

           
        }

        html {
            font-size: 62.5%;
        }

        .row .btn,
        .communicate .btn {
            outline: none;
            border: none;
            border-radius: 5rem;
            background: white;
            border-style: groove;
            border-color: #002e5f;
            font-size: 1.5rem;
            cursor: pointer;
            height: 3.5rem;
            width: 15rem;
            box-shadow: 0 .2rem .5rem rgba(0, 0, 0, .3);
        }

        .row .btn:hover,
        .communicate .btn:hover {
            letter-spacing: .1rem;
            opacity: .9;
            color: white;
            background: #002e5f;
        }

        .communicate .btn:hover {
            letter-spacing: .1rem;
            opacity: .9;
            color: white;
            background: black;
        }
        .header .navbar a.active {
             background-color: #04AA6D;
            color: white;
        }
        .header .navbar .icon
        {
            display: none;
        }

        @media only screen and (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
            }
            .header .logo{
            width: 312px;
            height: 47px;
            margin-top: 10px;
        }
        .header .fa-bars{
            color: black;
            margin-top: -47px;
            margin-left: 308px;
    }
            .header .fa-bars:hover {
                color: black;
                margin-top: -47px;
                margin-left: 308px;
            }


            .header .logo img {
                width: 80%;
                height: auto;
            }

            .header .navbar {
                margin-top: 1rem;
                text-align: center;
            }

            .header .navbar ul {
                flex-direction: column;
                align-items: center;
            }

            .header .navbar ul li {
                margin: 0.5rem 0;
                font-family: sans-serif;
            }
        }
    </style>
</head>
<body>
    <header class="header" id="topnavbar">
        <a href="index.php" class="logo"><img src="./images/obicule _redsyn-02.png" alt=""></a>
        <div class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
                <li><a href="index.php" style="margin-right: 30px;">Home</a></li>
                <li><a href="about.php" style="margin-right: 30px;">About</a></li>
                <li><a href="services.php" style="margin-right: 30px;">Services</a></li>
                <li><a href="careers.php" style="margin-right: 30px;">Career</a></li>
                <li><a href="contact.php" style="margin-right: 30px;">Contact</a></li>
            </ul>
            
        </nav>
    </header>

</body>
</html>

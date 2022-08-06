<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2? fzmily=Roboto:wght@400;700&display=swap" rel="stylesheet">


    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rgba(35, 221, 196, 0.683), rgba(0, 0, 0, 0.7)), url(img/med.jpg);
            background-position: center;
            background-size: cover;
            padding-left: 10%;
            padding-right: 18%;
            box-sizing: border-box;
        }

        .navbar {
            height: 12%;
            display: flex;
            align-items: center;
        }

        .logo {
            width: 95px;
            cursor: pointer;
        }

        .menu-icon {
            width: 40px;
            cursor: pointer;
            margin-left: 550px;
        }

        nav {
            flex: 1;
            text-align:right;
            margin-left:350px;
            display:inline;

        }

        nav ul li {
            list-style: none;
            display: inline-block;
            margin-left: 400px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 35px;
font-weight:25px;
        }

        .row {
            display: flex;
            height: 88%;
            align-items: center;
        }

        .col {
            flex-basis: 50%;
        }

        h1 {
            color: #fff;
            font-size: 100px;
        }

        p {
            color: #fff;
            font-size: 11px;
            line-height: 15px;
        }

        button {
            width: 180px;
            color: #000;
            font-size: 12px;
            padding: 12px 0;
            background: #fff;
            border: 0;
            border-radius: 20px;
            outline: none;
            margin-top: 30px;
        }

        .card {
            width: 200px;
            height: 230px;
            display: inline-block;
            border-radius: 10px;
            padding: 15px 25px;
            box-sizing: border-box;
            cursor: pointer;
            margin: 10px 15px;
            background-image: url(img/w2.jpeg);
            background-size: cover;
            background-position: center;
            transition: transform 0.5s;
        }

        .card1 {
            background-image: url(img/);
        }

        .card2 {
            background-image: url(img/);
        }

        .card3 {
            background-image: url(img/);
        }

        .card4 {
            background-image: url(img/);
        }

        .card:hover {
            transform: translateY(-10px);
        }

        h5 {
            color: #fff;
            text-shadow: 0 0 5px #999;
        }

        .card p {
            text-shadow: 0 0 5px #000;
            font-size: 8px;
        }



    </style>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <img src="img/bgr.png" class="logo">

        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="img/bgr.png"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item">
                                <a class="nav-link" id="na" aria-current="page" href="#"> Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Our team</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" tabindex="-1"
                                    aria-disabled="true">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
            <img src="img/menu.png" class="menu-icon">
            <div class="row">
                <div class="col">
                    <h1>one-health</h1>
                    <p> best for your hralth to keep yourself save</p>
                    <button type="button"> Book date</button>
                </div>


            </div>
            <div class="col"></div>
            <div class="card">
                <h5>ho</h5>
            </div>
            <div class="card">
                <h5>ho</h5>
            </div>
            <div class="card">
                <h5>ho</h5>
            </div>
            <div class="card">
                <h5>ho</h5>
            </div>
            <div class="card">
                <h5>ho</h5>
            </div>
        </div>
    </div>










</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        * {
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
        }

        body {
            background: #f8f8f8;

        }

        :root {
            --gradient: linear-gradient(to right, #29a6cc, #074c66);
        }

        .sidebar {
            position: fixed;
            width: 300px;
            height: 100vh;
            background: #f8f8f8;
            padding: 20px;
        }

        .main-home {
            position: absolute;
            width: calc(100% - 300px);
            min-height: 100vh;
            top: 0;
            left: 300px;
            background: #fff;
            border-radius: 1rem 0 0 1rem;
            z-index: 1000;
        }

        .logo img {
            width: 80px;
            height: 40px;

        }

        .profile {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 1.1rem;
        }

        .profile-img {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 2px solid #29a6cc;
        }

        .profile-img img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 50%;
            object-position: center;
        }

        .name {
            display: flex;
            align-items: center;
            margin: 1rem 0 0.4rem;
        }

        .name h1 {
            font-size: 1.1rem;
            color: #074c66;
            text-align: center;
        }

        .name img {
            margin-left: 4px;
            width: 20px;
            object-fit: contain;
        }

        .profile-img span {
            font-size: 0.938rem;
            font-weight: 400;
        }

        .about {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
        }

        .box {
            text-align: center;
        }

        .box h3 {
            font-size: 1rem;
            font-weight: 500;
        }

        .box span {
            font-size: 0.938rem;
            font-weight: 400;
        }

        .menu a {
            width: 80%;
            font-size: 1rem;
            color: #074c66;
            display: flex;
            align-items: center;
            line-height: 40px;
        }

        .menu a:hover,
        .menu .active {
            color: #29a6cc;
        }

        .menu .icon {
            margin-right: 1rem;
            font-size: 20px;
        }

        .menu a:hover::before,
        .menu .active::before {
            content: '';
            position: absolute;
            right: 0;
            width: 2px;
            height: 17px;
            background: #29a6cc;
        }

        /*Main Home*/
        .main-home {
            padding: 20px;
            overflow: hidden;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 10px;
        }

        .search {
            display: flex;
            align-items: center;
            background: #f8f8f8;
            width: 500px;
            height: 2.4rem;
            padding: 10px;
            border-radius: 10px;
            margin: 13px;
        }

        .search input {
            border: none;
            outline: none;
            background: transparent;
            margin-left: 7px;
        }

        .search o {
            font-size: 20px;
        }

        .header-content {
            display: flex;
            align-items: center;
        }

        .header-content i {
            color: #074c66;
            font-size: 20px;
            margin-left: 1rem;
        }

        .header-content .btn {
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 8px;
            background: var(--gradient);
            margin-left: 1rem;
        }

        .header-content .btn i {
            color: hsla(0, 0%, 100%, 0.6);
            margin-right: 10px;
        }

        .btn-text {
            color: #fff;
        }

        .stories-title {
            display: flex;
            justify-content: space-between;
        }

        .stories-title h1 {
            font-size: 1.6rem;
            text-align: center;
            color: #074c66;
        }

        .stories-title .btn {
            display: flex;
            align-items: center;
            color: #074c66;
        }

        .stories-title .btn i {
            font-size: 24px;
            margin-right: 10px;
        }

        .stories {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 2rem;
        }

        .stories-img {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 2px solid #29a6cc;
        }

        .stories-img img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 50%;
            object-position: center;
        }

        .stories-img.color {
            border: 2px solid #dbdbdb;
        }

        .stories-img .add {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            color: #fff;
            background: hsla(246, 100%, 67%, 0.7);
        }

        .feed {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 1rem;
        }

        .feed h1 {
            font-size: 1.7rem;
        }

        .feed-text {
            display: flex;
            align-items: center;
        }

        .feed-text h2 {
            font-size: 1rem;
            margin-right: 1rem;
        }

        .main-posts {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, auto));
            gap: 11px;
            margin-top: 30px;
        }

        .main-posts .icon {
            color: #074c66;
        }

        .main-posts .icon:hover {
            color: #29a6cc;
        }

        .post-box {
            width: 300px;
            margin: 2px;
            margin-right: 0.5px;
        }

        .post-box img {
            width: 60%;
            height: 200px;
            object-fit: cover;
            border-radius: 0.5rem;
            box-shadow: 0px 10px 50px -10px #8ec3d7;
        }
        .post-box h3{
            color:#074c66 ;
            padding: 10px 40px;
        }

        .post-info {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .post-info h3 {
            margin-left: 5px;
            color: #074c66;
            translate: 0.2s;
        }

        .post-img {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            border: 2px solid #29a6cc;
            border-radius: 50%;
        }

        .post-img img {
            width: 27px;
            height: 27px;
            object-fit: cover;
            border-radius: 50%;
            object-position: center;
        }

        .post-profile {
            display: flex;
            align-items: center;
        }

        .post-profile h3 {
            font-size: 12px;
            font-weight: 600px;
            margin-left: 5px;
        }

        .likes {
            display: flex;
            align-items: center;
        }

        .likes i {
            font-size: 20px;
            margin-left: 10px;
        }

        .likes span {
            font-size: 14px;
            margin-left: 7px;
        }
        #add {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            color: #fff;
            background: hsla(246, 100%, 67%, 0.7);
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                width: 100px;
                height: 100vh;
                background: #f8f8f8;
                padding: 2px;
            }

            .main-home {
                position: absolute;
                width: calc(80% - 50px);
                min-height: 100vh;
                top: 0;
                left: 130px;
                border-radius: 1rem 0 0 1rem;
                z-index: 1000;
            }
        }
    </style>
</head>

<body>
    <!--sidebar-->
    <div class="sidebar">
        <!--profile image-->
        <div class="profile">
            <div class="profile-img">
                <img src="profile1.jpg" alt="">
            </div>
            <div class="name">
                <h1>
                    Doctor
                </h1>

            </div>
        </div>
        <!--Menu-->
        <div class="menu">
            <a href="#">
                <span class="icon">
                    <i class="ri-home-2-line"></i>
                </span>
                Home
            </a>
            <a href="C:/Users/OrdiOe/Documents/medical/doctor/patient/doctor.html">
                <span class="icon">
                    <i class="ri-user-fill"></i>
                </span>
                Patient
            </a>
            <a href="C:/Users/OrdiOe/Documents/medical/doctor/Waiting-Room/waiting_room.html">
                <span class="icon">
                    <i class="ri-time-line"></i>
                </span>
                Waiting Room
            </a>
            <a href="C:/Users/OrdiOe/Documents/medical/doctor/Document/Document.html" class="active">
                <span class="icon">
                    <i class="ri-folders-line"></i>
                </span>
                Document
            </a>
            <a href="C:/Users/OrdiOe/Documents/medical/doctor/Planing/Planing.html">
                <span class="icon">
                    <i class="ri-calendar-line"></i>
                </span>
                Planing
            </a>
            <a href="C:/Users/OrdiOe/Documents/medical/doctor/Finance/Finance.html">
                <span class="icon">
                    <i class="ri-bank-fill"></i>
                </span>
                Finance
            </a>
            <a href="C:/Users/OrdiOe/Documents/medical/doctor/Statistiques/Statistiques.html">
                <span class="icon">
                    <i class="ri-bar-chart-2-line"></i>
                </span>
                Statistiques
            </a>
            <a href="#">
                <span class="icon">
                    <i class="ri-booklet-fill"></i>
                </span>
                Note
            </a>
            <a href="#">
                <span class="icon">
                    <i class="ri-user-settings-line"></i>
                </span>
                Setting
            </a>
            <a href="#">
                <span class="icon">
                    <i class="ri-questionnaire-line"></i>
                </span>
                Aide
            </a>
        </div>
    </div>
    <!--main home-->
    <div class="main-home">
        <!--Header-->
        <div class="header">

            <!--Stories-->
            <div class="stories-title">
                <h1>Patient List</h1>
            </div>
            <!--Search-->
            <div class="search">
                <i class="ri-search-line"></i>
                <input type="text" placeholder="Search">
            </div>
            <!--Content-->
            <div class="header-content">
                <i class="ri-notification-4-fill"></i>
                <i class="ri-mail-unread-fill"></i>
            </div>
        </div>

        <!--Posts-->
        <div class="main-posts">
            <!--Box 1-->
            <div class="post-box">
                <a href="#" class="icon"><img src="profile.jpg" alt=""></a>
                <h3>Marques B</h3>
            </div>

            <!--Box 2-->
            <div class="post-box">
                <a href="#" class="icon"><img src="profile.jpg" alt=""></a>
                <h3>Marques B</h3>
            </div>
            <!--Box 3-->
            <div class="post-box">
                <a href="#" class="icon"><img src="profile.jpg" alt=""></a>
                <h3>Marques B</h3>
            </div>
            <!--Box 4-->
            <div class="post-box">
                <a href="#" class="icon"><img src="profile.jpg" alt=""></a>
                <h3>Marques B</h3>

            </div>

            <!--Box 5-->
            <div class="post-box">
                <a href="#" class="icon"><img src="profile.jpg" alt=""></a>
                <h3>Marques B</h3>
            </div>

            <!--Box 6-->
            <div class="post-box">
                <a href="#" class="icon"><img src="profile.jpg" alt=""></a>
                <h3>Marques B</h3>
            </div>
            <!--Box 7-->
            <div class="post-box">
                <a href="#" class="icon"><img src="profile.jpg" alt=""></a>
                <h3>Marques B</h3>
            </div>

            <!--Box 8-->
            <div class="post-box">
                <a href="#" class="icon"><img src="profile.jpg" alt=""></a>
                <h3>Marques B</h3>
            </div>

            <!--Box 9-->
            <div class="post-box">
                <a href="#" class="icon"><img src="profile.jpg" alt=""></a>
                <h3>Marques B</h3>
            </div>
            <!--Box 10-->
            <div class="post-box">
                <a href="#" class="icon"><img src="profile.jpg" alt=""></a>
                <h3>Marques B</h3>
            </div>

            <!--Box 11-->
            <div class="post-box">
                <a href="#" class="icon"><img src="profile.jpg" alt=""></a>
                <h3>Marques B</h3>
            </div>

            <!--Box 12-->
            <div class="post-box" id="add">
                <a href="#" class="icon">+</a>
            </div>

        </div>
    </div>

</body>

</html>

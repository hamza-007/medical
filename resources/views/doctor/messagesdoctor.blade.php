<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard Pacers</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

:root {
    --color-main: #254e7a;
    --color-secondary: #85c1e5;
    --bg-body:#f7f3ea;
    --main-accent: #254e7a;
    --main-text: #6ca5c7;
    --success: #28a745;
    --danger: #dc3545;
    --shadow: rgba(0,0,0,0.15) 0px 2px 8px;
}

*{
    font-family: 'Nunito', sans-serif;
    text-decoration: none;
    list-style-type: none;
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body{
    color: var(--main-text);
    background: var(--bg-body);
    overflow-x: hidden;
}

#menu-toggle{
    display: none;
}

#menu-toggle:checked ~ .sidebar{
    display: none;
}

#menu-toggle:checked .main-content .engage-card{
    max-width: 698px;
}

#menu-toggle:checked .main-content .emails-card{
    max-width: 344px;
}

.page-wrapper{
    width: 93%;
    margin: auto;
    display: flex;
}

.page-wrapper::before{
    content: "";
    width: 100%;
    max-width: 100%;
    height: 430px;
    position: absolute;
    left: 0;
    top: 0;
    background: var(--color-main);
    z-index: -1;
    border-radius: 0px 0px 0px 100px ;
}
.sidebar{
    width: 250px;
    margin-left: 40px;
}
.brand{
    height: 70px;
    display: flex;
    align-items: center;
    padding-left: 1rem;
}

.brand h3{
    font-size: 1.7rem;
    color: #fff;
    letter-spacing: .3rem;
    margin-top: 2rem;
}

.brand span{
    font-size: 48px;
    color: #fff;
    margin-top: 2rem;
}
.brand small{
    font-size: .9rem;
    color: #fff;
    letter-spacing: .1rem;
    margin-top: 1rem;
}

.profile-card {
    text-align: center;
    margin: 1rem 0rem;
}

.profile-img {
    height: 100px;
    width:100px;
    border-radius: 50%;
    margin: auto;
    background-size: cover;
    background-repeat: no-repeat;
    margin-top: 1.8rem;
    margin-bottom: 1.3rem;
    background-color: #fff;
}

.profile-info{
    color: #fff;
}

.profile-info h2 {
    margin-bottom: .3rem;
}

.profile-info small {
    font-size: 1rem;
    color: #efefef;
}

.profile-action {
    margin: 1.7rem;
}

.btn {
    border: none;
    outline: none;
    border-radius: 20px;
    padding: .6rem 2rem;
    display: flex;
    align-items: center;
    background: var(--main-accent) !important;
    color: #fff;
}

.btn-white {
    color: #fff !important;
}

.btn-main {
    color: #fff;
    background: var(--color-main);
}

.btn span {
    font-size: 1.5rem;
    display: inline-block;
    margin-right: .6rem;
}

.profile-icons {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 3.8rem;
}

.profile-icons span {
    display: inline-block;
    color: #fff;
    font-size: 1.65rem;
}

.sidebar-menu {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 1.8rem;
}

.menu-item a {
    display: block;
    width: 100%;
    padding: 1rem 0rem;
    border-radius: 10px;
}

.menu-item a span {
    display: block;
    text-align: center;
    color: var(--main-text);
    font-size: 1.1rem;
}

.menu-item a span:first-child{
    font-size: 2rem;
    margin-bottom: .4rem;
}

.menu-item a.active {
    background: var(--color-main);
}

.menu-item a.active span {
    color: #fff;
}

.sidebar-card {
    padding: 1rem;
    border-radius: 10px;
    background: #85c1e5;
    margin: 2rem 0rem;
    color: #fff !important;
}

.sidebar-card h3 {
    margin-bottom: 1rem;
    font-size: 1.4rem;
}

.sidebar-card p {
    line-height: 1.9rem;
    margin-bottom: 1rem;
    font-size: .9rem;
    text-align: justify;
}

.sidebar-card a {
    text-align: center;
    font-weight: 600;
    color: var(--main-text);
    display:block;
    font-size: 1.1rem;
}

.main-content {
    padding: 0 20px 0px 60px;
    flex: 1;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 70px;
    border-bottom: 1px solid var(--main-text);
    color: #fff;
}

header label {
    display: inline-block;
    font-size: 1.4rem;
}

.head-icons {
    display: flex;
    align-items: center;
    margin: 1rem;
}

.head-icons span {
    margin-right: 2.5rem;
    display: inline-block;
    font-size: 1.2rem;
}
.head-icons input{
    display: flex;
    align-items: center;
    border-radius: 20px;
    background: #aae4e6;

}
.head-icons-search {
    border: 1px solid #ccc;
    border-radius: 30px;
    height: 50px;
    display: flex;
    align-items: center;
    overflow-x: hidden;
    margin: 1rem;
    margin-top: -0.5rem;
}

.head-icons-search span {
    display: inline-block;
    padding: 0rem 1rem;
    font-size: 1.5rem;
    color: #6ca5c7;
}
.head-icons-search input{
    height: 100%;
    width: 30rem;
    padding: .5rem;
    border: none;
    outline: none;
}

.head-avatar {
    display: flex;
    align-items: center;
    border-radius: 20px;
    color: var(--main-accent);
    background:#fff;
}

.head-avatar .avatar {
    height: 40px;
    width: 40px;
    border-radius: 50%;
    background-size: cover;
    background-repeat: no-repeat;
}

.head-avatar span {
    margin-right: 0;
    padding: 0rem .5rem;
    font-size: .85rem;
    font-weight: 600;
}

.page-header {
    color: #fff;
    margin: 1rem 0rem;
}
.page-header h2{
    font-size: 30px;
    color: #6ca5c7;
    margin: 1rem 0rem;
}

.analytics {
    display: grid;
    grid-template-columns: 65% auto;
    grid-gap: 2rem;
    margin-top: 3rem;
}

.card {
    background: #fff;
    border-radius: 10px;
    box-shadow: var(--shadow);
    padding: 1.5rem;
}
.card-head {
    font-size: 1rem;
    color: #555;
    font-weight: 600;
    padding: -1rem -1rem;
    border-bottom: 1px solid #eee;
    margin: 2rem;
}

.card-body {
    padding: 1.5rem 2rem;
    background: #dae4ec;
    border-radius: .5rem;
}

.card-footer{
    padding: 1rem 2rem;
}

.engage-card,
.emails-card{
    min-width: 100%;
}

.emails-card .card-body{
    padding: .3rem;
}

.chart-wrapper {
    padding-top: 1rem 0rem;
}

.emails-info{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 1rem;
    padding-bottom: 2rem;
}

.bg-success {
    background: var(--success);
    color: #fff;
}

.bg-danger {
    background: var(--danger);
    color: #fff;
}

.bg-warning {
    background: var(--color-secondary);
    color: #fff;
}

.email-stat {
    display: flex;
    align-items: center;
}

.email-stat span {
    display: inline-block;
}

.email-stat .status {
    height: 15px;
    width: 15px;
    display: inline-block;
    border-radius: 50%;
    margin-right: .5rem;
}

img {
    width: 100%;
    height: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table tr {
    border-bottom: 1px solid #efefef;
}

table tr:last-child {
    border-bottom: none;
}

table tr td ,
table tr th{
    padding: 1.2rem 1rem;
}

table tr th {
    text-align: left;
    text-transform: uppercase;
    font-size: .9rem;
}

table small{
    font-weight:600 ;
}

table h4,
table h3,
.competitors .card-body h3,
.competitors .card-body h4 {
    color: #333;
    margin-bottom: .3rem;
}

.grid-2 {
    margin-top: 3.5rem;
    display: grid;
    grid-template-columns: 65% auto;
    grid-gap: 2rem;
    margin-bottom: 3.5rem;
    width: 65rem;
}
.team-img
.team-head {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
}

.team-head small {
    color: var(--main-text);
    font-weight: 600;
}

.team-head select {
    display: inline-block;
    height: 38px;
    padding: .5rem 2rem;
    border-radius: 18px;
    background: #efefef;
    border: none;
    outline: none;
    margin-left: 27rem;
    margin-bottom: .5rem;
    margin-top: -2rem;
}

.team-info {
    display: flex;
    align-items: center;
}

.team-img {
    height: 6rem;
    width: 6rem;
    background: #fff;
    border-radius: 18px;
    padding: .8rem;
    margin-left: .1rem;
}

.team-progress > h4 {
    color: var(--main-text);
    margin-bottom: .5rem;
}

.progress-bar {
    width: 100%;
    background: #efefef;
    position: relative;
    border-radius: 10px;
    height: 15px;
}

.indicator {
    height: 100%;
    border-radius: 10px;
}

.indicator.success {
    background: var(--success);
}

.indicator.danger {
    background: var(--danger);
}

.indicator.info {
    background: var(--color-main);
}

.indicator.warning {
    background: var(--color-secondary);
}

.compete-details{
    width: 12rem;
    display:inline-block;
    margin-bottom: 1.3rem;
    background: #fff;
    border-radius: .5rem;
    padding: .5rem;
    margin-right:.1rem;
}

.compete-details> div:first-child {
    display: inline-block;
    justify-content: space-between;
    align-items: center;
    margin-right: .7rem;
}

.compete-details span #text {
    color: #254e7a;
}
.compete-details span {
    display: flex;
    margin-top: .7rem;
    margin-bottom: .6rem ;
}
.compete-details img {
    width: 27px;
    height: 32px;
    border-radius: 1rem;
    margin-right: .7rem;
    margin-top: -0.5rem;
}

.competitors .card-body {
    padding: 1rem;
}

.compete-details a {
    color: var(--main-text);
}

.compete-details h5 {
    margin: .5rem;
    font-size: 15px;
}
.compete-details h5 > a {
    color: var(--color-main);
    font-weight: 600;
}
.compete-details .info1{
    margin-left: 7rem;
    display: inline-block;
}
@media only screen and (max-width: 1280px) {
    .sidebar {
        display: none;
    }

    #menu-toggle:checked ~ .sidebar {
        display: block;
    }
}

@media only screen and (max-width: 980px){
    .main-content {
        padding: 0 20px;
        flex: 1;
    }

    .analytics , .grid-2 {
        grid-template-columns: 100%;
    }
}

@media only screen and (max-width: 640px){
    .page-wrapper::before {
        min-width: 640px;
    }
}
    </style>
</head>

<body>
    <div class="page-wrapper">
        <input type="checkbox" name="" id="menu-toggle">

        <div class="sidebar">
            <div class="brand">
                <small>DR </small>
                <span class="las la-h-square"></span>
                <h3>
                    OUSE
                </h3>
            </div>

            <div class="profile-card">
                <div class="profile-img" style="background-image: url(img/6.jpg)"></div>
                <div class="profile-info">
                    <h2>GAzzah Mohamed</h2>
                    <small>Ophtalmologiste</small>
                </div>
                <div class="profile-action">
                    <a href="" class="btn btn-white">
                        <span class="las la-grin-stars"></span>
                        Welcome
                    </a>
                </div>
                <div class="profile-icons">
                    <span class="las la-user"></span>
                    <span class="las la-comment-alt"></span>
                    <span class="las la-file-invoice"></span>
                </div>
            </div>

            <div class="sidebar-menu">
                <div class="menu-item">
                    <a href="homedoctor">
                        <span class="las la-home"></span>
                        <span>Home</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="PatientDoctor">
                        <span class="las la-users"></span>
                        <span>Patient</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="" class="active">
                        <span class="las la-comments"></span>
                        <span>Messages</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="planingdoctor">
                        <span class="las la-calendar"></span>
                        <span>Planing</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="finance">
                        <span class="las la-coins"></span>
                        <span>Finance</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="StatDoctor">
                        <span class="las la-square-root-alt"></span>
                        <span>Statistiques</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="TasksDoctor">
                        <span class="las la-file-invoice"></span>
                        <span>Tasks</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="SettingDoctor">
                        <span class="las la-tools"></span>
                        <span>Setting</span>
                    </a>
                </div>
            </div>
            <div class="sidebar-card">
                <h3>Hello Doctor</h3>
                <p>Happiness does not come
                    from doing easy work but
                    from the afterglow of
                    satisfaction that comes after
                    the achievement of a difficult
                    task that demanded our best.</p>
                <a href="" class="btn btn-block btn-white"><u>Get started</a>
            </div>
        </div>
        <div class="main-content">
            <header>
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>

                <div class="head-icons">
                    <span class="las la-search"></span>
                    <span class="las la-comment-alt"></span>
                    <span class="las la-bell"></span>
                    <div class="head-avatar">
                        <div class="avatar" style="background-image: url(img/1.jpeg)"></div>
                        <span>Dr Gazzah</span>
                    </div>
                </div>
            </header>

            <main>
                <div class="page-header">
                    <h1>Have A Great Day</h1>
                    <small>"Almost nothing nee be said when you have eyes."</small>
                    <h2>Messages</h2>
                </div>
                <div class="grid-2">
                    <div class="card team-progress">
                        <div class="head-icons-search">
                            <a href="#"><span class="las la-search"></span></a>
                            <input type="search" placeholder="search here">
                        </div>
                        <div class="card-body">

                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="team-info">
                                                <div class="team-img">
                                                    <img src="img/femme.png" alt="">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="company-info">
                                                <h4>Sirine Balghouthi</h4>
                                                <small>Patiente</small>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary">Contact</a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <div class="team-info">
                                                <div class="team-img">
                                                    <img src="img/gender.png" alt="">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="company-info">
                                                <h4>Ahmed Balghouthi</h4>
                                                <small>Patient</small>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary">Contact</a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <div class="team-info">
                                                <div class="team-img">
                                                    <img src="img/dental-care.png" alt="">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="company-info">
                                                <h4>Sirine Balghouthi</h4>
                                                <small>Dentiste</small>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary">Contact</a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <div class="team-info">
                                                <div class="team-img">
                                                    <img src="img/femme.png" alt="">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="company-info">
                                                <h4>Narjes Boudidah</h4>
                                                <small>Patiente</small>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary">Contact</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="team-info">
                                                <div class="team-img">
                                                    <img src="img/staff.jpg" alt="">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="company-info">
                                                <h4>Faten Balghouthi</h4>
                                                <small>Staff</small>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary">Contact</a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <div class="team-info">
                                                <div class="team-img">
                                                    <img src="img/pediatrician.png" alt="">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="company-info">
                                                <h4>Sirine Balghouthi</h4>
                                                <small>Pediatrician</small>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary">Contact</a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <div class="team-info">
                                                <div class="team-img">
                                                    <img src="img/dental-care.png" alt="">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="company-info">
                                                <h4>sirine balghouthi</h4>
                                                <small>Dentiste</small>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary">Contact</a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <div class="team-info">
                                                <div class="team-img">
                                                    <img src="img/heart (1).png" alt="">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="company-info">
                                                <h4>sirine Balghouthi</h4>
                                                <small>Cardiologue</small>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary">Contact</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card competitors">
                        <div class="card-head">
                            <div class="team-head">
                                <div>
                                    <h4>Contacts</h4>
                                    <small>Person with the same disease</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="compete-details">

                                <span><img src="img/heart (1).png" alt="">
                                    <h4 id="text">Amor Kenani</h4>
                                </span>
                                <a href="#">
                                    <h5><i class="las la-id-card"></i> Cardiologue</h5>
                                </a>
                                <a href="#">
                                    <h5><i class="las la-comment-alt"></i> Contact</h5>
                                </a>


                            </div>

                            <div class="compete-details">

                                <span><img src="img/skin (1).png" alt="">
                                    <h4 id="text">Amor Kenani</h4>
                                </span>
                                <a href="#">
                                    <h5><i class="las la-id-card"></i> Dermatologue</h5>
                                </a>
                                <a href="#">
                                    <h5><i class="las la-comment-alt"></i> Contact</h5>
                                </a>


                            </div>

                            <div class="compete-details">

                                <span><img src="img/pharmacy.png" alt="">
                                    <h4 id="text">Amor Kenani</h4>
                                </span>
                                <a href="#">
                                    <h5><i class="las la-id-card"></i> Pharmacy</h5>
                                </a>
                                <a href="#">
                                    <h5><i class="las la-comment-alt"></i> Contact</h5>
                                </a>


                            </div>

                            <div class="compete-details">

                                <span><img src="img/laboratory.png" alt="">
                                    <h4 id="text">Amor Kenani</h4>
                                </span>
                                <a href="#">
                                    <h5><i class="las la-id-card"></i> Laboratory</h5>
                                </a>
                                <a href="">
                                    <h5><i class="las la-comment-alt"></i> Contact</h5>
                                </a>


                            </div>

                            <div class="compete-details">

                                <span><img src="img/dental-care.png" alt="">
                                    <h4 id="text">Amor Kenani</h4>
                                </span>
                                <a href="#">
                                    <h5><i class="las la-id-card"></i> Dentiste</h5>
                                </a>
                                <a href="#">
                                    <h5><i class="las la-comment-alt"></i> Contact</h5>
                                </a>

                            </div>

                            <div class="compete-details">

                                <span><img src="img/heart (1).png" alt="">
                                    <h4 id="text">Amor Kenani</h4>
                                </span>
                                <a href="#">
                                    <h5><i class="las la-id-card"></i> Cardiologue</h5>
                                </a>
                                <a href="#">
                                    <h5><i class="las la-comment-alt"></i> Contact</h5>
                                </a>

                            </div>
                        </div>
                    </div>
                    </div>
            </main>
        </div>
    </div>

</body>

</html>

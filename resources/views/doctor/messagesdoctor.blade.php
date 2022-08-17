<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

:root {
    --color-main: #89c7d6;
    --color-secondary: #5fa4a7;
    --bg-body: #eae80;
    --main-accent: #4793a7;
    --main-text: #036f7e;
    --success: #28a745;
    --danger: #dc3545;
    --shadow: rgba(0, 0, 0, 0.15) 0px 2px 8px;
}

* {
    font-family: 'Nunito', sans-serif;
    text-decoration: none;
    list-style-type: none;
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    color: var(--main-text);
    background: var(--bg-body);
    overflow-x: hidden;
}

#menu-toggle {
    display: none;
}

#menu-toggle:checked~.sidebar {
    display: none;
}

#menu-toggle:checked .main-content .engage-card {
    max-width: 698px;
}

#menu-toggle:checked .main-content .emails-card {
    max-width: 344px;
}

.page-wrapper {
    width: 93%;
    margin: auto;
    display: flex;
}

.page-wrapper::before {
    content: "";
    width: 100%;
    max-width: 100%;
    height: 430px;
    position: absolute;
    left: 0;
    top: 0;
    background: var(--color-main);
    z-index: -1;
    border-radius: 0px 0px 0px 100px;
}

.sidebar {
    width: 250px;
    margin-left: 40px;
}

.brand {
    height: 70px;
    display: flex;
    align-items: center;
    padding-left: 1rem;
}

.brand h3 {
    font-size: 1.8rem;
    color: #fff;
}

.profile-card {
    text-align: center;
    margin: 1rem 0rem;
}

.profile-img {
    height: 100px;
    width: 100px;
    border-radius: 50%;
    margin: auto;
    background-size: cover;
    background-repeat: no-repeat;
    margin-top: 1.8rem;
    margin-bottom: 1.3rem;
}

.profile-info {
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
    background: #fff;
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

.menu-item a span:first-child {
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
    background: var(--color-secondary);
    margin: 2rem 0rem;
    color: #fff;
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
    display: block;
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
}

.head-icons span {
    margin-right: 2.5rem;
    display: inline-block;
    font-size: 1.2rem;
}

.head-avatar {
    display: flex;
    align-items: center;
    border-radius: 20px;
    background: #aae4e6;
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
}

.card-head {
    font-size: 1rem;
    color: #555;
    font-weight: 600;
    padding: 1rem 2rem;
    border-bottom: 1px solid #eee;
}

.card-body {
    padding: 1.5rem 2rem;
}

.card-footer {
    padding: 1rem 2rem;
}

.engage-card,
.emails-card {
    min-width: 100%;
}

.emails-card .card-body {
    padding: .3rem;
}

.chart-wrapper {
    padding-top: 1rem 0rem;
}

.emails-info {
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

table tr td,
table tr th {
    padding: 1.2rem 1rem;
}

table tr th {
    text-align: left;
    text-transform: uppercase;
    font-size: .9rem;
}

table small {
    font-weight: 600;
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
}

.team-head {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 2rem;
}

.team-head small {
    color: var(--main-text);
    font-weight: 600;
}

.team-head select {
    display: inline-block;
    height: 38px;
    padding: .5rem 2rem;
    border-radius: 8px;
    background: #efefef;
    border: none;
    outline: none;
}

.team-info {
    display: flex;
    align-items: center;
}

.team-img {
    height: 50px;
    width: 50px;
    border-radius: 8px;
    background: var(--bg-body);
    margin-right: .7rem;
    padding: .8rem;
}

.team-progress>h4 {
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

.compete-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.3rem;
}

.compete-info>div:first-child {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-right: .7rem;
}

.compete-info img {
    width: 100px;
    border-radius: 10px;
    margin-right: .7rem;
}

.competitors .card-body {
    padding: 1rem;
}

.compete-details small {
    display: inline-block;
    margin-bottom: .3rem;
}

.compete-details p>a {
    color: var(--color-main);
    font-weight: 600;
}

.compete-sales {
    text-align: right;
}

.compete-sales span {
    font-size: .9rem;
    font-weight: 600;
}

.compete-sales h3 {
    color: #444 !important;
    font-size: 1.04rem;
}

@media only screen and (max-width: 1280px) {
    .sidebar {
        display: none;
    }

    #menu-toggle:checked~.sidebar {
        display: block;
    }
}

@media only screen and (max-width: 980px) {
    .main-content {
        padding: 0 20px;
        flex: 1;
    }

    .analytics,
    .grid-2 {
        grid-template-columns: 100%;
    }
}

@media only screen and (max-width: 640px) {
    .page-wrapper::before {
        min-width: 640px;
    }
}

main {
    margin-top: 85px;
    padding: 1rem 1.5rem;
    padding-right:0.5rem ;
    background: #e9ecb5;
    min-height: calc(100vh - 90px);
    border-radius: 10px;
}

.cards {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    grid-gap: 2rem;
    margin-top: 1rem;
}

.card-single {
    display: inline-block;
    justify-content: space-between;
    background: rgb(255, 255, 255);
    padding: 2rem;
    border-radius: 1rem;
    width: 50rem;
    height: 4rem;
}


.card-single .info{
    margin-top: -2.5rem;
    margin-left: 25rem;
}


.card-single img {
    justify-content: center;
    height: 3rem;
    width: 3rem;
    margin-left: -1rem;
    margin-top: -1.5rem;
    border-radius: 20rem;
}


.card-single #text {
    font-size: 16px;
    color: #000;
    margin-left: 1rem;
    top: -1.5rem;
}

.card-single .icon {
    font-size: 24px;
    justify-content: space-between;
    margin-left: 14rem;
    margin-top: -2rem;
}

.card-single .icon a {
    color: #00987f;
}

.card-single .icon a:hover {
    font-size: 32px;
    color: #016f5d;
}

.card-single:last-child h1,
.card-single:last-chil div:first-child span,
.card-single:last-chil div:last-child span {
    color: #fff;
}
#text1 {
    color: #fff;
    font-size: 2.5rem;
    margin-left: 30.1rem;
    display: flex;
    margin-top: 2rem;
    margin-bottom: -3rem;
}
    </style>
</head>

<body>
    <div class="page-wrapper">
        <input type="checkbox" name="" id="menu-toggle">

        <div class="sidebar">
            <div class="brand">
                <h3>
                    <span class="lab la-untappd"></span>
                    Pacers
                </h3>
            </div>

            <div class="profile-card">
                <div class="profile-img" style="background-image: url(img/6.jpg)"></div>
                <div class="profile-info">
                    <h2>Heather Parker</h2>
                    <small>Web Architect</small>
                </div>
                <div class="profile-action">
                    <a href="" class="btn btn-white">
                        <span class="las la-coins"></span>
                        $2,300
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
                    <a href="">
                        <span class="las la-home"></span>
                        <span>Home</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="">
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
                    <a href="">
                        <span class="las la-calendar"></span>
                        <span>Planing</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="">
                        <span class="las la-coins"></span>
                        <span>Finance</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="">
                        <span class="las la-square-root-alt"></span>
                        <span>Statistiques</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="">
                        <span class="las la-file-invoice"></span>
                        <span>Tasks</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="">
                        <span class="las la-tools"></span>
                        <span>Setting</span>
                    </a>
                </div>
            </div>
            <div class="sidebar-card">
                <h3>Hello Parker</h3>
                <p>You are yet to complete certain tasks that are assigned to you and
                    haven't update the product manager of your current status quo
                </p>
                <a href="" class="btn btn-block btn-white">Get started</a>
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
                        <span>John Snow</span>
                    </div>
                </div>
            </header>

            <main>
                <div class="cards">
                    <div class="card-single">

                        <div>
                            <img src="img/profile1.jpg" alt="">
                        </div>
                        <div class="info">
                            <span id="text"> Nous utilisons ces cookies pour recueil...</span>
                           <span class="las la-eye"></span>
                        </div>
                    </div>

                    <div class="card-single">

                        <div>
                            <img src="img/profile2.jpg" alt="">
                        </div>
                        <div class="info">
                            <span id="text"> Nous utilisons ces cookies pour recueil...</span>
                           <span class="las la-check-circle"></span>
                        </div>
                    </div>

                    <div class="card-single">

                        <div>
                            <img src="img/profile3.jpg" alt="">
                        </div>
                        <div class="info">
                            <span id="text"> Nous utilisons ces cookies pour recueil...</span>
                           <span class="las la-eye"></span>
                        </div>
                    </div>

                    <div class="card-single">

                        <div>
                            <img src="img/profile4.jpg" alt="">
                        </div>
                        <div class="info">
                            <span id="text"> Nous utilisons ces cookies pour recueil...</span>
                           <span class="las la-check-circle"></span>
                        </div>
                    </div>

                    <div class="card-single">

                        <div>
                            <img src="img/profile5.jpg" alt="">
                        </div>
                        <div class="info">
                            <span id="text"> Nous utilisons ces cookies pour recueil...</span>
                           <span class="las la-eye"></span>
                        </div>
                    </div>

                    <div class="card-single">

                        <div>
                            <img src="img/profile6.jpg" alt="">
                        </div>
                        <div class="info">
                            <span id="text"> Nous utilisons ces cookies pour recueil...</span>
                           <span class="las la-check-circle"></span>
                        </div>
                    </div>

                    <div class="card-single">

                        <div>
                            <img src="img/profile7.jpg" alt="">
                        </div>
                        <div class="info">
                            <span id="text"> Nous utilisons ces cookies pour recueil...</span>
                           <span class="las la-eye"></span>
                        </div>
                    </div>

                    <div class="card-single">

                        <div>
                            <img src="img/profile8.jpg" alt="">
                        </div>
                        <div class="info">
                            <span id="text"> Nous utilisons ces cookies pour recueil...</span>
                           <span class="las la-check-circle"></span>
                        </div>
                    </div>

                    <div class="card-single">

                        <div>
                            <img src="img/profile8.jpg" alt="">
                        </div>
                        <div class="info">
                            <span id="text"> Nous utilisons ces cookies pour recueil...</span>
                           <span class="las la-eye"></span>
                        </div>
                    </div>

                    <div class="card-single">

                        <div>
                            <img src="img/profile9.jpg" alt="">
                        </div>
                        <div class="info">
                            <span id="text"> Nous utilisons ces cookies pour recueil...</span>
                           <span class="las la-check-circle"></span>
                        </div>
                    </div>

                    <div class="card-single">

                        <div>
                            <img src="img/profile10.jpg" alt="">
                        </div>
                        <div class="info">
                            <span id="text"> Nous utilisons ces cookies pour recueil...</span>
                           <span class="las la-eye"></span>
                        </div>
                    </div>

                    <div class="card-single">

                        <div>
                            <img src="img/profile11.jpg" alt="">
                        </div>
                        <div class="info">
                            <span id="text"> Nous utilisons ces cookies pour recueil...</span>
                           <span class="las la-check-circle"></span>
                        </div>
                    </div>

                </div>

            </main>
        </div>
    </div>
</body>

</html>

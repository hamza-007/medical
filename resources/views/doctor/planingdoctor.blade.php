<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planing</title>
    <link href="{{url('css/evo-calendar.min.css')}}" rel="stylesheet">
    <link href="{{url('css/evo-calendar.midnight-blue.min.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
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
    font-size: 1.7rem;
    color: #f7f3ea;
    letter-spacing: .3rem;
    margin-top: 2rem;
}
.brand span{
    font-size: 48px;
    color: #f7f3ea;
    margin-top: 2rem;
}
.brand small{
    font-size: .9rem;
    color: #f7f3ea;
    letter-spacing: .1rem;
    margin-top: 1rem;
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
    color: #f7f3ea;
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
    color: #f7f3ea;
}

.btn-white {
    background: #f7f3ea;
}

.btn-main {
    color: #f7f3ea;
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
    color: #f7f3ea;
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
    color: #f7f3ea;
}

.sidebar-card {
    padding: 1rem;
    border-radius: 10px;
    background: #85c1e5;
    margin: 2rem 0rem;
    color: #f7f3ea;
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
    color: #f7f3ea;
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
    background: #fff;
    color:  var(--main-accent);
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
    color: #f7f3ea;
    margin: 1rem 0rem;
}

.analytics {
    display: grid;
    grid-template-columns: 65% auto;
    grid-gap: 2rem;
    margin-top: 3rem;
}

.card {
    background: #f7f3ea;
    border-radius: 10px;
    box-shadow: var(--shadow);
}
.card-head {
    display: flex;
}

.card-head h3{
    font-size: 1.5rem;
    color: #555;
    font-weight: 600;
    padding: 1rem 2rem;
    border-bottom: 1px solid #eee;
    margin-top: 1rem;
    margin-left: -2rem;
}

.card-head img {
    width: 3rem;
    height: 3rem;
    margin: 1.5rem;
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
    color: #f7f3ea;
}

.bg-danger {
    background: var(--danger);
    color: #f7f3ea;
}

.bg-warning {
    background: var(--color-secondary);
    color: #f7f3ea;
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

.compete-details h4 {
    color:#527b93 !important;
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
main{
    width: 62.7rem;
}
.planing {
    margin-top: 40px;
    padding: 1rem 1.5rem;
    padding-right:0.5rem ;
    background: #fff;
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
    color: #f7f3ea;
}
#text1 {
    color: #f7f3ea;
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
                <small>DR </small>
                <span class="las la-h-square"></span>
                <h3>
                    OUSE
                </h3>
            </div>

            <div class="profile-card">
                <div class="profile-img" style="background-image: url(img/6.jpg)"></div>
                <div class="profile-info">
                    <h2>Gazzah Mohamed</h2>
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
                    <a href="#">
                        <span class="las la-comments"></span>
                        <span>Messages</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="planingdoctor"  class="active">
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
                        <span class="las la-user-ninja"></span>
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
                        <span class="las la-square-root-alt"></span>
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
                </div>
                <div class="planing">
                    <div id="calendar"></div>
                    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
                    <script src="{{url('evo-calendar.min.js')}}"></script>

                    <script>

                        $(document).ready(function () {
                            $('#calendar').evoCalendar({
                                theme: "Royal Navy",
                                calendarEvents: [
                                    {
                                        id: 'event1', // Event's ID (required)
                                        name: "New Year", // Event name (required)
                                        date: "January/1/2020", // Event date (required)
                                        description: "The heart touching greetings will make feel anyone very special.Wish your near and dear one with our special greetings.",
                                        type: "holiday", // Event type (required)
                                        everyYear: true // Same event every year (optional)
                                    },
                                    {
                                        id: 'event2', // Event's ID (required)
                                        name: "Woman's Day", // Event name (required)
                                        date: "March/8/2020", // Event date (required)
                                        description: "An equal world is an enabled word.How will you help forge a gender equal world?Celebrate women's achievement. Raise awareness against bias. Take action for equality.",
                                        type: "holiday", // Event type (required)
                                        everyYear: true // Same event every year (optional)
                                    },
                                    {
                                        name: "Vacation Leave",
                                        badge: "02/13 - 02/15", // Event badge (optional)
                                        date: ["February/13/2020", "February/15/2020"], // Date range
                                        description: "Vacation leave for 3 days.", // Event description (optional)
                                        type: "event",
                                        color: "#63d867" // Event custom color (optional)
                                    }
                                ]
                            })
                        })


                    </script>
                </div>
            </main>
        </div>
    </div>
</body>

</html>

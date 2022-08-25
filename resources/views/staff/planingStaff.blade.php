<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planing staff</title>
     <link href="{{url('css/styleStaffFiche.css')}}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

:root {
    --color-main: #99bddf;
    --color-secondary: #9ad9db;
    --bg-body:#fff;
    --main-accent: #eb96aa;
    --main-text: #2f4f75;
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
    background: #99bddf;
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
    color: var(--bg-body);
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
    color: var(--main-accent);
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

#compete-details{
    display: flex !important;
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
    grid-template-columns: repeat(1, 1fr);
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
    color: #527b93;
}

.email-stat img {
    width: 2.5rem;
    height: 2.5rem;
    margin: .8rem;
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
}

.team-head {
    display: flex !important;
    align-items: center;
    padding: 2rem;
}
.team-head h3 {
    color: #254e7a;
    font-size: 20px;
}

.team-head img{
    width: 4rem;
    height: 4rem;
    margin: .5rem;
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
    height: 5rem;
    width: 5rem;
    border-radius: 1rem;
    background: var(--bg-body);
    margin-right: 1.5rem;
    padding: .8rem;
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

.compete-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.3rem;
}

.compete-info > div:first-child {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-right: .7rem;
}

.compete-info img {
    width: 70px;
    border-radius: 10px;
    margin-right: .7rem;
}

.competitors .card-body {
    padding: 1rem;
    width: 22rem;
}

#card {
    width: 38rem;
    background:#f3dbe9;
    color: var(--color-main);
    border-radius: 2rem;
    margin: 1rem;
}

#compete-details span {
    display: flex;
    margin-bottom: -2rem;
}

#compete-details span h4 {
    color: var(--main-accent);
    margin-top: 2rem;
    font-size: 1rem;
}
.compete-details {
    padding: 1rem;
    margin: 1rem;
    background: #f3dbe9;
    border-radius: 2rem;
}

.compete-details h4 {
    color:#527b93 !important;
}

.compete-details small {
    display: inline-block;
    margin-bottom: .3rem;
    font-size: 1rem;
    color: #254e7a;
}

.compete-details p span {
    font-size: 1.5rem;
}

.compete-details p > a {
    color: var(--color-main);
    font-weight: 600;
}

.compete-details span {
    display: flex;
}

.compete-details span img {
    width: 4rem;
    height: 4rem;
    margin-right: .5rem;
    padding: 1rem;
    background: #fff;
    border-radius: 1rem;
}

.compete-details span h4 {
    margin-top: 1rem;
    margin-left: .5rem;
}
.compete-details a h5{
    margin-left: 4.5rem;
    font-size: 1rem;
    color:var(--color-main);
}
.compete-details  h5{
    margin-left: 4.5rem;
    font-size: 1rem;
}

.compete-sales {
    text-align: right;
}

.compete-sales span {
    font-size: .9rem;
    font-weight: 600;
}

.compete-sales h3  {
    color: #444 !important;
    font-size: 1.04rem;
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
.card-hear .team-head h3 {
    font-size: 30px;
    color: var(--main-accent);
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
                <div class="profile-img" style="background-image: url(img/9.jpg)"></div>
                <div class="profile-info">
                    <h2>Balghouthi Latifa</h2>
                    <small>Secrétaire Médicale</small>
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
                    <a href="homeStaff">
                        <span class="las la-home"></span>
                        <span>Home</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="staff">
                        <span class="las la-calendar-day"></span>
                        <span>RDV</span>
                    </a>
                </div>


                <div class="menu-item">
                    <a href="PatientStaff">
                        <span class="las la-users"></span>
                        <span>Patient</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="messagesStaff">
                        <span class="las la-comment-alt"></span>
                        <span>Messages</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="planingStaff" class="active">
                        <span class="las la-columns"></span>
                        <span>Planing</span>
                    </a>
                </div>


                <div class="menu-item">
                    <a href="taskStaff">
                        <span class="las la-tasks"></span>
                        <span>Tasks</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="SettingStaff">
                        <span class="las la-cogs"></span>
                        <span>Setting</span>
                    </a>
                </div>
            </div>
            <div class="sidebar-card">
                <h3>Hello </h3>
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
                    <small>"Nothing ever comes to one,
                        that is worth having,
                        except as a result of hard work."</small>
                </div>

                <div class="grid-2">
                    <div class="card team-progress">
                        <div class="card-hear">
                            <div class="team-head">
                                <div>
                                    <h3>Calendrier</h3>
                                    <small>Have a nice day</small>
                                </div>

                            </div>
                        </div>
                        <div class="card-body" id="card">
                            <span class="body1">
                                <h3>Month view for <span id="dateHolder"/></h3>
                                <table id="calWrapper">
                                </table>

                                <script type="text/javascript">
                                    (function () {
                                        var today = new Date();
                                        var month, day, year, firstDay;
                                        month = today.getMonth();
                                        day = today.getDate();
                                        year = today.getFullYear();

                                        firstDay = new Date(year, month, 1);

                                        var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                                        var days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

                                        function displayDate() {
                                            var holder = document.getElementById("dateHolder");
                                            holder.innerText = months[month] + ' ' + year;
                                        }

                                        function createDayHeaders() {
                                            var wrapper = document.getElementById("calWrapper");
                                            var row = document.createElement("tr");
                                            for (var i = 0; i < days.length; i++) {
                                                var el = document.createElement("th");
                                                el.setAttribute("class", "dayHeader");
                                                el.innerText = days[i];
                                                row.appendChild(el);
                                            }
                                            wrapper.appendChild(row);
                                        }

                                        function createDayCells() {
                                            var dayOne = firstDay.getDay();
                                            var iDay = 0;

                                            var wrapper = document.getElementById("calWrapper");
                                            var lastDay = new Date(year, month + 1, 0).getDate();

                                            while (iDay < lastDay) {
                                                var row = document.createElement("tr");
                                                for (var i = 0; i < days.length; i++) {
                                                    var el = document.createElement("td");

                                                    if (dayOne === i || iDay > 0) {
                                                        if (day === iDay)
                                                            el.setAttribute("class", "dayCell today");
                                                        else
                                                            el.setAttribute("class", "dayCell");

                                                        if (iDay < lastDay)
                                                            iDay++;
                                                        else
                                                            break;
                                                        el.innerText = iDay;
                                                    }
                                                    row.appendChild(el);
                                                }
                                                wrapper.appendChild(row);
                                            }
                                        }

                                        displayDate(today);
                                        createDayHeaders();
                                        createDayCells();
                                    })();
                                </script>
                            </span>
                        </div>
                    </div>

                    <div class="card competitors">
                        <div class="card-head">
                            <div class="team-head">
                                <div id="compete-details">
                                    <span>
                                        <img src="img/check-list.png" alt="">
                                        <h4> Mes RDV</h4>
                                    </span>
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
                                    <h5><i class="las la-phone"></i> 29 701 966</h5>
                                </a>
                                <a href="#">
                                    <h5><i class="las la-calendar-alt"></i> 5/10/2022</h5>
                                </a>
                                <h5><i class="las la-map-marker"></i><a href=""><small>Rue Mohamed
                                            Hilioui</small></a></h5>

                            </div>

                            <div class="compete-details">

                                <span><img src="img/skin (1).png" alt="">
                                    <h4 id="text">Amor Kenani</h4>
                                </span>
                                <a href="#">
                                    <h5><i class="las la-id-card"></i> Dermatologue</h5>
                                </a>
                                <a href="#">
                                    <h5><i class="las la-phone"></i> 29 701 966</h5>
                                </a>
                                <a href="#">
                                    <h5><i class="las la-calendar-alt"></i> 7/11/2022</h5>
                                </a>
                                <h5><i class="las la-map-marker"></i><a href=""><small>Rue Mohamed
                                            Hilioui</small></a></h5>

                            </div>

                            <div class="compete-details">

                                <span><img src="img/pediatrician.png" alt="">
                                    <h4 id="text">Amor Kenani</h4>
                                </span>
                                <a href="#">
                                    <h5><i class="las la-id-card"></i> Pediatrician</h5>
                                </a>
                                <a href="#">
                                    <h5><i class="las la-phone"></i> 29 701 966</h5>
                                </a>
                                <a href="#">
                                    <h5><i class="las la-calendar-alt"></i> 15/11/2022</h5>
                                </a>
                                <h5><i class="las la-map-marker"></i><a href=""><small>Rue Mohamed
                                            Hilioui</small></a></h5>

                            </div>

                            <div class="compete-details">

                                <span><img src="img/dental-care.png" alt="">
                                    <h4 id="text">Amor Kenani</h4>
                                </span>
                                <a href="#">
                                    <h5><i class="las la-id-card"></i> Dentiste</h5>
                                </a>
                                <a href="">
                                    <h5><i class="las la-phone"></i> 29 701 966</h5>
                                </a>
                                <a href="">
                                    <h5><i class="las la-calendar-alt"></i> 5/12/2022</h5>
                                </a>
                                <h5><i class="las la-map-marker"></i><a href=""><small>Rue Mohamed
                                            Hilioui</small></a></h5>

                            </div>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planing </title>
    <link href="{{url('css/stylePlaningPatient.css')}}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
                    <h2>Balghouthi Sirine</h2>
                    <small>Patiente</small>
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
                    <a href="homePatient">
                        <span class="las la-home"></span>
                        <span>Home</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="ProfilePatient">
                        <span class="las la-user"></span>
                        <span>Profile</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="MessagesPatient">
                        <span class="las la-comments"></span>
                        <span>Messages</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="PlaningPatient" class="active">
                        <span class="las la-calendar"></span>
                        <span>Planing</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="statPatient">
                        <span class="las la-square-root-alt"></span>
                        <span>Statistiques</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="tasksPatient">
                        <span class="las la-file-invoice"></span>
                        <span>Tasks</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="SettingPatient">
                        <span class="las la-tools"></span>
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
                        <div class="avatar" style="background-image: url(img/emoji.png)"></div>
                        <span>Welcome</span>
                    </div>
                </div>
            </header>

            <main>
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
                                <h3>Month view for <span id="dateHolder" /></h3>
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="{{url('css/profile.css')}}" rel="stylesheet">
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
                <div class="profile-img" style="background-image: url(img/66.png)"></div>
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
                    <a href="ProfilePatient" class="active">
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
                    <a href="PlaningPatient">
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
                <div class="page-header">
                    <h1>Have A Great Day</h1>
                    <small>"Keep smiling, because life is a beautiful thing and there's so much to smile about."</small>
                </div>


                <div class="grid-2">
                    <div class="card team-progress">
                        <div class="card-hear">
                            <div class="team-head">
                                    <h3>Medicines Schedule</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <table>
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>Drug name</th>
                                        <th>Timing</th>
                                        <th >weekly Schedule</th>
                                        <th>Dally frequency</th>
                                        <th>Progress</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="team-info">
                                                <div class="team-img">
                                                    <img src="img/pills.png" alt="">
                                                </div>
                                            </div>
                                        </td>
                                        <td>Capsules</td>
                                        <td>After Eating</td>
                                        <td id="day">
                                            <div id="sat">S</div>
                                            <div id="sun">S</div>
                                            <div id="mon">M</div>
                                            <div id="tue">T</div>
                                            <div id="wed">W</div>
                                            <div id="thu">T</div>
                                            <div id="fri">F</div>
                                        </td>
                                        <td >Two times a day</td>
                                        <td>
                                            <div class="team-progress">
                                                <h4>85%</h4>
                                                <div class="progress-bar">
                                                    <div class="indicator success" style="width: 85%;"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td id="action">
                                            <a href="" class="btn btn-skip" >Skip</a>
                                            <a href="" class="btn btn-primary">Done</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="team-info">
                                                <div class="team-img">
                                                    <img src="img/syrup.png" alt="">
                                                </div>
                                            </div>
                                        </td>
                                        <td>Syrup</td>
                                        <td>After Eating</td>
                                        <td id="day">
                                            <div id="sat">S</div>
                                            <div id="sun">S</div>
                                            <div id="mon">M</div>
                                            <div id="tue">T</div>
                                            <div id="wed">W</div>
                                            <div id="thu">T</div>
                                            <div id="fri">F</div>
                                        </td>
                                        <td>Two times a day</td>
                                        <td>
                                            <div class="team-progress">
                                                <h4>85%</h4>
                                                <div class="progress-bar">
                                                    <div class="indicator success" style="width: 85%;"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td id="action">
                                            <a href="" class="btn btn-skip" >Skip</a>
                                            <a href="" class="btn btn-primary">Done</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="team-info">
                                                <div class="team-img">
                                                    <img src="img/injection.png" alt="">
                                                </div>
                                            </div>
                                        </td>
                                        <td>Injection</td>
                                        <td>After Eating</td>
                                        <td id="day">
                                            <div id="sat">S</div>
                                            <div id="sun">S</div>
                                            <div id="mon">M</div>
                                            <div id="tue">T</div>
                                            <div id="wed">W</div>
                                            <div id="thu">T</div>
                                            <div id="fri">F</div>
                                        </td>
                                        <td>Two times a day</td>
                                        <td>
                                            <div class="team-progress">
                                                <h4>85%</h4>
                                                <div class="progress-bar">
                                                    <div class="indicator success" style="width: 85%;"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td id="action">
                                            <a href="" class="btn btn-skip" >Skip</a>
                                            <a href="" class="btn btn-primary">Done</a>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="grid-2">
                    <div class="card team-progress">
                        <div class="card-hear">
                            <div class="team-head">
                                    <h3>Upcoming Appointments</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <table>
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>Doctor name</th>
                                        <th>Category</th>
                                        <th>Hospital name</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Location</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="team-info">
                                                <div class="team-img">
                                                    <img src="img/skin (1).png" alt="">
                                                </div>
                                            </div>
                                        </td>
                                        <td>Brain C. Bryant</td>
                                        <td>Dermatologist</td>
                                        <td>Stanford Hospital</td>
                                        <td>08-01-2020</td>
                                        <td >6:30 PM</td>
                                        <td >Kairouan</td>
                                        <td id="action">
                                            <a href="" class="btn btn-skip" >Cancel</a>
                                            <a href="scd" class="btn btn-primary">Re-Schedule</a>
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
                                        <td>Michael N. Marriott</td>
                                        <td>Dentist</td>
                                        <td>Lifecare Hospital</td>
                                        <td>29-02-2020</td>
                                        <td >4:15 PM</td>
                                        <td >Sousse</td>
                                        <td id="action">
                                            <a href="" class="btn btn-skip" >Cancel</a>
                                            <a href="" class="btn btn-primary">Re-Schedule</a>
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
                                        <td>Bradley S. Bartiett</td>
                                        <td>Pediatrician</td>
                                        <td>Stanford Hospital</td>
                                        <td>21-01-2020</td>
                                        <td >8:00 PM</td>
                                        <td >Kairouan</td>
                                        <td id="action">
                                            <a href="" class="btn btn-skip" >Cancel</a>
                                            <a href="" class="btn btn-primary">Re-Schedule</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>

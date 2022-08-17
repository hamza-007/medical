<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient</title>
    <link href="{{url('css/stylePatient.css')}}" rel="stylesheet">
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
                    <a href="PatientDoctor" class="active">
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
                </div>

                <div class="grid-2">
                    <div class="card team-progress">
                        <div class="card-hear">
                            <div class="team-head">
                                <div>
                                    <h3>List of patient</h3>
                                </div>
                                <select name="" id="">
                                    <option value="">User</option>
                                    <option value="">Healthy</option>
                                    <option value="">Stable Health</option>
                                    <option value="">Bad Health</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-body">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Full name</th>
                                        <th>Date</th>
                                        <th width="22%">Progress</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="team-info">
                                                <div class="team-img">
                                                    <img src="img/femme (1).png" alt="">
                                                </div>
                                                <div class="team-details">
                                                    <h4>sirine Balghouthi</h4>
                                                    <small>20 years , 50kg , 1.6m</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="company-info">
                                                <h4>03/07/22</h4>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="team-progress">
                                                <h4>65%</h4>
                                                <div class="progress-bar">
                                                    <div class="indicator danger" style="width: 65%;"></div>
                                                </div>
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
                                                <div class="team-details">
                                                    <h4>sirine Balghouthi</h4>
                                                    <small>20 years , 50kg , 1.6m</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="company-info">
                                                <h4>13/02/22</h4>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="team-progress">
                                                <h4>85%</h4>
                                                <div class="progress-bar">
                                                    <div class="indicator success" style="width: 85%;"></div>
                                                </div>
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
                                                    <img src="img/femme (1).png" alt="">
                                                </div>
                                                <div class="team-details">
                                                    <h4>sirine Balghouthi</h4>
                                                    <small>20 years , 50kg , 1.6m</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="company-info">
                                                <h4>17/11/19</h4>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="team-progress">
                                                <h4>35%</h4>
                                                <div class="progress-bar">
                                                    <div class="indicator info" style="width: 35%;"></div>
                                                </div>
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
                                                <div class="team-details">
                                                    <h4>sirine Balghouthi</h4>
                                                    <small>20 years , 50kg , 1.6m</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="company-info">
                                                <h4>06/12/18</h4>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="team-progress">
                                                <h4>35%</h4>
                                                <div class="progress-bar">
                                                    <div class="indicator warning" style="width: 35%;"></div>
                                                </div>
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
                                <img src="img/11.jpeg" alt="">
                                <div>
                                    <h4>Contact</h4>
                                    <small>More than 400+ new members</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="compete-info">
                                <div>
                                    <img src="img/1.jpeg" alt="">
                                    <div class="compete-details">
                                        <h4>Ophtalmologiste</h4>
                                        <small><strong> Badra</small>
                                        <p><span class="las la-map-marked-alt"></span><a href=""> Code resource</a></p>
                                    </div>
                                </div>
                                <div class="compete-sales">
                                    <h3>77248900</h3>
                                </div>

                            </div>


                            <div class="compete-info">
                                <div>
                                    <img src="img/11.jpeg" alt="">
                                    <div class="compete-details">
                                        <h4>Ophtalmologiste</h4>
                                        <small>Narjes Boudidah</small>
                                        <p><span class="las la-map-marked-alt"></span><a href=""> Code resource</a></p>
                                    </div>
                                </div>
                                <div class="compete-sales">
                                    <h3>77245900</h3>
                                </div>
                            </div>



                            <div class="compete-info">
                                <div>
                                    <img src="img/1.jpeg" alt="">
                                    <div class="compete-details">
                                        <h4>Ophtalmologiste</h4>
                                        <small>Aboudi</small>
                                        <p><span class="las la-map-marked-alt"></span><a href=""> Code resource</a></p>
                                    </div>
                                </div>
                                <div class="compete-sales">
                                    <h3>77852900</h3>
                                </div>
                            </div>


                            <div class="compete-info">
                                <div>
                                    <img src="img/11.jpeg" alt="">
                                    <div class="compete-details">
                                        <h4>Ophtalmologiste</h4>
                                        <small>Mohamed Balghouthi</small>
                                        <p><span class="las la-map-marked-alt"></span><a href=""> Code resource</a></p>
                                    </div>
                                </div>
                                <div class="compete-sales">
                                    <h3>77888999</h3>
                                </div>

                            </div>

                            <div class="compete-info">
                                <div>
                                    <img src="img/1.jpeg" alt="">
                                    <div class="compete-details">
                                        <h4>Ophtalmologiste</h4>
                                        <small>Lamya Badra</small>
                                        <p><span class="las la-map-marked-alt"></span><a href=""> Code resource</a></p>
                                    </div>
                                </div>
                                <div class="compete-sales">
                                    <h3>77777777</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>

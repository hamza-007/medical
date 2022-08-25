<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDV</title>
    <link href="{{url('css/Staff.css')}}" rel="stylesheet">
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
                    <a href="staff" class="active">
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
                    <a href="planingStaff">
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
                    task that demanded our best.
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
                                    <img src="img/patient.png" alt="">
                                    <h3>List des RDV</h3>
                                    <small>396</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table>
                                <thead>
                                    <tr>
                                        <th>CIN</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Opération</th>
                                        <th>Date RDV</th>
                                        <th>Prix</th>
                                        <th>Observation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h4>AE1000</h4>
                                        </td>
                                        <td>
                                            <h4>Ahmed</h4>
                                        </td>
                                        <td>
                                            <h4>Mohamed</h4>
                                        </td>
                                        <td>
                                            <h4>Nouvelle consultation</h4>
                                        </td>
                                        <td>
                                            <h4>18/02/2019</h4>
                                        </td>
                                        <td>
                                            <h4>70dt</h4>
                                        </td>
                                        <td>
                                            <h4>votre Observation</h4>
                                        </td>
                                        <td>
                                            <i class="las la-user-plus" id="plus"></i> <i class="las la-user-edit" id="edit"></i>
                                        </td>

                                    </tr>


                                    <tr>
                                        <td>
                                            <h4>AE1000</h4>
                                        </td>
                                        <td>
                                            <h4>Ahmed</h4>
                                        </td>
                                        <td>
                                            <h4>Mohamed</h4>
                                        </td>
                                        <td>
                                            <h4>Nouvelle consultation</h4>
                                        </td>
                                        <td>
                                            <h4>18/02/2019</h4>
                                        </td>
                                        <td>
                                            <h4>70dt</h4>
                                        </td>
                                        <td>
                                            <h4>votre Observation</h4>
                                        </td>
                                        <td>
                                            <i class="las la-user-plus" id="plus"></i> <i class="las la-user-edit" id="edit"></i>
                                        </td>

                                    </tr>


                                    <tr>
                                        <td>
                                            <h4>AE1000</h4>
                                        </td>
                                        <td>
                                            <h4>Ahmed</h4>
                                        </td>
                                        <td>
                                            <h4>Mohamed</h4>
                                        </td>
                                        <td>
                                            <h4>Nouvelle consultation</h4>
                                        </td>
                                        <td>
                                            <h4>18/02/2019</h4>
                                        </td>
                                        <td>
                                            <h4>70dt</h4>
                                        </td>
                                        <td>
                                            <h4>votre Observation</h4>
                                        </td>
                                        <td>
                                            <i class="las la-user-plus" id="plus"></i> <i class="las la-user-edit" id="edit"></i>
                                        </td>

                                    </tr>


                                    <tr>
                                        <td>
                                            <h4>AE1000</h4>
                                        </td>
                                        <td>
                                            <h4>Ahmed</h4>
                                        </td>
                                        <td>
                                            <h4>Mohamed</h4>
                                        </td>
                                        <td>
                                            <h4>Nouvelle consultation</h4>
                                        </td>
                                        <td>
                                            <h4>18/02/2019</h4>
                                        </td>
                                        <td>
                                            <h4>70dt</h4>
                                        </td>
                                        <td>
                                            <h4>votre Observation</h4>
                                        </td>
                                        <td>
                                            <i class="las la-user-plus" id="plus"></i> <i class="las la-user-edit" id="edit"></i>
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="{{ url('css/profile.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <style>
        form {
            text-align: center;
        }

        .contact form .inputBox {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .contact form .inputBox input,
        select {
            height: 4rem;
            width: 49%;
            padding: 0 1rem;
            margin: 1rem 0;
            font-size: 1.7rem;
            color: var(--black);
        }

        .contact form textarea {
            height: 20rem;
            resize: none;
            padding: 1rem;
            font-size: 1.5rem;
            width: 100%;
        }

        .contact form input[type="submit"] {
            width: 20rem;
        }

        .contact form input[type="submit"]:hover {
            background: var(--black);
        }

        .contact form .inputBox input,
        select {
            width: 100%;
        }

        .contact form input[type="submit"] {
            width: 100%;
        }

        .container {
            max-width: 720px;
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
                                <h3>Book RDV</h3>
                            </div>
                        </div>
                        <div class="col-md-10" data-aos="flip-down">
                            <form class="main-form" action="{{ url('appointment') }}" method="Post">
                                @csrf
                                <div class="inputBox">
                                    <input type="text" name="name" style="color:black;" required=""
                                        placeholder="full name">
                                    <input type="email" name="email" style="color:black;" required=""
                                        placeholder="Email address">
                                    <input type="number" name="phone" style="color:black;" required=""
                                        placeholder="Phone number">
                                    <input type="date" name="date" style="color:black;" required=""><br>
                                </div>
                                <select name="" id="">
                                    <option value="" disabled selected>make an appointment</option>
                                    <option value="09-11 am">09-11 am</option>
                                    <option value="11-03 pm">11-03 pm</option>
                                    <option value="03-06 pm">03-06 pm</option>
                                    <option value="06-09 pm">06-09 pm</option>
                                </select>
                                <textarea name="" id="" cols="30" rows="10" placeholder="message ( optional )"></textarea>
                                <input type="submit" name="" id="" value="make appointment"
                                    class="button">
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <div class="grid-2">
            <div class="card team-progress">
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
                                <td>6:30 PM</td>
                                <td>Kairouan</td>
                                <td id="action">
                                    <a href="" class="btn btn-skip">Cancel</a>
                                    <a href="" class="btn btn-primary">Re-Schedule</a>
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
                                <td>4:15 PM</td>
                                <td>Sousse</td>
                                <td id="action">
                                    <a href="" class="btn btn-skip">Cancel</a>
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
                                <td>8:00 PM</td>
                                <td>Kairouan</td>
                                <td id="action">
                                    <a href="" class="btn btn-skip">Cancel</a>
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

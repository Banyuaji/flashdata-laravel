<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
        }

        p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #2d3436;
        }

        a,
        a:hover,
        a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        .dark {
            color : #2d3436;

        }

        .cbrand {
            border-radius: 15%;
            width: 200px;
        }

        .ccard {
            padding: 0;
        }

        .progress-bar {
            background-color: #0984e3;
        }
        .navbar {
            padding: 15px 10px;
            background: #fff;
            border: none;
            border-radius: 0;
            margin-bottom: 40px;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .navbar-btn {
            box-shadow: none;
            outline: none !important;
            border: none;
        }

        .line {
            width: 100%;
            height: 1px;
            border-bottom: 1px dashed #ddd;
            margin: 40px 0;
        }

        #sidebar {
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            z-index: 999;
            background: #7386D5;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #6d7fcc;
        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #47748b;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }

        #sidebar ul li a:hover {
            color: #7386D5;
            background: #fff;
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #6d7fcc;
        }

        ul.CTAs {
            padding: 20px;
        }

        ul.CTAs a {
            text-align: center;
            font-size: 0.9em !important;
            display: block;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        #content {
            width: calc(100% - 250px);
            padding: 40px;
            min-height: 100vh;
            transition: all 0.3s;
            position: absolute;
            top: 0;
            right: 0;
        }
    </style>
    <title>Profile</title>
</head>
<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <img class="cbrand" src="{{ URL::to('/assets/img/ahi2.jpg') }}">
            </div>

            <ul class="list-unstyled components">
                <p>Adhi Satia Banyuaji</p>
                <li>
                    <a href="/profile">Profile</a>
                    <a href="/exp">Experience</a>
                    <a href="/port">Portofolio</a>
                </li>
            </ul>
        </nav>
        <div id="content">
            <nav class="navbar navbar-default">
                <h5>"Life is not a game of luck. If you wanna win, work hard" -Sora</h5>
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><i class="fas fa-user"></i><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <h2>Experience</h2>
            <div class="card">
                <div class="card-body">
                    <h4>Experience dalam kehidupan</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body ccard">
                                    <img width="100%" height="200px" src="{{ URL::to('/assets/img/it.jpg') }}">
                                </div>
                                <div class="card-footer">
                                    <h5 class="card-title">Lomba pekan IT</h5>
                                    <p>Juara 2 dari lomba web di unsika</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body ccard">
                                    <img width="100%" height="200px" src="{{ URL::to('/assets/img/men.jpeg') }}">
                                </div>
                                <div class="card-footer">
                                    <h5 class="card-title">Belajar android</h5>
                                    <p>Belajar android bersama Kak Ian dan tim</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body ccard">
                                    <img width="100%" height="200px" src="{{ URL::to('/assets/img/dicoding.png') }}">
                                </div>
                                <div class="card-footer">
                                    <h5 class="card-title">Sertifikat dicoding</h5>
                                    <p>Sertifikat pemrograman web pemula</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body ccard">
                                    <img width="100%" height="200px" src="{{ URL::to('/assets/img/akar.png') }}">
                                </div>
                                <div class="card-footer">
                                    <h5 class="card-title">Pt adhi karya</h5>
                                    <p>design web pertama</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body ccard">
                                    <img width="100%" height="200px" src="{{ URL::to('/assets/img/smart.png') }}">
                                </div>
                                <div class="card-footer">
                                    <h5 class="card-title">Web starbhakmart</h5>
                                    <p>web uji level ke2</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body ccard">
                                    <img width="100%" height="200px" src="{{ URL::to('/assets/img/qwe.jpg') }}">
                                </div>
                                <div class="card-footer">
                                    <h5 class="card-title">Kunjin</h5>
                                    <p>Kunjungan indusrti ke PT. spasi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="line"></div>
        </div>
    </div>
</body>
</html>
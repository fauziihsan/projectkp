<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?= base_url() ?>/assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?= base_url() ?>/assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?= base_url() ?>/assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="<?= base_url() ?>/assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                    CT
                </a>
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Creative Tim
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="<?= base_url() ?>/assets/img/faces/avatar.jpg" />
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>
                                Tania Andrew
                                <b class="caret"></b>
                            </span>
                        </a>
                        <div class="clearfix"></div>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini">MP</span>
                                        <span class="sidebar-normal">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini">EP</span>
                                        <span class="sidebar-normal">Edit Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini">S</span>
                                        <span class="sidebar-normal">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="active">
                        <a href="./dashboard.html">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#pagesExamples">
                            <i class="material-icons">image</i>
                            <p>Management Surat
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="pagesExamples">
                            <ul class="nav">
                                <li>
                                    <a href="./pages/pricing.html">
                                        <span class="sidebar-mini">P</span>
                                        <span class="sidebar-normal">Surat Masuk</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./pages/timeline.html">
                                        <span class="sidebar-mini">T</span>
                                        <span class="sidebar-normal">Surat Keluar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./pages/login.html">
                                        <span class="sidebar-mini">LP</span>
                                        <span class="sidebar-normal">Surat Keterangan</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#componentsExamples">
                            <i class="material-icons">apps</i>
                            <p>Template Surat
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="componentsExamples">
                            <ul class="nav">
                                <li>
                                    <a href="./components/buttons.html">
                                        <span class="sidebar-mini">B</span>
                                        <span class="sidebar-normal">Buttons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./components/grid.html">
                                        <span class="sidebar-mini">GS</span>
                                        <span class="sidebar-normal">Grid System</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./components/panels.html">
                                        <span class="sidebar-mini">P</span>
                                        <span class="sidebar-normal">Panels</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./components/sweet-alert.html">
                                        <span class="sidebar-mini">SA</span>
                                        <span class="sidebar-normal">Sweet Alert</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./components/notifications.html">
                                        <span class="sidebar-mini">N</span>
                                        <span class="sidebar-normal">Notifications</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./components/icons.html">
                                        <span class="sidebar-mini">I</span>
                                        <span class="sidebar-normal">Icons</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./components/typography.html">
                                        <span class="sidebar-mini">T</span>
                                        <span class="sidebar-normal">Typography</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#formsExamples">
                            <i class="material-icons">content_paste</i>
                            <p>Galery
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="formsExamples">
                            <ul class="nav">
                                <li>
                                    <a href="./forms/regular.html">
                                        <span class="sidebar-mini">RF</span>
                                        <span class="sidebar-normal">Profil Kelurahan</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./forms/extended.html">
                                        <span class="sidebar-mini">EF</span>
                                        <span class="sidebar-normal">Struktur Kelurahan</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./forms/validation.html">
                                        <span class="sidebar-mini">VF</span>
                                        <span class="sidebar-normal">Struktur LPM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./forms/wizard.html">
                                        <span class="sidebar-mini">W</span>
                                        <span class="sidebar-normal">Struktur Linmas</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./forms/wizard.html">
                                        <span class="sidebar-mini">W</span>
                                        <span class="sidebar-normal">Pemuda Kelurahan</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./forms/wizard.html">
                                        <span class="sidebar-mini">W</span>
                                        <span class="sidebar-normal">Ketua RT & RW</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#tablesExamples">
                            <i class="material-icons">grid_on</i>
                            <p>Management Pegawai
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="tablesExamples">
                            <ul class="nav">
                                <li>
                                    <a href="./tables/regular.html">
                                        <span class="sidebar-mini">RT</span>
                                        <span class="sidebar-normal">Regular Tables</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./tables/extended.html">
                                        <span class="sidebar-mini">ET</span>
                                        <span class="sidebar-normal">Extended Tables</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./tables/datatables.net.html">
                                        <span class="sidebar-mini">DT</span>
                                        <span class="sidebar-normal">DataTables.net</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#mapsExamples">
                            <i class="material-icons">place</i>
                            <p>Management User
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="mapsExamples">
                            <ul class="nav">
                                <li>
                                    <a href="./maps/google.html">
                                        <span class="sidebar-mini">GM</span>
                                        <span class="sidebar-normal">Google Maps</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./maps/fullscreen.html">
                                        <span class="sidebar-mini">FSM</span>
                                        <span class="sidebar-normal">Full Screen Map</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./maps/vector.html">
                                        <span class="sidebar-mini">VM</span>
                                        <span class="sidebar-normal">Vector Map</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="./widgets.html">
                            <i class="material-icons">logout</i>
                            <p>Logout</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Dashboard </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">
                                        Notifications
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group form-search is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
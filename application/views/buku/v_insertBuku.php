<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Insert</title>

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/dashboard/') ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?= base_url('assets/dashboard/') ?>css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?= base_url('assets/dashboard/') ?>css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?= base_url('assets/dashboard/') ?>css/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="<?= base_url('assets/dashboard/') ?>assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="<?= base_url('assets/dashboard/') ?>assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="<?= base_url('assets/dashboard/') ?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?= base_url('assets/dashboard/') ?>css/owl.carousel.css" type="text/css">
    <link href="<?= base_url('assets/dashboard/') ?>css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="<?= base_url('assets/dashboard/') ?>css/fullcalendar.css">
    <link href="<?= base_url('assets/dashboard/') ?>css/widgets.css" rel="stylesheet">
    <link href="<?= base_url('assets/dashboard/') ?>css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/dashboard/') ?>css/style-responsive.css" rel="stylesheet" />
    <link href="<?= base_url('assets/dashboard/') ?>css/xcharts.min.css" rel=" stylesheet">
    <link href="<?= base_url('assets/dashboard/') ?>css/jquery-ui-1.10.4.min.css" rel="stylesheet">
</head>

<body>
    <!-- container section start -->
    <section id="container" class="">


        <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo">Perpus<span class="lite">takaan</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>
                </ul>
                <!--  search form end -->
            </div>

            <div class="top-nav notification-row">
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?= base_url('assets/dashboard/') ?>img/logo-big.png" style="width: 15px; height:15px;">
                            </span>
                            <span class="username">Admin</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li>
                                <a href="login.html"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
        </header>
        <!--header end-->

        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">
                    <li class="sub-menu">
                        <a class="" href="index.html">
                            <i class="icon_house_alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?= base_url('buku') ?>" class="">
                            <i class="icon_documents_alt"></i>
                            <span>Buku</span>
                            <span class="arrow arrow-right"></span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon_group"></i>
                            <span>Anggota</span>
                            <span class="arrow arrow-right"></span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="">
                            <i class="icon_profile"></i>
                            <span>User</span>
                            <span class="arrow arrow-right"></span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="icon_table"></i>
                            <span>Peminjaman</span>
                            <span class="arrow arrow-right"></span>
                        </a>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->

        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!--overview start-->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-book"></i>BUKU</h3>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home"></i><a href="<?= base_url('coba') ?>">Home</a></li>
                            <li><i class="fa fa-book"></i>Buku</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="<?= base_url('buku/insert') ?>" method="post">
                            <table>
                                <tr>
                                    <td>Judul Buku</td>
                                    <td>:</td>
                                    <td><input type="text" name="judul" ></td>
                                </tr>
                                <tr>
                                    <td>Pengarang</td>
                                    <td>:</td>
                                    <td><input type="text" name="pengarang"></td>
                                </tr>
                                <tr>
                                    <td>Penerbit</td>
                                    <td>:</td>
                                    <td><input type="text" name="penerbit" ></td>
                                </tr>
                                <tr>
                                    <td>Tahun Terbit</td>
                                    <td>:</td>
                                    <td><input type="date" name="thn_terbit" ></td>
                                </tr>
                                <tr>
                                    <td>ISBN</td>
                                    <td>:</td>
                                    <td><input type="text" name="isbn" ></td>
                                </tr>
                                <tr>
                                    <td>Jumlah Buku</td>
                                    <td>:</td>
                                    <td><input type="number" name="jumlah_buku" ></td>
                                </tr>
                                <tr>
                                    <td>Lokasi</td>
                                    <td>:</td>
                                    <td><input type="text" name="lokasi" ></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Input</td>
                                    <td>:</td>
                                    <td><input type="date" name="tgl_input"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" class="btn btn-success" name="submit">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
                <!-- project team & activity end -->
                <!--main content end-->
            </section>
            <!-- container section start -->

            <!-- javascripts -->
            <script src="<?= base_url('assets/dashboard/') ?>js/jquery.js"></script>
            <script src="<?= base_url('assets/dashboard/') ?>js/jquery-ui-1.10.4.min.js"></script>
            <script src="<?= base_url('assets/dashboard/') ?>js/jquery-1.8.3.min.js"></script>
            <script type="text/javascript" src="<?= base_url('assets/dashboard/') ?>js/jquery-ui-1.9.2.custom.min.js"></script>
            <!-- bootstrap -->
            <script src="<?= base_url('assets/dashboard/') ?>js/bootstrap.min.js"></script>
            <!-- nice scroll -->
            <script src="<?= base_url('assets/dashboard/') ?>js/jquery.scrollTo.min.js"></script>
            <script src="<?= base_url('assets/dashboard/') ?>js/jquery.nicescroll.js" type="text/javascript"></script>
            <!-- charts scripts -->
            <script src="<?= base_url('assets/dashboard/') ?>assets/jquery-knob/js/jquery.knob.js"></script>
            <script src="<?= base_url('assets/dashboard/') ?>js/jquery.sparkline.js" type="text/javascript"></script>
            <script src="<?= base_url('assets/dashboard/') ?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
            <script src="<?= base_url('assets/dashboard/') ?>js/owl.carousel.js"></script>
            <!-- jQuery full calendar -->
            <script src="<?= base_url('assets/dashboard/') ?>js/fullcalendar.min.js">
            </script>
            <!-- Full Google Calendar - Calendar -->
            <script src="<?= base_url('assets/dashboard/') ?>assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
            <!--script for this page only-->
            <script src="<?= base_url('assets/dashboard/') ?>js/calendar-custom.js"></script>
            <script src="<?= base_url('assets/dashboard/') ?>js/jquery.rateit.min.js"></script>
            <!-- custom select -->
            <script src="<?= base_url('assets/dashboard/') ?>js/jquery.customSelect.min.js"></script>
            <script src="<?= base_url('assets/dashboard/') ?>assets/chart-master/Chart.js"></script>

            <!--custome script for all page-->
            <script src="<?= base_url('assets/dashboard/') ?>js/scripts.js"></script>
            <!-- custom script for this page-->
            <script src="<?= base_url('assets/dashboard/') ?>js/sparkline-chart.js"></script>
            <script src="<?= base_url('assets/dashboard/') ?>js/easy-pie-chart.js"></script>
            <script src="<?= base_url('assets/dashboard/') ?>js/jquery-jvectormap-1.2.2.min.js"></script>
            <script src="<?= base_url('assets/dashboard/') ?>js/jquery-jvectormap-world-mill-en.js"></script>
            <script src="<?= base_url('assets/dashboard/') ?>js/xcharts.min.js"></script>
            <script src="<?= base_url('assets/dashboard/') ?>js/jquery.autosize.min.js"></script>
            <script src="<?= base_url('assets/dashboard/') ?>js/jquery.placeholder.min.js"></script>
            <script src="<?= base_url('assets/dashboard/') ?>js/gdp-data.js"></script>
            <script src="<?= base_url('assets/dashboard/') ?>js/morris.min.js"></script>
            <script src="<?= base_url('assets/dashboard/') ?>js/sparklines.js"></script>
            <script src="<?= base_url('assets/dashboard/') ?>js/charts.js"></script>
            <script src="<?= base_url('assets/dashboard/') ?>js/jquery.slimscroll.min.js"></script>

</body>

</html>
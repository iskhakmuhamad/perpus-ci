<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Dashboard</title>

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

            <?php include('headUser.php') ?>

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah User
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="form-validate form-horizontal " id="register_form" method="post" action="<?= base_url('user/insert') ?>">
                                    <div class="form-group ">
                                        <label for="nama" class="control-label col-lg-2">Nama Lengkap<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="fullname" name="nama" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="username" class="control-label col-lg-2">Username<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" name="username" type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="password" class="control-label col-lg-2">Password<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" name="password" type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-2">Email<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="email" type="email" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="level" class="control-label col-lg-2">Level<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control" name="level" type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-primary" type="submit" name="submit">Save</button>
                                            <button class="btn btn-default" type="button">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
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
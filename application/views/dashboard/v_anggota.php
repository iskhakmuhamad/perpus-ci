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

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">
                    <li>
                        <form class="navbar-form" action="<?= base_url('anggota/search') ?>">
                            <input class="form-control" placeholder="Search by Nim" type="text" name="search">
                        </form>
                    </li>
                </ul>
                <!--  search form end -->
            </div>

            <?php include('headAnggota.php') ?>
            
            <div class="row">
                <div class="col-lg-12">
                    <a href="<?= base_url('anggota/insert?page_insert=yes') ?>">
                        <button class="btn btn-primary" style="margin-bottom:10px;">Tambah Anggota</button></a>
                    <section class="panel">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nim</th>
                                    <th>Nama</th>
                                    <th>TeMpat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Prodi</th>
                                    <th>Tahun Masuk</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($anggota as $row) {
                                    ?>
                                    <tr>
                                        <td><?= $row->nim ?></td>
                                        <td><?= $row->nama ?> </td>
                                        <td><?= $row->tempat_lahir ?></td>
                                        <td><?= $row->tgl_lahir ?></td>
                                        <td>
                                            <?php if ($row->jk == 'P')
                                                    echo "Perempuan";
                                                else {
                                                    echo "Laki - Laki ";
                                                } ?></td>
                                        <td><?= $row->prodi ?></td>
                                        <td><?= $row->thn_masuk ?></td>
                                        <td>
                                            <a href="<?= base_url('anggota/delete?nim=' . $row->nim) ?>">
                                                <button class="btn btn-danger">Delete</button>
                                            </a>
                                            <a href="<?= base_url('anggota/editPage?nim=' . $row->nim) ?>">
                                                <button class="btn btn-info">Edit</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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
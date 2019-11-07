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
                <a class="" href="<?= base_url('home') ?>">
                    <i class="icon_house_alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="<?= base_url('buku') ?>" class="">
                    <i class="icon_documents_alt"></i>
                    <span>Buku</span>
                    <span class="arrow arrow-right"></span>
                </a>
            </li>
            <li class="active">
                <a href="<?= base_url('anggota') ?>" class="">
                    <i class="icon_group"></i>
                    <span>Anggota</span>
                    <span class="arrow arrow-right"></span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="<?= base_url('user') ?>" href="">
                    <i class="icon_profile"></i>
                    <span>User</span>
                    <span class="arrow arrow-right"></span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="<?= base_url('transaksi') ?>" class="">
                    <i class="icon_table"></i>
                    <span>Transaksi</span>
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
                <h3 class="page-header"><i class="fa fa-group"></i>Anggota</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="<?= base_url('home') ?>">Home</a></li>
                    <li><i class="fa fa-group"></i>Anggota</li>
                </ol>
            </div>
        </div>
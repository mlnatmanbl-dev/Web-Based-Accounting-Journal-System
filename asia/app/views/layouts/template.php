<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title; ?></title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="<?php echo $title; ?>" />
    <meta name="author" content="" />
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>

    <link rel="stylesheet" href="<?php echo base_url('css/adminlte.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-icons.min.css') ?>" />
  </head>
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
      <nav class="app-header navbar navbar-expand bg-body">
        <div class="container-fluid">
          Aplikasi Siklus Akuntansi
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown user-menu">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img
                  src="<?php echo base_url('assets/img/avatar5.png') ?>"
                  class="user-image rounded-circle shadow"
                  alt="User Image"
                />
                <span class="d-none d-md-inline">Programmer Name</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                <li class="user-footer">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                  <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
         <!--begin::Sidebar Brand-->
          <?php require_once VIEW_PATH . 'layouts/sidebar.php'; ?>
        <!--end::Sidebar Wrapper-->
      </aside>
      <main class="app-main">
        <div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6 mb-2"><h3 class="mb-0"><?php echo $title ?></h3></div>   
            </div>
               <div>
		  				   <?php echo getFlash() ?>
	     		     </div>
               <?php require_once VIEW_PATH . $view_name.".php"; ?>
          </div>
        </div>
      </main>
      <footer class="app-footer">
        <div class="float-end d-none d-sm-inline">Universitas Andalas</div>
        <strong>
          Copyright &copy; 2025&nbsp;
        </strong>
        All rights reserved.
      </footer>
    </div>

      <script src="<?php base_url('public/js/bootstrap.min.js') ?>"></script>
  </body>
</html>

<?php
    // MEMULAI SESSION
    session_start();
    
    // CEK SESSION
    if(isset($_SESSION['username']))
    {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title> Point Of Sales (POS) </title>

    <!-- Bootstrap -->
    <link href="template/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="template/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="template/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="template/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="template/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="template/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="template/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="template/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="template/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="template/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="template/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="template/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="template/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="template/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="template/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="template/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="template/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="template/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Point Of Sales (POS)</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="template/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Fuad Rifki</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu Utama</h3>
                <ul class="nav side-menu">
                  <li>
                    <a href="index.php?controller=sistem&method=home"><i class="fa fa-home"></i> Beranda </a>
                  </li>
                  <li><a><i class="fa fa-cubes"></i> Produk <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php?controller=categories&method=select"> Data Kategori Produk </a></li>
                      <li><a href="index.php?controller=products&method=select"> Data Produk </a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="index.php?controller=customers&method=select"><i class="fa fa-users"></i> Data Customer </a>
                  </li>
                  <li>
                    <a href="index.php?controller=sales&method=select"><i class="fa fa-bar-chart-o"></i> Penjualan </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="template/production/images/img.jpg" alt="">Fuad Rifki
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="index.php?controller=sistem&method=logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <?php
            include ("$_GET[controller]/$_GET[method].php");
          ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
          <span>Copyright &copy; <?php echo date('Y'); ?> Fuad Rifqi Zamzami. All rights reserved</span>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="template/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="template/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="template/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="template/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="template/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="template/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="template/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="template/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="template/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="template/vendors/Flot/jquery.flot.js"></script>
    <script src="template/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="template/vendors/Flot/jquery.flot.time.js"></script>
    <script src="template/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="template/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="template/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="template/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="template/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="template/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="template/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="template/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="template/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="template/vendors/moment/min/moment.min.js"></script>
    <script src="template/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Datatables -->
    <script src="template/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="template/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="template/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="template/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="template/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="template/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="template/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="template/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="template/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="template/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="template/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="template/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="template/vendors/jszip/dist/jszip.min.js"></script>
    <script src="template/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="template/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="template/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="template/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="template/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="template/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="template/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="template/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="template/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="template/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="template/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="template/vendors/starrr/dist/starrr.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="template/build/js/custom.min.js"></script>
	
  </body>
</html>

<?php
    // CEK SESSION
    }
    else {
        echo "<script> 
               alert('Maaf! Anda Harus Login!'); 
               window.location = 'index.php';
              </script>";
    }
?>
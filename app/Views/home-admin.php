<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bayu Rifki Alghifari</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/ico" href="<?= base_url ?>assets/front-end/images/favicon.ico" />
  
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url ?>assets/front-end/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url ?>assets/front-end/css/animate.css">
  
  <link rel="stylesheet" href="<?= base_url ?>assets/front-end/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url ?>assets/front-end/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= base_url ?>assets/front-end/css/magnific-popup.css">

  <link rel="stylesheet" href="<?= base_url ?>assets/front-end/css/aos.css">

  <link rel="stylesheet" href="<?= base_url ?>assets/front-end/css/ionicons.min.css">

  <link rel="stylesheet" href="<?= base_url ?>assets/front-end/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?= base_url ?>assets/front-end/css/jquery.timepicker.css">

  
  <link rel="stylesheet" href="<?= base_url ?>assets/front-end/css/flaticon.css">
  <link rel="stylesheet" href="<?= base_url ?>assets/front-end/css/icomoon.css">
  <link rel="stylesheet" href="<?= base_url ?>assets/front-end/css/style.css">
</head>
<body>

  <div id="colorlib-page">
    <?php view('partials/admin/navigation', $data) ?>

    <div id="colorlib-main">
      <?php view('page/' . $page, $data) ?>
      
      <?php view('partials/footer', $data) ?>

    </div><!-- END COLORLIB-MAIN -->
  </div><!-- END COLORLIB-PAGE -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="<?= base_url ?>assets/front-end/js/jquery.min.js"></script>
  <script src="<?= base_url ?>assets/front-end/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?= base_url ?>assets/front-end/js/popper.min.js"></script>
  <script src="<?= base_url ?>assets/front-end/js/bootstrap.min.js"></script>
  <script src="<?= base_url ?>assets/front-end/js/jquery.easing.1.3.js"></script>
  <script src="<?= base_url ?>assets/front-end/js/jquery.waypoints.min.js"></script>
  <script src="<?= base_url ?>assets/front-end/js/jquery.stellar.min.js"></script>
  <script src="<?= base_url ?>assets/front-end/js/owl.carousel.min.js"></script>
  <script src="<?= base_url ?>assets/front-end/js/jquery.magnific-popup.min.js"></script>
  <script src="<?= base_url ?>assets/front-end/js/aos.js"></script>
  <script src="<?= base_url ?>assets/front-end/js/jquery.animateNumber.min.js"></script>
  <script src="<?= base_url ?>assets/front-end/js/bootstrap-datepicker.js"></script>
  <script src="<?= base_url ?>assets/front-end/js/scrollax.min.js"></script>
  <script src="<?= base_url ?>assets/front-end/js/main.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript">
  $(() =>
  {
    // initialize responsive datatable
    const $table  = $('#dt_basic').DataTable()
    $table.columns( 0 )
    .order( 'asc' )
    .draw()
  })
  </script>
    
</body>
</html>
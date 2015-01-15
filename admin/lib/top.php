<?php function top($title,$template){ ?>
<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, application admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <!-- /meta -->

    <title>Admin Azzahra - <?php echo $title; ?></title>

    <!-- page level plugin styles -->
    
	<?php
	if($template=='data_table'){ echo '
    <link rel="stylesheet" href="plugins/chosen/chosen.min.css">
    <link rel="stylesheet" href="plugins/datatables/jquery.dataTables.css">
	'; }
	?>
	<!-- page level plugin styles -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker.css">
    <link rel="stylesheet" href="plugins/timepicker/jquery.timepicker.css">
    <link rel="stylesheet" href="plugins/colorpicker/css/colorpicker.css">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="plugins/bootstrap-colorpalette/bootstrap-colorpalette.css">
    <!-- /page level plugin styles -->
    <!-- /page level plugin styles -->
	
    
    <!-- core styles -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- /core styles -->

    <!-- template styles -->
    <link rel="stylesheet" href="css/skins/palette.css" id="skin">
    <link rel="stylesheet" href="css/fonts/font.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- template styles -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Demo Panel -->
    <link rel="stylesheet" href="css/panel.css">
    <!-- /Demo Panel -->

    <!-- load modernizer -->
    <script src="plugins/modernizr.js"></script>
</head>


<?php } ?>
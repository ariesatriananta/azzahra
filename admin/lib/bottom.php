<?php function bottom($page){ ?>
	<!-- core scripts -->
    <script src="plugins/jquery-1.11.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="plugins/jquery.slimscroll.min.js"></script>
    <script src="plugins/jquery.easing.min.js"></script>
    <script src="plugins/appear/jquery.appear.js"></script>
    <script src="plugins/jquery.placeholder.js"></script>
    <!-- /core scripts -->
	
    <?php if($page=='data_table'){ echo '
    <!-- page level scripts -->
    <script src="plugins/chosen/chosen.jquery.min.js"></script>
    <script src="plugins/datatables/jquery.dataTables.js"></script>
    <!-- /page level scripts -->
    <!-- page script -->
    <script src="js/bootstrap-datatables.js"></script>
    <script src="js/datatables.js"></script>
    <!-- /page script -->
    ';} ?>
    
    <?php if($page=='catalog'){ echo '
    <!-- page level scripts -->
    <script src="plugins/isotope/isotope.pkgd.min.js"></script>
    <!-- /page level scripts -->
	<!-- page script -->
    <script src="js/catalog.js"></script>
    <!-- /page script -->
    '; } ?>
	
    <!-- page level scripts -->
    <script src="plugins/moment.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="plugins/timepicker/jquery.timepicker.min.js"></script>
    <script src="plugins/colorpicker/js/bootstrap-colorpicker.js"></script>
    <script src="plugins/bootstrap-colorpalette/bootstrap-colorpalette.js"></script>
    <!-- /page level scripts -->
    
    <!-- template scripts -->
    <script src="js/offscreen.js"></script>
    <script src="js/main.js"></script>
    <!-- /template scripts -->

    <!-- Demo Panel -->
    <script src="js/panel.js"></script>
    <!-- /Demo Panel -->
    
    <!-- page script -->
    <script src="js/pickers.js"></script>
    <!-- /page script -->
	
	
    <script type="text/javascript">
        var el = document.getElementById("year"),
            year = (new Date().getFullYear());
        el.innerHTML = year;
    </script>
    
    
<?php } ?>
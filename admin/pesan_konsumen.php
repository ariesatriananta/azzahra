<?php
include("lib/lib.php");

$page_name = ("Pesan Konsumen");
$page_type = ("data_table");


?>

<!doctype html>
<html class="no-js" lang="">



<?php top($page_name,$page_type); ?>

<!-- body -->

<body>

   
    
    <div class="app">
        <!-- top header -->
        <?php head(); ?>
        <!-- /top header -->

        <section class="layout">
            <!-- sidebar menu -->
            <?php aside($page_name); ?>
            <!-- /sidebar menu -->

            <!-- main content -->
            <section class="main-content">

                <!-- content wrapper -->
                <div class="content-wrap">

                    <!-- inner content wrapper -->
                    <div class="wrapper">
                        <section class="panel panel-default">
                            <header class="panel-heading">
                                <h5>Pesan Dari Konsumen</h5>
                            </header>
                            <div class="panel-body">
                                <div class="table-responsive no-border">
                                    <table class="table table-bordered table-striped mg-t datatable">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                            $sql1=mysql_query("SELECT * FROM pesan ORDER BY KODE_PESAN");
											while ($data1=mysql_fetch_array($sql1)){
											?>
        									<tr>
                                            	<td><?php echo $data1['NAMA']; ?></td>
                                                <td><?php echo $data1['EMAIL']; ?></td>
                                                <td><?php button_modal(null,'xs','info','Lihat','.modal_info'.$data1["KODE_PESAN"].''); ?></td>
                                            </tr>
                                            <?php  } ?>
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </section>
                        
                    </div>
                    <!-- /inner content wrapper -->

                </div>
                <!-- /content wrapper -->
                <a class="exit-offscreen"></a>
            </section>
            <!-- /main content -->
        </section>

    </div>
	
    <?php 
	$sql2=mysql_query("SELECT * FROM pesan ORDER BY KODE_PESAN");
	while($data2=mysql_fetch_array($sql2)){
	?>
    <div class="modal fade modal_info<?php echo $data2['KODE_PESAN']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Info Pesan</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                    					<div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-8">
                                                    <h6 class="mt15 mb15">Nama : <?php echo $data2['KODE_PESAN'] ?></h6>
                                                    <h6 class="mt15 mb15">Email : <?php echo $data2['EMAIL'] ?></h6>
                                                    <h6 class="mt15 mb15">Pesan : <?php echo $data2['PESAN'] ?></h6>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                	<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Tutup</button>
                    <?php button_modal(null,'sm','danger','Hapus','.modal_hapus'.$data2['KODE_PESAN'].''); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal_hapus<?php echo $data2['KODE_PESAN']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            	<form action="act/pesan_act.php" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Hapus Pesan Dari <?php echo $data2['NAMA']; ?> ?</h4>
                </div>
                	<input type="hidden" value="delete" name="aksi">
                    <input type="hidden" value="bestseller.php" name="page">
                    <input type="hidden" value="<?php echo $data2['KODE_PESAN']; ?>" name="kode">
                <div class="modal-footer">
                	<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
    
    
    <?php bottom($page_type); ?>


</body>
<!-- /body -->
</html>

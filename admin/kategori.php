<?php
include("lib/lib.php");

$page_name = ("Kategori");
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
                                <h5>Kategori Produk</h5>
                            </header>
                            <br>
                            	<p align="right" class="col-xs-12">
								 <?php button_modal(null,'sm','success','Kategori Baru','.modal_tambah') ?>
                                 </p>	
                            <div class="panel-body">
                                <div class="table-responsive no-border">
                                    <table class="table table-bordered table-striped mg-t datatable">
                                        <thead>
                                            <tr>
                                                <th>Nama Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                            $sql1=mysql_query("SELECT * FROM kategori ORDER BY KODE_KATEGORI");
											while ($data1=mysql_fetch_array($sql1)){
											?>
        									<tr>
                                            	<td><?php echo $data1['NAMA_KATEGORI']; ?></td>
                                                <td><?php button_modal(null,'xs','color','Edit','.modal_edit'.$data1["KODE_KATEGORI"].''); 
														  button_modal(null,'xs','danger','Hapus','.modal_hapus'.$data1["KODE_KATEGORI"].''); ?></td>
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
	$sql2=mysql_query("SELECT * FROM kategori ORDER BY KODE_KATEGORI");
	while ($data2=mysql_fetch_array($sql2)){
	?>
    <div class="modal fade modal_edit<?php echo $data2['KODE_KATEGORI']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            	<form action="act/kategori_act.php" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Edit <?php echo $data2['NAMA_KATEGORI']; ?></h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><strong>Nama Kategori</strong></label>
                            <div class="col-sm-9">
                            	<input type="hidden" name="aksi" value="update">
                            	<input type="hidden" name="kode" value="<?php echo $data2['KODE_KATEGORI']; ?>">
                                <input type="text" class="form-control" name="nama" value="<?php echo $data2['NAMA_KATEGORI']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="showtoast">Tutup</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade modal_hapus<?php echo $data2['KODE_KATEGORI']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            	<form action="act/kategori_act.php" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Hapus <?php echo $data2['NAMA_KATEGORI']; ?></h4>
                </div>
                	<input type="hidden" value="delete" name="aksi">
                    <input type="hidden" value="<?php echo $data2['KODE_KATEGORI']; ?>" name="kode">
                <div class="modal-footer">
                	<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="modal fade modal_tambah" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            	<form action="act/kategori_act.php" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Tambah Kategori Baru</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group">
                            <label class="col-sm-3 control-label"><strong>Nama Kategori</strong></label>
                            <div class="col-sm-9">
                            	<input type="hidden" class="form-control" name="aksi" value="insert" >
                                <input type="text" class="form-control" name="nama" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                	<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    
    
    <?php bottom($page_type); ?>


</body>
<!-- /body -->
</html>

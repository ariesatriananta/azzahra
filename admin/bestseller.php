<?php
include("lib/lib.php");

$page_name = ("Bestseller");
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
                                <h5>Best Seller</h5>
                            </header>
                            <br>
                            	<p align="right" class="col-xs-12">
								 <?php button_modal(null,'sm','success','Tambah','.modal_tambah') ?>
                                 </p>	
                            <div class="panel-body">
                                <div class="table-responsive no-border">
                                    <table class="table table-bordered table-striped mg-t datatable">
                                        <thead>
                                            <tr>
                                                <th>Kode Produk</th>
                                                <th>Nama Produk</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                            $sql1=mysql_query("SELECT * FROM frontend JOIN produk USING(KODE_PRODUK) WHERE BESTSELLER='ya' ORDER BY KODE_KATEGORI");
											while ($data1=mysql_fetch_array($sql1)){
											?>
        									<tr>
                                            	<td><?php echo $data1['KODE_PRODUK']; ?></td>
                                                <td><?php echo $data1['NAMA_PRODUK']; ?></td>
                                                <td><?php button_modal(null,'xs','danger','Hilangkan','.modal_hapus'.$data1["KODE_FRONTEND"].''); ?></td>
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
	$sql2=mysql_query("SELECT * FROM frontend JOIN produk USING(KODE_PRODUK) ORDER BY KODE_KATEGORI");
	while ($data2=mysql_fetch_array($sql2)){
	?>
    <div class="modal fade modal_hapus<?php echo $data2['KODE_FRONTEND']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            	<form action="act/frontend_act.php" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Hilangkan <?php echo $data2['KODE_PRODUK']; ?> dari best seller</h4>
                </div>
                	<input type="hidden" value="delete" name="aksi">
                    <input type="hidden" value="bestseller.php" name="page">
                    <input type="hidden" value="<?php echo $data2['KODE_FRONTEND']; ?>" name="kode">
                <div class="modal-footer">
                	<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hilangkan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="modal fade modal_tambah" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            	<form action="act/frontend_act.php" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Tambah Best Seller</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                  		<div class="col-xs-10">
                            <label>Pilih produk yang akan dijadikan Best Seller</label>
                            <input type="hidden" name="aksi" value="insert">
                            <input type="hidden" name="page" value="bestseller.php">
                            <input type="hidden" name="bestseller" value="ya">
                            <select class="form-control" name="produk">
                            	<?php
								$sql3=mysql_query("SELECT * FROM produk");
								while($data3=mysql_fetch_array($sql3)){
								?>
                                <option value="<?php echo $data3['KODE_PRODUK']; ?>"><?php echo $data3['KODE_PRODUK'].' - '.$data3['NAMA_PRODUK']; ?></option>
                                <?php } ?>
                            </select>
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

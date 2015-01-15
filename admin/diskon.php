<?php
include("lib/lib.php");

$page_name = ("Diskon");
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
                                                <th>Harga Awal</th>
                                                <th>Diskon</th>
                                                <th>Harga Akhir</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                            $sql1=mysql_query("SELECT * FROM diskon JOIN produk USING(KODE_PRODUK) ORDER BY KODE_DISKON");
											while ($data1=mysql_fetch_array($sql1)){
											?>
        									<tr>
                                            	<td><?php echo $data1['KODE_PRODUK']; ?></td>
                                                <td><?php echo $data1['NAMA_PRODUK']; ?></td>
                                                <td><?php echo 'Rp.'.formatMoney($data1['HARGA']); ?></td>
                                                <td><?php echo $data1['PERSEN']; ?>%</td>
                                                <td><?php echo 'Rp.'.formatMoney(($data1['HARGA'])-(($data1['PERSEN']/100*$data1['HARGA']))); ?></td>
                                                <td><?php button_modal(null,'xs','color','Edit','.modal_edit'.$data1["KODE_DISKON"].'');
														  button_modal(null,'xs','danger','Hapus Diskon','.modal_hapus'.$data1["KODE_DISKON"].''); ?></td>
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
	
    <div class="modal fade modal_tambah" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            	<form action="act/diskon_act.php" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Tambahkan Diskon</h4>
                </div>
                <input type="hidden" name="aksi" value="insert">
                <div class="modal-body">
                    <div class="row">
                  		<div class="col-xs-10">
                            <label>Produk</label>
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
                    <label></label>
                    <div class="row">
                  		<div class="col-xs-10">
                            <label>Diskon</label>
                            <select class="form-control" name="persen">
                                <option value="5">5%</option>
                                <option value="10">10%</option>
                                <option value="15">15%</option>
                                <option value="20">20%</option>
                                <option value="25">25%</option>
                                <option value="30">30%</option>
                                <option value="35">35%</option>
                                <option value="40">40%</option>
                                <option value="45">45%</option>
                                <option value="50">50%</option>
                                <option value="55">55%</option>
                                <option value="60">60%</option>
                                <option value="65">65%</option>
                                <option value="70">70%</option>
                                <option value="75">75%</option>
                                <option value="80">80%</option>
                                <option value="85">85%</option>
                                <option value="90">90%</option>
                                <option value="95">95%</option>
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
    
    <?php 
	$sql2=mysql_query("SELECT * FROM diskon JOIN produk USING(KODE_PRODUK) ORDER BY KODE_DISKON");
	while($data2=mysql_fetch_array($sql2)){
	?>
    <div class="modal fade modal_edit<?php echo $data2['KODE_DISKON'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            	<form action="act/diskon_act.php" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Edit Produk</h4>
                </div>
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="kode" value="<?php echo $data2['KODE_DISKON']; ?>">
                <div class="modal-body">
                    <div class="row">
                  		<div class="col-xs-10">
                            <label>Produk</label>
                            <input type="text" class="form-control" name="produk" value="<?php echo $data2['KODE_PRODUK']; ?>" readonly>
                        </div>
                    </div>
                    <label></label>
                    <div class="row">
                  		<div class="col-xs-10">
                            <label>Diskon</label>
                            <select class="form-control" name="persen">
                            	<option value="<?php echo $data2['PERSEN']; ?>"><?php echo $data2['PERSEN']; ?>%</option>
                            	<?php 
								for($i=5;$i<=95;) {
								if($data2['PERSEN']!=$i){
								?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?>%</option>
                                <?php } $i=$i+5; } ?>
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
    <div class="modal fade modal_hapus<?php echo $data2['KODE_DISKON']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            	<form action="act/diskon_act.php" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Hapus Diskon Pada Produk <?php echo $data2['NAMA_PRODUK']; ?> ?</h4>
                </div>
                	<input type="hidden" value="delete" name="aksi">
                    <input type="hidden" value="<?php echo $data2['KODE_DISKON']; ?>" name="kode">
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

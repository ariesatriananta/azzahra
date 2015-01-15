<?php
include("lib/lib.php");

$page_name = ("Produk");
$page_type = ("catalog");


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
                        <div class="row mb15">
                            <div class="col-xs-6">
                                <h5 >Produk</h5>
                            </div>
                            
                            <div class="col-xs-6 text-right">
								<div class="btn-group mr5 mt10">
                                	<?php button_modal(null,'sm','success','Produk Baru','.modal_tambah'); ?>
                                </div>
                                <div class="btn-group mr5 mt10">
                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">Filter
                                        <span class="ti-angle-down ml10"></span>
                                    </button>
                                    <ul class="dropdown-menu text-left filter" data-option-key="filter" role="menu">
                                        <li><a href="javascript:;" data-filter="*">All Departments</a>
                                        </li>
                                        <?php
										$sql2=mysql_query("SELECT * FROM kategori");
										while ($data2=mysql_fetch_array($sql2)){
                                        ?>
                                        <li><a href="javascript:;" data-filter=".<?php echo $data2['NAMA_KATEGORI']; ?>"><?php echo $data2['NAMA_KATEGORI']; ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="btn-group view-options mt10" data-toggle="buttons">
                                    <label class="btn btn-primary btn-sm active" data-view="grid">
                                        <input type="radio" name="options" id="option1">
                                        <i class="ti-view-grid"></i>
                                    </label>
                                    <label class="btn btn-primary btn-sm" data-view="list">
                                        <input type="radio" name="options" id="option2">
                                        <i class="ti-view-list"></i>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="switcher view-grid">
                        	<div class="row feed">
                            
								<?php
                                $sql1=mysql_query("SELECT * FROM produk JOIN kategori USING(KODE_KATEGORI) ORDER BY KODE_PRODUK");
                                while ($data1=mysql_fetch_array($sql1)){
                                ?>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 switch-item <?php echo $data1['NAMA_KATEGORI']; ?>">
                                    <section class="panel">
                                        <div class="thumb">
                                            <img class="img-responsive" alt="Responsive image" src="img/produk/<?php echo $data1['GAMBAR']; ?>">
                                        </div>
                                        <div class="panel-body">
                                            <div class="switcher-content">
                                                <address>
                                                    <strong><font color='black'><?php echo $data1['NAMA_PRODUK']; ?></font> <br>
                                                    <?php echo $data1['KODE_PRODUK'];  ?> 
                                                    </strong><br>
                                                    <i><?php echo $data1['NAMA_KATEGORI']; ?></i> </br>
                                                    Rp. <?php echo formatMoney($data1['HARGA']); ?><br>
                                                    <?php button_modal_outline(null,'xs','info','<i class="ti-info"></i>','.modal_info'.$data1['KODE_PRODUK'].''); ?>
                                                </address>
                                            </div>
                                        </div>
                                    </section>
                                </div>
								<?php } ?>
                                
                            </div>
                        </div>
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
            	<form action="act/produk_act.php" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Tambah Produk Baru</h4>
                </div>
                <input type="hidden" name="aksi" value="insert">
                <div class="modal-body">
                    <div class="row">
                  		<div class="col-xs-10">
                            <label>Kode Produk</label>
                            <input type="text" class="form-control" name="kode">
                        </div>
                    </div>
                    <label></label>
                    <div class="row">
                  		<div class="col-xs-10">
                            <label>Nama Produk</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                    </div>
                    <label></label>
                    <div class="row">
                  		<div class="col-xs-10">
                            <label>Kategori</label>
                            <select class="form-control" name="kate">
                            	<?php
								$sql3=mysql_query("SELECT * FROM kategori");
								while($data3=mysql_fetch_array($sql3)){
								?>
                                <option value="<?php echo $data3['KODE_KATEGORI']; ?>"><?php echo $data3['NAMA_KATEGORI']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <label></label>
                    <div class="row">
                  		<div class="col-xs-10">
                            <label>Harga</label>
                            <div class="input-group mb15">
                                <span class="input-group-addon">Rp.</span>
                                <input type="text" class="form-control" name="harg">
                            </div>
                        </div>
                    </div>
                    <label></label>
                    <div class="row">
                  		<div class="col-xs-10">
                            <label>Gambar</label>
                            <input type="file" name="gamb">
                            <p class="help-block">Ukuran Maksimal 2MB</p>
                        </div>
                    </div>
                    <div class="row">
                  		<div class="col-xs-10">
                            <label>Warna</label>
                            <input type="text" class="color-picker form-control" value="#8fff00" name="warn">
                        </div>
                    </div>
                    <label></label>
                    <div class="row">
                  		<div class="col-xs-10">
                            <label>Keterangan</label>
                            <textarea class="form-control" rows="3" name="kete"></textarea>
                        </div>
                    </div>
                    <label></label>
                    <div class="row">
                  		<div class="col-xs-10">
                            <input type="checkbox" checked="" name="stat"> Tampilkan di Katalog Web
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
	$sql4=mysql_query("SELECT * FROM produk JOIN kategori USING(KODE_KATEGORI) ORDER BY KODE_PRODUK");
	while($data4=mysql_fetch_array($sql4)){
	?>
    <div class="modal fade modal_info<?php echo $data4['KODE_PRODUK']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Info Produk</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                    					<div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-8">
                                                    <h4 class="mb0"><?php echo $data4['NAMA_PRODUK'] ?></h4>

                                                    <h6 class="mt15 mb15">Kode : <?php echo $data4['KODE_PRODUK'] ?></h6>
                                                    <h6 class="mt15 mb15">Kategori : <?php echo $data4['NAMA_KATEGORI'] ?></h6>
                                                    <h6 class="mt15 mb15">Harga : <?php echo $data4['HARGA'] ?></h6>
                                                    <h6 class="mt15 mb15">Warna : <table><tr><td width="50" height="20" bgcolor="<?php echo $data4['WARNA']; ?>"></td></tr></table></h6>
                                                    <h6 class="mt15 mb15">Keterangan : <?php echo $data4['KETERANGAN'] ?></h6>
                                                    <h6 class="mt15 mb15">Status : <span <?php if($data4['STATUS']=='Tampilkan'){ ?> class="label label-success" <?php }else{ ?>class="label label-color" <?php } ?>><?php echo $data4['STATUS'] ?> di Katalog Web</span></h6>
                                                </div>
                                                <div class=" col-sm-4 text-center">
                                                    <figure>
                                                        <img src="img/produk/<?php echo $data4['GAMBAR']; ?>" alt="" >
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                	<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Tutup</button>
                    <?php button_modal(null,'sm','color','Edit','.modal_edit'.$data4['KODE_PRODUK'].''); ?>
                    <?php button_modal(null,'sm','danger','Hapus','.modal_hapus'.$data4['KODE_PRODUK'].''); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal_edit<?php echo $data4['KODE_PRODUK'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            	<form action="act/produk_act.php" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Edit Produk</h4>
                </div>
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="kode_lama" value="<?php echo $data4['KODE_PRODUK']; ?>">
                <div class="modal-body">
                    <div class="row">
                  		<div class="col-xs-10">
                            <label>Kode Produk</label>
                            <input type="text" class="form-control" name="kode" value="<?php echo $data4['KODE_PRODUK']; ?>">
                        </div>
                    </div>
                    <label></label>
                    <div class="row">
                  		<div class="col-xs-10">
                            <label>Nama Produk</label>
                            <input type="text" class="form-control" name="nama" value="<?php echo $data4['NAMA_PRODUK']; ?>">
                        </div>
                    </div>
                    <label></label>
                    <div class="row">
                  		<div class="col-xs-10">
                            <label>Kategori</label>
                            <select class="form-control" name="kate">
                            	<option value="<?php echo $data4['KODE_KATEGORI']; ?>"><?php echo $data4['NAMA_KATEGORI']; ?></option>
								<?php
								$x = $data4['KODE_KATEGORI'];
								$sql6=mysql_query("SELECT * FROM kategori WHERE KODE_KATEGORI != '$x'");
								while($data6=mysql_fetch_array($sql6)){
								?>
                                <option value="<?php echo $data6['KODE_KATEGORI']; ?>"><?php echo $data6['NAMA_KATEGORI']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <label></label>
                    <div class="row">
                  		<div class="col-xs-10">
                            <label>Harga</label>
                            <div class="input-group mb15">
                                <span class="input-group-addon">Rp.</span>
                                <input type="text" class="form-control" name="harg" value="<?php echo $data4['HARGA']; ?>">
                            </div>
                        </div>
                    </div>
                    <label></label>
                    <div class="row">
                  		<div class="col-xs-10">
                            <label>Gambar</label>
                            <input type="file" name="gamb">
                            <p class="help-block">Ukuran Maksimal 2MB</p>
                        </div>
                    </div>
                    <label></label>
                    <div class="row">
                  		<div class="col-xs-10">
                            <label>Warna</label><br>
                            <table><tr><td width="50" height="20" bgcolor="<?php echo $data4['WARNA']; ?>"></td></tr></table>
                            <input type="text" class="color-picker form-control" value="<?php echo $data4['WARNA']; ?>" name="warn">
                        </div>
                    </div>
                    <label></label>
                    <div class="row">
                  		<div class="col-xs-10">
                            <label>Keterangan</label>
                            <textarea class="form-control" rows="3" name="kete"><?php echo $data4['KETERANGAN']; ?></textarea>
                        </div>
                    </div>
                    <label></label>
                    <div class="row">
                  		<div class="col-xs-10">
                            <input type="checkbox" <?php if($data4['STATUS']=='Tampilkan'){ ?> checked="" <?php } ?> name="stat"> Tampilkan di Katalog Web
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
    <div class="modal fade modal_hapus<?php echo $data4['KODE_PRODUK']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            	<form action="act/produk_act.php" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Hapus <?php echo $data4['NAMA_PRODUK']; ?></h4>
                </div>
                	<input type="hidden" value="delete" name="aksi">
                    <input type="hidden" value="<?php echo $data4['KODE_PRODUK']; ?>" name="kode">
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

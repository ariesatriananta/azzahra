<?php
include("lib/lib.php");

$page_name = ("Banner");
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
                                <h5 >Banner Depan</h5>
                            </div>
                            
                            <div class="col-xs-6 text-right">
								<div class="btn-group mr5 mt10">
                                	<?php button_modal(null,'sm','success','Banner Baru','.modal_tambah'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="switcher view-grid">
                        	<div class="row feed">
                            
								<?php
                                $sql1=mysql_query("SELECT * FROM banner ORDER BY NO_URUT");
                                while ($data1=mysql_fetch_array($sql1)){
                                ?>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 switch-item <?php echo $data1['NAMA_KATEGORI']; ?>">
                                    <section class="panel">
                                        <div class="thumb">
                                            <img class="img-responsive" alt="Responsive image" src="img/banner/<?php echo $data1['GAMBAR']; ?>">
                                        </div>
                                        <div class="panel-body">
                                            <div class="switcher-content">
                                                <address>
                                                    <strong><font color='black'>No. Urut : <?php echo $data1['NO_URUT']; ?></font> <br></strong><br>
                                                    <?php button_modal_outline(null,'xs','info','<i class="ti-info"></i>','.modal_info'.$data1['KODE_BANNER'].''); ?>
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
            	<form action="act/banner_act.php" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Tambah Banner Baru</h4>
                </div>
                <input type="hidden" name="aksi" value="insert">
                <div class="modal-body">
                    
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
                            <label>No.Urut</label>
                            <div class="input-group mb15">
                                <input type="text" class="form-control" name="no">
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
    
    <?php 
	$sql4=mysql_query("SELECT * FROM banner ORDER BY NO_URUT");
	while($data4=mysql_fetch_array($sql4)){
	?>
    <div class="modal fade modal_info<?php echo $data4['KODE_BANNER']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Info Banner</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                    					<div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-8">
													<img src="img/banner/<?php echo $data4['GAMBAR']; ?>" alt="" >
                                                    <h4 class="mb0">No.Urut : <?php echo $data4['NO_URUT'] ?></h4>
                                                </div>
                                            </div>
                                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                	<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Tutup</button>
                    <?php button_modal(null,'sm','color','Edit','.modal_edit'.$data4['KODE_BANNER'].''); ?>
                    <?php button_modal(null,'sm','danger','Hapus','.modal_hapus'.$data4['KODE_BANNER'].''); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal_edit<?php echo $data4['KODE_BANNER'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            	<form action="act/banner_act.php" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Edit Banner</h4>
                </div>
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="kode" value="<?php echo $data4['KODE_BANNER']; ?>">
                <div class="modal-body">
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
                            <label>No.Urut</label>
                            <div class="input-group mb15">
                                <input type="text" class="form-control" name="no" value='<?php echo $data4['NO_URUT']; ?>'>
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
    <div class="modal fade modal_hapus<?php echo $data4['KODE_BANNER']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            	<form action="act/banner_act.php" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Hapus Banner ?</h4>
                </div>
                	<input type="hidden" value="delete" name="aksi">
                    <input type="hidden" value="<?php echo $data4['KODE_BANNER']; ?>" name="kode">
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

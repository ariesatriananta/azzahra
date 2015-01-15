<?php
include("lib/lib.php");
$page_name='kategori';
$kode=$_GET['kode'];
?>
<!DOCTYPE html>
<html lang="en">

<?php top("Produk"); ?>

<body>

<?php head($page_name); ?>

<div id="maincontainer">
    <section id="product">
		<?php
        $sql1=mysql_query("SELECT * FROM produk JOIN kategori USING(KODE_KATEGORI) WHERE KODE_PRODUK LIKE '$kode' ");
        $data1=mysql_fetch_array($sql1);
        ?>
        <div class="container"> 
            <!-- Product Details-->
            <div class="row"> 
            	<?php 
				if(isset($data1['NAMA_PRODUK'])){
				?>
				<!-- Left Image-->
                <div class="span5">
                    <ul class="thumbnails mainimage">
                        <li class="span5"> 
                        <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" href="admin/img/produk/<?php echo $data1['GAMBAR']; ?>"> 
                        <img src="admin/img/produk/<?php echo $data1['GAMBAR']; ?>" alt="" title="" > 
                        </a> 
                        </li>
                    </ul>
                </div>
                <!-- Right Details-->
                <div class="span7">
                    <div class="row">
                        <div class="span7">
                            <h1 class="productname"><span class="bgnone"><?php echo $data1['NAMA_PRODUK']; ?></span></h1>
                            <div class="productprice">
                            	<h5>Kode Produk : <?php echo $data1['KODE_PRODUK']; ?></h5>
                                <h5>Kategori : <?php echo $data1['NAMA_KATEGORI']; ?></h5>
                                <div class="productpageprice"> <span class="spiral"></span>Rp. <?php echo formatMoney($data1['HARGA']); ?></div>
                                <h5>Pilihan Warna : </h5>
                                <table border="1" bordercolor="#FFFFFF" >
                                        <?php
										$x=substr($data1['KODE_PRODUK'],0,-3);
										$sql4=mysql_query("SELECT KODE_PRODUK,WARNA FROM produk WHERE KODE_PRODUK LIKE '%$x%'");
										while($data4=mysql_fetch_array($sql4)){
										?>
                                        <a href="produk.php?kode=<?php echo $data4['KODE_PRODUK']; ?>" class="btn btn-small" style="background:<?php echo $data4['WARNA']; ?>"> &nbsp;  &nbsp; 
                                        </a>
                                        <?php } ?>
                                        </table>
                            </div>
                            <!-- Product Description tab & comments-->
                            <div class="productdesc">
                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="active"><a href="#description">Deskripsi</a> </li>
                                    <li><a href="#review">Ukuran</a> </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="description">
                                        <?php echo $data1['KETERANGAN']; ?>
                                    </div>
                                    <div class="tab-pane" id="review">
                                        Ukuran : 
                                    </div>
                            </div>
                             <div class="productbtn">
                            <a data-toggle="modal" href="#myModal" class="btn btn-orange btn-large ">Beli Produk</a>
                            <a data-toggle="modal" href="#myModal2" class="btn btn-orange btn-large ">Dropship Reseller</a>
                            </div>
                            <!-- Product Description tab & comments-->
                            
                            <!--  Modal --> 
                            <section id="modals">          
                              <!-- sample modal content -->
                              <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h3 id="myModalLabel">Cara Pesan</h3>
                                </div>
                                <div class="modal-body">
                                  <h4>Via SMS</h4>
                                  <p><font color="#000000">Ketik : NAMA <font color="#CC0000">(spasi)</font> KODE PRODUK <font color="#CC0000">(spasi)</font> KUANTITAS <font color="#CC0000">(spasi)</font> ALAMAT <font color="#CC0000">(spasi)</font> NAMA BANK YANG AKAN DIGUNAKAN UNTUK TRANSFER <br>
                                  Contoh : IMAM SARJONO <?php echo $data1['KODE_PRODUK']; ?> 2pcs Jl.Siliwangi No 45 Via Mandiri <br>
                                  Kirim ke : 081221551880<br>
                                  </font></p>
                                  
                                  <h4>Via BBM</h4>
                                  <p><font color="#000000">Invite PIN Azzahra Hijab : 7E6DFAD7<br>
                                  </font></p>
                                  
                                  <h4>Via WhatsApp</h4>
                                  <p><font color="#000000">Invite WA Azzahra Hijab : 081221551880<br>
                                  </font></p>
                    
                                <div class="modal-footer">
                                  <button class="btn" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                              </section>
                              <section id="modals">
                              <div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h3 id="myModalLabel">Cara Dropship</h3>
                                </div>
                                <div class="modal-body">
                                  <h4>Via SMS</h4>
                                  <p><font color="#000000">Ketik : NAMA <font color="#CC0000">(spasi)</font> DROPSHIP <font color="#CC0000">(spasi)</font> <?php echo $data1['KODE_PRODUK']; ?><br>
                                  Contoh : IMAM SARJONO DROPSHIP <?php echo $data1['KODE_PRODUK']; ?><br>
                                  Kirim ke : 081221551880<br>
                                  Kemudian kami akan segera menghubungi anda.
                                  </font></p>
                                  
                                  <h4>Via BBM</h4>
                                  <p><font color="#000000">Invite PIN Azzahra Hijab : 7E6DFAD7<br>
                                  </font></p>
                                  
                                  <h4>Via WhatsApp</h4>
                                  <p><font color="#000000">Invite WA Azzahra Hijab : 081221551880<br>
                                  </font></p>
                    
                                <div class="modal-footer">
                                  <button class="btn" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </section>
                           	
                            
                        </div>
                    </div>
                </div>
				<?php
				}else{ echo '<center>Produk Tidak Ditemukan</center>'; }
				?>
            </div>
        </div>
    </section>
    <?php
	$sql3=mysql_query("SELECT * FROM produk WHERE KODE_KATEGORI='$data1[KODE_KATEGORI]' AND KODE_PRODUK!='$data1[KODE_PRODUK]' LIMIT 4");
	$data3=mysql_fetch_array($sql3);
	if(isset($data3['KODE_PRODUK'])){
	?>
    <!--  Related Products-->
    <section id="related" class="row mt40">
        <div class="container">
            <h1 class="heading1"><span class="maintext">Produk Yang Mirip</span></h1>
            <ul class="thumbnails">
				   <?php
                    $sql2=mysql_query("SELECT * FROM produk WHERE KODE_KATEGORI='$data1[KODE_KATEGORI]' AND KODE_PRODUK!='$data1[KODE_PRODUK]' LIMIT 4");
					while($data2=mysql_fetch_array($sql2)){
					?>
                    <li class="span3"> 
                        <div class="thumbnail"> 
                        	<a class="fancyboxpopup" href="admin/img/produk/<?php echo $data2['GAMBAR']; ?>"><img alt="" src="admin/img/produk/<?php echo $data2['GAMBAR']; ?>"></a>
                            <div class="price">
                                    <div class="pricenew"><?php echo $data2['NAMA_PRODUK']; ?></div>
                                    <div> Rp. <?php echo  formatMoney($data2['HARGA']); ?></div>
                            </div>
                            <a  class="btn btn-orange btn-small  addtocartbutton" href="produk.php?kode=<?php echo $data2['KODE_PRODUK']; ?>">Detail Produk</a>
                            </div>
                    </li>
                    
                   <?php } ?>                    
			</ul>
        </div>
    </section>
    <?php } ?>
    
    <br><br><br>
    <section class="container mt40">
        <a href="#">
            <img src="img/spaceIklanAzzahra.jpg" alt="" title="space iklan 1200x120"/>
        </a>
        <div class="clearfix"></div>
    </section>
    
</div>

<!-- Footer -->
<?php footer(); ?>
    <a id="gotop" href="#">Back to top</a> </footer>
<?php bottom(); ?>
</body>
</html>
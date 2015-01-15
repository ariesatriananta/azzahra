<?php
include("lib/lib.php");
$page_name='home';
?>
<!DOCTYPE html>
<html lang="en">

<?php top('Untuk Gaya Hijabmu'); ?>

<body>

<?php head($page_name); ?>

<div id="maincontainer"> 
    
    <?php slider2(); ?>
    
    <?php
	$sql5=mysql_query("SELECT * FROM diskon JOIN produk USING(KODE_PRODUK)");
	$data5=mysql_fetch_array($sql5);
	if (isset($data5['KODE_PRODUK'])){
	?>
    <!-- Featured Product-->
    <section id="featured" class="row mt40">
        <div class="container">
            <h1 class="heading1"><span class="maintext"> <i class="icon-tag"></i> DISKON PRODUK</span></h1>
            <div class="featuredcarousalwrap">
                <ul class="thumbnails" id="featuredcarousal">
                	<?php
                    $sql6=mysql_query("SELECT * FROM diskon JOIN produk USING(KODE_PRODUK)");
					while($data6=mysql_fetch_array($sql6)){
					?>
                    <li class="span3"> 
                        <div class="thumbnail"> <span class="sale tooltip-test"> <i class="icon-tag font18"><br><?php echo $data6['PERSEN']; ?>%</i></span> <br>
                        	<a class="fancyboxpopup" href="admin/img/produk/<?php echo $data6['GAMBAR']; ?>"><img alt="" src="admin/img/produk/<?php echo $data6['GAMBAR']; ?>"></a>
                            
                            <div class="price">
                                    <div class="pricenew"><?php echo $data6['NAMA_PRODUK']; ?></div>
                                    <div><font color="#990000"><strike> Rp. <?php echo formatMoney($data6['HARGA']);  ?></strike></font></div>
                                    <div> Rp. <?php echo formatMoney(($data6['HARGA'])-(($data6['PERSEN']/100*$data6['HARGA'])));   ?></div>
                            </div>
                            <a  class="btn btn-orange btn-small  addtocartbutton" href="produk.php?kode=<?php echo $data6['KODE_PRODUK']; ?>">Detail Produk</a> </div>
                    </li>
                   <?php } ?>
                </ul>
                <div class="clearfix"></div>
                <a id="prevfeatured" class="prev" href="#"><i class="icon-chevron-left"></i></a> <a id="nextfeatured" class="next" href="#"><i class="icon-chevron-right"></i></a> </div>
        </div>
    </section>
    <?php } ?>
    <?php
	$sql3=mysql_query("SELECT * FROM frontend JOIN produk USING(KODE_PRODUK) WHERE BESTSELLER='ya'");
	$data3=mysql_fetch_array($sql3);
	if (isset($data3['KODE_PRODUK'])){
	?>
    <!-- Featured Product-->
    <section id="featured" class="row mt40">
        <div class="container">
            <h1 class="heading1"><span class="maintext"> <i class="icon-star"></i> Best Seller</span></h1>
            <div class="featuredcarousalwrap">
                <ul class="thumbnails" id="featuredcarousal">
                	<?php
                    $sql1=mysql_query("SELECT * FROM frontend JOIN produk USING(KODE_PRODUK) WHERE BESTSELLER='ya'");
					while($data1=mysql_fetch_array($sql1)){
					?>
                    <li class="span3"> 
                        <div class="thumbnail"> 
                        	<a class="fancyboxpopup" href="admin/img/produk/<?php echo $data1['GAMBAR']; ?>"><img alt="" src="admin/img/produk/<?php echo $data1['GAMBAR']; ?>"></a>
                            
                            <div class="price">
                                    <div class="pricenew"><?php echo $data1['NAMA_PRODUK']; ?></div>
                                    <div> Rp. <?php echo  formatMoney($data1['HARGA']); ?></div>
                            </div>
                            <a  class="btn btn-orange btn-small  addtocartbutton" href="produk.php?kode=<?php echo $data1['KODE_PRODUK']; ?>">Detail Produk</a> </div>
                    </li>
                   <?php } ?>
                </ul>
                <div class="clearfix"></div>
                <a id="prevfeatured" class="prev" href="#"><i class="icon-chevron-left"></i></a> <a id="nextfeatured" class="next" href="#"><i class="icon-chevron-right"></i></a> </div>
        </div>
    </section>
    <?php } ?>
    <?php
	$sql4=mysql_query("SELECT * FROM frontend JOIN produk USING(KODE_PRODUK) WHERE PRODUK_BARU='ya'");
	$data4=mysql_fetch_array($sql4);
	if (isset($data4['KODE_PRODUK'])){
	?>
    <!-- Latest Product-->
    <section id="latest" class="row mt40">
        <div class="container">
            <h1 class="heading1"><span class="maintext"> <i class="icon-thumbs-up"></i> Produk Baru</span></h1>
            <div class="latestcarousalwrap">
                <ul class="thumbnails" id="latestcarousal">
                    <?php
                    $sql2=mysql_query("SELECT * FROM frontend JOIN produk USING(KODE_PRODUK) WHERE PRODUK_BARU='ya'");
					while($data2=mysql_fetch_array($sql2)){
					?>
                    <li class="span3"> 
                        <div class="thumbnail"> 
                        	<a class="fancyboxpopup" href="admin/img/produk/<?php echo $data2['GAMBAR']; ?>"><img alt="" src="admin/img/produk/<?php echo $data2['GAMBAR']; ?>"></a>
                            <div class="price">
                                    <div class="pricenew"><?php echo $data2['NAMA_PRODUK']; ?></div>
                                    <div> Rp. <?php echo  formatMoney($data2['HARGA']); ?></div>
                            </div>
                            <a  class="btn btn-orange btn-small  addtocartbutton" href="produk.php?kode=<?php echo $data2['KODE_PRODUK']; ?>">Detail Produk</a> </div>
                    </li>
                   <?php } ?>
                </ul>
                <div class="clearfix"></div>
                <a id="prevlatest" class="prev" href="#"><i class="icon-chevron-left"></i></a> <a id="nextlatest" class="next" href="#"><i class="icon-chevron-right"></i></a> </div>
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
<!-- /maincontainer --> 
<!-- Footer -->
<?php footer(); ?>
    <a id="gotop" href="#">Back to top</a> </footer>
<?php bottom(); ?>
</body>

<!-- Mirrored from www.pxcreate.com/template/simplepxcreate/ by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 13 Sep 2013 03:51:03 GMT -->
</html>
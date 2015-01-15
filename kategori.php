<?php
include("lib/lib.php");
$page_name='kategori';
?>
<!DOCTYPE html>
<html lang="en">

<?php top("Katalog"); ?>

<body>

<?php head($page_name); ?>

<div id="maincontainer">
    <section id="product">
        <div class="container"> 
            <!--  breadcrumb -->
            <div class="row"> 
                <!-- Sidebar Start--> 
                <!-- Sidebar-->
                <aside class="span2"> 
                    <!-- Category-->
                    <div class="sidewidt">
                    	<section id="options">
                        <h1 class="heading1"><span class="maintext"><i class="icon-th-list"></i> Kategori</span></h1>
                        <ul id="filters" class="option-set nav nav-list categories" data-option-key="filter">
                        	<li><a href="#filter" data-option-value="*" class="selected">Semua Kategori</a></li>
                        	<?php
							$sql2=mysql_query("SELECT * FROM kategori");
							while ($data2=mysql_fetch_array($sql2)){
							?>
                            <li> <a href="#filter" data-option-value=".<?php echo $data2['KODE_KATEGORI']; ?>"><?php echo $data2['NAMA_KATEGORI']; ?></a></li>
                            <?php } ?>
                        </ul>
                        </section>
                    </div>
                    <?php
					$sql5=mysql_query("SELECT * FROM frontend JOIN produk USING(KODE_PRODUK) WHERE BESTSELLER='ya'");
					$data5=mysql_fetch_array($sql5);
					if (isset($data5['KODE_PRODUK'])){
					?>
                    <!-- Latest Product -->
                    <div class="sidewidt">
                        <h1 class="heading3"><span class="maintext"><i class="icon-trophy"></i> Best Seller</span></h1>
                        <ul class="bestseller">
                        	<?php
							$sql1=mysql_query("SELECT * FROM frontend JOIN produk USING(KODE_PRODUK) WHERE BESTSELLER='ya' ORDER BY KODE_PRODUK");
							while($data1=mysql_fetch_array($sql1)){
							?>
                            <li> <img width="50" height="50" src="admin/img/produk/<?php echo $data1['GAMBAR']; ?>" alt="product" title="product"> <a class="productname" href="produk.php?kode=<?php echo $data1['KODE_PRODUK']; ?>"> <?php echo $data1['NAMA_PRODUK']; ?></a> <span class="price">Rp.<?php echo  formatMoney($data1['HARGA']); ?></span>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php } ?>
                    <?php
					$sql6=mysql_query("SELECT * FROM frontend JOIN produk USING(KODE_PRODUK) WHERE PRODUK_BARU='ya'");
					$data6=mysql_fetch_array($sql6);
					if (isset($data6['KODE_PRODUK'])){
					?>
                    <!--  Best Seller -->
                    <div class="sidewidt">
                        <h1 class="heading3"><span class="maintext"><i class="icon-bookmark"></i> Produk Baru</span></h1>
                        <ul class="bestseller">
                            <?php
							$sql4=mysql_query("SELECT * FROM frontend JOIN produk USING(KODE_PRODUK) WHERE PRODUK_BARU='ya'");
							while($data4=mysql_fetch_array($sql4)){
							?>
                            <li> <img width="50" height="50" src="admin/img/produk/<?php echo $data4['GAMBAR']; ?>" alt="product" title="product"> <a class="productname" href="produk.php?kode=<?php echo $data4['KODE_PRODUK']; ?>"> <?php echo $data4['NAMA_PRODUK']; ?></a> <span class="price">Rp.<?php echo  formatMoney($data4['HARGA']); ?></span>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php } ?>
                </aside>
                
                <!-- Sidebar End--> 
                <!-- Category-->
                <div class="span10"> 
                    <section id="category">
                    <ul id="portfoliocontainer" class="thumbnails grid">
                    	<?php
						$sql3=mysql_query("SELECT * FROM produk WHERE STATUS='Tampilkan' ORDER BY KODE_PRODUK");
						while ($data3=mysql_fetch_array($sql3)){
						?>
                        <li class="element <?php echo $data3['KODE_KATEGORI']; ?> span3" data-symbol="Hg" data-category="transition">
                            <div class="thumbnail"> 
                                
                                <a class="fancyboxpopup" href="admin/img/produk/<?php echo $data3['GAMBAR']; ?>"><img alt="" src="admin/img/produk/<?php echo $data3['GAMBAR']; ?>"></a>
                                <div class="price">
                                    <div class="pricenew"><?php echo $data3['NAMA_PRODUK']; ?></div>
                                    <div> Rp. <?php echo  formatMoney($data3['HARGA']); ?></div>
                                    <div><a  class="btn btn-orange btn-small  addtocartbutton" href="produk.php?kode=<?php echo $data3['KODE_PRODUK']; ?>">Detail Produk</a> </div>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                	</ul>
                    </section>
                    
                    
                </div>
            </div>
        </div>
    </section>
    
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
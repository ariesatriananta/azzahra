<?php 

function head($page_name){ ?>
<!-- Header Start -->
<header>
<div class="container">
    <div class="headerdetails"> <a class="logo pull-left" href="index.php"><img title="Simplepxcreate" alt="Simplepxcreate" src="img/logo.png"></a>
        <div class="pull-right">
            <ul class="nav topcart pull-left">
                <form class="form-search top-search" method="get" action="produk.php">
                <input type="text" name="kode" class="input-medium search-query" placeholder="Cari Produk">
                <button class="btn btn-orange btn-small tooltip-test" type="submit" data-original-title="Cari"> <i class="icon-search icon-white"></i> </button>
            </form>
            </ul>
        </div>
    </div>
</div>
<div id="categorymenu">
<nav class="">
<ul class="nav-pills  containers">
<a href="index.php"><img src='img/button 3.png'></a>
<a href="kategori.php"><img src='img/button 2.png' ></a>
<a href="cara_order.php"><img src='img/button 1.png'></a>
<a href="pembayaran.php"><img src='img/button 5.png'></a>
<a href="contact.php"><img src='img/button 4.png'></a>
<a href="reseller.php"><img src='img/button 6.png'></a>
</ul>
</nav>
</div>
</header>
<!-- Header End -->
<?php } 

    function iklan(){ ?>
        <section class="container mt40">
        <table>
            <tr>
                <td  width='300' height='120' style="text-align: center;">
                    <a href="#">
                        <img src="img/spaceIklanAzzahra2.jpg" alt="" width='280' height="120" title="space iklan 1200x120"/>
                    </a>
                </td>
                <td  width='300' height='120' style="text-align: center;">
                    <a href="#">
                        <img src="img/spaceIklanAzzahra2.jpg" alt="" width='280' height="120" title="space iklan 1200x120"/>
                    </a>
                </td>
                <td  width='300' height='120' style="text-align: center;">
                    <a href="#">
                        <img src="img/spaceIklanAzzahra2.jpg" alt="" width='280' height="120" title="space iklan 1200x120"/>
                    </a>
                </td>
                <td  width='300' height='120' style="text-align: center;">
                    <a href="#">
                        <img src="img/spaceIklanAzzahra2.jpg" alt="" width='280' height="120" title="space iklan 1200x120"/>
                    </a>
                </td>
            </tr>
        </table>
        <div class="clearfix"></div>
    </section>
<?php
    }
?>
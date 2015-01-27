<?php
include("lib/lib.php");
$page_name='cara_order';
?>
<!DOCTYPE html>
<html lang="en">

<?php top("Cara Order"); ?>

<body>

<?php head($page_name); ?>

<div id="maincontainer">
    <section class="row mt40" id="ourteam">
        <div class="container">
            <h1 class="heading1"><span class="maintext"> <i class="icon-question-sign"></i> Cara Order Produk</span></h1>
            
            <div id="faq">
            <ul>
            	<li>
                <a class="question accrodian-trigger" > Via Sms</a>
                <div class="answer accrodian-data">  
                    <p><i class="icon-share-alt"></i> Pilih produk yang anda inginkan</p>
                    <p><i class="icon-share-alt"></i> Kemudian Ketik SMS <br> &nbsp; &nbsp; &nbsp;Dengan format : <font color="#000000"> NAMA <font color="#CC0000">(spasi)</font> KODE PRODUK <font color="#CC0000">(spasi)</font> KUANTITAS <font color="#CC0000">(spasi)</font> ALAMAT <font color="#CC0000">(spasi)</font> NAMA BANK YANG AKAN DIGUNAKAN UNTUK TRANSFER </font><br>&nbsp; &nbsp; &nbsp;Contoh : <font color="#000000">IMAM SARJONO CRL-099 2pcs Jl.Siliwangi No 45 Via Mandiri </font><br> &nbsp; &nbsp; &nbsp;Kirim Ke : <font color="#000000">081221551880</font>
                    </p>
                    <p><i class="icon-share-alt"></i> Kemudian kami akan segera membalas sms anda guna memberikan informasi jumlah nominal yang harus ditransferkan dan nomor rekening Bank yang akan digunakan untuk transfer</p>
                    <p><i class="icon-share-alt"></i> Jika anda telah mentransfer uang ke rekening kami sesuai dengan nominal yang ditentukan kami akan segera mengirim paket anda melalu jasa kurir JNE</p>
                    <p><i class="icon-share-alt"></i> Nomor Resi pengiriman akan segera kami informasikan jika proses pendistribusian barang ke pihak JNE telah selesai</p>
                    <p><i class="icon-share-alt"></i> Nomor resi yang telah kami berikan bisa digunakan untuk menge-Check status pengiriman produk anda di website JNE</p>
                    <br>
                    <p></p> 
                </div>
                </li>
                <li>
                <a class="question accrodian-trigger" > Via BBM</a>
                <div class="answer accrodian-data">  <p><i class="icon-share-alt"></i> Invite PIN Azzahra Hijab : 7E6DFAD7 </p> </div>
                </li>
                <li>
                <a class="question accrodian-trigger" > Via WhatsApp</a>
                <div class="answer accrodian-data">  <p><i class="icon-share-alt"></i> Invite WA Azzahra Hijab : 081221551880 </p> </div>
                </li>
         </ul>
            
            <div class="clearfix"></div>
        </div>
    </section>
    
    <br><br><br>
    <?php iklan(); ?>
    
</div>

<!-- Footer -->
<?php footer(); ?>
    <a id="gotop" href="#">Back to top</a> </footer>
<?php bottom(); ?>
</body>
</html>
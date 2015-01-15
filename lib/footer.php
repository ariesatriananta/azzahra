<?php function footer(){ ?>
<footer id="footer">
    <section class="footersocial">
        <div class="container">
            <div class="row">
                <!-- Testimonial-->
                <div class="span3">
                    <div class="sidewidt">
                        <h2 class="heading2"><span><i class="icon-edit"></i> Testimonials</span></h2>
                        <div class="flexslider" id="testimonialsidebar">
                            <ul class="slides">
                                
                                <?php
                                //include('../admin/lib/koneksi.php');
                                $sql=mysql_query("SELECT * FROM testimoni");
                                while($data=mysql_fetch_array($sql)){
                                ?>
                                <li>"<?php echo $data['ISI']; ?>"<br>
                                    <br>
                                    <span class="pull-left orange">By : <?php echo $data['DARI']; ?></span> </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="span3 contact">
                    <h2> <i class="icon-phone-sign"></i> Hubungi Kami </h2>
                    <ul>
                        <li class="location"> Komplek Taman Bunga Cilame Blok C-1 No.12 Ngamprah, Bandung Barat. ‎</li>
                        <li class="phone"> 081221551880</li>
                        <li class="mobile"> BBM 7E6DFAD7</li>
                        <li class="email"> azzahrakerudung@yahoo.com</li>
                    </ul>
                </div>
                <div class="span3 twitter">
                    <h2> Jasa Pengiriman </h2>
                    <img title="jne" alt="jne" src="img/jne azzahra.png" width="120">  &nbsp&nbsp
                    <img title="jne" alt="jne" src="img/pos azzahra.png" width="120" >  <br><br>
                    <img title="jne" alt="jne" src="img/cod azzahra.png" width="120" >  <br>
                </div>
                <div class="span3 facebook">
                    <h2> Transfer Bank </h2>
                    
                    <img title="bca" alt="bca" src="img/bca azzahra.png" width="120"> &nbsp&nbsp
                    <img title="bca" alt="bca" src="img/mandiri azzahra.png" width="120"><br><br>
                	<img title="bca" alt="bca" src="img/cash azzahra.png" width="120"><br>
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "../../../connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
                    <div class="fb-like-box" data-href="http://www.facebook.com/envato" data-width="292" data-show-faces="true" data-colorscheme="dark" data-stream="false" data-show-border="false" data-header="false"  data-height="240"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="copyrightbottom">
        <div class="container">
            <div class="row">
                <div class="span5 social">
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="span2 textcenter"> Azzahra @ 2014 </div>
            </div>
        </div>
    </section>
<?php } ?>
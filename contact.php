<?php
include("lib/lib.php");
$page_name='contact';
?>
<!DOCTYPE html>
<html lang="en">

<?php top('Hubungi Kami'); ?>

<body>
<?php head($page_name); ?>
<div id="maincontainer">

  <section>
    <div class="container">
     
      <!-- Contact Us-->
      
		<?php
		$sql=mysql_query("SELECT * FROM hubungi_kami");
		while($data=mysql_fetch_array($sql)){
		?>
		<h1 class="heading1"><span class="maintext"> <i class="icon-map-marker"></i> <?php echo $data['JUDUL']; ?></span></h1>
         <aside>
            <div class="sidewidt">
			<table border=0>
				<tr>
					<?php if(empty($data['ALAMAT'])){ echo ''; }else{ echo "<td><i class='icon-home'></i></td>&nbsp&nbsp<td>".$data['ALAMAT']."<br></td>"; }?>
				</tr>
				<tr>
					<?php if(empty($data['TELP'])){ echo ''; }else{ echo "<td><i class='icon-phone'></i></td>&nbsp&nbsp<td>".$data['TELP']."<br></td>"; }?>
				</tr>
				<tr>
					<?php if(empty($data['BBM'])){ echo ''; }else{ echo "<td><i class='icon-mobile-phone'></i></td>&nbsp&nbsp<td>".$data['BBM']."<br></td>"; }?>
				</tr>
				<tr>
					<?php if(empty($data['EMAIL'])){ echo ''; }else{ echo "<td><i class='icon-envelope'></i></td>&nbsp&nbsp<td>".$data['EMAIL']."<br></td>"; }?>
				</tr>
				<tr>
					<?php if(empty($data['WEB'])){ echo ''; }else{ echo "<td><i class='icon-globe'></i></td>&nbsp&nbsp<td>".$data['WEB']."<br></td>"; }?>
				</tr>
			</table>
            </div>
          </aside>
		  <?php } ?>
     

<br><br>
    <h1 class="heading1"><span class="maintext"> <i class="icon-edit"></i> Kirimkan pesan anda</span></h1>
    
      <div class="row mt40">
        <div class="span6">
          <form class="form-horizontal contactform"  method="post" action="admin/act/pesan_act.php">
            <fieldset>
            <input type="hidden" name="aksi" value="insert">
              <div class="control-group">
                <label for="name" class="control-label">Nama <span class="required">*</span></label>
                <div class="controls">
                  <input type="text"  class="required" id="name" value="" name="nama">
                </div>
              </div>
              <div class="control-group">
                <label for="email" class="control-label">Email <span class="required">*</span></label>
                <div class="controls">
                  <input type="email"  class="required email" id="email" value="" name="email">
                </div>
              </div>
              <div class="control-group">
                <label for="message" class="control-label">Pesan</label>
                <div class="controls">
                  <textarea  class="required" rows="6" cols="40" id="message" name="pesan"></textarea>
                </div>
              </div>
              <div class="form-actions">
                <input class="btn btn-orange" type="submit" value="Submit" id="submit_id">
                <input class="btn" type="reset" value="Reset">
              </div>
            </fieldset>
          </form>
        </div>
        
        <!-- Sidebar Start-->
        <div class="span6">
         
        </div>
        <!-- Sidebar End-->
        
      </div>
    </div>
  </section>
    
    <br><br><br>
    <?php iklan(); ?>
    
</div>

<?php footer(); ?>
    <a id="gotop" href="#">Back to top</a> </footer>
<?php bottom(); ?>
</body>
</html>
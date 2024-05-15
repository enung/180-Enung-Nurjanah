
<section class="bg-primary text-white mb-0" id="bantuan">
  <div class="container">
    <h2 class="text-center text-uppercase text-white">Bantuan</h2>
    <hr class="star-light mb-5">
    <div class="row">
      <?php 
      if (!empty($bantuan)) {
        foreach ($bantuan as $row){?>
        <p><?php echo $row['bantuan']; ?></p>
        <?php }}?>
        <br><br><br><br><br>
      </div>
    </div>
  </section>

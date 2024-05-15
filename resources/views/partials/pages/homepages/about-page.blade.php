<!-- Contact Section -->
  <section id="informasi">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Tentang Aplikasi</h2>
      <hr class="star-dark mb-5">
      <div class="row">
        <?php 
        if (!empty($tentang)) {
          foreach ($tentang as $row){?>
          <p><?php echo $row['informasi']; ?></p>
          <?php }}?>
          <br><br><br><br><br>

        </div>
      </div>
    </section> 
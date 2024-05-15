  <!-- Header -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container">
     <center><img data-toggle="modal" data-target="#myModal" src="{{ asset('/img/icon.png') }}" alt="Avatar" width="30%" /> </center>
     <div class="row">
      <div class="col-lg-6 mx-auto">
       <form name="sentMessage" id="contactForm" novalidate="novalidate">
        <div class="control-group">
          <div class="form-group">
            <label></label>
            <div class="row">
              <div class="col-lg-10">
               <input class="form-control input-sm" id="name" type="text" name="pertanyaan" placeholder="Search" required="required" data-validation-required-message="Silahkan Inputkan Pertanyaan Anda">
               <p class="help-block text-danger"></p>
             </div>
             <div class="col-lg-2">
              <input type="submit" class="btn btn-default btn-xs" name="submit" value="Search">
            </div>
          </div>
        </div>
        <div class="form-group">
         <div class="row">
          <div class="col-lg-6">
           <?php 
           if (!empty($daftar)) {
            foreach ($daftar as $row){?>
            <textarea name="jawaban" class="textarea" cols="68" rows="12"  readonly><?php echo $row; ?></textarea>
            <?php }}?>
          </div>
        </div>
      </div>
      <div class="form-group">
       <div class="row">
        <div class="col-lg-6">
         <label></label>
       </div>
     </div>
   </div>
   <div class="form-group">
     <div class="row">
      <div class="col-lg-6">
       <label></label>
     </div>
   </div>
 </div>
 <div class="form-group">
   <div class="row">
    <div class="col-lg-6">
     <label></label>
   </div>
 </div>
</div>
<div class="form-group">
 <div class="row">
  <div class="col-lg-6">
   <label></label>
 </div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</header>
<?php
require_once 'header.php';
 ?>

<div class="col-lg-10">
  <div class="col-lg-10">
    <h2>Add Top Header</h2>
  </div>
  <form action="topeheader_post.php" method="post" enctype="multipart/form-data">
      
       <div class="col-lg-10">
      <label for=""> About Head</label>
      <input type="text" name="about_head" class="form-control">
      <br>
    </div>
      
     <div class="col-lg-10">
      <label for="">About URL</label>
      <textarea name="about" class="form-control"></textarea>
      <br> 
    </div>
      
     <div class="col-lg-10">
      <label for="">Services Head</label>
      <textarea name="services_head" class="form-control"></textarea>
      <br> 
    </div>
      
       <div class="col-lg-10">
      <label for="">Services URL</label>
      <textarea name="services" class="form-control"></textarea>
      <br> 
    </div>
      
      <div class="col-lg-10">
      <label for="">Testimonials Head</label>
      <textarea name="testimonials_head" class="form-control"></textarea>
      <br> 
    </div>
      
       <div class="col-lg-10">
      <label for="">Testimonials URL</label>
      <textarea name="testimonials" class="form-control"></textarea>
      <br> 
    </div>
      
       <div class="col-lg-10">
      <label for="">Contact Head</label>
      <textarea name="contact_head" class="form-control"></textarea>
      <br> 
    </div>
      
       <div class="col-lg-10">
      <label for="">Contact URL</label>
      <textarea name="contact" class="form-control"></textarea>
      <br> 
    </div>

      

    <div class="col-lg-5">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>

 <?php
 require_once 'footer.php';
  ?>

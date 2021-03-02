<?php
require_once 'header.php';
 ?>

<div class="col-lg-10">
  <div class="col-lg-10">
    <h2> Green Add </h2>
  </div>
  <form action="green_post.php" method="post" enctype="multipart/form-data">
      
       <div class="col-lg-10">
      <label for=""> Green Header</label>
      <input type="text" name="green_head" class="form-control">
      <br>
    </div>
      
     <div class="col-lg-10">
      <label for="">Paragraph One</label>
      <textarea name="parag11" class="form-control"></textarea>
      <br> 
    </div>
        <div class="col-lg-10">
      <label for="">Paragraph Two</label>
      <textarea name="parag22" class="form-control"></textarea>
      <br> 
            
    </div>
<!--
        <div class="col-lg-7 text-center py-3">
      <button type="Learn More" class="btn btn-primary">Learn More</button>
    </div>
-->
      
    <div class="col-lg-5">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>

 <?php
 require_once 'footer.php';
  ?>

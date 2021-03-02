<?php
require_once 'header.php';
 ?>

<div class="col-lg-10">
  <div class="col-lg-10">
    <h2>Add Free</h2>
  </div>
  <form action="call_post.php" method="post" enctype="multipart/form-data">
      
       <div class="col-lg-10">
      <label for=""> Free Header</label>
      <input type="text" name="callhead" class="form-control">
      <br>
    </div>
      
     <div class="col-lg-10">
      <label for="">Paragraph</label>
      <textarea name="parag2" class="form-control"></textarea>
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

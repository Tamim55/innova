<?php
require_once 'header.php';
 ?>

<div class="col-lg-12">
  <div class="col-lg-12">
    <h2>Add about</h2>
  </div>
  <form action="about_post.php" method="post" enctype="multipart/form-data">
      
       <div class="col-lg-12">
      <label for="">Add header</label>
      <input type="text" name="about_title" class="form-control">
      <br>
    </div>
      
      
      <div class="col-lg-12">
      <label for="">Add Paragraph</label>
      <input type="text" name="paragraph" class="form-control" placeholder="Max 600 Char">
      <br>
    </div>
      
     <div class="col-lg-12">
      <label for="">Add choose</label>
      <textarea name="choose_des" class="form-control"></textarea>
      <br> 
    </div>
      
      <div class="col-lg-12">
      <label for="">Choose Option 1</label>
      <textarea name="choose_1" class="form-control"></textarea>
      <br> 
    </div>
      
      <div class="col-lg-12">
      <label for="">Choose Option 2</label>
      <textarea name="choose_2" class="form-control"></textarea>
      <br> 
    </div>
      
      <div class="col-lg-12">
      <label for="">Choose Option 3</label>
      <textarea name="choose_3" class="form-control"></textarea>
      <br> 
    </div>
      
      <div class="col-lg-12">
      <label for="">Choose Option 4</label>
      <textarea name="choose_4" class="form-control"></textarea>
      <br> 
    </div>
      <div class="col-lg-12">
      <label for="">Add about Image</label>
      <input type="file" name="about_img" class="form-control">
      <br>
    </div>

    <div class="col-lg-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>

 <?php
 require_once 'footer.php';
  ?>

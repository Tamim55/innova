<?php
require_once 'header.php';
 ?>

<div class="col-lg-12">
  <div class="col-lg-12">
    <h2>Add Testimonials</h2>
  </div>
  <form action="test_post.php" method="post" enctype="multipart/form-data">
    <div class="col-lg-12">
      <label for="">Add Testimonials Image</label>
      <input type="file" name="test_img" class="form-control">
      <br>
    </div>
    <div class="col-lg-12">
      <label for="">Add Testimonials Title</label>
      <input type="text" name="test_title" class="form-control">
      <br>
    </div>
    <div class="col-lg-12">
      <label for="">Add Testimonials description</label>
      <textarea name="test_des" class="form-control"></textarea>
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

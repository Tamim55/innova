 <?php
require_once 'header.php'; 
?>



<div class="col-lg-8 m-auto">
      <div class="text-center py-3">
        <h2> Register</h2>
      </div>
      <form action="register_post.php" method="post" enctype="multipart/form-data">
      <div class="row">
          
    <div class="col-lg-12 from- group">
            <label for="">Username</label>
            <input type="text" class="form-control" name="username">
        
      </div>
          
          <div class="col-lg-12 from- group">
        <label for="">Lastname</label>
        <input type="text" class="form-control" name="lastname">  
  </div>     
      <div class="col-lg-12 from- group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email">  
  </div>
          
   
  <div class="col-lg-12 from- group">
    <label for="">Password</label>
    <input type="password" class="form-control" name="password">
</div>
          
<div class="col-lg-12 from- group">
        <label for="">Phone</label>
        <input type="text" class="form-control" name="Phone">  
  </div>     
          
        <div class="col-lg-12 from- group">
        <label for="">Address</label>
        <input type="text" class="form-control" name="Address">  
  </div>     
            <div class="col-lg-12 from- group">
        <label for="">Age</label>
        <input type="text" class="form-control" name="Age">  
  </div>   
          
             <div class="col-lg-12 from- group">
        <label for="">Gender</label>
        <input type="text" class="form-control" name="Gender">  
                 <form action="">
  <input type="radio" name="gender" value="male"> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other
</form>
                 
  </div>     
          
          
          <div class="col-lg-12 from- group">
        <label for="">Birthday</label>
        <input type="date" class="form-control" name="Birthday">  
  </div>     
            <div class="col-lg-12 from- group">
        <label for="">City</label>
        <input type="text" class="form-control" name="City">  
  </div>     
             
           <div class="col-lg-12 from- group">
        <label for="">Zip</label>
        <input type="text" class="form-control" name="Zip">  
  </div>     
            
          
          
          
          
  <div class="col-lg-12 from- group">  
    <label for="">Profile picture</label>
    <input type="file" class="form-control" name="profile_photo">
     
</div>        
          
          
          
 
          
<div class="col-lg-20 text-center">
    <button type="submit" class="btn btn-primary">Register </button>
</div>




    </div>
  </from>
</div>
</div>
</div>

</section> 







    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
 <?php
require_once 'footer.php'; 
?>


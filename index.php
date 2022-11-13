    
 <?php 
     $title = 'Index';
 require_once 'includes/header.php';
 require_once 'db/conn.php';?>
  
    <h1 class="text-center">Registration for IT Conference</h1>
    
    <form method ="post" action="success.php" enctype="multipart/form-data">
    <div class="form-group">
    <label for="firstname" >First Name</label>
    <input required type="text" class="form-control" id="firstname" name="firstname">
  </div>
   <br>
  <div class="form-group">
    <label for="lastname" >Last Name</label>
    <input required type="text" class="form-control" id="lastname" name="lastname">
  </div>
  <br>
  <div class="form-group">
    <label for="dob" >Date of Birth</label>
    <input type="text" class="form-control" id="dob" name="dob">
  </div>
    <br>
  <div class="form-group">
    <label for="specialty" >Area of Specialty</label>
    <select class="form-control" id="specialty" name="specialty">
    <option >Database Administrator</option>
    <option >Software Developer</option>
    <option >Web Administrator</option>
    <option >Other</option>
</select>
  </div>
  <br>
    <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name ="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small name="email">
  </div>
   <br>
  <div class="form-group">
    <label for="phone">Contact Number</label>
    <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name = "phone">
    <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small name="phone">
  </div>
  <br>
  <div class="custom-file">
            <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar" >
            <label class="custom-file-label" for="avatar">Choose File</label>
            <small id="avatar" class="form-text text-danger">File Upload is Optional</small>

        </div>


   <div class="d-grid gap-2">
  <button type="submit" name="submit" class="btn btn-info btn-block">Submit</button>
  </div>
 
</form>
<br>
<br>
<br>
<br>
<br>

    <?php require_once 'includes/footer.php';?>

<?php include 'inc/header.php'?>
<br>
<div class="container">
<h2 class="page-header">Create a new Job listing.</h2>
<form method="post" action="createjob.php" class="">
<div class="form-group col-md-5">
<label>Company Name:</label>
<input type="text" class="form-control" name="company">
</div>
<div class="form-group col-md-5">
<label>Category</label>
<select class="form-control" name="category">
<option value="0">Select a Category</option>
  <?php foreach($categories as $category): ?>
    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
  <?php endforeach ?>
</select>
</div>
<div class="form-group col-md-5">
<label>Job title:</label>
<input type="text" class="form-control" name="job_title">
</div>
<div class="form-group col-md-5">
<label>Description:</label>
<textarea class="form-control" name="description" style="resize:none;"></textarea>
</div>
<div class="form-group col-md-5">
<label>Salary:</label>
<input type="text" class="form-control" name="salary">
</div>
<div class="form-group col-md-5">
<label>Location:</label>
<input type="text" class="form-control" name="location">
</div>
<div class="form-group col-md-5">
<label>Contact User:</label>
<input type="text" class="form-control" name="contact_user">
</div>
<div class="form-group col-md-5">
<label>Contact_email</label>
<input type="text" class="form-control" name="contact_email">
</div>
<div class="form-group col-md-2">
<input type="submit" class="btn btn-success" value="submit" name="submit">
</div>
</form>


<div class="alert alert-danger col-md-5 ml-auto mb-25" role="alert">
  <strong>Warning!</strong> Check all of your information before submitting do not give false information 
  <hr>
  you can not change the information after submission.
</div>

<div>
<?php include 'inc/footer.php'?>
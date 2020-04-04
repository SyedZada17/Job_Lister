<?php include 'inc/header.php'?>
<br>
<div class="container">
<h2 class="page-header">Update Job listing.</h2>
<form method="post" action="editjob.php?id=<?php echo $job->id; ?>" class="form">
<div class="form-group col-md-5">
<label>Company Name:</label>
<input type="text" class="form-control" name="company" value="<?php echo $job->company; ?>">
</div>
<div class="form-group col-md-5">
<label>Category</label>
<select class="form-control" name="category">
<option value="0">Select a Category</option>
  <?php foreach($categories as $category): ?>
    <?php if($job->category_id == $category->id):?>
        <option value="<?php echo $category->id; ?>"selected><?php echo $category->name; ?></option>
    <?php else:?>
        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
    <?php endif;?>
   
  <?php endforeach ?>
</select>
</div>
<div class="form-group col-md-5">
<label>Job title:</label>
<input type="text" class="form-control" name="job_title" value="<?php echo $job->job_title; ?>">
</div>
<div class="form-group col-md-5">
<label>Description:</label>
<textarea class="form-control" name="description" style="resize:none;"><?php echo $job->job_description;?></textarea>
</div>
<div class="form-group col-md-5">
<label>Salary:</label>
<input type="text" class="form-control" name="salary" value="<?php echo $job->salary; ?>">
</div>
<div class="form-group col-md-5">
<label>Location:</label>
<input type="text" class="form-control" name="location" value="<?php echo $job->office_location; ?>">
</div>
<div class="form-group col-md-5">
<label>Contact User:</label>
<input type="text" class="form-control" name="contact_user" value="<?php echo $job->contact_user; ?>">
</div>
<div class="form-group col-md-5">
<label>Contact_email</label>
<input type="text" class="form-control" name="contact_email" value="<?php echo $job->contact_email; ?>">
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
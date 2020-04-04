<?php include 'inc/header.php'?>
<div class="container">
<br><br>
<h2><?php echo $job->job_title; ?></h2>
<h6>Employer: <?php echo $job->contact_user; ?></h6>
<hr>
<p class="lead"><?php echo $job->job_description; ?></p>
<hr>
<br>
<hr>
<h5>Employer Details:</h5>
<ul class="list-group">
<li class="list-group-item"><Strong>Company: </Strong><?php echo $job->company; ?></li>
<li class="list-group-item"><Strong>Salary: </Strong><?php echo $job->salary; ?></li>
<li class="list-group-item"><Strong>Contact: </Strong><?php echo $job->contact_email; ?></li>
<li class="list-group-item"><Strong>Contact: </Strong><?php echo $job->office_location; ?></li>
</ul>

<br>
<a href="index.php" class="btn btn-success">Go-Back</a>
<br><br>
<div class="card card-body bg-ligt">
<form style="display:inline;" method="post" action="jobposting.php">

<a href="editjob.php?id=<?php echo $job->id;?>" class="btn btn-small btn-info col-md-1">Edit</a>
<input type="hidden" name="del_id" value="<?php echo $job->id;?>">
<input type="submit" class="btn btn-danger" value="delete">
</form>
</div>
</div>
<?php include 'inc/footer.php'?>

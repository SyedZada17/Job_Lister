<?php include 'inc/header.php'?>
<br>
<div class="container">
<!-- Jumbotron -->
<div class="jumbotron ">
  <h1 class="display-4 text-center">Welcome! Find your dream job</h1>
  <br>
  <form method="get" action="index.php">
  <div class="form-group text-center">
  <select name="category" class="form-control col-md-5 m-auto">
  <option value="0">Select a Category</option>
  <?php foreach($categories as $category): ?>
    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
  <?php endforeach ?>
  </select> 
   <br>
  <input type="submit" class="btn btn-large btn-success col-md-3" value="Search">
  </div>
   </form>
  
 
</div>
<!-- Main content -->
<h3><?php echo $title;?></h3>
<br>
<?php foreach($jobs as $job): ?>
<div class="row marketing">
<div class="col-md-10">
<h4><?php echo $job->job_title; ?></h4>
<p><?php echo $job->job_description; ?></p>
</div>
<div class="col-md-2"><a class="btn btn-success" href="jobposting.php?id=<?php echo $job->id; ?>">View</a></div>
</div>
<?php endforeach; ?>
 </div>   
<?php include 'inc/footer.php'?>
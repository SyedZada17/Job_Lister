<?php include_once 'config/init.php'; ?>
<?php 
$job = new job;

$job_id= isset($_GET['id']) ? $_GET['id']: null;

if(isset($_POST['submit'])){
    $data = array();
    $data['job_title'] = $_POST['job_title'];
    $data['company'] = $_POST['company'];
    $data['category_id'] = $_POST['category'];
    $data['job_description'] = $_POST['description'];
    $data['salary'] = $_POST['salary'];
    $data['office_location'] = $_POST['location'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];

    if($job->update($job_id,$data)){
        redirect('index.php','your listing has been updated','success');
    }else{
        redirect('index.php','Something went wrong','error');
    }
}

$template = new Template('templates/updatejob.php');
$template->categories = $job->getCategories();
$template->job = $job->getjob($job_id);
echo $template;
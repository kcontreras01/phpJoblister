<?php include_once 'config/init.php';

$job = new Job;

$job_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])) {
    $data = [
        'job_title' => $_POST['job_title'],
        'company' => $_POST['company'],
        'category_id' => $_POST['category'],
        'description' => $_POST['description'],
        'location' => $_POST['location'],
        'salary' => $_POST['salary'],
        'contact_user' => $_POST['contact_user'],
        'contact_email' => $_POST['contact_email']
    ];

    if($job->update($job_id, $data)) {
        redirect('index.php', 'Your job has been updated', 'success');
    } else {
        redirect('index.php', 'Something went wrong', 'error');
    }
}

$template = new Template('templates/job-edit.php');
$template->job = $job->getJob($job_id);
$template->categories = $job->getCategories();

echo $template;
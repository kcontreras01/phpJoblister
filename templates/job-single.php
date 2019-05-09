<?php include 'inc/header.php'; ?>

<div class="container" style="margin-top:100px;">
    <h2 class="page-header"><?php echo $job->job_title?> (<?php echo $job->location?>)</h2>
    <p class="lead"><?php echo $job->description?></p>
    <ul class="list-group">
        <li class="list-group-item"><strong>Company: </strong><?php echo $job->company?></li>
        <li class="list-group-item"><strong>Salary: </strong><?php echo $job->salary?></li>
        <li class="list-group-item"><strong>Contact Email: </strong><?php echo $job->contact_email?></li>
    </ul>
    <br><br>
    <a href="index.php" class="btn btn-outline-success">Go Back</a>
    <br><br>


    <div class="well">
        <a href="edit.php?id=<?php echo $job->id?>" class="btn btn-secondary">Edit</a>
        <form action="job.php" style="display: inline" method="post">
            <input type="hidden" name="del_id" value="<?php echo $job->id?>">
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>
    </div>

    <small>Posted By: <?php echo $job->contact_user?> on <?php echo $job->post_date?></small>

</div>
<?php include 'inc/footer.php'; ?>

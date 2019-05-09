<?php

include 'inc/header.php';?>

    <div class="jumbotron">
        <div class="container">
            <br>
            <h1 class="display-3"><?php echo $title ?></h1>
            <form method="get" action="index.php">
                <select name="category" class="form-control" id="">
                    <option value="0">Choose Category</option>
                    <?php foreach($categories as $category): ?>
                        <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
                    <?php endforeach; ?>
                </select>
                <br>
                <input type="submit" class="btn btn-lg btn-success" value="FIND">
            </form>
        </div>
    </div>

    <div class="container">
        <?php foreach($jobs as $job): ?>
        <div class="row">
          <div class="col-md-10">
            <h3><?php echo $job->job_title?></h3>
            <p><?php echo $job->description?></p>
          </div>
            <div class="col-md-2" style="margin-top: auto">
                <p><a class="btn btn-secondary" href="job.php?id=<?php echo $job->id ?>" role="button">View &raquo;</a></p>
          </div>
        </div>
        <?php endforeach; ?>
    <hr>

<?php include 'inc/footer.php';
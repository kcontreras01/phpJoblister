<!DOCTYPE html>
<html>
<head>
    <title>
        <?php echo SITE_TITLE; ?>
    </title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
<!--    <link rel="stylesheet" href="css/styles.css">-->
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#"><?php echo SITE_TITLE; ?></a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="create.php">Create Listing</a>
            </li>
        </ul>
    </div>
</nav>
<?php displayMessage(); ?>
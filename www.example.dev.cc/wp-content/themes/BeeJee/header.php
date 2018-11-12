<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <title>Header</title>
</head>

<?php if(session_status()!=PHP_SESSION_ACTIVE) session_start(); ?>

<style>
    <?php include "style.css"; ?>
</style>
<script>
    <?php include "script.js"; ?>
</script>




<body <?php include "variables.php" ?>>
<?php include "upper.php";?>
<?php include "sidebar.php";?>

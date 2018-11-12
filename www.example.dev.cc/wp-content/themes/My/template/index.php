<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
<!--    <link rel="stylesheet" href="style.css">-->
    <link rel="stylesheet" type="text/css" href="include/style2.css">
</head>
<body <?php include 'variables/variables.php' ?>>
    <script type="text/javascript">
        function onClick(element) {
            idd = element.id;
            document.location.href="index.php?selected=" + idd;
            return element.id;
        }
    </script>
    <div id="page_wrap">
        <?php include 'include/header.php'; ?>
        <div class="clear"><br></div>
        <?php include 'include/nav.php';
//            if (isset($_GET['selected'])){
//                echo "Значение JavaScript-переменной: ".$_GET['selected'];
//            }
        ?>
        <div id="wrapper" >
            <?php
            if (isset($_GET['selected']) && $_GET['selected'] == 'feedback'){
//                echo "Значение JavaScript-переменной: ".$_GET['selected'];
//                include 'include/writing.php';
//                include '../../../../wp-content/plugins/pirate-forms/public/partials/pirateforms-form.php';
//                echo do_shortcode('[pirate_forms]');
                include 'include/mailer.php';

//                echo activate_pirate_forms();
            }
            else {
                include 'include/content.php';
            }
            ?>
            <?php /* include 'include/content.php'; */ ?>
            <?php  include 'include/bottom.php';  ?>
        </div>
        <?php include 'include/slyder.php'; ?>
    </div>
    <?php include 'include/footer.php'; ?>
</body>
</html>
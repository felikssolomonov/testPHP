<?php

?>




    <?php include "header.php"; ?>


    <div id="page_wrap">

        <div id="wrapper">
        <?php
//        echo "Значение JavaScript-переменной: ".$_GET['selected'];
        if (isset($_GET['selected'])){
            if (isset($_GET['selected']) && $_GET['selected'] == 'registration'){
                include "registr.php";
            }
            else if (isset($_GET['selected']) && $_GET['selected'] == 'login'){
                include "login.php";
            }
            else if (isset($_GET['selected']) && $_GET['selected'] == 'mainPage'){
                include "mainPage.php";
            }
            else if (isset($_GET['selected']) && $_GET['selected'] == 'createTask'){
                include "createTask.php";
            }
            else if (isset($_GET['selected']) && $_GET['selected'] == 'aboutUs'){
                include "aboutUs.php";
            }
            else if (isset($_GET['selected']) && $_GET['selected'] == 'viewAll'){
                include "viewAll.php";
            }
            else if (isset($_GET['selected']) && $_GET['selected'] == 'createTask'){
                include "createTask.php";
            }
            else {
                echo "not found...";
            }
        }
        else if (isset($_GET['news'])){
//            echo    "<div id=\"articles\">
//                        <div id=\"aboutWe\">
//                            <p>";
//                                echo $arrNews[$_GET['news']]->get_full();
//            echo            "</p>
//                        </div>
//                        <div id=\"columnR\">
//                            <p>";
            include "pageNews.php";
//            echo            "</p>
//                        </div>
//                    </div>";
        } ?>
        </div>

    </div>



    <?php include "footer.php"; ?>

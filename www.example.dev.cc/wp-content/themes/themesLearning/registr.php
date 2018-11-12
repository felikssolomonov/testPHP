<?php
//    global $wpdb;
//    $list_users = $wpdb->prefix.reg_users;
//
//    if ( isset($_POST['registration']) )
//    {
//        $reg_name = $_POST['reg_name'];
//        $reg_login = $_POST['reg_login'];
//        $reg_email = $_POST['reg_email'];
//        $reg_password = $_POST['reg_password'];
//
//        $wpdb->insert
//        (
//            $list_users,
//            array( 'name' => $reg_name, 'login' => $reg_login, 'email' => $reg_email, 'password' => $reg_password),
//            array( '%s', '%s', '%s', '%s')
//        );
//        echo "Welcome to our site";
//        header("Location: /log.php");
//    }
//?>

<div id="wrapper">
    <div id="articles">
        <h1>Registration</h1>
        <form action="" method="post" name="registerForm">
            <p>
                <label>Name:<br>
                    <input name="reg_name" size="20" type="text" value="">
                </label>
            </p>
            <p>
                <label>login:<br>
                    <input name="reg_login" size="30" type="text">
                </label>
            </p>
            <p>
                <label>Email:<br>
                    <input name="reg_email" size="30" type="text">
                </label>
            </p>
            <p>
                <label>Password:<br>
                    <input name="reg_password" size="30" type="text">
                </label>
            </p>
            <p>
                <input name="registration" type="submit" value="Registration">
            </p>
            <p>
<!--                <a href=--><?php //echo require_once('log.php');?><!-- >You registrated?</a>-->
<!--                <a href="javascript: document.location.href = --><?php //echo require_once ('log.php'); ?><!--">You registrated?</a>-->
                <a href="#" id="login" onclick="onClick(this)">You registrated?</a>
            </p>
        </form>
    </div>
</div>
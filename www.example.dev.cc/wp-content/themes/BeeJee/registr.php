<?php
    $connection = mysqli_connect('localhost', 'root');
    $select_db = mysqli_select_db($connection, 'users');
    if ((isset($_POST['reg_name'])) && (isset($_POST['reg_password']))) {
        $username = $_POST['reg_name'];
        $email = "";
        $email = $_POST['reg_email'];
        $password = $_POST['reg_password'];

        $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($connection, $query);

        if($result){
            $con = "Connected";
        }
        else {
            $notCon = "Not connected";
        }
    }
?>



<div id="wrapper">
    <div id="articles">
        <h1>Registration</h1>
        <form action="" method="post" name="registerForm">
            <?php
                if(isset($con)){
                    echo "$con";
                }
            ?>
            <?php
                if (isset($notCon)) {
                    echo "$notCon";
                }
            ?>
            <p>
                <label>Name:<br>
                    <input name="reg_name" size="30" type="text">
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
        </form>
    </div>
</div>





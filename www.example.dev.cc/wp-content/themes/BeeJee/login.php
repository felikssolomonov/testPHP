
<?php
    $connection = mysqli_connect('localhost', 'root');
    $select_db = mysqli_select_db($connection, 'users');

    if ((isset($_POST['Auth'])) && (isset($_POST['log_login'])) && (isset($_POST['log_password']))) {
        $username = $_POST['log_login'];
        $password = $_POST['log_password'];

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

        $count = mysqli_num_rows($result);
        if($count == 1) {
            $_SESSION['username'] = $username;
        }
    }

    if(isset($_POST['LogOut'])){
        $_SESSION['username'] = "";
        unset($_POST['log_login']);
        session_destroy();
    }
?>

<div id="wrapper">
    <div id="articles">
        <h1>Authentification</h1><br>
            <?php
            if(isset($_SESSION['username']) && ($_SESSION['username'] != ""))
            {
                echo $_SESSION['username'];
                echo "<form action=\"\" method=\"post\" name=\"LoginOut\"><input name=\"LogOut\" type=\"submit\" value='выйти'></form>";
            }
            else {
                    echo "<form action=\"\" method=\"post\" name=\"nameLogin\"><p>
                        <label>Login:<br>
                            <input name=\"log_login\" size=\"30\" type=\"text\">
                        </label>
                      </p>";
                    echo "<p>
                        <label>Password:<br>
                            <input name=\"log_password\" size=\"30\" type=\"password\">
                        </label>
                      </p>";
                    echo "<p>
                        <input name=\"Auth\" type=\"submit\">
                      </p>
                </form>";
            }
//            echo PHP_SESSION_ACTIVE."active<br>";
            ?>
    </div>
</div>
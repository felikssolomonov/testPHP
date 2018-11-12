<?php

    $GLOBALS['picture'] = '';

    if (isset($_POST['send']) && ($_FILES['upload']['size'] == 0) || ($_FILES['upload']['name'] == '')) {/////////
        $connection = mysqli_connect('localhost', 'root');
        $select_db = mysqli_select_db($connection, 'tasks');

        echo "send created<br>";

        $picture = $GLOBALS['picture'];
        $name = $_POST['task_name'];
        $email = $_POST['task_email'];
        $text = $_POST['task_text'];

        $query = "INSERT INTO tasks (username, text, email, picture) VALUES ('$name', '$text', '$email', '$picture')";

        $result = mysqli_query($connection, $query);

        if($result){
            $con = "Connected";
        }
        else {
            $notCon = "Not connected";
        }
    }

    function can_upload($file){
        // если имя пустое, значит файл не выбран
        if($file['name'] == '') {
            return 'Вы не выбрали файл.';
        }
        /* если размер файла 0, значит его не пропустили настройки
        сервера из-за того, что он слишком большой */
        if($file['size'] == 0) {
            return 'Файл слишком большой.';
        }
        // разбиваем имя файла по точке и получаем массив
        $getMime = explode('.', $file['name']);
        // нас интересует последний элемент массива - расширение
        $mime = strtolower(end($getMime));
        // объявим массив допустимых расширений
        $types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');
        // если расширение не входит в список допустимых - return
        if(!in_array($mime, $types)) {
            return 'Недопустимый тип файла.';
        }
        return true;
    }



    function make_upload($file){//$GLOBALS['picture']
        $name = $GLOBALS['picture'];
        $filePath  = $_FILES['upload']['tmp_name'];
        $image = getimagesize($filePath);
        $imageW = $image[1];
        $imageH = $image[0];
        copy($file['tmp_name'], 'imagesTasks/' . $name);
        if($imageW>320 || $imageH>240){
            include('changeImage.php');
            $newImage = new SimpleImage();
            $newImage->load('imagesTasks/' . $name);
            $newImage->resize(320, 240);
            $newImage->save('imagesTasks/' . $name);
        }
        echo $GLOBALS['picture']."---------------<br>";
        $connection = mysqli_connect('localhost', 'root');
        $select_db = mysqli_select_db($connection, 'tasks');

        $picture = $GLOBALS['picture'];
        $name = $_POST['task_name'];
        $email = $_POST['task_email'];
        $text = $_POST['task_text'];

        $query = "INSERT INTO tasks (username, text, email, picture) VALUES ('$name', '$text', '$email', '$picture')";

        $result = mysqli_query($connection, $query);

        if($result){
            $con = "Connected";
        }
        else {
            $notCon = "Not connected";
        }
        $_FILES['upload']=null;
        unset($_FILES['upload']);
    }

?>

<div id="wrapper">
    <div id="articles">
        <?php
            if(isset($_SESSION['username']) && ($_SESSION['username'] != ""))
            {
                echo $_SESSION['username'];
            }
        ?>
        <form method="post" enctype="multipart/form-data">
            <p>
                <label>Name:<br>
                    <input name="task_name" size="30" type="text">
                </label>
            </p>
            <p>
                <label>Email:<br>
                    <input name="task_email" size="30" type="email">
                </label>
            </p>
            <p>
                <label>Text of task:<br>
                    <textarea name="task_text" cols="40" rows="10" style="margin-bottom: 10px"></textarea>
                </label>
            </p>
            <p>
                <input type="file" name="upload">
            </p>
            <p>
                <input type="submit" name="send" value="Создать задачу!">
            </p>
        </form>
        <?php

        if(($_FILES['upload']['size'] == 0) || ($_FILES['upload']['name'] == '')) {
            $GLOBALS['picture'] = "";

            if((isset($_POST['task_name'])) && (isset($_POST['task_email'])) && (isset($_POST['task_text']))){
                $name = $_POST['task_name'];
                $email = $_POST['task_email'];
                $text = $_POST['task_text'];

                if((!empty($name)) && (!empty($email)) && (!empty($text))){
                }
                else {
                    echo "Поля обязательные для заполнения:<br>Name, Email и Text";
                }
            }
        }
        else {
            $GLOBALS['picture'] = mt_rand(0, 1000).$_FILES['upload']['name'];

            if((isset($_POST['task_name'])) && (isset($_POST['task_email'])) && (isset($_POST['task_text']))){
                $name = $_POST['task_name'];
                $email = $_POST['task_email'];
                $text = $_POST['task_text'];

                if((!empty($name)) && (!empty($email)) && (!empty($text))){
                    $check = can_upload($_FILES['upload']);

                    if($check === true) {
                        make_upload($_FILES['upload']);
                        echo "<strong>Файл успешно загружен!</strong>";
                    }
                    else{
                        // выводим сообщение об ошибке
                        echo "<strong>$check</strong>";
                    }
                }
                else {
                    echo "Поля обязательные для заполнения:<br>Name, Email и Text";
                }
            }
        }
        ?>
    </div>
</div>

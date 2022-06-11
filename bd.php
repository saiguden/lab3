 <?php
    $connect = mysqli_connect('localhost', 'root', '', 'practice');

    if (isset($_POST ['username']) && isset($_POST ['password']) && isset($_POST ['email']))   {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];



        $query = "INSERT INTO users (username, password, email) VALUES('$username', '$password', '$email')";
        $result = mysqli_query($connect, $query);

        if($result) {
            $smsg = "Регистрация прошла успешно";
        } else {
            $fsmsg= "Ошибка";
        }
    }
?>
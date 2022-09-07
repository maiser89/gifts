<?php
//This code shows how to Upload And Insert Image Into Mysql Database Using Php Html.
//connecting to uploadFile database.
session_start();
$databaseHost = 'localhost';
$databaseName = 'test';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if ($mysqli) {
//if connection has been established display connected.
}

if (isset($_POST['Submit'])) {
    $username = $_POST['un'];
    $password = $_POST['pw'];

    $query = "select * from login where username='$username' and password='$password'";
    $result = mysqli_query($mysqli, $query);
    $userResult = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['userId'] = $userResult['id'];
        $_SESSION['usertype'] = $userResult['usertype'];
//        if ($userResult['usertype'] == "admin") {
//            header('Location: add1.php');
//        } else if ($userResult['usertype'] == "user") {
//            header('Location: add1.php');
//        } else if ($userResult['usertype'] == "owner") {
//            header('Location: add1.php');
//        }

        echo json_encode(200);
    } else {
        echo json_encode(10);


//        echo ' alert("Wrong Details");';





    }
}


?>

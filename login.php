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
if (isset($_POST['save'])) {
    $username = $_POST['un'];
    $password = $_POST['pw'];
    $query = "select * from login where username='$username' and password='$password'";
    $result = mysqli_query($mysqli, $query);

    $userResult = mysqli_fetch_array($result);

    $_SESSION['username'] = $username;
    $_SESSION['userId'] = $userResult['id'];
    $_SESSION['usertype'] = $userResult['usertype'];

    if ($userResult['usertype'] == "admin") {
        header('Location: add1.php');
    } else if ($userResult['usertype'] == "user") {
        header('Location: add1.php');
    } else {
        echo 'fghfjhfg';


    }
}

?>


<!DOCTYPE html>
<html>
<head>


    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>صفحة المالية</title>
    <script src="https://kit.fontawesome.com/28e600a1b8.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Iconscout Link For Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://fonts.googleapis.com/css?family=Noto Nastaliq Urdu' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            font-family: arial, sans-serif;
        }

        input, textarea {
            display: block;
            width: 300px;
            font-size: 18px;
            margin: 7px 0px;
        }

        label {
            display: block;
            padding: 2px 0px;
        }
    </style>
</head>

<body>
<form method="post" enctype="multipart/form-data">
    <label>Name:</label>
    <input type="text" name="un" required="true">
    <label>password:</label>
    <input type="password" name="pw" required="true">
    <label>Select image to upload:</label>

    <input type="submit"
           name="save" value="login">
</form>
</body>
</html>
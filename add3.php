<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>صفحة المالية</title>
    <script src="https://kit.fontawesome.com/28e600a1b8.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_sheet/all_site_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Iconscout Link For Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://fonts.googleapis.com/css?family=Noto Nastaliq Urdu' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
//including the database connection file
session_start();

include_once("config.php");

if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gid = $_POST['gid'];
    $details = $_POST['details'];
    $numberoptic = $_POST['numberoptic'];
    $measruingoptic = $_POST['measruingoptic'];
    $sideoptic = $_POST['sideoptic'];
    $authorizedoptic = $_POST['authorizedoptic'];
    $states = isset($_POST['states']) ? $_POST['states'] : "فعال";
    // checking empty fields

    // if all the fields are filled (not empty)
    //insert data to database

    $result = mysqli_query($mysqli, "INSERT INTO users(name,email,states,loginId,gid,details,numberoptic,measruingoptic,sideoptic,authorizedoptic) VALUES('$name','$email','$states', {$_SESSION["userId"]},'$gid','$details','$numberoptic','$measruingoptic','$sideoptic','$authorizedoptic')");

    //display success message
    echo "<font color='green'>Data added successfully.";
    echo "<br/><a href='index3.php'>View Result</a>";

}
?>

</body>
</html>

<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <META HTTP-EQUIV="Content-Type"  CONTENT="text/html; CHARSET=iso-8859-6">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>صفحة المالية</title>
    <script src="https://kit.fontawesome.com/28e600a1b8.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_sheet/all_site_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Iconscout Link For Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://fonts.googleapis.com/css?family=Noto Nastaliq Urdu' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src=""></script>
</head>

<body>
<a href="add.html">اضافة البيانات</a><br/><br/>

<table width='80%' border=0>
    <tr bgcolor='#CCCCCC'>
        <td>الاسم</td>
        <td>المبلغ</td>
        <td>التخصص</td>
        <td>العملة</td>
        <td>التاريخ</td>
        <td>الوقت</td>
        <td>اسم مدخل البيانات</td>
        <td>الحالة</td>
        <td>تحديث البيانات</td>
    </tr>
    <?php
    //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
    while($res = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$res['name']."</td>";
        echo "<td>".$res['price']."</td>";
        echo "<td>".$res['email']."</td>";
        echo "<td>".$res['currency']."</td>";
        echo "<td>".$res['date']."</td>";
        echo "<td>".$res['time']."</td>";
        echo "<td>".$res['namedata']."</td>";
        echo "<td>".$res['states']."</td>";
        echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
    }
    ?>
</table>
</body>
</html>

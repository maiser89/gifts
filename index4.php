<?php
session_start();


if (isset($_SESSION['userId'])) :
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "select * from   users
                    inner join login on users.loginId=login.id
                    inner join typegifts on users.gid=typegifts.g_id where g_name='الانعام' 
ORDER BY users.id DESC");

$result1 = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; CHARSET=iso-8859-6">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>صفحة المالية</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<a href="add1.php">اضافة البيانات</a><br/><br/>
<div class="container">
    <h3 align="center">Datatables Jquery Plugin with Php MySql and Bootstrap</h3>
    <br/>
    <div class="table-responsive">
        <table id="employee_data" class="table table-striped table-bordered">
            <thead>
            <tr pcolor=#CCCCCC>
                <td>الاسم</td>
                <td>النوع</td>
                <td>التخصص</td>
                <td>العدد</td>
                <td>التاريخ</td>
                <td>الوقت</td>
                <td>اسم مدخل البيانات</td>
                <td>الحالة</td>
                <td>نوع التبرع</td>
                <td>تعديل</td>

            </tr>
            </thead>
            <tbody>
            <?php


            //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
            while ($res = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $res['name'] . "</td>";
                echo "<td>" . $res['typecattle'] . "</td>";
                echo "<td>" . $res['email'] . "</td>";
                echo "<td>" . $res['numberoptic'] . "</td>";
                echo "<td>" . $res['date'] . "</td>";
                echo "<td>" . $res['time'] . "</td>";
                echo "<td>" . $res['username'] . "</td>";
                echo "<td>" . $res['states'] . "</td>";
                echo "<td>" . $res['g_name'] . "</td>";


                $res1 = mysqli_fetch_array($result1);
                echo "<td><a href=\"edit.php?id=$res1[id]\">Edit</a> </td> ";

                echo "</tr>";
            }

            else:
                header('Location: login.php');
            endif;


            ?>

            </tbody>
        </table>
    </div>
</div>

</body>

</html>
<script>$(document).ready(function () {
        $('#employee_data').DataTable();
    });</script>


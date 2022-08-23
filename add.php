<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>صفحة المالية</title>
    <script src="https://kit.fontawesome.com/28e600a1b8.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_sheet/all_site_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Iconscout Link For Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://fonts.googleapis.com/css?family=Noto Nastaliq Urdu' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
//including the database connection file
session_start();

include_once("config.php");

if(isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $gid = $_POST['gid'];
    $email = $_POST['email'];
    $currency = $_POST['currency'];
    $states = isset($_POST['states']) ? $_POST['states'] : "فعال";
    // checking empty fields

        // if all the fields are filled (not empty)
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO users(name,price,email,currency,states,loginId,gid) VALUES('$name','$price','$email','$currency','$states',  {$_SESSION["userId"]},'$gid')");

        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><button class='rt'>View Result</button>";

}
?>
<?php

$result1 = mysqli_query($mysqli, "select * from users 
                    inner join login on users.loginId=login.id
                    inner join typegifts on users.gid=typegifts.g_id where g_name='نقد'  
ORDER BY users.id DESC");

$result2 = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

?>
<div class="container" >
    <h3 align="center">Datatables Jquery Plugin with Php MySql and Bootstrap</h3>
    <br/>
    <div class="table-responsive">
        <table id="employee_data" class="table table-striped table-bordered">
            <thead>
            <tr pcolor=#CCCCCC>
                <td>الاسم</td>
                <td>المبلغ</td>
                <td>التخصص</td>
                <td>العملة</td>
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
            while ($res = mysqli_fetch_array($result1)) {
                echo "<tr>";
                echo "<td>" . $res['name'] . "</td>";
                echo "<td>" . $res['price'] . "</td>";
                echo "<td>" . $res['email'] . "</td>";
                echo "<td>" . $res['currency'] . "</td>";
                echo "<td>" . $res['date'] . "</td>";
                echo "<td>" . $res['time'] . "</td>";
                echo "<td>" . $res['username'] . "</td>";
                echo "<td>" . $res['states'] . "</td>";
                echo "<td>" . $res['g_name'] . "</td>";
                $res1 = mysqli_fetch_array($result2);
                echo "<td><a href=\"edit.php?id=$res1[id]\">Edit</a> </td> ";
                echo "</tr>";
            }

            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
<script>$(document).ready(function () {
        $('#employee_data').DataTable();
    });



</script>
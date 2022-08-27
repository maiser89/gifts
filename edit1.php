<?php
// including the database connection file
session_start();
include_once("config.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $details = $_POST['details'];
    $email = $_POST['email'];
    $objectivegold = $_POST['objectivegold'];
    $states = $_POST['states'];
    $weightgold = $_POST['weightgold'];
    // checking empty fields


    //updating the table
    $result7 = mysqli_query($mysqli, "UPDATE users SET name='$name',details='$details',email='$email' ,objectivegold='$objectivegold' ,states='$states',weightgold='$weightgold' WHERE id=$id");

    //redirectig to the display page. In our case, it is index.php
    header("Location: add2.php");

}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result7 = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while ($res = mysqli_fetch_array($result7)) {
    $name = $res['name'];
    $details = $res['details'];
    $email = $res['email'];
    $objectivegold = $res['objectivegold'];
    $states = $res['states'];
    $weightgold = $res['weightgold'];
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Iconscout Link For Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://fonts.googleapis.com/css?family=Noto Nastaliq Urdu' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div class="MA-vistitem">
    <div class="ma-left">
        <form class="nameFoo so" method="post" name="form1" action="edit1.php">
            <div class="ma-header">

                <span>اضافة تبرع</span></div>
            <table border="0">
                <tr>
                    <td class="rowone">الاسم</td>
                    <td>


                        <?php

                        if ($_SESSION['usertype'] == 'admin'): ?>

                            <input type="text" name="name" value="<?php echo $name; ?>">
                        <?php endif; ?>


                    </td>
                </tr>
                <tr>
                    <td class="rowone">التفاصيل</td>

                    <td>


                        <?php

                        if ($_SESSION['usertype'] == 'admin'): ?>

                            <input type="text" name="details" value="<?php echo $details; ?>">
                        <?php endif; ?>


                    </td>

                </tr>
                <tr>
                    <td class="rowone">التخصص</td>


                    <td>


                        <?php

                        if ($_SESSION['usertype'] == 'admin'): ?>

                            <input type="text" name="email" value="<?php echo $email; ?>">
                        <?php endif; ?>


                    </td>
                </tr>
                <tr>
                    <td class="rowone">المادة</td>
                    <td>


                        <?php

                        if ($_SESSION['usertype'] == 'admin'): ?>

                            <input type="text" name="objectivegold" value="<?php echo $objectivegold; ?>">
                        <?php endif; ?>


                    </td>
                </tr>
                <tr>
                    <td class="rowone">الوزن</td>
                    <td>


                        <?php

                        if ($_SESSION['usertype'] == 'admin'): ?>

                            <input type="text" name="weightgold" value="<?php echo $weightgold; ?>">
                        <?php endif; ?>


                    </td>
                </tr>
                <tr>

                    <td class="rowone">الحالة</td>


                    <td><select name="states">
                            <option <?php if ($states == 'فعال') {
                                echo 'selected="selected"';
                            } ?> value="فعال">فعال
                            </option>
                            <option <?php if ($states == 'باطل') {
                                echo 'selected="selected"';
                            } ?> value="باطل">غير فعال
                            </option>
                        </select>

                    </td>

                </tr>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                    <td class="ma-tu"><input type="submit" class="ma-add" name="update" value="تحديث"></td>
                </tr>


            </table>
        </form>
    </div>
</div>
</body>
</html>
<?php
session_start();

//empty does both of the checks you are doing at once
//check if user is logged in first
if(empty($_SESSION['username'])) {

    //give error and start redirection to login page
    //you may never see this `echo` because the redirect may happen too fast
    echo "Please log in first to see this page.";
    header('Location: index.php');

    //kill page because user is not logged in and is waiting for redirection
    die();
}

echo "Welcome to the member's area, " . $_SESSION['username'] . "!";

//more page code here
?>
<?php
// including the database connection file

include_once("config.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $typecattle = $_POST['typecattle'];
    $email = $_POST['email'];
    $numberoptic = $_POST['numberoptic'];
    $states = $_POST['states'];
    // checking empty fields


    //updating the table
    $result5 = mysqli_query($mysqli, "UPDATE users SET name='$name',typecattle='$typecattle' ,email='$email' ,states='$states',numberoptic='$numberoptic' WHERE id=$id");
    //redirectig to the display page. In our case, it is index.php
    header("Location: cattle.php");

}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result5 = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while ($res = mysqli_fetch_array($result5)) {
    $name = $res['name'];
    $typecattle = $res['typecattle'];
    $numberoptic = $res['numberoptic'];
    $email = $res['email'];
    $states = $res['states'];
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
<ul class="ma-iu">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="qw-ty"><i class="fas fa-user"></i><i class="fas fa-sort-down"></i></div>
            <ul class="dropdown-menu">
                </i><a href="logout.php">تسجيل الخروج</a>


            </ul>
    </li>
</ul>
<div class="MA-vistitem edit1">

    <div class="ma-left">
        <div class="nmbjiu"> <a href="add1.php"> <button class="ma-back"> <i class="fas fa-home"></i>   </button></a></div>
        <form class="nameFoo so" method="post" name="form1" action="edit3.php">
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
                    <td class="rowone">النوع</td>
                    <td>
                        <?php

                        if ($_SESSION['usertype'] == 'admin'): ?>

                            <input type="text" name="typecattle" value="<?php echo $typecattle; ?>">
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
                    <td class="rowone">العدد</td>
                    <td>


                        <?php

                        if ($_SESSION['usertype'] == 'admin'): ?>

                            <input type="text" name="numberoptic" value="<?php echo $numberoptic; ?>">
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
<script>
    $('ul li.dropdown').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(200);
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);
    });

</script>

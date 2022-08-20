<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $email=$_POST['email'];
    $currency=$_POST['currency'];
    $states = $_POST['states'];
    // checking empty fields
    if(empty($name) || empty($price) || empty($email)) {
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }

        if(empty($price)) {
            echo "<font color='red'>price field is empty.</font><br/>";
        }

        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
        if(empty($currency)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
    } else {
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE users SET name='$name',price='$price',email='$email' ,currency='$currency' ,states='$states' WHERE id=$id");

        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $name = $res['name'];
    $price = $res['price'];
    $email = $res['email'];
    $currency = $res['currency'];
    $states = $res['states'];
}
?>
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

    <!-- Iconscout Link For Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://fonts.googleapis.com/css?family=Noto Nastaliq Urdu' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<a href="index.php">Home</a>
<br/><br/>

<form name="form1" method="post" action="edit.php">
    <table border="0">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $name;?>"></td>
        </tr>
        <tr>
            <td>price</td>
            <td><input type="text" name="price" value="<?php echo $price;?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $email;?>"></td>
        </tr>
        <tr>
            <td>currency</td>
            <td><input type="text" name="email" value="<?php echo $currency;?>"></td>
        </tr>
        <tr>

            <td>الحالة</td>




                <td><select name="states">
                        <option <?php if ($states == 'فعال'){echo 'selected="selected"';} ?> value="فعال" >فعال</option>
                        <option <?php if ($states == 'باطل'){echo 'selected="selected"';} ?> value="باطل">غير فعال</option>
                    </select>

                </td>

        </tr>
        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>


    </table>
</form>
</body>
</html>
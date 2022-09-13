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
    $sid = $res['sid'];
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
                </i><a href="index.php">تسجيل الخروج</a>


            </ul>
    </li>
</ul>
<div class="MA-vistitem edit1 print1">
    <div style="display: none;" class="nhg" id="SivaDiv">
        <img src="image/BG/Receipt-exp.jpg" alt="Graph Description">
    </div>
    <div class="ma-left print">
        <div class="nmbjiu"> <a href="add1.php"> <button class="ma-back"> <i class="fas fa-home"></i>   </button></a></div>
        <form class="nameFoo so printout" name="form1" >

            <table class="erprint" border="0">
                <tr>

                    <td>


                   

                            <input type="text" name="name" value="<?php echo $name; ?>">
                   


                    </td>
                </tr>
                <tr>


                    <td>


                      

                            <input type="text" name="details" value="<?php echo $details; ?>">
                 


                    </td>

                </tr>
                <tr>



                    <td>


                    

                            <input type="text" name="email" value="<?php echo $email; ?>">
                 


                    </td>
                </tr>
                <tr>

                    <td>



                            <input type="text" name="objectivegold" value="<?php echo $objectivegold; ?>">
                  


                    </td>
                </tr>
                <tr>

                    <td>


                       
                            <input type="text" name="weightgold" value="<?php echo $weightgold; ?>">
                 


                    </td>
                </tr>

                <tr>

                    <td>


               

                            <input type="text" class="aqz" name="sid" value="<?php echo $sid; ?>">
               


                    </td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>

                    <td class="ma-tu" ><button style=" background-color: #2E8B57; margin-top: 40px;"  class="ma-add printbtn" >طباعة</button></td>
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
<script>

    $(".printbtn").click(function () {
        //Hide all other elements other than printarea.
        $(".printbtn").hide();
        $(".dropdown-list").hide();
        $(".ma-span").hide();
        $(".nmbjiu").hide();

        $(".svbn").hide();
        $(".nhg").show();
        $(".ma-header").hide();
        $(".ma-iu").hide();
        window.print();
        $(".ma-iu").show();
        $(".nmbjiu").show();
        $(".printbtn").show();
        $(".dropdown-list").show();
        $(".ma-span").show();
        $(".svbn").show();
        $(".nhg").hide();
        $(".ma-header").show();
    });

</script>
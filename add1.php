<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>صفحة المالية</title>
    <script src="https://kit.fontawesome.com/28e600a1b8.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/>
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
<a href="index.php">Home</a>
<br/><br/>
<td>نوغ التبرع</td>
<select id="selectlist" class="dropdown-list territory" name="territory">
    <option value="0" data-territory="0">Please select</option>
    <option value="1" data-territory="1">نقد</option>
    <option value="2" data-territory="2"> ذهب</option>
    <option value="3" data-territory="3"> العينية</option>
    <option value="4" data-territory="4"> الانعام</option>
</select>

<form style="display: none" class="nameFoo" action="add.php" method="post" name="form1">
    <table width="25%" border="0">
        <tr>
            <td>اسم المتبرع</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>المبلغ</td>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td>التخصص</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>العملة</td>
            <td><input type="text" name="currency"></td>
        </tr>
        <tr>
            <td>نوغ التبرع</td>
            <td><select class="territory2" name="gid">
                    <option value="0">Please select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select></td>
        </tr>
        <tr>
            <td>الحالة</td>
            <?php session_start();

            if ($_SESSION["usertype"] == 'admin'): ?>

                <td><select name="states">
                        <option value="فعال">فعال</option>
                        <option value="باطل">غير فعال</option>
                    </select>
                </td>
            <?php endif; ?>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
</form>


<form style="display: none" class="nameFoo1" action="add2.php" method="post" name="form1">
    <table width="25%" border="0">
        <tr>
            <td>اسم المتبرع</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>التفاصيل</td>
            <td><input type="text" name="details"></td>
        </tr>
        <tr>
            <td>المادة</td>
            <td><input type="text" name="objectivegold"></td>
        </tr>
        <tr>
            <td>الوزن</td>
            <td><input type="text" name="weightgold"></td>
        </tr>
        <tr>
            <td>التخصص</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
        <tr>
            <td>نوغ التبرع</td>
            <td><select class="territory2" name="gid">
                    <option value="0">Please select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select></td>
        </tr>


        </tr>
        <tr>

            <td>الحالة</td>
            <?php

            if ($_SESSION['usertype'] == 'admin'): ?>

                <td><select name="states">
                        <option value="فعال">فعال</option>
                        <option value="باطل">غير فعال</option>
                    </select>

                </td>
            <?php endif; ?>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
</form>


<form style="display: none" class="nameFoo2" action="add3.php" method="post" name="form1">
    <table width="25%" border="0">
        <tr>
            <td>اسم المتبرع</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>التفاصيل</td>
            <td><input type="text" name="details"></td>
        </tr>
        <tr>
            <td>العدد</td>
            <td><input type="text" name="numberoptic"></td>
        </tr>
        <tr>
            <td>وحدة القياس</td>
            <td><input type="text" name="measruingoptic"></td>
        </tr>
        <tr>
            <td>التخصص</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
        <tr>
            <td>نوغ التبرع</td>
            <td><select class="territory2" name="gid">
                    <option value="0">Please select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select></td>
        </tr>


        </tr>
        <tr>

            <td>الحالة</td>
            <?php

            if ($_SESSION['usertype'] == 'admin'): ?>

                <td><select name="states">
                        <option value="فعال">فعال</option>
                        <option value="باطل">غير فعال</option>
                    </select>

                </td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>الجهة المستفيدة</td>
            <td><input type="text" name="sideoptic"></td>
        </tr>
        <tr>
            <td>اسم المخول </td>
            <td><input type="text" name="authorizedoptic"></td>
        </tr>
        <tr>

            <td><input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
</form>

<form style="display: none" class="nameFoo3" action="add.php" method="post" name="form1">
    <table width="25%" border="0">
        <tr>
            <td>اسم المتبرع</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>النوع</td>
            <td><input type="text" name="typecattle"></td>
        </tr>
        <tr>
            <td>التخصص</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>العدد</td>
            <td><input type="text" name="numberoptic"></td>
        </tr>
        <tr>
            <td>نوغ التبرع</td>
            <td><select class="territory2" name="gid">
                    <option value="0">Please select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select></td>
        </tr>
        <tr>
            <td>الحالة</td>
            <?php
            if ($_SESSION['usertype'] == 'admin'): ?>

                <td><select name="states">
                        <option value="فعال">فعال</option>
                        <option value="باطل">غير فعال</option>
                    </select>
                </td>
            <?php endif; ?>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
</form>



</body>
</html>


<script>
    $('.dropdown-list').change(function () {
        var selection = $('.dropdown-list').val();

        if (selection == 1) {
            $('.nameFoo').css('display', 'block');
            $('.nameFoo1').css('display', 'none');
            $('.nameFoo2').css('display', 'none');
            $('.nameFoo3').css('display', 'none');
        }
        if (selection == 2) {
            $('.nameFoo1').css('display', 'block');
            $('.nameFoo').css('display', 'none');
            $('.nameFoo2').css('display', 'none');
            $('.nameFoo3').css('display', 'none');
        }
        if (selection == 3) {
            $('.nameFoo1').css('display', 'none');
            $('.nameFoo').css('display', 'none');
            $('.nameFoo2').css('display', 'block');
            $('.nameFoo3').css('display', 'none');
        }
        if (selection == 4) {
            $('.nameFoo1').css('display', 'none');
            $('.nameFoo').css('display', 'none');
            $('.nameFoo2').css('display', 'none');
            $('.nameFoo3').css('display', 'block');
        }

    });
</script>

<script>
    $('.territory').on("change", function () {
        const territory = $("option:selected", this).data("territory");
        $(".territory2").val(territory);
    });


</script>
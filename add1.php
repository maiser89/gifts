<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>قسم تكنلوجيا المعلومات</title>
    <script src="https://kit.fontawesome.com/28e600a1b8.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Iconscout Link For Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://fonts.googleapis.com/css?family=Noto Nastaliq Urdu' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="ma-background">

<div class="MA-vistitem">


    <div class="ma-span">اختر نوع التبرع</div>
<div id="selectlist" class="dropdown-list territory" name="territory">
<div class="ma-op">
    <button id="button" class="btn1 ma-rt" name="territory" value="1" data-territory="1"><i class="fas fa-money-bill-wave ma-icon"></i>نقد</button>
    <button class="btn2 ma-rt" value="2" data-territory="2"><i class="fas fa-ring ma-icon"></i> ذهب</button>
</div>
    <div class="ma-op">
    <button class="btn3 ma-rt" value="3" data-territory="3"> <i class="fas fa-chair  ma-icon"></i>العينية</button>
    <button class="btn4 ma-rt" value="4" data-territory="4"> <i class="fas fa-sheep ma-icon"></i>الانعام</button>
    </div>
</div>
    <div class="ma-left" style="display: none">
<form  class="nameFoo so" action="add.php" method="post" name="form1">
  <div class="ma-header" > <button class="ma-back" > <i class="fas fa-home"></i>  </button><span>اضافة تبرع</span> </div>
    <table class="qw"  border="0">
        <tr>
            <td class="rowone">اسم المتبرع</td>
            <td><input type="text" name="name" required ></td>
        </tr>
        <tr >
            <td class="rowone">المبلغ</td>
            <td><input class="vc" type="text" name="price" required></td>

        </tr>
        <tr>
            <td class="rowone">التخصص</td>
            <td><input type="text" name="email" required></td>
        </tr>
        <tr>
            <td class="rowone">العملة</td>
            <td><input type="text" name="currency" required></td>
        </tr>
        <tr hidden>
            <td class="rowone">نوغ التبرع</td>
            <td><select id="dynamicChange"  name="gid">

                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select></td>
        </tr>
        <tr hidden>
            <td class="rowone">الحالة</td>
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

            <td class="ma-tu"> <input class="ma-add"  type="submit" name="Submit" value="حفظ وطباعة">
                <a  href="add.php"><input class="ma-add two" value="جدول النقد" > </a>
                <input class="ma-add two"  type="submit" name="Submit" value="النقد السريع  ">
            </td>

        </tr>
    </table>
</form>
    </div>
    <div class="ma-left1" style="display: none">

<form  class="nameFoo1 so" action="add2.php" method="post" name="form1">
    <div class="ma-header" > <button class="ma-back1" > <i class="fas fa-home"></i>  </button><span>اضافة تبرع</span> </div>
    <table class="qw" width="25%" border="0">
        <tr>
            <td class="rowone">اسم المتبرع</td>
            <td><input type="text" name="name" required></td>
        </tr>
        <tr>
            <td class="rowone">التفاصيل</td>
            <td><input type="text" name="details" required></td>
        </tr>
        <tr>
            <td class="rowone">المادة</td>
            <td><input type="text" name="objectivegold" required></td>
        </tr>
        <tr>
            <td class="rowone">الوزن</td>
            <td><input type="text" name="weightgold" required></td>
        </tr>
        <tr>
            <td class="rowone">التخصص</td>
            <td><input type="text" name="email" required></td>
        </tr>
        <tr>
        <tr hidden>
            <td>نوغ التبرع</td>
            <td><select id="dynamicChange2"   class="territory2" name="gid">
                    <option value="0">Please select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select></td>
        </tr>


        </tr>
        <tr hidden>

            <td class="rowone">الحالة</td>
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
            <td class="ma-tu"> <input class="ma-add"  type="submit" name="Submit" value="حفظ وطباعة">
                <a  href="add2.php"><input class="ma-add two" value="جدول الذهب" > </a>
            </td>
        </tr>
    </table>
</form>
    </div>
    <div class="ma-left2" style="display: none">

<form class="nameFoo2 so" action="add3.php" method="post" name="form1">
    <div class="ma-header" > <button class="ma-back2" > <i class="fas fa-home"></i>  </button><span>اضافة تبرع</span> </div>
    <table class="sd" width="25%" border="0">
        <tr>
            <td class="rowone">اسم المتبرع</td>
            <td><input type="text" name="name" required></td>
        </tr>
        <tr>
            <td class="rowone">التفاصيل</td>
            <td><input type="text" name="details" required></td>
        </tr>
        <tr>
            <td class="rowone">العدد</td>
            <td><input type="text" name="numberoptic" required></td>
        </tr>
        <tr>
            <td class="rowone">وحدة القياس</td>
            <td><input type="text" name="measruingoptic" required></td>
        </tr>
        <tr>
            <td class="rowone">التخصص</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
        <tr hidden>
            <td>نوغ التبرع</td>
            <td><select id="dynamicChange3"  name="gid">
                    <option value="0">Please select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select></td>
        </tr>


        </tr>
        <tr hidden>

            <td class="rowone">الحالة</td>
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
            <td class="rowone">الجهة المستفيدة</td>
            <td><input type="text" name="sideoptic" required></td>
        </tr>
        <tr>
            <td class="rowone">اسم المخول</td>
            <td><input type="text" name="authorizedoptic" required></td>
        </tr>
        <tr>

            <td class="ma-tu"> <input class="ma-add"  type="submit" name="Submit" value="حفظ وطباعة">
                <a  href="add3.php"><input class="ma-add two" value="جدول العينية" > </a>
            </td>
        </tr>
    </table>
</form>
    </div>
    <div class="ma-left3" style="display: none">

<form  class="nameFoo3 so" action="add4.php" method="post" name="form1">
    <div class="ma-header" > <button class="ma-back3" > <i class="fas fa-home"></i>  </button><span>اضافة تبرع</span> </div>
    <table class="qw" width="25%" border="0">
        <tr>
            <td class="rowone">اسم المتبرع</td>
            <td><input type="text" name="name" required></td>
        </tr>
        <tr>
            <td class="rowone">النوع</td>
            <td><input type="text" name="typecattle" required></td>
        </tr>
        <tr>
            <td class="rowone">التخصص</td>
            <td><input type="text" name="email" required></td>
        </tr>
        <tr>
            <td class="rowone">العدد</td>
            <td><input type="text" name="numberoptic" required></td>
        </tr>
        <tr hidden>
            <td>نوغ التبرع</td>
            <td><select id="dynamicChange4"   name="gid">
                    <option value="0">Please select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select></td>
        </tr>
        <tr hidden>
            <td class="rowone">الحالة</td>
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
            <td class="ma-tu"> <input class="ma-add"  type="submit" name="Submit" value="حفظ وطباعة">
                <a  href="add4.php"><input class="ma-add two" value="جدول الانعام" > </a>
            </td>
        </tr>
    </table>
</form>
    </div>
</div>
</div>
</body>
</html>
<script>
    $(document).ready(function(){
        $(".btn1").click(function () {

            //this is change select value 1
            $('#dynamicChange').val('1').trigger('change');

        });
        $(".btn2").click(function () {
            //

            //this is change select value 1
            $('#dynamicChange2').val('2').trigger('change');
        });
        $(".btn3").click(function () {
            //

            //this is change select value 1
            $('#dynamicChange3').val('3').trigger('change');
        });
        $(".btn4").click(function () {
            //

            //this is change select value 1
            $('#dynamicChange4').val('4').trigger('change');
        });

    });
</script>

<script>
    $(document).ready(function(){
        $(".btn1").click(function(){
            $(".ma-left").fadeIn()
        });
    });
    $(document).ready(function(){
        $(".ma-back").click(function(){
            $(".ma-left").fadeOut()
        });
    });
    $(document).ready(function(){
        $(".btn2").click(function(){
            $(".ma-left1").fadeIn()
        });
    });
    $(document).ready(function(){
        $(".ma-back1").click(function(){
            $(".ma-left1").fadeOut()
        });
    });


    $(document).ready(function(){
        $(".btn3").click(function(){
            $(".ma-left2").fadeIn()
        });
    });
    $(document).ready(function(){
        $(".ma-back2").click(function(){
            $(".ma-left2").fadeOut()
        });
    });

    $(document).ready(function(){
        $(".btn4").click(function(){
            $(".ma-left3").fadeIn()
        });
    });
    $(document).ready(function(){
        $(".ma-back3").click(function(){
            $(".ma-left3").fadeOut()
        });
    });
</script>
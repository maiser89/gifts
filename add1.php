<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>قسم تكنلوجيا المعلومات</title>
    <script
            src="https://code.jquery.com/jquery-3.6.1.js"
            integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
            crossorigin="anonymous"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/28e600a1b8.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css.css" media="screen, print"/>
    <link rel="stylesheet" type="text/css" href="style.css.css" media="print"/>
    <!-- Iconscout Link For Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://fonts.googleapis.com/css?family=Noto Nastaliq Urdu' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div id="output" style="font-weight:bold; font-size: 22px;"></div>
<div class="ma-background">
    <ul class="ma-iu">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">
                <div class="qw-ty"><i class="fas fa-user"></i><i class="fas fa-sort-down"></i></div>
                <ul class="dropdown-menu">
                    </i><a href="index.php">تسجيل الخروج</a>
                </ul>
        </li>
    </ul>
    <div class="MA-vistitem">
        <div style="display: none" class="nhg uio" id="SivaDiv">
            <img src="image/BG/Receipt-exp.jpg" alt="Graph Description"/>
        </div>
        <div class="ma-span">اختر نوع التبرع</div>
        <div id="selectlist" class="dropdown-list territory" name="territory">
            <div class="ma-op">
                <?php session_start();
                if ($_SESSION["usertype"] == 'admin' || $_SESSION["usertype"] == 'user'): ?>
                    <button id="button" class="btn1 ma-rt" name="territory" value="1" data-territory="1"><i
                                class="fas fa-money-bill-wave ma-icon"></i>نقد
                    </button>
                <?php elseif ($_SESSION["usertype"] == 'owner'): ?>
                    <a style="vertical-align: bottom" href="cash.php" class="btn1 ma-rt"><i style="margin-top: 32px;" class="fas fa-money-bill-wave ma-icon"></i>نقد
                    </a>
                <?php endif; ?>
                <?php
                if ($_SESSION["usertype"] == 'admin' || $_SESSION["usertype"] == 'user'): ?>
                    <button class="btn2 ma-rt" value="2" data-territory="2"><i class="fas fa-ring ma-icon"></i> ذهب
                    </button>
                <?php elseif ($_SESSION["usertype"] == 'owner'): ?>

                    <a style="vertical-align: bottom" href="gold.php" class="btn1 ma-rt"><i style="margin-top: 32px;"
                                                                                            class="fas fa-ring ma-icon"></i>ذهب
                    </a>
                <?php endif; ?>
            </div>
            <div class="ma-op">
                <?php
                if ($_SESSION["usertype"] == 'admin' || $_SESSION["usertype"] == 'user'): ?>
                    <button class="btn3 ma-rt" value="3" data-territory="3"><i class="fas fa-chair  ma-icon"></i>العينية
                    </button>
                <?php elseif ($_SESSION["usertype"] == 'owner'): ?>
                    <a style="vertical-align: bottom" href="inkind.php" class="btn1 ma-rt"><i style="margin-top: 32px;"
                                                                                            class="fas fa-chair  ma-icon"></i>العينية
                    </a>
                <?php endif; ?>
                <?php
                if ($_SESSION["usertype"] == 'admin' || $_SESSION["usertype"] == 'user'): ?>
                    <button class="btn4 ma-rt" value="4" data-territory="4"><i class="fas fa-sheep ma-icon"></i>الانعام
                    </button>
                <?php elseif ($_SESSION["usertype"] == 'owner'): ?>
                    <a style="vertical-align: bottom" href="cattle.php" class="btn1 ma-rt"><i style="margin-top: 32px;"
                                                                                            class="fas fa-sheep ma-icon"></i>الانعام
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="ma-left" style="display: none">
            <form id="form1" class="nameFoo so" method="post" name="form1">
                <div class="ma-header">
                    <div class="ma-back"><i class="fas fa-home"></i></div>
                    <span>اضافة تبرع</span></div>
                <table class="qw" border="0">
                    <?php
                    if ($_SESSION["usertype"] == 'admin' || $_SESSION["usertype"] == 'user'): ?>
                        <tr>
                            <td class="rowone">اسم المتبرع</td>
                            <td><input type="text" name="name" id="name" required></td>
                        </tr>

                        <tr>
                            <td class="rowone">المبلغ</td>
                            <td><input class="vc" type="text" name="price" id="price" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">التخصص</td>
                            <td><input type="text" name="email" id="email" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">العملة</td>
                            <td><input type="text" name="currency" id="currency" required></td>
                        </tr>
                        <tr hidden>
                            <td class="rowone">نوغ التبرع</td>
                            <td><select id="dynamicChange" name="gid">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select></td>
                        </tr>
                        <tr hidden>
                            <td class="rowone">الحالة</td>
                            <?php
                            if ($_SESSION["usertype"] == 'admin'): ?>
                                <td><select id="states" name="states">
                                        <option value="فعال">فعال</option>
                                        <option value="باطل">غير فعال</option>
                                    </select>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php endif; ?>
                </table>
                <div class="ma-tu">
                    <?php
                    if ($_SESSION["usertype"] == 'admin' || $_SESSION["usertype"] == 'user'): ?>
                        <input id="send_data" class="ma-add" type="submit" name="Submit" value="حفظ ">
                        <input class="ma-add two printbtn"  value="النقد السريع  ">
                        <a href="cash.php"><input class="ma-add two" value="جدول النقد"> </a>
                    <?php endif; ?>
                </div>
            </form>
        </div>
        </head>
        <body>
        <script>
            $(document).ready(function () {
                $("#form1").submit(function (event) {
                        var formData = new FormData(this);
                        const name = $("#name").val();
                        const price = $("#price").val();
                        const email = $("#email").val();
                        const currency = $("#currency").val();
                        const dynamicChange = $("#dynamicChange").val();
                        const states = $("#states").val();
                    const sid = $("#sid").val();
                        formData.append('name', name);
                        formData.append('price', price);
                        formData.append('email', email);
                        formData.append('currency', currency);
                        formData.append('dynamicChange', dynamicChange);
                        formData.append('states', states);
                    formData.append('sid', sid);
                        formData.append('Submit', "Submit");
                        $.ajax({
                            url: 'cash.php',
                            method: "post",
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function (response) {
                                window.location.replace("cash.php");
                            },
                            error: function (XMLHttpRequest, textStatus, errorThrown) {
                                alert("Status: " + textStatus);
                                alert("خظأ: " + errorThrown);
                            }
                        });
                        return false;
                    }
                );
            });
        </script>
        <div class="ma-left1" style="display: none">
            <form class="nameFoo1 so" method="post" id="form2" name="form">
                <div class="ma-header">
                    <div class="ma-back1"><i class="fas fa-home"></i></div>
                    <span>اضافة تبرع</span></div>
                <table class="qw" width="25%" border="0">
                    <?php
                    if ($_SESSION["usertype"] == 'admin' || $_SESSION["usertype"] == 'user'): ?>
                        <tr>
                            <td class="rowone">اسم المتبرع</td>
                            <td><input type="text" id="name1" name="name" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">التفاصيل</td>
                            <td><input type="text" id="details" name="details" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">المادة</td>
                            <td><input type="text" id="objectivegold" name="objectivegold" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">الوزن</td>
                            <td><input type="text" id="weightgold" name="weightgold" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">التخصص</td>
                            <td><input type="text" id="email1" name="email" required></td>
                        </tr>

                        <tr>
                        <tr hidden>
                            <td>نوغ التبرع</td>
                            <td><select id="dynamicChange2" class="territory2" name="gid">
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

                                <td><select id="states1" name="states">
                                        <option value="فعال">فعال</option>
                                        <option value="باطل">غير فعال</option>
                                    </select>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php endif; ?>
                </table>
                <div class="ma-tu">
                    <?php
                    if ($_SESSION["usertype"] == 'admin' || $_SESSION["usertype"] == 'user'): ?>
                        <input class="ma-add" type="submit" name="Submit" value="حفظ">
                        <a href="gold.php"><input class="ma-add two" value="جدول الذهب"> </a>
                    <?php endif; ?>
                </div>
            </form>
        </div>
        <script>
            $(document).ready(function () {
                $("#form2").submit(function (event) {
                        var formData = new FormData(this);
                        const name = $("#name1").val();
                        const details = $("#details").val();
                        const email = $("#email1").val();
                        const objectivegold = $("#objectivegold").val();
                        const dynamicChange2 = $("#dynamicChange2").val();
                        const weightgold = $("#weightgold").val();
                        const states = $("#states1").val();
                        formData.append('name', name);
                        formData.append('details', details);
                        formData.append('email', email);
                        formData.append('objectivegold', objectivegold);
                        formData.append('weightgold', weightgold);
                        formData.append('states', states);
                        formData.append('dynamicChange2', dynamicChange2);
                        formData.append('Submit', "Submit");
                        $.ajax({
                            url: 'gold.php',
                            method: "post",
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function (response) {
                                window.location.replace("gold.php");
                            },
                            error: function (XMLHttpRequest, textStatus, errorThrown) {
                                alert("Status: " + textStatus);
                                alert("خظأ: " + errorThrown);
                            }
                        });
                        return false;
                    }
                );
            });
        </script>
        <div class="ma-left2" style="display: none">

            <form class="nameFoo2 so" method="post" name="form1" id="form3">
                <div class="ma-header">
               <div class="ma-back2"><i class="fas fa-home"></i></div>
                    <span>اضافة تبرع</span></div>
                <table class="sd" width="25%" border="0">
                    <?php
                    if ($_SESSION["usertype"] == 'admin' || $_SESSION["usertype"] == 'user'): ?>
                        <tr>
                            <td class="rowone">اسم المتبرع</td>
                            <td><input type="text" id="name3" name="name" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">التفاصيل</td>
                            <td><input type="text" id="details2" name="details" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">العدد</td>
                            <td><input type="text" id="numberoptic" name="numberoptic" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">وحدة القياس</td>
                            <td><input type="text" id="measruingoptic" name="measruingoptic" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">التخصص</td>
                            <td><input type="text" id="email3" name="email"></td>
                        </tr>
                        <tr>
                        <tr hidden>
                            <td>نوغ التبرع</td>
                            <td><select id="dynamicChange3" name="gid">
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

                                <td><select id="states3" name="states">
                                        <option value="فعال">فعال</option>
                                        <option value="باطل">غير فعال</option>
                                    </select>

                                </td>
                            <?php endif; ?>
                        </tr>
                        <tr>
                            <td class="rowone">الجهة المستفيدة</td>
                            <td><input type="text" id="sideoptic" name="sideoptic" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">اسم المخول</td>
                            <td><input type="text" id="authorizedoptic" name="authorizedoptic" required></td>
                        </tr>


                    <?php endif; ?>
                </table>
                <div class="ma-tu">
                    <?php


                    if ($_SESSION["usertype"] == 'admin' || $_SESSION["usertype"] == 'user'): ?>
                        <input class="ma-add" type="submit" name="Submit" value="حفظ ">
                        <a href="inkind.php"><input class="ma-add two" value="جدول العينية"> </a>
                    <?php endif; ?>

                </div>
            </form>
        </div>


        <script>

            $(document).ready(function () {


                $("#form3").submit(function (event) {
                        var formData = new FormData(this);

                        const name = $("#name3").val();
                        const details = $("#details2").val();
                        const numberoptic = $("#numberoptic").val();
                        const measruingoptic = $("#measruingoptic").val();

                        const authorizedoptic = $("#authorizedoptic").val();
                        const states = $("#states3").val();
                        const dynamicChange3 = $("#dynamicChange3").val();
                        const sideoptic = $("#sideoptic").val();

                        const email = $("#email3").val();
                        formData.append('name', name);
                        formData.append('details', details);
                        formData.append('email', email);
                        formData.append('numberoptic', numberoptic);
                        formData.append('measruingoptic', measruingoptic);
                        formData.append('authorizedoptic', authorizedoptic);
                        formData.append('sideoptic', sideoptic);
                        formData.append('dynamicChange3', dynamicChange3);
                        formData.append('states', states);
                        formData.append('Submit', "Submit");

                        $.ajax({
                            url: 'inkind.php',
                            method: "post",
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function (response) {
                                window.location.replace("inkind.php");
                            },
                            error: function (XMLHttpRequest, textStatus, errorThrown) {
                                alert("Status: " + textStatus);
                                alert("خظأ: " + errorThrown);
                            }
                        });
                        return false;
                    }
                );
            });
        </script>


        <div class="ma-left3" style="display: none">

            <form class="nameFoo3 so" method="post" id="form4" name="form1">
                <div class="ma-header">
                    <div class="ma-back3"><i class="fas fa-home"></i></div>
                    <span>اضافة تبرع</span></div>
                <table class="qw" width="25%" border="0">
                    <?php


                    if ($_SESSION["usertype"] == 'admin' || $_SESSION["usertype"] == 'user'): ?>
                        <tr>
                            <td class="rowone">اسم المتبرع</td>
                            <td><input type="text" id="name4" name="name" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">النوع</td>
                            <td><input type="text" id="typecattle" name="typecattle" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">التخصص</td>
                            <td><input type="text" id="email4" name="email" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">العدد</td>
                            <td><input type="text" id="numberoptic1" name="numberoptic" required></td>
                        </tr>
                        <tr hidden>
                            <td>نوغ التبرع</td>
                            <td><select id="dynamicChange4" name="gid">
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

                                <td><select id="states4" name="states">
                                        <option value="فعال">فعال</option>
                                        <option value="باطل">غير فعال</option>
                                    </select>
                                </td>
                            <?php endif; ?>
                        </tr>


                    <?php endif; ?>

                </table>
                <div class="ma-tu">
                    <?php


                    if ($_SESSION["usertype"] == 'admin' || $_SESSION["usertype"] == 'user'): ?>
                        <input class="ma-add" type="submit" name="Submit" value="حفظ">
                        <a href="cattle.php"><input class="ma-add two" value="جدول الانعام"> </a>
                    <?php endif; ?>

                </div>
            </form>
        </div>


        <script>

            $(document).ready(function () {


                $("#form4").submit(function (event) {
                        var formData = new FormData(this);

                        const name = $("#name4").val();
                        const typecattle = $("#typecattle").val();
                        const numberoptic = $("#numberoptic1").val();


                        const states = $("#states4").val();
                        const dynamicChange4 = $("#dynamicChange4").val();


                        const email = $("#email4").val();
                        formData.append('name', name);
                        formData.append('typecattle', typecattle);
                        formData.append('email', email);
                        formData.append('numberoptic', numberoptic);


                        formData.append('dynamicChange4', dynamicChange4);
                        formData.append('states', states);
                        formData.append('Submit', "Submit");

                        $.ajax({
                            url: 'cattle.php',
                            method: "post",
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function (response) {
                                window.location.replace("cattle.php");
                            },
                            error: function (XMLHttpRequest, textStatus, errorThrown) {
                                alert("Status: " + textStatus);
                                alert("خظأ: " + errorThrown);
                            }
                        });
                        return false;
                    }
                );
            });
        </script>


    </div>


</div>

</body>
</html>
<script>
    $(document).ready(function () {
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
    $(document).ready(function () {
        $(".btn1").click(function () {
            $(".ma-left").fadeIn()
        });
    });
    $(document).ready(function () {
        $(".ma-back").click(function () {
            $(".ma-left").fadeOut()
        });
    });
    $(document).ready(function () {
        $(".btn2").click(function () {
            $(".ma-left1").fadeIn()
        });
    });
    $(document).ready(function () {
        $(".ma-back1").click(function () {
            $(".ma-left1").fadeOut()
        });
    });


    $(document).ready(function () {
        $(".btn3").click(function () {
            $(".ma-left2").fadeIn()
        });
    });
    $(document).ready(function () {
        $(".ma-back2").click(function () {
            $(".ma-left2").fadeOut()
        });
    });

    $(document).ready(function () {
        $(".btn4").click(function () {
            $(".ma-left3").fadeIn()
        });
    });
    $(document).ready(function () {
        $(".ma-back3").click(function () {
            $(".ma-left3").fadeOut()
        });
    });
</script>

<script>

    $(".printbtn").click(function () {
        //Hide all other elements other than printarea.
        $(".printbtn").hide();
        $(".dropdown-list").hide();
        $(".ma-span").hide();
        $(".svbn").hide();
        $(".nhg").show();
        $(".ma-header").hide();
        $(".ma-iu").hide();
        window.print();
        $(".ma-iu").show();
        $(".printbtn").show();
        $(".dropdown-list").show();
        $(".ma-span").show();
        $(".svbn").show();
        $(".nhg").hide();
        $(".ma-header").show();
    });

</script>
<script>
    $('ul li.dropdown').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(200);
    }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);
    });


</script>

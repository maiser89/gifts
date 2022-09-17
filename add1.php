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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!-- SweetAlert2 -->
    <script type="text/javascript" src='../files/bower_components/sweetalert/js/sweetalert2.all.min.js'></script>
    <!-- SweetAlert2 -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href='../files/bower_components/sweetalert/css/sweetalert2.min.css' media="screen"/>
</head>
<body>

<div class="ma-background">
    <ul class="ma-iu">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">
                <div class="qw-ty"><i class="fas fa-user"></i><i class="fas fa-sort-down"></i></div>
                <ul class="dropdown-menu">
                    </i><a href="logout.php">تسجيل الخروج</a>
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
                <?php
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
                            <td><input  placeholder="اسم المتبرع" type="text" name="name" id="name" required></td>
                        </tr>

                        <tr>
                            <td class="rowone">المبلغ</td>
                            <td><input type="text"

                                       placeholder="ادخل المبلغ"
                                       autocomplete="off"
                                       onkeyup="output.innerHTML=tafqeet(this.value,'IQD')"   type="text" name="price" id="price" required>  <div  id="output" style="font-weight:bold; margin-bottom: 18px;    color:  #007F60;  font-size: 17px;"></div></td>



                        </tr>
                        <tr>
                            <td class="rowone">التخصص</td>
                            <td><input    placeholder="التخصص" type="text" name="email" id="email" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">العملة</td>
                            <td><input placeholder="العملة" type="text" name="currency" id="currency" required></td>
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
                <div>



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


                                alert("يسشبشسيب");
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
                            <td><input placeholder="اسم المتبرع" type="text" id="name1" name="name" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">التفاصيل</td>
                            <td><input placeholder="التفاصيل" type="text" id="details" name="details" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">المادة</td>
                            <td><input placeholder="المادة"  type="text" id="objectivegold" name="objectivegold" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">الوزن</td>
                            <td><input placeholder="الوزن" type="text" id="weightgold" name="weightgold" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">التخصص</td>
                            <td><input placeholder="التخصص"  type="text" id="email1" name="email" required></td>
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
                            <td><input placeholder="اسم المتبرع" type="text" id="name3" name="name" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">التفاصيل</td>
                            <td><input placeholder="التفاصيل" type="text" id="details2" name="details" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">العدد</td>
                            <td><input placeholder="العدد" type="text" id="numberoptic" name="numberoptic" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">وحدة القياس</td>
                            <td><input placeholder="وحدة القياس" type="text" id="measruingoptic" name="measruingoptic" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">التخصص</td>
                            <td><input placeholder="التخصص" type="text" id="email3" name="email"></td>
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
                            <td><input placeholder="الجهة المستفيدة" type="text" id="sideoptic" name="sideoptic" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">اسم المخول</td>
                            <td><input placeholder="اسم المخول" type="text" id="authorizedoptic" name="authorizedoptic" required></td>
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
                            <td><input placeholder="اسم المتبرع"  type="text" id="name4" name="name" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">النوع</td>
                            <td><input placeholder="النوع" type="text" id="typecattle" name="typecattle" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">التخصص</td>
                            <td><input placeholder="التخصص" type="text" id="email4" name="email" required></td>
                        </tr>
                        <tr>
                            <td class="rowone">العدد</td>
                            <td><input placeholder=" العدد" type="text" id="numberoptic1" name="numberoptic" required></td>
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
    /*********************************************************************
     * @function      : tafqeet(Number, ISO_code, [{options}])
     * @purpose       : Converts Currency Values to Full Arabic Words
     * @version       : 2.00
     * @author        : Mohsen Alyafei
     * @date          : 04 March 2022
     * @Licence       : MIT
     * @param         : {Number} Numeric (required)
     * @param         : {code} 3-letter ISO Currency Code
     * @param         : [{options}] 3 Options passed as object {name:value} as follows:
     *                  {comma:'on'}      : Insert comma between triplet words.
     *                  {legal: 'on'}     : Uses legal mode
     *                  {format: 'short'} : Uses fractions for any decimal part.
     * @returns       : {string} The wordified number string in Arabic.
     *
     **********************************************************************/
    function tafqeet(numIn=0, code, op={}){
        let iso=tafqeetISOList[code];if(!iso)throw new Error("Currency code not in the list!");
        let arr=(numIn+="").split((0.1).toLocaleString().substring(1,2)),
            out=nToW(arr[0],iso.uGender=="female",op,[iso.uSingle,iso.uDouble,iso.uPlural]),
            frc=arr[1]?(arr[1]+"000").substring(0,iso.fraction):0;
        if (frc !=0){out+="، و"+(op.format=="short"?frc+"/1"+"0".repeat(+iso.fraction)+" "+iso.uSingle:
            nToW(frc,iso.sGender=="female",op,[iso.sSingle,iso.sDouble,iso.sPlural]));}
        return out;

        function nToW(numIn=0,fm,{comma,legal}={},names){
            if(numIn==0)return"صفر "+iso.uSingle;
            let tS=[,"ألف","مليون","مليار","ترليون","كوادرليون","كوينتليون","سكستليون"],tM=["","واحد","اثنان","ثلاثة","أربعة","خمسة","ستة","سبعة","ثمانية","تسعة","عشرة"],tF=["","واحدة","اثنتان","ثلاث","أربع","خمس","ست","سبع","ثمان","تسع","عشر"],
                num=(numIn+=""),tU=[...tM],t11=[...tM],out="",n99,SpWa=" و",miah="مائة",
                last=~~(((numIn="0".repeat(numIn.length*2%3)+numIn).replace(/0+$/g,"").length+2)/3)-1;
            t11[0]="عشر";t11[1]="أحد";t11[2]="اثنا";
            numIn.match(/.{3}/g).forEach((n,i)=>+n&&(out+=do999(numIn.length/3-i-1,n,i==last),i!==last&&(out+=(comma=='on'?"،":"")+SpWa)));
            let sub=" "+names[0],n=+(num+"").slice(-2);if(n>10)sub=" "+tanween(names[0]);else if(n>2)sub=" "+names[2];
            else if(n>0)sub=names[n-1]+" "+(fm?tF[n]:tM[n]);
            return out+sub;

            function tanween(n,a=n.split` `,L=a.length-1){
                const strTF=(str,l=str.slice(-1),o=str+"ًا")=>{return"ا"==l?o=str.slice(0,-1)+"ًا":"ة"==l&&(o=str+"ً"),o;};
                for(let i=0;i<=L;i++)if(!i||i==L)a[i]=strTF(a[i]);return a.join` `;}

            function do999(sPos,num,last){
                let scale=tS[sPos],n100=~~(num/100),nU=(n99=num%100)%10,n10=~~(n99/10),w100="",w99="",e8=(nU==8&&fm&&!scale)?"ي":"";
                if (fm&&!scale){[tU,t11,t11[0],t11[1],t11[2]]=[[...tF],[...tF],"عشرة","إحدى","اثنتا"];if(n99>20)tU[1]="إحدى";}
                if(n100){if(n100>2)w100=tF[n100]+miah;else if(n100==1)w100=miah;else w100=miah.slice(0,-1)+(!n99||legal=="on"?"تا":"تان");}
                if(n99>19)w99=tU[nU]+(nU?SpWa:"")+(n10==2?"عشر":tF[n10])+"ون";
                else if(n99>10)w99=t11[nU]+e8+" "+t11[0];else if(n99>2)w99=tU[n99]+e8;let nW=w100+(n100 && n99?SpWa:"")+w99;
                if(!scale)return nW;if(!n99)return nW+" "+scale;if(n99>2)return nW+" "+(n99>10?scale+(last?"":"ًا")
                    :(sPos<3?[,"آلاف","ملايين"][sPos]:tS[sPos]+"ات"));nW=(n100?w100+((legal=="on"&&n99<3)?" "+scale:"")+SpWa:"")+scale;
                return(n99==1)?nW:nW+(last?"ا":"ان");}}}
    //=====================================================================







    //==================== Common ISO Currency List in Arabic ===============
    let tafqeetISOList={
        AED:{uSingle :"درهم إماراتي",uDouble:"درهمان إماراتيان",uPlural:"دراهم إماراتية",uGender:"male",
            sSingle :"فلس",sDouble:"فلسان",sPlural:"فلوس",sGender:"male",fraction:2},

        BHD:{uSingle :"دينار بحريني",uDouble:"ديناران بحرينيان",uPlural:"دنانير بحرينية",uGender:"male",
            sSingle :"فلس",sDouble:"فلسان",sPlural:"فلوس",sGender:"male",fraction:3},

        EGP:{uSingle :"جنيه مصري",uDouble:"جنيهان مصريان",uPlural:"جنيهات مصرية",uGender:"male",
            sSingle :"قرش",sDouble:"قرشان",sPlural:"قروش",sGender:"male",fraction:2},

        EUR:{uSingle :"يورو",uDouble:"يوروان",uPlural:"يوروات",uGender:"male",
            sSingle:"سنت",sDouble:"سنتان",sPlural:"سنتات",sGender:"male",fraction:2},

        GBP:{uSingle :"جنيه إسترليني",uDouble:"جنيهان إسترلينيان",uPlural:"جنيهات إسترلينية",uGender:"male",
            sSingle :"بنس",sDouble:"بنسان",sPlural:"بنسات",sGender:"male",fraction:2},

        INR:{uSingle :"روبية هندية",uDouble:"روبيتان هنديتان",uPlural:"روبيات هندية",uGender:"female",
            sSingle :"بيسة",sDouble:"بيستان",sPlural:"بيسات",sGender:"female",fraction:2},

        IQD:{uSingle :"دينار عراقي",uDouble:"ديناران عراقيان",uPlural:"دنانير عراقية",uGender:"male",
            sSingle :"فلس",sDouble:"فلسان",sPlural:"فلوس",sGender:"male",fraction:2},

        JOD:{uSingle :"دينار أردني",uDouble:"ديناران أردنيان",uPlural:"دنانير أردنية",uGender:"male",
            sSingle :"فلس",sDouble:"فلسان",sPlural:"فلوس",sGender:"male",fraction:3},

        KWD:{uSingle :"دينار كويتي",uDouble:"ديناران كويتيان",uPlural:"دنانير كويتية",uGender:"male",
            sSingle :"فلس",sDouble:"فلسان",sPlural:"فلوس",sGender:"male",fraction:3},

        LBP:{uSingle :"ليرة لبنانية",uDouble:"ليرتان لبنانيتان",uPlural :"ليرات لبنانية",uGender:"female",
            sSingle :"قرش",sDouble:"قرشان",sPlural:"قروش",sGender:"male",fraction:2},

        LYD:{uSingle :"دينار ليبي",uDouble:"ديناران ليبيان",uPlural:"دنانير ليبية",uGender:"male",
            sSingle:"درهم",sDouble:"درهمان",sPlural: "دراهم",sGender:"male",fraction:3},

        MAD:{uSingle :"درهم مغربي",uDouble:"درهمان مغربيان",uPlural:"دراهم مغربية",uGender:"male",
            sSingle :"سنتيم",sDouble:"سنتيمان",sPlural:"سنتيمات",sGender:"male",fraction:2},

        OMR:{uSingle :"ريال عماني",uDouble:"ريالان عمانيان",uPlural:"ريالات عمانية",uGender:"male",
            sSingle :"بيسة",sDouble:"بيستان",sPlural:"بيسات",sGender:"female",fraction:3},

        QAR:{uSingle:"ريال قطري",uDouble:"ريالان قطريان",uPlural:"ريالات قطرية",uGender:"male",
            sSingle:"درهم",sDouble:"درهمان",sPlural: "دراهم",sGender:"male",fraction:2},

        SAR:{uSingle:"ريال سعودي",uDouble:"ريالان سعوديان",uPlural:"ريالات سعودية",uGender:"male",
            sSingle:"هللة",sDouble:"هللتان",sPlural: "هللات",sGender:"female",fraction:2},

        SDG:{uSingle :"جنيه سوداني",uDouble:"جنيهان سودانيان",uPlural:"جنيهات سودانية",uGender:"male",
            sSingle :"قرش",sDouble:"قرشان",sPlural:"قروش",sGender:"male",fraction:2},

        SOS:{uSingle :"شلن صومالي",uDouble:"شلنان صوماليان",uPlural:"شلنات صومالية",uGender:"male",
            sSingle:"سنت",sDouble:"سنتان",sPlural:"سنتات",sGender:"male",fraction:2},

        SSP:{uSingle :"جنيه جنوب سوداني",uDouble:"جنيهان جنوب سودانيان",uPlural:"جنيهات جنوب سودانية",uGender:"male",
            sSingle :"قرش",sDouble:"قرشان",sPlural:"قروش",sGender:"male",fraction:2},

        SYP:{uSingle :"ليرة سورية",uDouble:"ليرتان سوريتان",uPlural :"ليرات سورية",uGender:"female",
            sSingle :"قرش",sDouble:"قرشان",sPlural:"قروش",sGender:"male",fraction:2},

        TND:{uSingle :"دينار تونسي",uDouble:"ديناران تونسيان",uPlural:"دنانير تونسية",uGender:"male",
            sSingle :"مليم",sDouble:"مليمان",sPlural:"ملاليم",sGender:"male",fraction:3},

        USD:{uSingle:"دولار أمريكي",uDouble:"دولاران أمريكيان",uPlural:"دولارات أمريكية",uGender:"male",
            sSingle:"سنت",sDouble:"سنتان",sPlural:"سنتات",sGender:"male",fraction:2},

        YER:{uSingle:"ريال يمني",uDouble:"ريالان يمنيان",uPlural:"ريالات يمنية",uGender:"male",
            sSingle:"فلس",sDouble:"فلسان",sPlural: "فلوس",sGender:"male",fraction:2},

//==== add here

    }; // end of list

    //***********************************************










    //========================
    var r=0; // test tracker
    //===============
    r |= test(1,"QAR",{},"ريال قطري واحد");
    r |= test(1.01,"QAR",{},"ريال قطري واحد، ودرهم واحد");
    r |= test(0.02,"QAR",{},"صفر ريال قطري، ودرهمان اثنان");
    r |= test(2.08,"QAR",{},"ريالان قطريان اثنان، وثمانية دراهم");
    r |= test(2.03,"QAR",{},"ريالان قطريان اثنان، وثلاثة دراهم");
    r |= test(2.25,"QAR",{},"ريالان قطريان اثنان، وخمسة وعشرون درهمًا");
    r |= test(21.18,"QAR",{},"واحد وعشرون ريالًا قطريًا، وثمانية عشر درهمًا");
    r |= test(221.21,"QAR",{},"مائتان وواحد وعشرون ريالًا قطريًا، وواحد وعشرون درهمًا");
    r |= test(200.21,"QAR",{},"مائتا ريال قطري، وواحد وعشرون درهمًا");
    r |= test(2000.15,"QAR",{},"ألفا ريال قطري، وخمسة عشر درهمًا");
    r |= test(21022.38,"QAR",{},"واحد وعشرون ألفًا واثنان وعشرون ريالًا قطريًا، وثمانية وثلاثون درهمًا");
    r |= test(200000.38,"QAR",{},"مائتا ألف ريال قطري، وثمانية وثلاثون درهمًا");
    r |= test(2000000.123,"QAR",{},"مليونا ريال قطري، واثنا عشر درهمًا");

    if (r==0) console.log("✅ Test Cases - Male Currency & Male Sub-Currency   ....Passed.");

    //========================
    r |= test(1,"LBP",{},"ليرة لبنانية واحدة");
    r |= test(1.01,"LBP",{},"ليرة لبنانية واحدة، وقرش واحد");
    r |= test(0.02,"LBP",{},"صفر ليرة لبنانية، وقرشان اثنان");
    r |= test(2.08,"LBP",{},"ليرتان لبنانيتان اثنتان، وثمانية قروش");
    r |= test(2.03,"LBP",{},"ليرتان لبنانيتان اثنتان، وثلاثة قروش");
    r |= test(2.25,"LBP",{},"ليرتان لبنانيتان اثنتان، وخمسة وعشرون قرشًا");
    r |= test(21.18,"LBP",{},"إحدى وعشرون ليرةً لبنانيةً، وثمانية عشر قرشًا");
    r |= test(221.21,"LBP",{},"مائتان وإحدى وعشرون ليرةً لبنانيةً، وواحد وعشرون قرشًا");
    r |= test(200.21,"LBP",{},"مائتا ليرة لبنانية، وواحد وعشرون قرشًا");
    r |= test(2000.15,"LBP",{},"ألفا ليرة لبنانية، وخمسة عشر قرشًا");
    r |= test(21022.38,"LBP",{},"واحد وعشرون ألفًا واثنتان وعشرون ليرةً لبنانيةً، وثمانية وثلاثون قرشًا");
    r |= test(200000.38,"LBP",{},"مائتا ألف ليرة لبنانية، وثمانية وثلاثون قرشًا");
    r |= test(2000000.123,"LBP",{},"مليونا ليرة لبنانية، واثنا عشر قرشًا");

    if (r==0) console.log("✅ Test Cases - Female Currency & Male Sub-Currency   ....Passed.");

    //========================
    r |= test(1,"OMR",{},"ريال عماني واحد");
    r |= test(1.01,"OMR",{},"ريال عماني واحد، وعشر بيسات");
    r |= test(0.02,"OMR",{},"صفر ريال عماني، وعشرون بيسةً");
    r |= test(2.08,"OMR",{},"ريالان عمانيان اثنان، وثمانون بيسةً");
    r |= test(2.03,"OMR",{},"ريالان عمانيان اثنان، وثلاثون بيسةً");
    r |= test(2.25,"OMR",{},"ريالان عمانيان اثنان، ومائتان وخمسون بيسةً");
    r |= test(21.18,"OMR",{},"واحد وعشرون ريالًا عمانيًا، ومائة وثمانون بيسةً");
    r |= test(221.21,"OMR",{},"مائتان وواحد وعشرون ريالًا عمانيًا، ومائتان وعشر بيسات");
    r |= test(200.21,"OMR",{},"مائتا ريال عماني، ومائتان وعشر بيسات");
    r |= test(2000.15,"OMR",{},"ألفا ريال عماني، ومائة وخمسون بيسةً");
    r |= test(21022.38,"OMR",{},"واحد وعشرون ألفًا واثنان وعشرون ريالًا عمانيًا، وثلاثمائة وثمانون بيسةً");
    r |= test(200000.38,"OMR",{},"مائتا ألف ريال عماني، وثلاثمائة وثمانون بيسةً");
    r |= test(2000000.123,"OMR",{},"مليونا ريال عماني، ومائة وثلاث وعشرون بيسةً");

    if (r==0) console.log("✅ Test Cases - Male Currency & Female Sub-Currency   ....Passed.");


    //------------------
    function test(n,code,options,should) {
        let result = tafqeet(n,code,options);
        if (result !== should) {console.log(`${n} Output   : ${result}\n${n} Should be: ${should}`);return 1;}
    }

</script>
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

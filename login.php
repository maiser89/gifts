<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>صفحة المالية</title>
    <script
            src="https://code.jquery.com/jquery-3.6.1.js"
            integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
            crossorigin="anonymous"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.2.4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!-- SweetAlert2 -->
    <script type="text/javascript" src='../files/bower_components/sweetalert/js/sweetalert2.all.min.js'></script>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href='../files/bower_components/sweetalert/css/sweetalert2.min.css' media="screen"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://kit.fontawesome.com/28e600a1b8.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Iconscout Link For Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://fonts.googleapis.com/css?family=Noto Nastaliq Urdu' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            display: flex;
            align-items: center;

            min-height: 100vh;

        }


    </style>
</head>

<body>
<div class="MA-backimage">
    <div class="ma-opas">
        <form method="post" id="logintype" enctype="multipart/form-data">
            <div class="ret"><i class="fas fa-hand-receiving kl"></i>  <h4 class="ruy er">نظام الهدايا والنذور</h4>
            </div>
            <h2 class="ruy">مرحبا بك </h2>
            <div class="xcwe">
                <label class="uio">الاسم المستخدم</label>
                <i class="fa fa-user icon"></i>
                <input placeholder="الاسم المستخدم" id="username" class="row2" type="text" name="un"
                       required="true" </i>
            </div>
            <div class="xcwe fg">

                <label class="uio">كلمة السر</label>
                <i class="fas fa-eye" onclick="myFunction()"></i>
                <input id="myInput" placeholder="كلمة المرور " class="row2" type="password" name="pw" required="true">
            </div>
            <input class="row2 hj" type="submit"
                   name="save" value="تسجيل الدخول">
        </form>
    </div>

</div>


<script>

    $(document).ready(function () {


        $("#logintype").submit(function (event) {

                var formData = new FormData(this);

                const username = $("#username").val();
                const password = $("#myInput").val();


                formData.append('username', username);
                formData.append('password', password);
                formData.append('Submit', "Submit");

                $.ajax({
                    url: 'login2.php',
                    method: "post",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (response) {

                        if (response ===  "200") {
                            window.location.replace("add1.php")
                        } else {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'center',
                                showConfirmButton: false,
                                timer: 3000
                            });

                            Toast.fire({
                                type: 'error',
                                title: 'خطأ في الاسم المستخدم او كلمة المرور'
                            })

                        }
                        // ;
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


<div class="mjaio"><img src="image/BG/iahs-logo%20(2).png"></div>
</body>
</html>
<script>

    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>


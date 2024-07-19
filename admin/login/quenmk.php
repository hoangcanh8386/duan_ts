<?php session_start()


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Khôi phục mật khẩu | Website quản trị v2.0</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../qlbh/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../qlbh/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../qlbh/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../../qlbh/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../../qlbh/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../qlbh/css/util.css">
    <link rel="stylesheet" type="text/css" href="../../qlbh/css/main.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="../../qlbh/images/fg-img.png" alt="IMG">
                </div>
                <form action="" method="post">
                    <span class="login100-form-title">
                        <b>KHÔI PHỤC MẬT KHẨU</b>
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Bạn cần nhập đúng thông tin như: ex@abc.xyz">

                        <input class="input100" type="text" placeholder="Nhập email" name="email" value="" />
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class='bx bx-mail-send'></i>
                        </span>
                    </div>

                    <div>
                        <input type="submit" name="btnsubmit" value="Lấy mật khẩu" />
                    </div>
                    
                      <?php
                    if (isset($_SESSION['mknv'])) {
                        echo "<span style='color:green'>Mật khẩu của bạn là:".$_SESSION['mknv'] ."</span>";
                    }
                    
                    ?>
                    <div class="text-center p-t-12">
                        <a class="txt2" href="login.php">
                            Trở về đăng nhập
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>
<?php
include('../../model/pdo.php');
include('../../model/login.php');
// var_dump($login);
if (isset($_POST['btnsubmit'])) {

    $login = login($_POST['email']);
    // var_dump($login);
    if ($login) {
        $_SESSION['mknv'] = $login['matkhau'];
        // header('location:quenmk.php');
    } else {
        $messtk = '<span style="color:red" >Email bạn nhập vào không đúng </span>';
       
         echo $messtk;
    }

    // // echo $_POST['email'];
    // foreach ($login as $value) {
    //     if ($_POST['email'] === $value['emailnv']) {
    //         $idnv = $value['id_nv'];
    //         // echo "<span style='color:green'>Mật khẩu của bạn là:nv1234</span>";

    //         $_SESSION['mknv'] = 'nv1234';
    //         updatemk($idnv, $_SESSION['mknv']);
    //         header('location:quenmk.php');
    //         break;
    //         // echo 1;
    //     } if ($_POST['email'] === $value['email']) {
    //         $idceo = $value['id_ceo'];
    //         // echo "<span style='color:green'>Mật khẩu của bạn là:ceo1234</span>";

    //         $_SESSION['mkceo'] = 'ceo1234';
    //         updatemkceo($idceo, $_SESSION['mkceo']);
    //         header('location:quenmk.php');
    //         break;
    //         // echo 1;
    //     }
    // }
}


?>
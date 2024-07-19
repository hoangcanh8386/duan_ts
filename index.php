<?php
session_start();
include('mail/PHPMailer-master/sendmail.php');
// include('momo/atm_momo.php');

include('model/pdo.php');
include('model/dangkyanddnusser.php');
include('model/loadsptheodm.php');
include('model/find.php');
include('model/qltk.php');
include('model/loadsptrangchu.php');
include('model/loadsp.php');
include('model/muahang.php');
include('model/giohang.php');
include('model/binhluan.php');
include('model/qlkh.php');
include('model/search.php');
include('model/quanlydonhang.php');
include('user/trangchu/head.php');
include('user/trangchu/menu.php');

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
            // nguyệt
        case 'trangchu':

            $loadtrangsuccaocap = loadtrangsuccaocap();
            $loadtrangsuckimcuong = loadtrangsuckimcuong();
            $loadspsale = loadspsale();
            $loaddm = loaddm();
            $loadsptheoluotxem = loadsptheoluotxem();
            $loadkhachhang = load_kh();
            if (isset($_POST['btnsearch'])) {
                $loadspsale = search($_POST['ten']);
                $loaddm = search($_POST['ten']);
                $loadsptheoluotxem = search($_POST['ten']);
            }
            include('user/maintrangchu.php');

            break;
        case 'dangky':
            if (isset($_POST['btnsubmit'])) {

                $upload = "admin/upload_img/" . time() . $_FILES['avatar']['name'];
                move_uploaded_file($_FILES['avatar']['tmp_name'], $upload);
                $dangky = dangky(
                    $_POST['ten'],
                    $_POST['email'],
                    $_POST['phone'],
                    $_POST['address'],
                    $_POST['pass'],

                    $upload
                );
            }

            include('user/dangky.php');
            break;
        case 'dangnhap':
            if (isset($_POST['btnsubmit'])) {
                $dangnhap = dangnhap($_POST['email'], $_POST['mk']);
                if ($dangnhap) {
                    $_SESSION['emailkh'] = $dangnhap['email'];
                    $_SESSION['id_kh'] = $dangnhap['id_kh'];
                    $_SESSION['hinhanhkh'] = $dangnhap['hinhanhkh'];
                    var_dump($_SESSION['hinhanhkh']);
                    // die;
                    // header('location:?act=trangchu');
                    echo '<meta http-equiv="refresh" content="0;url=?act=trangchu">';
                } else {
                    $saitk = '<span style="color:red">sai tài khoản hoặc mật khẩu</span>';
                }
            }
            include('user/dangnhap.php');
            break;
        case 'dangxuat':
            if (isset($_SESSION['emailkh'])) {
                unset($_SESSION['emailkh']);
                unset($_SESSION['id_kh']);
                // header('location:?act=trangchu');
                echo '<meta http-equiv="refresh" content="0;url=?act=trangchu">';
            }
            break;

        case 'suatk':
            $gettk = qltk($_SESSION['id_kh']);
            // var_dump($gettk);
            if (isset($_POST['inputsubmit'])) {
                $upload = "admin/upload_img/" . time() . $_FILES['anhkh']['name'];
                move_uploaded_file($_FILES['anhkh']['tmp_name'], $upload);
                updatetk(
                    $_SESSION['id_kh'],
                    $_POST['tenkh'],
                    $_POST['email'],
                    $_POST['sdt'],
                    $_POST['diachi'],
                    $_POST['matkhau'],
                    $_POST['tentk'],
                    $upload,
                    $_POST['ngaysinh']
                );
                // header('location:?act=suatk');
                echo '<meta http-equiv="refresh" content="0;url=?act=suatk">';
            }
            include('user/suatk.php');
            break;

        case 'lienhe':
            include('user/lienhe.php');
            break;
        case 'gioithieu':
            include('user/gioithieu.php');

            break;
        case 'quenmk':
            include('user/quenmk.php');
            # code...
            break;
            // trang

        case 'trangsucvang':
            $loaisp = loaisp($_GET['iddm']);
            $listgioitinh = getgt();
            $getsize = getsize();
            $getgia = getgia();

            
                $loadsptheodm = loadsptheodm($_GET['iddm']);
            

            include('user/loadstheodm.php');
            break;
        case 'trangsuckimcuong':
            $loaisp = loaisp($_GET['iddm']);
            $listgioitinh = getgt();
            
                $loadsptheodm = loadsptheodm($_GET['iddm']);
            
            // var_dump($loadsptheodm);
            include('user/loadstheodm.php');
            break;
        case 'trangsucngoctrai':

            if (isset($_GET['idpage'])) {
                $loadsptheodm = loadsptheodm($_GET['iddm'], $_GET['idpage']);
            } else {
                $loadsptheodm = loadsptheodm($_GET['iddm'], 1);
            }
            include('user/loadstheodm.php');
            break;
        case 'chitietsp':
            capnhatluotxem($_GET['id_spct'],$_GET['luotxem']);
            $chitietsp = chitietsp($_GET['id_spct']);
            $loadspcungloai = loadspcungloai($_GET['id_sp'], $_GET['id_spct']);
            $binhluan = binhluan($_GET['id_spct']);
            if (isset($_POST['btnbl'])) {
                $idspct = $_GET['id_spct'];
                $id_kh =  $_SESSION['id_kh'];

                guibinhluan($id_kh, $idspct, $_POST['binhluan']);
                echo '<meta http-equiv="refresh" content="0;url=?act=chitietsp&id_spct=' . $_GET['id_spct'] . '&id_sp=' . $_GET['id_sp'] .'&soluong=' . $_GET['soluong'] .'&luotxem=' . $_GET['luotxem'] . '">';
            }

            include('user/chitietsp.php');
            break;
        case 'updatebl':
            updatebl($_GET['noidung'], $_GET['id_bl']);
            echo $_GET['noidung'];
            break;
        case 'deletebl':
            if (isset($_GET['id_bl'])) {
                echo $_GET['id_bl'];
                deletebl($_GET['id_bl']);
                //echo '<meta http-equiv="refresh" content="0;url=?act=chitietsp&id_spct=' . $_GET['id_spct'] . '&id_sp=' . $_GET['id_sp'] . '">';

            }
            break;

            // dũng

        case 'addgiohang':

            if (isset($_SESSION['id_kh'])) {
                $idspct = $_GET['idspct'];
                $idsp = $_GET['idsp'];
                $chitietsp = chitietsp($_GET['idspct']);

                // var_dump($chitietsp);
                // die;
                // die;
                $check = 0;

                // if (isset($_POST['btngiohang'])) {
                $allgiohang = allgiohang($_SESSION['id_kh']);
                // $_SESSION['allgiohang']=count($allgiohang);

                foreach ($allgiohang as $key => $giohang) {
                    if (
                        $chitietsp['tenspchitiet'] === $giohang['tensp'] && intval($_GET['size']) == $giohang['idchitietsizesp']
                        && $_SESSION['id_kh'] == $giohang['idkh']
                    ) {
                        $check = 1;
                       
                        $slgiohang = intval($_GET['soluong']) + $giohang['slgiohang'];
                        $tongtien = $slgiohang * $giohang['giasp'];
                        updateslgiohang($slgiohang, $giohang['idgiohang'], $tongtien, intval($_GET['size']));
                        // $chitietsp['soluong']=$chitietsp['soluong']-intval($_GET['soluong']);
                        // capnhatsoluong($chitietsp['soluong'],$chitietsp['id_spct']);
                    }
                }

                if ($check == 0) {

                    $giohang = giohang(
                        $chitietsp['tenspchitiet'],
                        $chitietsp['hinhanhchitiet'],
                        $chitietsp['gia'],
                        intval($_GET['soluong']),
                        intval($_GET['size']),
                        intval($_GET['idspct']),
                        $_SESSION['id_kh'],
                        floatval(($chitietsp['gia'] * intval($_GET['soluong'])))

                    );
                    // $chitietsp['soluong']=$chitietsp['soluong']-intval($_GET['soluong']);
                    // capnhatsoluong($chitietsp['soluong'],$chitietsp['id_spct']);
                }


                // echo '<meta http-equiv="refresh" content="0;url=?act=chitietsp&id_spct=' . $idspct . '&id_sp=' . $idsp . '">';

                include('user/giohang.php');


                // var_dump($giohang);
                // }
            } else {

                echo '<meta http-equiv="refresh" content="0;url=?act=dangnhap">';
            }

            break;

        case 'cart':
          
            if (isset($_SESSION['id_kh'])) {

                $getgiohang = getgiohang($_SESSION['id_kh']);
            //    var_dump($getgiohang);
                include('user/giohang.php');
            } else {
                echo '<meta http-equiv="refresh" content="0;url=?act=dangnhap">';
            }

            break;
        case 'deletegiohang':
            if (isset($_GET['idgiohang'])) {
                deletegiohang($_GET['idgiohang']);
                // header('location:?act=cart');
                echo '<meta http-equiv="refresh" content="0;url=?act=cart">';
            }
            break;
        case 'editcart':

            // if (isset($_GET['idspct'])) {
            //     $thongbaosl = checkslgiohangvoispct($_GET['idspct']);
            //     echo $thongbaosl;
            //     include('user/giohang.php');

            //     // die;
            // }
            if (isset($_GET['idgiohang']) && isset($_GET['sl']) && isset($_GET['giasp'])) {

                $tongtien = intval($_GET['sl']) * floatval($_GET['giasp']);
                updateslgiohang(intval($_GET['sl']), intval($_GET['idgiohang']), $tongtien);
                $getgiohang = getgiohang($_SESSION['id_kh']);
                foreach ($getgiohang as $key => $giohang) {
                    if ($giohang['slgiohang'] > $giohang['soluong']) {
                        // echo 1;
                    }
                }
            }

            break;
        case 'muahang':


            if (isset($_SESSION['id_kh'])) {
                $getkh = qltk($_SESSION['id_kh']);
                $allgiohang = allgiohang($_SESSION['id_kh']);
                // var_dump($allgiohang);
                // die;
                $thanhtien = tongtiencart($_SESSION['id_kh']);

                if (isset($_POST['payUrl'])) {
                    if (
                        empty($_POST['username']) || empty($_POST['email'])
                        || empty($_POST['sodienthoai']) || empty($_POST['diachinhan']) || empty($_POST['option'])
                    ) {
                        $thongbao = "<span style='color:red'>Bạn phải điền đầy đủ thông tin</span>";
                    } else {

                        adddh($_POST['diachinhan'], date('Y-m-d'), $_POST['sodienthoai'], $_POST['option'], $_SESSION['id_kh'], 1,intval($_POST['magiamgia']));
                        $getdh = getdh($_SESSION['id_kh']);
                        // var_dump($getdh['id_dh']);
                        $_SESSION['madonhang'] = $getdh['iddh'];
                        $_SESSION['tongtien'] = $thanhtien['tongtien'];
                        foreach ($allgiohang as $key => $giohang) {

                            // var_dump($chitietsp);
                            // die;
                            addchitietdh(
                                $giohang['slgiohang'],
                                $giohang['giasp'],
                                $giohang['tongtien'],
                                $getdh['iddh'],
                                $giohang['idspct'],
                                $giohang['idchitietsizesp'],
                                
                            );
                            $chitietsp = chitietsp($giohang['idspct']);
                            $chitietsp['soluong'] = $chitietsp['soluong'] - $giohang['slgiohang'];
                            capnhatsoluong($chitietsp['soluong'], $chitietsp['id_spct']);
                            deletegiohang($giohang['idgiohang']);
                        }
                        echo '<meta http-equiv="refresh" content="0;url=momo/atm_momo.php?tongtien=' . $_SESSION['tongtien'] . '&madonhang=' . $_SESSION['madonhang'] . '">';
                    }
                }
            } else {
                echo '<meta http-equiv="refresh" content="0;url=?act=dangnhap">';
            }


            include('user/muahang.php');

            break;
        case 'camon':
            // echo "cảm ơn quý khách đã mua hàng";
            include('user/camon.php');

            break;
        case 'muangay':
            if (isset($_SESSION['id_kh'])) {
                // var_dump($chitietsp);
                $chitietsp = chitietsp($_GET['idspct']);

                $getkh = qltk($_SESSION['id_kh']);
                $allgiohang = allgiohang($_SESSION['id_kh']);
                $thanhtien = tongtiencart($_SESSION['id_kh']);
                // var_dump(thanhtien($_SESSION['id_kh']));
                if (isset($_POST)) {
                    // echo $_POST['gia'];

                    if (
                        empty($_POST['username']) || empty($_POST['email'])
                        || empty($_POST['sodienthoai']) || empty($_POST['diachinhan']) || empty($_POST['option'])
                    ) {
                        $thongbao = "<span style='color:red'>Bạn phải điền đầy đủ thông tin</span>";
                    } else {

                        // adddh($_POST['diachinhan'], $_POST['sodienthoai'], $_POST['option'], $_SESSION['id_kh']);
                        // $getdh = getdh($_SESSION['id_kh']);
                        // var_dump($getdh['id_dh']);
                        // foreach ($allgiohang as $key => $giohang) {

                        //     addchitietdh(
                        //         $giohang['slgiohang'],
                        //         $giohang['giasp'],
                        //         $giohang['tongtien'],
                        //         $getdh['iddh'],
                        //         $giohang['idspct'],
                        //         $giohang['idchitietsizesp'],
                        //         intval($_POST['magiamgia'])
                        //     );
                        //     deletegiohang($giohang['idgiohang']);
                        // }
                    }

                    // die;
                }
            }
            include('user/muahangformcart.php');

            break;

        case 'tientrinh':
            if (isset($_SESSION['id_kh'])) {
                $getdonhangtheoid=getdh($_SESSION['id_kh']);

                $alldonhang=alldonhang($_SESSION['id_kh']);

                $quanlydonhang = quanlydonhang($_SESSION['id_kh']);
                
               
            } else {
                echo '<meta http-equiv="refresh" content="0;url=?act=dangnhap">';
            }
            include('user/tientrinh.php');
            break;
        case 'tintuc':
            include('user/tintuc.php');

            break;
    }
} else {
    $loadtrangsuccaocap = loadtrangsuccaocap();
    $loadtrangsuckimcuong = loadtrangsuckimcuong();
    $loadspsale = loadspsale();
    $loaddm = loaddm();
    $loadkhachhang = load_kh();

    $loadsptheoluotxem = loadsptheoluotxem();

    include('user/maintrangchu.php');
}


include('user/trangchu/footer.php');

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
function sendMail($mailAddress, $name, $content)
{
    $mail = new PHPMailer(true);
    $mail->setLanguage('vi', 'language/phpmailer.lang-vi.php');
    try {
        //Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP(); // Sử dụng SMTP để gửi mail
        $mail->Host = 'smtp.gmail.com'; // Server SMTP của gmail
        $mail->SMTPAuth = true; // Bật xác thực SMTP
        $mail->Username = 'trangncph44249@fpt.edu.vn'; // Tài khoản email
        $mail->Password = 'ptre llxq kiih hhcf'; // Mật khẩu ứng dụng ở bước 1 hoặc mật khẩu email
        $mail->SMTPSecure = 'ssl'; // Mã hóa SSL
        $mail->Port = 465; // Cổng kết nối SMTP là 465

        //Recipients
        $mail->setFrom('trangncph44249@fpt.edu.vn', 'Nguyen Cong Trang'); // Địa chỉ email và tên người gửi
        $mail->addAddress($mailAddress, $name); // Địa chỉ mail và tên người nhận

        //Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Mật khẩu'; // Tiêu đề
        $mail->Body = 'Mật khẩu của bạn là:' . $content; // Nội dung

        $mail->send();
        //echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}

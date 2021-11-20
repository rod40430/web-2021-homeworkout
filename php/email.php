<?php
    require_once '../email/PHPMailer-master/src/PHPMailer.php';
    require_once '../email/PHPMailer-master/src/SMTP.php';
    require_once '../email/PHPMailer-master/src/Exception.php';
    
    use PHPMailer\PHPMailer\PHPMailer;
    
    function sendMail($address, $body) {
        include "./info.php";
        $mail = new PHPMailer(true);
        $mail->ContentType = "text/html";
        $mail->CharSet = "utf-8";
        $mail->IsSMTP(); // enable SMTP

        $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.naver.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = $naverid;
        $mail->Password = $naverpass;
        $mail->SetFrom("rod40430@naver.com", "HT");
        $mail->AddAddress($address);
        $mail->Subject = "HT 이메일 인증";
        $mail->Body = $body;

        if(!$mail->Send()) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    sendMail("xogns40430@naver.com", "테스트입니다.");
?>
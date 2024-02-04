<?php
function is_ssl() {
    if ( isset($_SERVER['HTTPS']) ) {
        if ( 'on' == strtolower($_SERVER['HTTPS']) )
		echo '1';
            return true;
        if ( '1' == $_SERVER['HTTPS'] )
            return true; echo '2';
    } elseif ( isset($_SERVER['SERVER_PORT']) && ( '443' == $_SERVER['SERVER_PORT'] ) ) {
        return true; echo '1';
    }
    return false;
}
echo is_ssl();

if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
 echo 'asdasdsf';
}else{
 echo 'no';	
}


include("intra/spel_config.php");
  include("intra/cmn_lib.php");
  $obj = new glibrary();


require("class.phpmailer.php");
$mail = new PHPMailer();
$mail -> CharSet = "UTF-8";
$mail->IsSMTP();  

/*$mail->Host = "relay-hosting.secureserver.net'";
$mail->SMTPAuth = true;
//$mail->SMTPSecure = 'tls';
$mail->Port = 465;
$mail->CharSet = "UTF-8";*/



$mail->Host       = "relay-hosting.secureserver.net";
$mail->Port       = 25;                   
$mail->SMTPDebug  = 0;
$mail->SMTPSecure = "none";                 
$mail->SMTPAuth   = false;
$mail->Username   = "saitesting@absxpintranet.in";
$mail->Password   = "IG5g}*TJsL4q";

//$mail->Username = "saitesting@absxpintranet.in";
//$mail->Password = "IG5g}*TJsL4q";

 $mail->Subject = "Subject Text";
   $mail->From =  "saitesting@absxpintranet.in";
 
$mail->FromName = "Sai Talent Acquisition Team";
$mail->addAddress("adtest99@gmail.com");

 $mail->Body    = "hashdf ";
 //$mail->addAddress("$aplnt_eml", "$aplnt_nme");


$mail->addAddress("adtest99@gmail.com"); 
if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}

/*define('SMTP_HOST','relay-hosting.secureserver.net');
define('SMTP_PORT',25); 
define('SMTP_USERNAME','saitesting@absxpintranet.in');
define('SMTP_PASSWORD','IG5g}*TJsL4q');
define('SMTP_AUTH',false);

$email = 'adtest99@gmail.com';
$firstName = 'Aravind';

$mail = new PHPMailerR();
$mail->IsSMTP();
$mail->SMTPDebug = 1;                 
$mail->SMTPAuth = SMTP_AUTH;                
$mail->Host = SMTP_HOST;
$mail->Port = 25;
$mail->Username = SMTP_USERNAME;
$mail->Password = SMTP_PASSWORD;
$mail->SetFrom(SMTP_USERNAME,'AravindNC.IN');
$mail->AddReplyTo(SMTP_USERNAME,"AravindNC.IN");
$mail->Subject = "Welcome to AravindNC.IN";
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
$mail->MsgHTML('This is a test.');
$mail->AddAddress($email, 'Aravind NC');
$mail->Send();
*/?>
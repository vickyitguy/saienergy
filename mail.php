  <?php



require("class.phpmailer.php");
$mail = new PHPMailer();
$mail -> CharSet = "UTF-8";
$mail->IsSMTP();  

$mail->Host = "mail.agiledesignstudio.com";
$mail->SMTPAuth = true;
//$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->CharSet = "UTF-8";

$mail->Username = "admin@agiledesignstudio.com";
$mail->Password = "admin@12345";


$stm_nw = strtotime('now');

$tdy = date("Y/m/d");

 	
 
  // $src='include/';
  // $fnl2=$src.$newfilename;
    
 //$mail->AddAttachment($fnl2);  
 $mail->Subject = "Subject Text";
   $mail->From =  "admin@agiledesignstudio.com";
 
$mail->FromName = "Sai Testing Sample SMTP Mail";
$aplnt_eml ='agiledesignstudio@gmail.com';
$mail->addAddress($aplnt_eml);


$message ='Hai ';

 $mail->Body    = "$message ";

 $mail->Addcc("skr1114@yahoo.in"); 
if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}
 

 
?>
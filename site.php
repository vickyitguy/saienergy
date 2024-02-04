<?php
include("intra/spel_config.php");
  include("intra/cmn_lib.php");
  $obj = new glibrary();

$u='_';

require("class.phpmailer.php");
$mail = new PHPMailer();
$mail -> CharSet = "UTF-8";
$mail->IsSMTP();  

$mail->Host = "mail.saienergy.com";
$mail->SMTPAuth = true;
//$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->CharSet = "UTF-8";


$mail->Username = "webmaster@saienergy.com";
$mail->Password = "spel@123";

$mail->IsHTML(true);  

$stm_nw = strtotime('now');

$tdy = date("d/m/Y");

if(isset($_GET['enq_post']))
{
	
	$val=explode('$',$_GET['enq_post']);
	
	//$val = array_map('strtoupper', $val);

 
 $nme = mysqli_real_escape_string($idb,$val[0]);  	
 
 $cmp_nme = mysqli_real_escape_string($idb,$val[1]); 

 $mob = mysqli_real_escape_string($idb,$val[2]);  
  $email = mysqli_real_escape_string($idb,$val[3]);  
  $msg = mysqli_real_escape_string($idb,$val[4]); 
 
  
  
 $sql = "insert into enquiries_list(enq_by,cmp_nme, mob_no, email, enq_details, enq_stm) values   	
 ('$nme','$cmp_nme','$mob','$email', '".$msg."','$stm_nw')";
 $qry=mysqli_query($idb,$sql)or die(mysqli_error($idb));

  		 
  
 $message = '<html><body>';	
	$message .='<br/>';
$message .=' Dear Marketing Team, you received an enquiry from our website.<br/>';
	
	$message .='';
 $message .='<table width="900" border="1" class="gridtable" align="center" style="border-color: #a1a0a0;font-size:12px;font-family:verdana,arial,sans-serif;border-collapse: collapse;border-style: solid;" >
  <tr>
    <td height="34" colspan="4" align="center" style="background-color:#024F7E; color:#FFF;font-size:16px;font-weight:bold"><strong> Enquiry  Details</strong></td>
   </tr>

 <tr>
    <td width="167" height="25" align="right" style="background-color:#F0F0F0; font-size:14px;"><strong>Enquired By</strong></td>
    <td width="244" height="25" style="background-color:#F3F3F3">'.$nme.'  </td>
    <td width="159" height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Company Name</strong></td>
    <td width="296" style="background-color:#F3F3F3"> '.$cmp_nme.'</td>

   </tr>
   <tr>
   <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Mobile No. </strong></td>
   <td height="25" colspan="3" style="background-color:#F3F3F3">'.$mob.' </td>
 </tr>
 
 <tr>
   <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>E-mail </strong></td>
   <td height="25" colspan="3" style="background-color:#F3F3F3">'.$email.' </td>
 </tr>
 <tr>
   <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Message </strong></td>
   <td height="25" colspan="3" style="background-color:#F3F3F3">'.$msg.' </td>
 </tr>
 <tr>
   <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Enquired On </strong></td>
   <td height="25" colspan="3" style="background-color:#F3F3F3">'.$tdy.' </td>
 </tr>
 </table>';
	

 $mail->IsHTML(true);  
 $mail->Subject = "SPEL Enquiry";
 $mail->From =  "$email";
 
$mail->FromName = $nme;
$mail->addAddress("marketing@saienergy.com");
$mail->Body    = "$message ";
	if(!$mail->send()) 
	{
	 echo '0';	
	} 
	else 
	{
	   echo '1';	
	}

  
 
}if(isset($_GET['cp_enquiry']))
{
	
	$val=explode('$',$_GET['cp_enquiry']);
	
 
 
 $nme = mysqli_real_escape_string($idb,$val[0]);  	  $mob = mysqli_real_escape_string($idb,$val[1]);  
  $email = mysqli_real_escape_string($idb,$val[2]);   $msg = mysqli_real_escape_string($idb,$val[3]); 
 
  
 
  		 
  
 $message = '<html><body>';	
	$message .='<br/>';
	$message .=' Dear Marketing Team, you received an enquiry from our website';
   $message .='<br/>';
	$message .='';
 $message .='<table width="900" border="1" class="gridtable" align="center" style="border-color: #a1a0a0;font-size:12px;font-family:verdana,arial,sans-serif;border-collapse: collapse;border-style: solid;" >
  <tr>
    <td height="34" colspan="4" align="center" style="background-color:#024F7E; color:#FFF;font-size:16px;font-weight:bold"><strong> Enquiry  Details</strong></td>
   </tr>

 <tr>
    <td width="167" height="25" align="right" style="background-color:#F0F0F0; font-size:14px;"><strong>Enquired By</strong></td>
    <td width="244" height="25" style="background-color:#F3F3F3">'.$nme.'  </td>
    <td width="159" height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Mobile No.</strong></td>
    <td width="296" style="background-color:#F3F3F3"> '.$mob.'</td>

   </tr>
 
 <tr>
   <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>E-mail </strong></td>
   <td height="25" colspan="3" style="background-color:#F3F3F3">'.$email.' </td>
 </tr>
 <tr>
   <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Message </strong></td>
   <td height="25" colspan="3" style="background-color:#F3F3F3">'.$msg.' </td>
 </tr>
 <tr>
   <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Enquired On </strong></td>
   <td height="25" colspan="3" style="background-color:#F3F3F3">'.$tdy.' </td>
 </tr>
 </table>';
	

 $mail->IsHTML(true);  
 $mail->Subject = "SPEL Enquiry Reply ";
 $mail->From =  $email;
 
$mail->FromName = $nme;
$mail->addAddress("marketing@saienergy.com");

 $mail->Body    = "$message ";
 
	if(!$mail->send()) 
	{
	 echo '0';	
	} 
	else 
	{
	   echo '1';	
	}

  
 
} else if(isset($_POST['omenquiry']))
{
	
 
$enq_by=$_POST['name'];
$designation=$_POST['designation'];
$cmp_nme=$_POST['company']; 
$cmp_adrs=$_POST['company_addres'];
$location=$_POST['location'];

$phone = $_POST['phone'];
$mob_no = $_POST['mobile'];
$email  = $_POST['email'];
$srcat_id = '1';


$enq_details   = $_POST['description'];
$enq_for   = $_POST['enq_for'];
 


$q1=mysqli_query($idb,"SELECT enq_id FROM enquiries_list ORDER BY enq_id  DESC  LIMIT 0 , 1");
$f1=mysqli_fetch_array($q1);
$enq_id=$f1['enq_id'];

$fldr = "intra/assets/docs/enquiry/";

 if(isset($_FILES['attachment']['tmp_name']))
 {
  		$file_name = str_replace(" ", "_", $_FILES['attachment']['name']);
 		$file_size =$_FILES['attachment']['size'];
 		$file_tmp =$_FILES['attachment']['tmp_name'];
 		$file_type=$_FILES['attachment']['type'];	
 		
 		if($file_size>0)
 		{
			
			  $fn=$enq_id.$u.$file_name;
 		     $doc_nme = trim($fn);
              move_uploaded_file($file_tmp,"$fldr".$doc_nme);
 		}
}
 
 
 
      $sql = "insert into enquiries_list(enq_by,designation,cmp_nme,cmp_adrs,location,phone,mob_no,email,srcat_id,enq_details,enq_for,enq_doc,enq_stm) values
  
   	('$enq_by','$designation','$cmp_nme','$cmp_adrs','".$location."','$phone','$mob_no','$email','$srcat_id','$enq_details','$enq_for','$doc_nme','$stm_nw')";
 
  

	$qry=mysqli_query($idb,$sql)or die(mysqli_error($idb));	








$message = '<html><body>';		
	
	//$message .=' Dear '.$aplnt_nme.' .Thanks for your Interest In SPEL.Our Team will contact you shortly';
    $message .=' Dear Marketing Team, you received an enquiry from our website.<br/>';
	
	$message .='';
 $message .='<table width="900" border="1" class="gridtable" align="center" style="border-color: #a1a0a0;font-size:12px;font-family:verdana,arial,sans-serif;border-collapse: collapse;border-style: solid;" >
  <tr>
    <td height="34" colspan="4" align="center" style="background-color:#024F7E; color:#FFF;font-size:16px;font-weight:bold"><strong> Applicant  Details</strong></td>
   </tr>

 <tr>
    <td width="167" height="25" align="right" style="background-color:#F0F0F0; font-size:14px;"><strong>Name</strong></td>
    <td width="244" height="25" style="background-color:#F3F3F3">'.$enq_by.'  </td>
    <td width="159" height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Designation</strong></td>
    <td width="296" style="background-color:#F3F3F3"> '.$designation.'</td>
    </tr>
 <tr>
    <td width="167" height="25" align="right" style="background-color:#F0F0F0; font-size:14px;"><strong>Company Name</strong></td>
    <td width="244" height="25" style="background-color:#F3F3F3">'.$cmp_nme.'  </td>
    <td width="159" height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Company Address</strong></td>
    <td width="296" style="background-color:#F3F3F3"> '.$cmp_adrs.'</td>
    </tr>
     <tr>
    <td width="167" height="25" align="right" style="background-color:#F0F0F0; font-size:14px;"><strong>Plant Location</strong></td>
    <td width="244" height="25" style="background-color:#F3F3F3">'.$location.'  </td>
    <td width="159" height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Phone No.</strong></td>
    <td width="296" style="background-color:#F3F3F3"> '.$phone.'</td>
    </tr>
     <tr>
    <td width="167" height="25" align="right" style="background-color:#F0F0F0; font-size:14px;"><strong>Mobile No.</strong></td>
    <td width="244" height="25" style="background-color:#F3F3F3">'.$mobile.'  </td>
    <td width="159" height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>E-mail</strong></td>
    <td width="296" style="background-color:#F3F3F3"> '.$email.'</td>
    </tr>
     <tr>
    <td width="167" height="25" align="right" style="background-color:#F0F0F0; font-size:14px;"><strong>Boiler Type</strong></td>
    <td width="244" height="25" style="background-color:#F3F3F3">'.$boil_typ.'  </td>
    <td width="159" height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Plant Capacity</strong></td>
    <td width="296" style="background-color:#F3F3F3"> '.$plnt_cpcty.'</td>
    </tr>
     <tr>
    <td width="167" height="25" align="right" style="background-color:#F0F0F0; font-size:14px;"><strong>Enquiry Type</strong></td>
    <td width="244" height="25" style="background-color:#F3F3F3">'.$enq_for.'  </td>
    <td width="159" height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Tender</strong></td>
    <td width="296" style="background-color:#F3F3F3"> '.$tender.'</td>
    </tr>    
    
    <tr>
      <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Enquiry Description</strong></td>
      <td  colspan="3" style="background-color:#F3F3F3">'.$enq_details.'</td>
     
    </tr>
    <tr>
      <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Applied On</strong></td>
      <td  colspan="3" style="background-color:#F3F3F3">'.$tdy.'</td>
     
    </tr>


    </table>';
	

    $fnl2=$fldr.$doc_nme;
    
 
 $mail->Subject = "Enquiry";
   $mail->From =  $email;
 
$mail->FromName = $enq_by;
$mail->addAddress("marketing@saienergy.com");
$mail->AddAttachment($fnl2);  
 $mail->Body    = "$message ";


if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
   // echo "Message has been sent successfully";
}



if($qry)
{
 echo '1';	
}else{
 echo '0';	
}


 }else if(isset($_POST['otherenquiry']))
{
	
 
$enq_by=$_POST['name'];
$designation=$_POST['designation'];
$cmp_nme=$_POST['company']; 
$cmp_adrs=$_POST['company_addres'];
$location=$_POST['location'];

$phone = $_POST['phone'];
$mob_no = $_POST['mobile'];
$email  = $_POST['email'];
 
$srcat_id   = $_POST['srcat_id'];
//$boil_typ   = $_POST['boiler_type'];
//$plnt_cpcty   = $_POST['capacity'];

$enq_details   = $_POST['description'];
//$enq_for   = $_POST['enq_for'];
//$tender   = $_POST['tender'];


$fldr = "intra/assets/docs/enquiry/";

$q1=mysqli_query($idb,"SELECT enq_id FROM enquiries_list ORDER BY enq_id  DESC  LIMIT 0 , 1");
$f1=mysqli_fetch_array($q1);
$enq_id=$f1['enq_id'];

 if(isset($_FILES['attachment']['tmp_name']))
 {
  		$file_name = str_replace(" ", "_", $_FILES['attachment']['name']);
 		$file_size =$_FILES['attachment']['size'];
 		$file_tmp =$_FILES['attachment']['tmp_name'];
 		$file_type=$_FILES['attachment']['type'];	
 		
 		if($file_size>0)
 		{
			
			  $fn=$enq_id.$u.$file_name;
 		     $doc_nme = trim($fn);
              move_uploaded_file($file_tmp,"$fldr".$doc_nme);
 		}
}
 
 
 
 
 


      $sql = "insert into enquiries_list(enq_by,designation,cmp_nme,cmp_adrs,location,phone,mob_no,email,srcat_id,enq_details,enq_doc,enq_stm) values
  
   	('$enq_by','$designation','$cmp_nme','$cmp_adrs','".$location."','$phone','$mob_no','$email','$srcat_id','$enq_details','$doc_nme','$stm_nw')";
 
  

	$qry=mysqli_query($idb,$sql)or die(mysqli_error($idb));	








$message = '<html><body>';		
	
	$message .=' Dear '.$aplnt_nme.' .Thanks for your Interest In SPEL.Our Team will contact you shortly';
	
	$message .='';
 $message .='<table width="900" border="1" class="gridtable" align="center" style="border-color: #a1a0a0;font-size:12px;font-family:verdana,arial,sans-serif;border-collapse: collapse;border-style: solid;" >
  <tr>
    <td height="34" colspan="4" align="center" style="background-color:#024F7E; color:#FFF;font-size:16px;font-weight:bold"><strong> Applicant  Details</strong></td>
   </tr>

 <tr>
    <td width="167" height="25" align="right" style="background-color:#F0F0F0; font-size:14px;"><strong>Name</strong></td>
    <td width="244" height="25" style="background-color:#F3F3F3">'.$enq_by.'  </td>
    <td width="159" height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Designation</strong></td>
    <td width="296" style="background-color:#F3F3F3"> '.$designation.'</td>
    </tr>
 <tr>
    <td width="167" height="25" align="right" style="background-color:#F0F0F0; font-size:14px;"><strong>Company Name</strong></td>
    <td width="244" height="25" style="background-color:#F3F3F3">'.$cmp_nme.'  </td>
    <td width="159" height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Company Address</strong></td>
    <td width="296" style="background-color:#F3F3F3"> '.$cmp_adrs.'</td>
    </tr>
     <tr>
    <td width="167" height="25" align="right" style="background-color:#F0F0F0; font-size:14px;"><strong>Plant Location</strong></td>
    <td width="244" height="25" style="background-color:#F3F3F3">'.$location.'  </td>
    <td width="159" height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Phone No.</strong></td>
    <td width="296" style="background-color:#F3F3F3"> '.$phone.'</td>
    </tr>
     <tr>
    <td width="167" height="25" align="right" style="background-color:#F0F0F0; font-size:14px;"><strong>Mobile No.</strong></td>
    <td width="244" height="25" style="background-color:#F3F3F3">'.$mobile.'  </td>
    <td width="159" height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>E-mail</strong></td>
    <td width="296" style="background-color:#F3F3F3"> '.$email.'</td>
    </tr>
     <tr>
    <td width="167" height="25" align="right" style="background-color:#F0F0F0; font-size:14px;"><strong>Boiler Type</strong></td>
    <td width="244" height="25" style="background-color:#F3F3F3">'.$boil_typ.'  </td>
    <td width="159" height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Plant Capacity</strong></td>
    <td width="296" style="background-color:#F3F3F3"> '.$plnt_cpcty.'</td>
    </tr>
     <tr>
    <td width="167" height="25" align="right" style="background-color:#F0F0F0; font-size:14px;"><strong>Enquiry Type</strong></td>
    <td width="244" height="25" style="background-color:#F3F3F3">'.$enq_for.'  </td>
    <td width="159" height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Tender</strong></td>
    <td width="296" style="background-color:#F3F3F3"> '.$tender.'</td>
    </tr>    
    
    <tr>
      <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Enquiry Description</strong></td>
      <td  colspan="3" style="background-color:#F3F3F3">'.$enq_details.'</td>
     
    </tr>
    <tr>
      <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Applied On</strong></td>
      <td  colspan="3" style="background-color:#F3F3F3">'.$tdy.'</td>
     
    </tr>


    </table>';
	

  
   $fnl2=$fldr.$doc_nme;
    
 $mail->AddAttachment($fnl2);  
 $mail->Subject = "OM Enquiry";
   $mail->From =  "agiledesignstudio@gmail.com";
 
$mail->FromName = "SPEL";
$mail->addAddress("$email", "$enq_by");

 $mail->Body    = "$message ";

//$mail->Addcc("agiledesignstudio@gmail.com"); 
if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
   // echo "Message has been sent successfully";
}



if($qry)
{
 echo '1';	
}else{
 echo '0';	
}


 }

  <?php

include("intra/spel_config.php");
  include("intra/cmn_lib.php");
  $obj = new glibrary();


require("class.phpmailer.php");
$mail = new PHPMailer();
$mail -> CharSet = "UTF-8";
$mail->IsSMTP();  

$mail->Host = "mail.saienergy.com";
$mail->SMTPAuth = true;
//$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->CharSet = "UTF-8";

$mail->Username = "web@saienergy.com";
$mail->Password = "Spel@123";
$mail->IsHTML(true);  

$stm_nw = strtotime('now');

$tdy = date("Y/m/d");

if(isset($_POST['career_post']))
{
	
	
$vcn_id=$_POST['job'];

$pref_position = isset($_POST['pref_position']) ? $_POST['pref_position'] : '';
$pref_location = isset($_POST['pref_location']) ? $_POST['pref_location'] : '';
  

$expr_sts=$_POST['experience_status'];
$aplnt_nme=$_POST['name']; 
$dob=$_POST['dob'];
$age=$_POST['age'];

$adrs1 = $_POST['address1'];
$adrs2 = $_POST['address2'];
$city  = $_POST['city'];
$ste = $_POST['state'];
$cntry   = $_POST['country'];
$pin   = $_POST['pin'];
$mob_no   = $_POST['mobile'];
$aplnt_eml   = $_POST['email'];

$eql_id    = $_POST['edu_qualification'];
$cert_id   = $_POST['prof_certification'];
$langs   = $_POST['languages'];

$expr_yrs     = $_POST['experience_years'];
$crnt_cmpny   = $_POST['presentemployer'];
$crnt_ctc     = $_POST['ctcnow'];
$expc_ctc     = $_POST['ctcexpected'];

$jpos_id     = $_POST['jpos_id'];


$fldr = "intra/assets/docs/career/";

 if(isset($_FILES['resume']['tmp_name']))
 {
  		$file_name = str_replace(" ", "_", $_FILES['resume']['name']);
 		$file_size =$_FILES['resume']['size'];
 		$file_tmp =$_FILES['resume']['tmp_name'];
 		$file_type=$_FILES['resume']['type'];	
 		
 		if($file_size>0)
 		{
 		      $fn = $stm_nw.$u.$file_name;
			  $doc_nme = trim($fn);
             move_uploaded_file($file_tmp,"$fldr".$doc_nme);
 		}
}
 


      $sql = "insert into career_enquiries(vcn_id,pref_position,pref_location,expr_sts,aplnt_nme,dob,age,adrs1,adrs2,city,state,cntry,pin,mob_no,aplnt_eml,eql_id,cert_id,langs,expr_yrs,crnt_cmpny,crnt_ctc,expc_ctc,doc_nme,enq_stm) values
  
   	('$vcn_id','$pref_position','$pref_location','$expr_sts','$aplnt_nme','$dob','".$age."','$adrs1','$adrs2','$city','$ste','$cntry','$pin','$mob_no','$aplnt_eml','$eql_id','$cert_id','$langs','$expr_yrs','$crnt_cmpny','$crnt_ctc','$expc_ctc','$doc_nme','$stm_nw')";
 
  

	$qry=mysqli_query($idb,$sql)or die(mysqli_error($idb));	


 
 if($vcn_id !='')
 {


$q1=mysqli_query($idb,"select *  from vacancy_list  where vcn_id='$vcn_id'  ");
$f1=mysqli_fetch_array($q1);
  //$jb_cod=$f1['jb_code']; 
    
 $jpos_id=$f1['jpos_id']; 
 $job_tle = $obj->get_job_position($jpos_id);
 
 $jd_id=$f1['jd_id']; 
$jrw = $obj->get_jobdescr($jd_id);
 $jb_cod = $jrw['jd_code'];
 
 $mail->Subject = "New Career Enquiry for ".$job_tle."";
 
  }else{
	 
	$job_tle ='General Application'; 
	$jb_cod  ='';
	
 $mail->Subject = "Application for ".$pref_position." - ".$pref_location."";
 }


if($expr_sts>0)
{
	$exprn = 'Experienced';
}else{
	$exprn = 'Fresher';
 }


 $edu_quali = $obj->get_edu_qualification($eql_id) ;

 $prof_certificate = $obj->get_prof_certification($eql_id) ;
 
 


	$message = '<html><body>';		
  
  $message .=' Dear sirs,<br/>
  Please find below my application. Kindly do the needful.';
	
	$message .='<br/><br/><br/>';
 $message .='<table width="900" border="1" class="gridtable" align="center" style="border-color: #a1a0a0;font-size:12px;font-family:verdana,arial,sans-serif;border-collapse: collapse;border-style: solid;" >
  <tr>
    <td height="34" colspan="4" align="center" style="background-color:#024F7E; color:#FFF;font-size:16px;font-weight:bold"><strong> Applicant  Details</strong></td>
   </tr>

 <tr>
    <td width="167" height="25" align="right" style="background-color:#F0F0F0; font-size:14px;"><strong>Job Title & Code</strong></td>
    <td width="244" height="25" style="background-color:#F3F3F3">'.$job_tle.' &nbsp;&nbsp;  '.$jb_cod.' </td>
    <td width="159" height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Experience Status</strong></td>
    <td width="296" style="background-color:#F3F3F3"> '.$exprn.'</td>

   </tr>';
   
   if($vcn_id ==''){
   
     $message .='<tr>
    <td width="167" height="25" align="right"  style="background-color:#F0F0F0; font-size:14px;"><strong>Preferred Job Position</strong></td>
    <td width="244" height="25"  style="background-color:#F3F3F3">'.$pref_position.'</td>
    
    <td width="159" height="25" align="right" style="background-color:#F3F3F3"><strong>Preferred Location</strong></td>
      <td width="296" height="25" colspan="3" style="background-color:#F3F3F3">'.$pref_location.'</td>  

   </tr>';
   
    
    
};
   
   
   
   
   
  $message .='<tr>
   <td height="25" colspan="4" align="left" style="background-color:#E2172C; font-size:16px; color:#FFF">Personal Information</td>
  </tr>
 <tr>
   <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Name </strong></td>
   <td height="25" style="background-color:#F3F3F3">'.$aplnt_nme.' </td>
   <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Date of Birth & Age </strong></td>
   <td style="background-color:#F3F3F3">'.$dob.' &nbsp;&nbsp;  '.$age.'</td>
 </tr>

 <tr>
    <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right" ><strong>Address Line  </strong></td>
    <td style="background-color:#F3F3F3">'.$adrs1.' '.$adrs2.'</td>
    <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>City/Location</strong></td>
    <td style="background-color:#F3F3F3">'.$city.'&nbsp;</td>
  </tr>

    <tr>
       <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>State</strong></td>
       <td style="background-color:#F3F3F3"> '.$ste.' </td>
       <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Country</strong></td>
       <td style="background-color:#F3F3F3"> '.$cntry.'&nbsp;</td>
       </tr>

    <tr>
       <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>PIN/ZIP code</strong></td>
       <td style="background-color:#F3F3F3">'.$pin.'</td>
       <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Mobile No. </strong></td>
       <td style="background-color:#F3F3F3"> '.$mob_no.'</td>
    </tr>
    <tr>
      <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right">E-Mail</td>
      <td style="background-color:#F3F3F3">'.$aplnt_eml.'</td>
      <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right">&nbsp;</td>
      <td style="background-color:#F3F3F3"> </td>
    </tr>
     <tr>
   <td height="25" colspan="4" align="left" style="background-color:#E2172C; font-size:16px; color:#FFF">Academic Information</td>
  </tr>
    <tr>
      <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Educational Qualification</strong></td>
      <td style="background-color:#F3F3F3">'.$edu_quali.'</td>
      <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Professional Certifications (If any)</strong></td>
      <td style="background-color:#F3F3F3">'.$prof_certificate.'</td>
    </tr>
    <tr>
      <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Languages Known</strong></td>
      <td height="25" colspan="3" style="background-color:#F3F3F3">'.$langs.'</td>
    </tr>
    <tr>
   <td height="25" colspan="4" align="left" style="background-color:#E2172C; font-size:16px; color:#FFF">Experience Summary(I any)</td>
  </tr>
    <tr>
      <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Years of Experience</strong></td>
      <td style="background-color:#F3F3F3">'.$expr_yrs.'</td>
      <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Present Employer</strong></td>
      <td style="background-color:#F3F3F3">'.$crnt_cmpny.'</td>
    </tr>
    <tr>
      <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Present CTC</strong></td>
      <td style="background-color:#F3F3F3">'.$crnt_ctc.'</td>
      <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Expected CTC</strong></td>
      <td style="background-color:#F3F3F3">'.$expc_ctc.'</td>
    </tr>
    <tr>
      <td height="25" style="background-color:#F0F0F0; font-size:14px" align="right"><strong>Applied On</strong></td>
      <td  colspan="3" style="background-color:#F3F3F3">'.$tdy.'</td>
     
    </tr>

    </table>';
	

   $fnl2=$fldr.$doc_nme;
    
 $mail->AddAttachment($fnl2);  

   $mail->From =  $aplnt_eml;
 $mail->FromName = "$aplnt_nme";
 $mail->addAddress('hr@saienergy.com');

 $mail->Body    = "$message ";

//$mail->Addcc($aplnt_eml); 
if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
   // echo "Message has been sent successfully";
}

  $mail->ClearAllRecipients( ); 

  $mail->Subject = "Acknowledgment for your Application - SPEL";
 $mail->From = "hr@saienergy.com";
 $mail->FromName = "HR SPEL";
 $mail->addAddress($aplnt_eml);
  
  $ack_message =' Dear '.$aplnt_nme.' .Thanks for your Interest In SPEL.Our Team will contact you shortly';

 $mail->Body    = "$ack_message ";
  $mail->send();


if($qry)
{
 echo '1';	
}else{
 echo '0';	
}


 }

?>
<?php
session_start();
error_reporting(0);
if(isset($_POST['btn']))
{
    $email=$_POST['email'];
$to = "marketing@saienergy.com";
$subject = "SPEL Enquiry Details";

    
$photo=$_FILES["photo"]["name"];
    
	
    move_uploaded_file($_FILES["photo"]["tmp_name"],"enquiryupload/".$_FILES["photo"]["name"]);
$message = '<html><body>';
$message .='<div style="border: 12px solid #0a0a0a;
padding: 3px;width:550px;
">';   
$message.=' <a title="SPEL" href="http://saienergy.com/" target="_blank" ><img style="border:none;width: 98%;" src="http://saienergy.com/demo/images/logo.png"></a><br>


'; 
			  $message .= '<table rules="all"  style="border-color:#a0328b;width:100%" border="1" cellpadding="10">';
			$message .= "<tr style='background-color: #d9be2a; color: #0a0a0a;'><td><strong>Name</strong> </td><td style='    background-color: #d9be2a;
    color: #0a0a0a;'>" .$_POST['name'] . "</td></tr>";
			$message .= "<tr><td><strong>Designation:</strong> </td><td>" .$_POST['designation'] . "</td></tr>";

			$message .= "<tr><td><strong>Company:</strong> </td><td>" .$_POST['company'] . "</td></tr>";

			$message .= "<tr><td><strong>Company Address:</strong> </td><td>" .$_POST['company_addres'] . "</td></tr>";
	$message .= "<tr><td><strong>Location:</strong> </td><td>" .$_POST['location'] . "</td></tr>";
		$message .= "<tr><td><strong>Phone:</strong> </td><td>" .$_POST['phone'] . "</td></tr>";
			$message .= "<tr><td><strong>Mobile:</strong> </td><td>" .$_POST['mobile'] . "</td></tr>";
				$message .= "<tr><td><strong>Email:</strong> </td><td>" .$_POST['email'] . "</td></tr>";
				$message .= "<tr><td><strong>Enquiry Type:</strong> </td><td>" .$_POST['enq_for'] . "</td></tr>";
				$message .= "<tr><td><strong>Description:</strong> </td><td>" .$_POST['description'] . "</td></tr>";
		
					$message .= "<tr><td><strong>Attachment:</strong> </td><td>					<a href='http://agiledesignstudio.com/demo/enquiryupload/$photo'>".$photo."</a></td></tr>";
			$message .= "</table>";
			$message .= "</body></html>";
		             


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
//$headers .= 'From: <info@saienergy.com>' . "\r\n";
//$headers .= 'Cc: info@saienergy.com' . "\r\n";$headers .= 'From: <$email>' . "\r\n";

mail($to,$subject,$message,$headers);
   echo "    <script>alert('Thank You Message Send Sucessfully!');</script>
    					<script>window.location='index.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="zxx">
  <head>

    <?php include ("include/top-header.php");?>

</head>

<body>

	<?php include ("include/top-headerlogo.php");?>
 
	<div class="section banner-page about">
    <div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">Enquiry</div>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Enquiry</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
    
    <div class="section feature overlap">
		<div class="container">

			<div class="row">
			    <div class="col-md-12"><p class="text-justify">We are in a position to serve more Clients with our technical expertise and dedicated resources and we expect your valuable Enquiries to receive through this website for all your Service needs of Power Plants.<br>
Kindly fill in form below with relevant details and submit. We will revert with required information and contact you for further process. 
</p></div>
			
            <div class="col-sm-12">
            <div class="col-sm-5" style="display:none">
                	<img src="images/qm1.PNG" class="img-responsive" alt="Aboutus">
                		<img src="images/qm2.PNG" class="img-responsive" alt="Aboutus">
                		<img src="images/qm3.PNG" class="img-responsive" alt="Aboutus">
                
            </div>    
                
             <div class="col-sm-12" style="margin:0px auto;">
             	
					<form name="form1" method="post" id="enquiry_form"  class="form-horizontal" enctype="multipart/form-data">
                    <input name="omenquiry" type="hidden">    
<div class="row">
    <div class="col-sm-6">
        <div class="form-group row">
                    	<label class="col-md-4">Name *</label>
                        <div class="col-md-8"><input type="text" id="name" name="name" class="rmv-dft-val form-control" required value="" /></div>
                    </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group row">
                    	<label class="col-md-4">Designation</label>
                        <div class="col-md-8"><input type="text" name="designation" id="designation" class="form-control" ></div>
                    </div>
    </div>
    
    <div class="col-sm-6">
        <div class="form-group row">
                    	<label class="col-md-4">Company Name *</label>
                        <div class="col-md-8"><input type="text" name="company" class="form-control" id="company"></div>
                    </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group row">
                    	<label class="col-md-4">Address *</label>
                        <div class="col-md-8"><textarea name="company_addres" id="company_addres" class="form-control" style="resize:none" required></textarea></div>
                    </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group row">
                    	<label class="col-md-4">Plant Location</label>
                        <div class="col-md-8"><input type="text" name="location" class="form-control" id="textfield2"></div>
                    </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group row">
                    	<label class="col-md-4">Phone No </label>
                        <div class="col-md-8"><input type="text" name="phone" class="form-control" id="phone" ></div>
                    </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group row">
                    	<label class="col-md-4">Mobile No *</label>
                        <div class="col-md-8"><input type="text" id="mobile" name="mobile"   class="form-control"   required  onKeyPress="return blockNonNumbers(this,event,2,false);"/></div>
                    </div>
    </div>
    <div class="col-sm-6">
         <div class="form-group row">
                    	<label class="col-md-4">E-Mail Id *</label>
                        <div class="col-md-8"><input type="text" id="email" name="email" class="rmv-dft-val form-control" onKeyPress="return ValidEmailAddress(this.value);"  value=""/></div>
                    </div>
    </div>
    <div class="col-sm-6">
         <div class="form-group row">
                    	<label class="col-md-4">Enquiry Type</label>
                        <div class="col-md-8"><input type="radio" name="enq_for" value="Budgetary" checked="checked">
      Budgetary
      <input type="radio" name="enq_for"  value="Firm">
      Firm</div>
                    </div>
    </div>
    <div class="col-sm-6">
         <div class="form-group row">
                    	<label class="col-md-4">Enquiry Description</label>
                        <div class="col-md-8"> <textarea name="description" class="form-control" id="description" cols="45" rows="5"></textarea></div>
                    </div>
    </div>
    <div class="col-sm-6">
          <div class="form-group row" id="docs" style="display:">
                    	<label class="col-md-4">Upload File</label>
                        <div class="col-md-8"><input type="file" class="form-control" name="attachment" id="attachment" accept="application/pdf,application/msword,
  application/vnd.openxmlformats-officedocument.wordprocessingml.document">
    &nbsp;(Doc,Docx,PDF Only)</div>
                    </div>
                    <div class="form-group row" style="display:none">
                    	<label class="col-md-4">Captcha</label>
                        <div class="col-md-8"><div class='captcha'></div><img src='refresh.png' style='width:25px;height:25px' class="refresh"/><input type="hidden" id="org"></div>
                    </div>
                    <div class="form-group row" style="display:none">
                    	<label class="col-md-4"></label>
                        <div class="col-md-8"><input type="text" class="form-control" id="ans"></div>
                    </div>
        
    </div>
    <div class="col-sm-6">
        <div class="form-group row">
                    	<label class="col-md-4"></label>
                        <div class="col-md-8">												 <button type="submit" name="submit" id="om_enquiry" class="btn btn-cta"                                     style="pointer-events: all; cursor: pointer;">Send Enquiry</button>						<!--						<input value="Send" type="submit" id="om_enquiry" name="btn" class="btn btn-success">												-->																		</div>
                    </div>
    </div>
</div>
                    
                    
                    
                    
                    
                    
                    
                   
                  
                   
                  
                   

                  
                    
                
                </form>
                
                
			
				
				
                 
             </div>   
            </div>
            	
								
			</div>

			
		</div>
	</div>
 

	<?php include ("include/top-footertop.php");?>
    
    <?php include ("include/top-footer.php");?>
	

	

		
</body>
</html>


 <script src="js/site.js"></script>
 
 <script>
 
 $('#attachment').on( 'change', function() {
   myfile= $( this ).val();
   var ext = myfile.split('.').pop();
   if(ext=="pdf" || ext=="docx" || ext=="doc"){
      
   } else{
         alert('Kindly choose valild Attachment Format');
		  $('#attachment').val('');
		  return false;
   }
});
 
 
 </script>
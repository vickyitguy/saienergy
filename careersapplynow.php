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
					<div class="title-page">Apply Job</div>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Career</li>
					</ol>
				</div>
			</div>
		</div>
	</div>


	<div class="section feature contact overlap">
		<div class="container">
			<div class="row">
			
            	<div class="col-md-12"><p style="color:red"><b></b>Fill in the Application Form below with required details and SUBMIT by clicking the SUBMIT button at the end.
            	<br>
<span style="color:red">Kindly note that you have to fill the details mandatorily against the fields marked with *</span></b>
</p></div>			
                
                <div class="col-md-7">
                	<form action="" method="post" id="careerform" class="form-horizontal">
                    
                    
<?php
$job = isset($_GET['job']) ? $_GET['job'] : '';
 if($job!='')
 { 
 $tsql="select *  from vacancy_list  where vcn_id='$job'  ";
 $tqry=mysqli_query($idb,$tsql);
 $row=mysqli_fetch_array($tqry);
 $jpos_id=$row['jpos_id']; 
 $jd_id = $row['jd_id']; 
$jrw = $obj->get_jobdescr($jd_id);
 }else{
	 
	 $jpos_id ='';
 }

?>       

<input name="career_post" type="hidden">    
<input name="job" value="<?php echo $job ?>" type="hidden">

<input name="jpos_id" value="<?php echo $jpos_id ?>" type="hidden">
         
                        <h5>Section I: Career Type</h5>
                        <?php
						 if($job!='')
						 { 
						?>
                        <div class="row form-group">
                            <div class="col-md-4">Job Title</div>
                            <div class="col-md-8"><h5><?php echo $obj->get_job_position($jpos_id) ?></h5></div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">Job Code</div>
                            <div class="col-md-8"><h5><?php echo  $jrw['jd_code']; ?></h5></div>
                        </div>
                        <?php
						 } else if ($job=='') {
						?>
                         <div class="row form-group">
                            <div class="col-md-4">
                            	Position Applied for *
                            </div>
                            <div class="col-md-8">
                            	<input type="text" class="form-control"   required name="pref_position" id="pref_position" />
                            </div>
                        </div>
                       <div class="row form-group">
                            <div class="col-md-4">
                            	Preferred Location *
                            </div>
                            <div class="col-md-8">
                            	<input type="text" class="form-control"   required name="pref_location" id="pref_location" />
                            </div>
                        </div>
                        
                        <?php
						
						}
						?>
						
						
                        <div class="row form-group">
                            <div class="col-md-4">Experience Status</div>
                              <div class="col-md-4"> <input type="radio" value="0" checked name="experience_status"   />Fresher </div>
                              <div class="col-md-4"> <input type="radio" value="1" name="experience_status"  />Experienced </div>

                        </div>
                        
                        
                        
                        <h5>Section II: Personal Information</h5>
                        
                        <div class="row form-group">
                            <div class="col-md-4">
                            	Name *
                            </div>
                            <div class="col-md-8">
                            	<input type="text" class="form-control" placeholder="Your name.." required name="name" id="name" />
                            </div>
                        </div>
                        
                        <div class="row form-group">
                            <div class="col-md-4">
                            	Date of Birth  *
                            </div>
                            <div class="col-md-4">
                            	<input type="text" class="form-control" placeholder="Your Date of Birth" name="dob" id="dob" required readonly />
                            </div>
                            
                           
                              <div class="col-md-1">Age  </div>
                             <div class="col-md-3">
                            	<input type="text" class="form-control" readonly name="age" id="age"  />
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            	Address Line 1
                            </div>
                            <div class="col-md-8">
                            	<input type="text" class="form-control" placeholder="Your Address Line 1.." name="address1" maxlength="50"  id="address1" />
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            	Address Line 2
                            </div>
                            <div class="col-md-8">
                            	<input type="text" class="form-control" placeholder="Your Address Line 2.." name="address2"   maxlength="50"id="address2" />
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            	City/Location *
                            </div>
                            <div class="col-md-8">
                            	<input type="text" class="form-control" placeholder="Your City/Location.." name="city" id="city" required/>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            	State
                            </div>
                            <div class="col-md-8">
                            	<input type="text" class="form-control" placeholder="Your State.." name="state" id="state" />
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            	Country
                            </div>
                            <div class="col-md-8">
                            	<input type="text" class="form-control" placeholder="Your Country.." name="country" id="country" />
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            	PIN/ZIP code
                            </div>
                            <div class="col-md-8">
                            	<input type="text" class="form-control" placeholder="Your PIN/ZIP code.." name="pin" id="pin" />
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            	Mobile No *
                            </div>
                            <div class="col-md-8">
                            	<input type="text" class="form-control"  onKeyPress="return blockNonNumbers(this,event,2,false);" placeholder="Your Mobile No.." name="mobile" id="mobile" required/>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            	Email ID *
                            </div>
                            <div class="col-md-8">
                            	<input type="email" class="form-control" placeholder="Your Email ID.." name="email" id="email" required/>
                            </div>
                        </div>
                        <h5>Section III: Academic Information:</h5>
                        <div class="row form-group">
                            <div class="col-md-4">
                            	Educational Qualification
                            </div>
                            <div class="col-md-8">
                            	<select name="edu_qualification" id="qualification" class="form-control" tabindex="1" autofocus>
                                  <option value="">---------Select----------</option>
                             <?php
                            $q1=mysqli_query($idb,"select * from edu_qualifications where status ='0' order by  name ASC");
                            while($f1=mysqli_fetch_array($q1))
                            {
                            ?>      
                                    <option value="<?php echo $f1['eql_id']; ?>"><?php echo $f1['name']; ?></option>
                             <?php
                             }
                            ?>        
                              </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            	Professional Certifications (If any)
                            </div>
                            <div class="col-md-8">
                            <select name="prof_certification" id="certification" class="form-control" tabindex="1" autofocus>
                                  <option value="">---------Select----------</option>
                             <?php
                            $q1=mysqli_query($idb,"select * from prof_certifications where status ='0' order by  name ASC");
                            while($f1=mysqli_fetch_array($q1))
                            {
                            ?>      
                                    <option value="<?php echo $f1['cert_id']; ?>"><?php echo $f1['name']; ?></option>
                             <?php
                             }
                            ?>        
                              </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            	Languages Known
                            </div>
                            <div class="col-md-8">
                            	<input type="text" class="form-control" placeholder="Your Languages Known.." name="languages" id="languages" />
                            </div>
                        </div>
                        <div id="demo" class="currentemployer" style="display:none">
                        <h5>Section IV: Experience Summary </h5>
                        <div class="row form-group">
                            <div class="col-md-4">
                            	Years of Experience
                            </div>
                            <div class="col-md-8">
                            	<input type="radio" name="experience_years" checked value="0-2" /> 0-2 Yrs <input type="radio" name="experience_years" value="3-5" /> 3-5 Yrs <input type="radio" name="experience_years" value="6-10" /> 6-10 Yrs <input type="radio" name="experience_years" value="10+" /> Above 10 Yrs
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            	Present Employer
                            </div>
                            <div class="col-md-8">
                            	<input type="text" class="form-control" placeholder="Your Present Employer.." name="presentemployer" id="presentemployer" />
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            	Present CTC
                            </div>
                            <div class="col-md-8">
                            	<input type="text" class="form-control" placeholder="Your Present CTC.." name="ctcnow" id="ctcnow" />
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            	Expected CTC
                            </div>
                            <div class="col-md-8">
                            	<input type="text" class="form-control" placeholder="Your Expected CTC.." name="ctcexpected" id="ctcexpected" />
                            </div>
                        </div>
                        </div>
                        <h5>Section V: Upload Resume (Please upload only DOC, PDF and JPEG format files)</h5>
                        <div class="row form-group">
                            <div class="col-md-4">
                            	Resume Upload *
                            </div>
                            <div class="col-md-8">
                            	<input type="file" class="form-control" name="resume" id="resume" required accept="application/pdf,application/msword,
  application/vnd.openxmlformats-officedocument.wordprocessingml.document,image/*">  
                            </div>
                        </div>
                        <div class="row form-group" style="display:none">
                            <div class="col-md-4">
                            	CAPTCHA
                            </div>
                            <div class="col-md-8">
                            	
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            	
                            </div>
                            <div class="col-md-8"> 
                            	<button  type="button" id="carreerpost" class="btn btn-cta">Send</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
                
                <div class="col-md-5">
                	<img src="images/career-1.jpg" class="img-responsive" alt="Img">
                </div>
                
		</div>
	</div>

</div>
		
	
	 

	<?php include ("include/top-footertop.php");?>
    
    <?php include ("include/top-footer.php");?>
	

	

		
</body>
</html>

<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-ui.js"></script>
 <script src="js/site.js"></script>

<script>
$( function() {
	

  var today = new Date();
	
	 $("#dob").datepicker({
		 changeMonth: true, 
    changeYear: true, 
    dateFormat: "dd/mm/yy",
    yearRange: "-70:-18",
    onSelect: function() {
		
		var sel_val = $("#dob").val();
        var dob = new Date(sel_val); 
        var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
		var age = Number(age);
		 $('#age').val(age);
		/*if($.isNumeric(age))
		{
        $('#age').val(age);
		}*/
    }
});
	
 $('input[name=experience_status]').change(function() {
     if (this.value >0) {
       $('.currentemployer').show();
    }
    else   {
         $('.currentemployer').hide();
		 
		
		 
		  $(".currentemployer").find('input:text, textarea,select').val('');
		  //  $('input[name=experience_status]').val('0-2');
    }
});
    
	
 $('#resume').on( 'change', function() {
   myfile= $( this ).val();
   var ext = myfile.split('.').pop();
   
   if(ext=="pdf" || ext=="docx" || ext=="doc"|| ext=="jpg"|| ext=="jpeg"){
      
   } else{
         alert('Kindly choose valild Attachment Format');
		  $('#resume').val('');
		  return false;
   }
});	
	
	
	
 });
  </script>

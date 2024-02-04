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
					<div class="title-page">Other Services</div>
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
            	<div class="col-md-12"><p class="text-justify">We are in a position to serve more Clients with our technical expertise and dedicated resources and we expect your valuable Enquiries to receive through this website for all kinds of your Service needs of Power Plants.<br>
Kindly fill this form below with relevant details and submit. We will revert with required information and contact you for further process. 
</p></div>


<div class="col-sm-12">
    <div class="colsm-5">
        
        	<img src="images/oep.PNG" class="img-responsive" alt="Aboutus">
    </div>
    <div class="col-sm-7">
        
        			<form name="form1" method="post" id="enquiry_form"  class="form-horizontal" enctype="multipart/form-data">
                    <input name="otherenquiry" type="hidden">    

                    
                    <div class="form-group row">
                    	<label class="col-md-4">Name *</label>
                        <div class="col-md-8"><input type="text" id="name" name="name" class="rmv-dft-val form-control" value="" /></div>
                    </div>
                    <div class="form-group row">
                    	<label class="col-md-4">Designation</label>
                        <div class="col-md-8"><input type="text" class="form-control" name="designation" id="textfield"></div>
                    </div>
                    <div class="form-group row">
                    	<label class="col-md-4">Company Name *</label>
                        <div class="col-md-8"><input type="text" class="form-control" name="company" id="company"></div>
                    </div>
                    <div class="form-group row">
                    	<label class="col-md-4">Address *</label>
                        <div class="col-md-8"><textarea class="form-control" name="company_addres" id="company_addres" ></textarea></div>
                    </div>
                    <div class="form-group row">
                    	<label class="col-md-4">Plant Location</label>
                        <div class="col-md-8"><input type="text" class="form-control" name="location" id="textfield2"></div>
                    </div>
                    <div class="form-group row">
                    	<label class="col-md-4">Phone No. *</label>
                        <div class="col-md-8"><input type="text" class="form-control" name="phone" id="textfield3"></div>
                    </div>
                    <div class="form-group row">
                    	<label class="col-md-4">Mobile No. *</label>
                        <div class="col-md-8"><input type="text" id="mobile" name="mobile"  class="rmv-dft-val form-control" maxlength="10" value=""   onKeyPress="return blockNonNumbers(this,event,2,false);"/></div>
                    </div>
                    <div class="form-group row">
                    	<label class="col-md-4">E-Mail *</label>
                        <div class="col-md-8"><input type="text" id="email" name="email" class="rmv-dft-val form-control" onKeyPress="return ValidEmailAddress(this.value);"  value=""/></div>
                    </div>
                    <div class="form-group row">
                    	<label class="col-md-4">Service Type *</label>
                        <div class="col-md-8">
                        	<select name="srcat_id" id="srcat_id" class="form-control" tabindex="3">
      <option value="">---------Select----------</option>
      
<?php
$q1=mysqli_query($idb,"select * from service_categories where status='0' and srcat_id!='1'  order by  name ASC");
while($f1=mysqli_fetch_array($q1))
{
	
$id = $f1['srcat_id'];

$sb_cnt = $obj->get_service_sbcount($id);
 
	
?>      
       <option   value="<?php echo $f1['srcat_id']; ?>"><?php echo $f1['name']; ?></option>
 <?php

}
?>        
        
      
      </select>
      </div>
                    </div>
                    <div class="form-group row">
                    	<label class="col-md-4">Enquiry Description *</label>
                        <div class="col-md-8"><textarea name="description" class="form-control" id="description" cols="45" rows="5"></textarea></div>
                    </div>
                    <div class="form-group row">
                    	<label class="col-md-4">Enquiry Type *</label>
                        <div class="col-md-8"><input type="radio" name="enq_type" value="Budgetary" checked="checked"> Budgetary <input type="radio" name="enq_type"  value="Firm"> Firm</div>
                    </div>
                    <div class="form-group row" id="docs" style="display:">
                    	<label class="col-md-4">Upload File</label>
                        <div class="col-md-8"><input type="file" class="form-control" name="attachment" id="attachment">
    &nbsp;(Doc,Docx,PDF Only)</div>
                    </div>
                    <div class="form-group row" style="display:none">
                    	<label class="col-md-4">Captcha</label>
                        <div class="col-md-8"><div class='captcha'></div><img src='refresh.png' style='width:25px;height:25px' class="refresh"/><input type="hidden" id="org"></div>
                    </div>
                    <div class="form-group row" style="display:none">
                    	<label class="col-md-4"></label>
                        <div class="col-md-8"><input type="text" id="ans" class="form-control"></div>
                    </div>
                    <div class="form-group row">
                    	<label class="col-md-4"></label>
                        <div class="col-md-8"><input value="Send" type="button" id="otr_enquiry" name="POST" class="btn btn-success"></div>
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



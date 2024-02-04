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
					<div class="title-page">Job Location</div>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Career</li>
					</ol>
				</div>
			</div>
		</div>
	</div>


	<div class="section feature overlap">
		<div class="container">
			<div class="row">

				<div class="col-md-12"><p style="color:red"><b>Please go through the details of your preferred Job Vacancy and click APPLY against the same to send your Job Application for the Job Vacancy you preferred.  </b><p></div>
                
                <div class="col-md-12">
                
                
                <?php
$loc = $_GET['loc'];
 $tsql="select *  from vacancy_list  where loc_id='$loc'  and status='0' ";
 $tqry=mysqli_query($idb,$tsql) ;
 if(mysqli_num_rows($tqry)>0)
 {
 $sno=1;
 while($row=mysqli_fetch_array($tqry))
 {
  $jpos_id=$row['jpos_id'];
  $loc_id=$row['loc_id'];
   $eql_id=$row['eql_id'];
   $vcn_id=$row['vcn_id'];
   
   
$jd_id = $row['jd_id']; 
$jrw = $obj->get_jobdescr($jd_id);
 

   

?>
                	<div class="ba-career">
                        <div class="row">
                            <div class="col-md-12"><div class="job-box"><h4><?php echo $obj->get_job_position($jpos_id) ?></h4></div></div>
                            <div class="col-md-3">
                                <h6>Job Location</h6>
                                <h5><?php echo $obj->get_location($loc_id) ?></h5>
                                <h6>Years of Experience</h6>
                                <h5><?php echo $row['experience']; ?></h5>
                            </div>
                            <div class="col-md-2">
                                <h6>Job Code</h6>
                                <h5><?php  echo $jrw['jd_code']; ?></h5>
                                <h6>Qualification</h6>
                                <h5><?php echo  $obj->get_edu_qualification($eql_id)  ?></h5>
                            </div>
                            <div class="col-md-4">
                            	<h6>No. of Job Vacancy</h6>
                                <h5><?php echo $row['vcn_cnt']; ?></h5>
                                <h6>Job Description</h6>
                                  <p class="text-justify"><?php echo $row['jb_descr']; ?></p>
                            </div>
                             <div class="col-md-2">
                            
                            </div>
                            
                            <div class="col-md-2 text-center">
                                <a class="btn btn-danger" href="careersapplynow.php?job=<?php echo $vcn_id ?>">Apply Now</a>
                            </div>
                        </div>
                	</div>
                    
<?php
 }
 }
?>                        
                  
                    
                    
                    
                </div>
								
			</div>
		</div>
	</div>

		
	
	 

	<?php include ("include/top-footertop.php");?>
    
    <?php include ("include/top-footer.php");?>
	

	

		
</body>
</html>
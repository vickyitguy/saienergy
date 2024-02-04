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
					<div class="title-page">Career</div>
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
				<div class="col-md-12"><p>SPEL is an Agile Organisation implementing strong HR Policies for the benefits of both Employees and the Growth of the Company. SPEL is implementing the HR Policies on Recruitment of Rightly Qualified Resources for the Right Job, Retention of High Performing and Valuable Resources, Training, Development and continual Assessments to promote individuals’ career growth within the Organisation and to increase the overall value of the Organisation, maintaining Safe, Healthy and Stimulating Working Environment, creating the values of great Culture, Integrity, Trust and Inclusiveness.</p></div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div>
				    	<img src="images/career-1.jpg" class="img-responsive" alt="Img">
                    </div>
				</div>
                <div class="col-md-8 col-sm-12 col-xs-12">
					<div>
                    <p>SPEL is an Equal Opportunity Employer gives a Professional Environment to the Employees to approach freely within the Organisation and even the Top Level Management by providing inspiration and encouragement for a high level of employee morale through Recognition, Effective Communication and Constant Feedback.<br>
These services are achieved through a teamwork philosophy that is inspired through effective organizational skills, proactive efforts, and a balance between professionalism and the ability to have fun! <br>
Job Seekers please click in the <b>LOCATIONS</b> (wherever you are interested to work) to know about the current vacancies. 
</p>
                    
                        </div>
                        
					</div>
                    
                    
								
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
					<div>
                  
                        <h4>Current Vacancy - Job Location</h4>
                        <div class="row">
                        	<?php
  $tsql="select *  from vacancy_list  where status='0'  group by loc_id ";
 $tqry=mysqli_query($idb,$tsql)or die(mysqli_error());
 if(mysqli_num_rows($tqry)>0)
 {
 $sno=1;
 while($row=mysqli_fetch_array($tqry))
 {
   $jpos_id=$row['jpos_id'];
   $loc_id=$row['loc_id'];
   $eql_id=$row['eql_id'];
 
?>
                        
                        
                        	<div class="col-md-3" style="    float: left;">
                            	<h5><a href="careerslocation.php?loc=<?php echo $loc_id  ?>" class="btn btn-primary btn-sm text-right"><?php echo $obj->get_location($loc_id) ?></a></h5>
                            </div>
                            
<?php
 }
 }
?>    
                        </div>
                        
					</div>
                    
                    
								
			</div>
		</div>
	</div>

</div>
		
	
	 

	<?php include ("include/top-footertop.php");?>
    
    <?php include ("include/top-footer.php");?>
	

	

		
</body>
</html>
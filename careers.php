<!DOCTYPE html>
<html lang="zxx">
  <head>

    <?php include ("include/top-header.php");?>
<style>
    .btn-primary {
    background-color: #ed1c24;
    width: 100%;
}
</style>
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
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div>
				    	<img src="images/Business.png" class="img-responsive" alt="Img" style="height: 389px;
    margin-top: 35px;
    width: 370px;">
                      <!--   <p style="margin:3%" align="center"><h4>Job seekers, please submit your Application along with your Resume for any jobs mentioning your preferred location</h4></p>-->
                        
                        
                      <!--<p  align="center"><a href="careersapplynow.php?enquiry=direct" class="btn btn-primary btn-sm text-center">General Vacancy – Any Location </a> </p>-->
                    </div>
				</div>
                <div class="col-md-8 col-sm-12 col-xs-12">
					<div>
					   
<!--					    <p>SPEL is an Agile Organisation implementing strong HR Policies for the benefits of both Employees and the Growth of the Company. SPEL is implementing the HR Policies on Recruitment of Rightly Qualified Resources for the Right Job, Retention of High Performing and Valuable Resources, Training, Development and continual Assessments to promote individuals’ career growth within the Organisation and to increase the overall value of the Organisation, maintaining Safe, Healthy and Stimulating Working Environment, creating the values of great Culture, Integrity, Trust and Inclusiveness.</p>-->
                  <h3><span><img src="images/icon-8.png" width="30" alt="icon"></span> HR Policy <span class="text-right"></h3>
                    <h4>Goals of our HR policies are;</h4>
						<ul class="list-style">
                        	<li>	Acquiring right human resource</li>
                        	<li>Providing safe working environment and professional work culture</li>
                        	<li>	Continuous assessment of employee skill</li>
                        	<li>Providing suitable training to improve their skills</li>
                        	<li>Retention of employees by providing career growth and recognition</li>
                        	<li>	Complaince of all statutory requirements</li>
                        
                        	</ul>
    <p style="margin:3%" align="center">
			        <div class="row">
			        <div class="col-sm-12">
			            <h4>For Any Job – Any Location </h4>
			        <p>Job Seekers, please submit your Application along with your Resume for any jobs on any location mentioning your preferred location by clicking the link below:</p> 
			         <a href="careersapplynow.php?enquiry=direct" class="btn btn-primary btn-sm text-center" style="width:50%">General Vacancy – Any Location </a>
			    </div>
			   
			   
			   </div>
			    </p>
                    
                        </div>
                        
					</div>
                    
                    
								
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12">
			    
                        
                <h4>
Current Vacancy – Location wise
</h4>         
                  
 <p>Job Seekers, please click the Locations below to know about the Current Vacancies:</p>
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
                        
                        
                        	<div class="col-md-4" style="    float: left;">
                            	<h5><a href="careerslocation.php?loc=<?php echo $loc_id  ?>" class="btn btn-primary btn-sm text-left"><?php echo $obj->get_location($loc_id) ?></a></h5>
                            </div>
                            
<?php
 }
 }
?>    
                        </div>
                        
					<div style="display:none">
                  
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
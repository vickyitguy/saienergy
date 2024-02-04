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
					<div class="title-page">Service Capabilities</div>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Performances</li>
					</ol>
				</div>
			</div>
		</div>
	</div>


	<div class="section feature overlap">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-6 col-md-9">
                	<p class="text-justify">We are committed to deliver our expertise with our service capabilities to the clients and not the least the capabilities are as listed below:</p>
                    <ul class="bull">
                    	<li>Experienced managers for our O & M services</li>
                        <li>Experienced Field operators and technicians</li>
                        <li>Performance test Engineers with vast experience</li>
                        <li>Required instruments and tools for carrying out Performance and Energy studies</li>
                        <li>Specialized experts for Operation of Power Plant, WTP, CHP and AHP and field operation</li>
                        <li>Commissioning experts with vast experience on all types of boilers and TGs</li>
                        <li>Authorized boiler operators with certificates </li>
                        <li>Electrical and Instrumentation Engineers and technicians with authorized certificates like "C" license</li>
                        <li>Technical experts to study and advice clients for improvements.</li>
                        <li>Well experienced Management  with qualification and expertise and to help all clients as well their own engineers and technicians.</li>
                    </ul>
                    
                           
                     <h4>CATEGORY WISE SERVICE CAPABILITIES</h4>
                     <p>We have shown below our capabilities established as our Performances on each Service Category.</p>
                     
<?php
$cat_id  = ($_GET['srv']) ? $_GET['srv'] : 0;

if($cat_id>0)
{
	 $e_qry = "and srcat_id ='$cat_id' ";
}else{
	  $tq1=mysqli_query($idb,"select srcat_id as cat_id  from service_capabilities where status ='1'   order by scp_id ASC");
	  $tr1=mysqli_fetch_array($tq1);
 	  $cat_id = $tr1['cat_id'];
	  
	 // $e_qry = "and srcat_id ='$cat_id' ";
	   $e_qry = "  ";

}
 
?>                      
                     
                     
                 
                     
                    <?php
  
 $tsql="select *  from service_capabilities where status ='1'  $e_qry    ";
 $tqry=mysqli_query($idb,$tsql)or die(mysqli_error());
 if(mysqli_num_rows($tqry)>0)
 {
 $sno=1;
 while($row=mysqli_fetch_array($tqry))
 {
 $scp_id=$row['scp_id'];
   $cat_id=$row['srcat_id'];
   $sts=$row['status'];
   $srw =  $obj->get_service_category($cat_id);
  ?>
           
           
          <h4>Service Category : <span class="text-head-1"><?php echo $srw['name'];; ?></span></h4>  
                     
                     <table class="table table-bordered table-condensed" width="100%">
                     <tbody><tr class="t-head-1">
                        <th width="6%">Sl.No.</th>
                        <th width="24%">Service Parameters</th>
                        <th width="70%">Service Capabilities</th>
                      </tr>
                      <tr>
                        <td><strong>1</strong></td>
                        <td><strong>No. of Projects</strong></td>
                        <td><?php echo $row['pjt_cnt']; ?></td>
                      </tr>
                      <tr>
                        <td><strong>2</strong></td>
                        <td><strong>Plant Capacity</strong></td>
                        <td><?php echo $row['plant_capacity']; ?></td>
                      </tr>
                      <tr>
                        <td><strong>3</strong></td>
                        <td><strong>Boiler Capacity</strong></td>
                        <td><?php echo $row['boil_capacity']; ?></td>
                      </tr>
                      <tr>
                        <td><strong>4</strong></td>
                        <td><strong>Boiler Type</strong></td>
                        <td><?php echo $row['boil_typ']; ?></td>
                      </tr>
                      <tr>
                        <td><strong>5</strong></td>
                        <td><strong>Boiler Make</strong></td>
                        <td><?php echo $row['boil_mnf']; ?></td>
                      </tr>
                      <tr>
                        <td><strong>6</strong></td>
                        <td><strong>Turbine Make</strong></td>
                        <td><?php echo $row['turbine_mnf']; ?></td>
                      </tr>
                    </tbody></table>

   <?php
$sno=$sno+1;
}
  }
 ?>  
						
				</div>
                
                <div class="col-sm-6 col-md-3">
					<?php ///include ("include/top-side-servicescap.php");?>
                   <?php //include ("include/top-side-serviceslist.php");?>
 					<?php include ("include/top-side.php");?>
				</div>
				
								
			</div>
		</div>
	</div>


		
	
	 

	<?php include ("include/top-footertop.php");?>
    
    <?php include ("include/top-footer.php");?>
	

	

		
</body>
</html>
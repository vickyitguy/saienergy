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

					<div class="title-page">Capabilities & Experience</div>

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
                <h4>Capabilities</h4>

                <ul>
                  <li>Pre – Commissioning & Commissioning of Power Plant Equipments</li>
                  <li>Operation and Maintenance of Plant BTG & BOP’s of all type, size and capacity</li>
                  <li>Performance Test and Energy Audit</li>
                  <li>Equipment Start-Up and Troubleshooting Services</li>
                </ul>

                <h4>Experience</h4>

<?php



$tq1a=mysqli_query($idb,"select group_concat(DISTINCT srcat_id) as cat_ids from  experience_list  where status ='1' ");



 $tf1a=mysqli_fetch_array($tq1a);

  $cat_ids = $tf1a['cat_ids'];

?>                 

                

  

  <?php



 //$tsql="select *  from experience_list  where status ='1' $e_qry     ";

  // ";

   $tsql="select *  from service_categories  where srcat_id IN ($cat_ids)   ";







 $tqry=mysqli_query($idb,$tsql)or die(mysqli_error());

 if(mysqli_num_rows($tqry)>0)

 {

 $sno=1;

 while($irow=mysqli_fetch_array($tqry))

 {

  $cat_id=$irow['srcat_id'];

      $sts=$irow['status'];

$srw =  $obj->get_service_category($cat_id); 

?>    

  

  

                <h4>Service Category: <span class="text-head-1"><?php echo $srw['name']; ?></span></h4>

					<table border="0" class="table table-bordered table-condensed" width="100%">

						<tbody><tr class="t-head-1">

                            <td width="30%" style="text-align:center">Customer Name </td>

                            <td width="10%" style="text-align:center">Plant Capacity</td>

                            <!--<td width="11%" style="text-align:center">Plant Type</td>

                            <td width="8%" style="text-align:center">Boiler Make</td>

                            <td width="8%" style="text-align:center">Boiler Type</td>-->

                            <td width="10%" style="text-align:center">Boiler Capacity</td>

                            <!--<td width="6%" style="text-align:center">Fuel</td>

                            <td width="13%" style="text-align:center">O&amp;M Scope</td>-->

                          </tr>

<?php

  $isql="select *  from experience_list  where srcat_id IN ($cat_id)  and status ='1'   ";

$iqry=mysqli_query($idb,$isql);

 while($row=mysqli_fetch_array($iqry))

 {

  $cat_id=$row['srcat_id'];

      $sts=$row['status'];

$srw =  $obj->get_service_category($cat_id); 

                            

?>                            

                          

                          <tr>

                            <td align="left"><?php echo $row['cmr_nme']; ?> <?php echo $row['cmr_loc']; ?> </td>

									 <td><?php echo $row['plant_capacity']; ?></td>

			                      <!-- <td><?php echo $row['plant_typ']; ?></td>

                                    <td><?php echo $row['boil_mnf']; ?></td>

                                    <td><?php echo $row['boil_typ']; ?></td>-->

                                    <td><?php echo $row['boil_capacity']; ?></td>

									 <!--<td><?php echo $row['fuel']; ?></td>

									 <td><?php echo $row['om_scope']; ?></td>-->

                          </tr>

                           <?php

} 

 ?>

                         

                        

                        </tbody>

                          </table>

 <?php

$sno=$sno+1;

}

} 

 ?>   

				</div>

                

                <div class="col-sm-6 col-md-3">

					<?php //include ("include/top-side-experiencelist.php");?>

                   <?php //include ("include/top-side-serviceslist.php");?>

 					 <?php //include ("include/top-side.php");?>

				</div>

				

								

			</div>

		</div>

	</div>





		

	

	 



	<?php include ("include/top-footertop.php");?>

    

    <?php include ("include/top-footer.php");?>

	



	



		

</body>

</html>
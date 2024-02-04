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

					<div class="title-page">List of Current Projects</div>

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

                <p class="text-justify">
                    
                    
                    We have acquired and completed many Projects in different Service Categories successfully with our expertise in the field and with the at-most satisfaction of our Customers. We are continuing our services in the sector of Power Plant Operation & Maintenance successfully for the last seven years and established as one of the leading service providers in the industry.<br>
We are currently having more Projects on board for each one of our area of Services with various Clients. 

                </p>

                <!--<h4>Service Category wise List of Current Projects</h4>-->

                <!--<p>We have given below the List of Current Projects for each one of our Service Category.</p>-->

                



<?php

$cat_id  = ($_GET['srv']) ? $_GET['srv'] : 0;



if($cat_id>0)

{

	 $e_qry = "and srcat_id ='$cat_id' ";

}else{

	  $tq1=mysqli_query($idb,"select srcat_id as cat_id  from current_projects  where status ='1'   order by pjt_id ASC");

	  $tr1=mysqli_fetch_array($tq1);

 	  $cat_id = $tr1['cat_id'];

	  

	  $e_qry = "and srcat_id ='$cat_id' ";



}

$srw =  $obj->get_service_category($cat_id); 

?>                

                

                

                <h4>Service Category: <span class="text-head-1"><?php echo  $srw['name']; ?></span></h4>

					<table class="table table-bordered table-condensed" width="100%">

                    	<tbody><tr class="t-head-1">

                            <th width="20%" style="text-align:center">Customer Name </th>

                            <th width="11%" style="text-align:center">Plant Capacity</th>

                            <th width="11%" style="text-align:center">Plant Type</th>

                            <th width="13%" style="text-align:center">Boiler Make</th>

                            <th width="12%" style="text-align:center">Boiler Type</th>

                            <th width="10%" style="text-align:center">Boiler Capacity</th>

                            <th width="8%" style="text-align:center">Fuel</th>

                            <!--<th width="15%" style="text-align:center">O&amp;M Scope</th>-->

                          </tr>

  <?php



$tsql="select *  from current_projects where status ='1'  $e_qry   ";

 $tqry=mysqli_query($idb,$tsql)or die(mysqli_error());

 if(mysqli_num_rows($tqry)>0)

 {

 $sno=1;

 while($row=mysqli_fetch_array($tqry))

 {

 $pjt_id=$row['pjt_id'];

   $cat_id=$row['srcat_id'];

   $sts=$row['status'];

  ?>

                        

                        	<tr>

                            	<td align="left"><?php echo $row['cmr_nme']; ?><?php echo $row['cmr_loc']; ?> </td>

                                <td><?php echo $row['plant_cpy']; ?></td>

                                <td><?php echo $row['plant_typ']; ?> </td>

                                <td><?php echo $row['boil_mnf']; ?></td>

                                <td><?php echo $row['boil_typ']; ?> </td>

                                <td><?php echo $row['boil_cpy']; ?></td>

                                <td><?php echo $row['fuel']; ?> </td>

                                <!--<td><?php echo $row['om_scope']; ?></td>-->

                            </tr>        

                            

<?php



}

}

?>   

                         

                    </tbody></table>

				</div>

                

                <div class="col-sm-6 col-md-3">

                	<!--<div class="widget info-detail">

                        <div class="widget-title">

                            New Projects

                        </div>

                    </div>

                    

                    <div class="tex-box">

                    	<marquee direction="up" scrollamount="2" scrolldelay="15" height="200" onMouseOver="this.stop()" onMouseOut="this.start()">

                        	<p>Welcome to</p>

                        </marquee>

                    </div>-->

                    

                	

					<?php include ("include/top-side.php");?>

				</div>

				

								

			</div>

		</div>

	</div>





		

	

	 



	<?php include ("include/top-footertop.php");?>

    

    <?php include ("include/top-footer.php");?>

	



	



		

</body>

</html>
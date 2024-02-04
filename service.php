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
					<div class="title-page">Services</div>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Services</li>
					</ol>
				</div>
			</div>
		</div>
	</div>


	<div class="section feature overlap">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-6 col-md-9">
                
<?php
$cat_id  = ($_GET['srv']) ? $_GET['srv'] : 0;

if($cat_id>0)
{
	 $e_qry = "and  srcat_id ='$cat_id'   ";
}else{
	  /*$tq1=mysqli_query($idb,"select srcat_id as cat_id  from services_list where status ='1'  order by srv_id ASC");
	  $tr1=mysqli_fetch_array($tq1);
 	  $cat_id = $tr1['cat_id'];
	  */	  $cat_id = '1';
	  $e_qry = "and  srcat_id ='$cat_id'   ";

}

 

   $tsql="select *  from services_list where status ='1'  $e_qry   ";
 $tqry=mysqli_query($idb,$tsql)or die(mysqli_error());
  if(mysqli_num_rows($tqry)>0)
 {
 while($row=mysqli_fetch_array($tqry))
 {
 
   $cat_id=$row['srcat_id'];
    $sb_cat_id=$row['srsbcat_id'];
     
   
   

   if( $sb_cat_id>0)
   {
       $cat_nme =  $obj->get_service_sbcategory($sb_cat_id);  
    
     
   }
   else {
               
     $srw =  $obj->get_service_category($cat_id); 
      $cat_nme = $srw['name'];
   }
   
   
   ?>
                 
                 
<h4><?php echo  $cat_nme; ?></h4>
<?php  echo  $descr=$row['descr'];?>                    
               
                    
<?php
 }
  }
?>                  
				</div>
                
                <div class="col-sm-6 col-md-3">
					
                   <?php include ("include/top-side-serviceslist.php");?>

				</div>
				
								
			</div>
		</div>
	</div>


		
	
	 

	<?php include ("include/top-footertop.php");?>
    
    <?php include ("include/top-footer.php");?>
	

	

		
</body>
</html>
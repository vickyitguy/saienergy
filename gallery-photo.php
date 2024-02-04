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
					<div class="title-page">Photo Gallery</div>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Gallery</li>
					</ol>
				</div>
			</div>
		</div>
	</div>


	<div class="section feature overlap">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-6 col-md-9">
					<div class="section why overlap1">
		<div class="container">
        
        	<h2 class="section-heading">
						Event List
					</h2>
                    
			<div class="row grid-services">
            
              <?php

 
  $tsql="select *  from events_list  where status!='-1' order by evn_id DESC  ";
 $tqry=mysqli_query($idb,$tsql)or die(mysqli_error());
 if(mysqli_num_rows($tqry)>0)
 {
 $sno=1;
 while($row=mysqli_fetch_array($tqry))
 {
     $evn_id=$row['evn_id'];
   $cat_id=$row['ecat_id']; 
	   
 
?>
            
				<div class="col-sm-6 col-md-4 eco manufacturing gas">
                
					<div class="box-image-4">
						<a href="event-details.php?evn=<?php echo $row['evn_id']; ?>" title="Industrial Complex">
							<div class="media">
								<img src="intra/assets/images/events/<?php echo $row['title_image']; ?>" alt="" class="img-responsive" style="width:100%;height:300px;">
							</div>
							<div class="body">
								<div class="content">
									<h4 class="title"><?php echo   $row['title'];   ?></h4>
									<span class="category"><?php echo $obj->get_event_category($cat_id); ?></span>
								</div>
							</div>
						</a>
					</div>
				</div>
<?php

 }
 
 }
?>                
                
                
				 
				<!--<div class="col-sm-6 col-md-4 industry factory">-->
				<!--	<div class="box-image-4">-->
				<!--		<a href="cat-photo.php" title="Industrial Complex">-->
				<!--			<div class="media">-->
				<!--				<img src="images/project-img-3.jpg" alt="" class="img-responsive">-->
				<!--			</div>-->
				<!--			<div class="body">-->
				<!--				<div class="content">-->
				<!--					<h4 class="title">Warehouse Industry</h4>-->
				<!--					<span class="category">Commodoenim</span>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--		</a>-->
				<!--	</div>-->
				<!--</div>-->
				<!--<div class="col-sm-6 col-md-4 industry factory">-->
				<!--	<div class="box-image-4">-->
				<!--		<a href="" title="Industrial Complex">-->
				<!--			<div class="media">-->
				<!--				<img src="images/project-img-4.jpg" alt="" class="img-responsive">-->
				<!--			</div>-->
				<!--			<div class="body">-->
				<!--				<div class="content">-->
				<!--					<h4 class="title">Iron Industry</h4>-->
				<!--					<span class="category">Commodoenim</span>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--		</a>-->
				<!--	</div>-->
				<!--</div>-->
				<!--<div class="col-sm-6 col-md-4 industry oil">-->
				<!--	<div class="box-image-4">-->
				<!--		<a href="" title="Industrial Complex">-->
				<!--			<div class="media">-->
				<!--				<img src="images/project-img-5.jpg" alt="" class="img-responsive">-->
				<!--			</div>-->
				<!--			<div class="body">-->
				<!--				<div class="content">-->
				<!--					<h4 class="title">Gear Manufacturing</h4>-->
				<!--					<span class="category">Commodoenim</span>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--		</a>-->
				<!--	</div>-->
				<!--</div>-->
				<!--<div class="col-sm-6 col-md-4 eco">-->
				<!--	<div class="box-image-4">-->
				<!--		<a href="" title="Industrial Complex">-->
				<!--			<div class="media">-->
				<!--				<img src="images/project-img-6.jpg" alt="" class="img-responsive">-->
				<!--			</div>-->
				<!--			<div class="body">-->
				<!--				<div class="content">-->
				<!--					<h4 class="title">Oil Pipeline Industry</h4>-->
				<!--					<span class="category">Commodoenim</span>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--		</a>-->
				<!--	</div>-->
				<!--</div>-->
				<!--<div class="col-sm-6 col-md-4 eco gas">-->
				<!--	<div class="box-image-4">-->
				<!--		<a href="" title="Industrial Complex">-->
				<!--			<div class="media">-->
				<!--				<img src="images/project-img-7.jpg" alt="" class="img-responsive">-->
				<!--			</div>-->
				<!--			<div class="body">-->
				<!--				<div class="content">-->
				<!--					<h4 class="title">Oil Pipeline Industry</h4>-->
				<!--					<span class="category">Commodoenim</span>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--		</a>-->
				<!--	</div>-->
				<!--</div>-->
				<!--<div class="col-sm-6 col-md-4 eco">-->
				<!--	<div class="box-image-4">-->
				<!--		<a href="" title="Industrial Complex">-->
				<!--			<div class="media">-->
				<!--				<img src="images/project-img-8.jpg" alt="" class="img-responsive">-->
				<!--			</div>-->
				<!--			<div class="body">-->
				<!--				<div class="content">-->
				<!--					<h4 class="title">Oil Pipeline Industry</h4>-->
				<!--					<span class="category">Commodoenim</span>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--		</a>-->
				<!--	</div>-->
				<!--</div>-->
				<!--<div class="col-sm-6 col-md-4 oil">-->
				<!--	<div class="box-image-4">-->
				<!--		<a href="" title="Industrial Complex">-->
				<!--			<div class="media">-->
				<!--				<img src="images/project-img-9.jpg" alt="" class="img-responsive">-->
				<!--			</div>-->
				<!--			<div class="body">-->
				<!--				<div class="content">-->
				<!--					<h4 class="title">Oil Pipeline Industry</h4>-->
				<!--					<span class="category">Commodoenim</span>-->
				<!--				</div>-->
				<!--			</div>-->
				<!--		</a>-->
				<!--	</div>-->
				<!--</div>-->


			</div>
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
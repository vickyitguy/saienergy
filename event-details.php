<!DOCTYPE html>
<html lang="zxx">
  <head>

    <?php include ("include/top-header.php");?>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="css/cards-gallery.css">
</head>

<body>

	<?php include ("include/top-headerlogo.php");?>
 
	<div class="section banner-page about">
    <div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">Events</div>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Photos</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="section feature overlap">
		<div class="container">
        
<?php


$evn_id = $_GET['evn'];


$tsql="select *  from events_list  where evn_id ='$evn_id'   ";

$tqry=mysqli_query($idb,$tsql)or die(mysqli_error());

if(mysqli_num_rows($tqry)>0)

{

  $row=mysqli_fetch_array($tqry);
  $cat_id=$row['ecat_id']; 

 
   
   ?>        
        
        
			<div class="row">
			
	
				<div class="col-sm-12 col-md-12 gallery-block cards-gallery">
      <div class="col-sm-12 col-md-12">
					<h2 class="section-heading">Events</h2>
                    
  
                        <div class="col-md-12 mp">
                         <div class="col-md-2" >  <label>Title</label>   </div>
                                       
                          <div class="col-md-10"> <?php echo  $row['title'];   ?> </div>
                        </div><div class="col-md-12 mp">
                         <div class="col-md-2" >  <label>Description</label>   </div>
                                       
                          <div class="col-md-10"> <?php echo  $row['descr'];   ?> </div>
                        </div>
                    
                    
                    
                 
				</div>
                	        <div class="row">
                            
                            
         <?php
		 $evn_id = $_GET['evn'];
			
			 $q1= mysqli_query($idb,"select * from events_image_gallery where evn_id ='$evn_id'");
			  while($f1 = mysqli_fetch_array($q1))
				 {
					$fldr =  "intra/assets/images/events/"; 
					$img_nme =  $f1['img_name'];  
					$img_lnk ="$fldr$img_nme";
					   ?>              	            
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                	<a class="lightbox" href="<?php echo $img_lnk; ?>">
	                		<img src="<?php echo $img_lnk; ?>" alt="Card Image" class="card-img-top" style="height:255px">
	                	</a>
	                     
	                </div>
	            </div>
               <?php
				 }
			   ?> 
                
	         
	            
	      
	        </div>
	
                	 
				</div>
          </div>
<?php

}
?>          
            
            
            
            
		</div>
	</div>


		
	
	 

	<?php include ("include/top-footertop.php");?>
    
    <?php include ("include/top-footer.php");?>
	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.cards-gallery', { animation: 'slideIn'});
    </script>

		
</body>
</html>
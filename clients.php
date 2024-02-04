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
					<div class="title-page">Clients</div>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Clients</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
    
    <div class="section feature overlap gallery-block cards-gallery">
		<div class="container">

			 <div class="row">
              <?php
    $tsql="select *  from clients_list  where status='0'  ";
 $tqry=mysqli_query($idb,$tsql)or die(mysqli_error());
 if(mysqli_num_rows($tqry)>0)
 {
 $sno=1;
 while($row=mysqli_fetch_array($tqry))
 {
	 
	 $img_nme = $row['cnt_img'];
	 $fldr = "intra/assets/images/clients/";
	 $img_loc = "$fldr$img_nme";
	 
 ?>
             
            		 <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                    <div class="card-body">
	                	<a class="lightbox" href="<?php echo $img_loc ?>">
	                		<img src="<?php echo $img_loc ?>" alt="Card Image" class="card-img-top">
	                	</a>
	                	</div>
	                    <div class="card-body">
	                        <h6><a href="#"><?php echo $row['name']; ?></a></h6>
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
 

	<?php include ("include/top-footertop.php");?>
    
    <?php include ("include/top-footer.php");?>
	

		<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.cards-gallery', { animation: 'slideIn'});
    </script>

		
</body>
</html>
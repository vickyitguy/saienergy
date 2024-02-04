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
					<div class="title-page">Detail Gallery</div>
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
			<div class="row">
			
	
				<div class="col-sm-12 col-md-12 gallery-block cards-gallery">
      <div class="col-sm-12 col-md-12">
					<h2 class="section-heading">
				Detail Gallery
					</h2>
					<h3 class="director-title"><span><img src="images/icon-7.png" width="30" alt="icon"></span> Gallery Description</h3>
					<p>SPEL is promoted and effectively managed by the well qualified and experienced team of DIRECTORS who have a common vision of establishing the Organisation as Globally one of the best in this sector. They are able to acquire many challenging projects with their collective experience and wide contact of leading Industrial Houses. They have achieved highest performances in all their projects by engaging and guiding a team of experts who are all technically sound and experienced in their relevant portfolio.</p>
				</div>
                	        <div class="row">
                	            
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                	<a class="lightbox" href="img/image1.jpg">
	                		<img src="img/image1.jpg" alt="Card Image" class="card-img-top">
	                	</a>
	                    <div class="card-body">
	                        <h6><a href="#">Lorem Ipsum</a></h6>
	                       
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
						<a class="lightbox" href="img/image2.jpg">
		                	<img src="img/image2.jpg" alt="Card Image" class="card-img-top">
		                </a>
	                    <div class="card-body">
	                        <h6><a href="#">Lorem Ipsum</a></h6>
	                     
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                	<a class="lightbox" href="img/image3.jpg">
	                		<img src="img/image3.jpg" alt="Card Image" class="card-img-top">
	                	</a>
	                    <div class="card-body">
	                        <h6><a href="#">Lorem Ipsum</a></h6>
	                      
	                    </div>
	                </div>
	            </div>
	      
	        </div>
	
                	<div class="row" style="display:none">
                    
                     <?php

 
  $tsql="select *  from products_list    ";

$tqry=mysqli_query($idb,$tsql)or die(mysqli_error());
 if(mysqli_num_rows($tqry)>0)
 {
 $sno=1;

while($row=mysqli_fetch_array($tqry))

{
 
 $prd_id=$row['prd_id'];
 $cat_id=$row['prcat_id'];
  $typ_id=$row['ptyp_id'];
   $urw= $obj->get_user_details($crt_by);  
  
  

?>
                    
                    	<div class="col-md-4"> 
	                        <a href="products-details.php?prd=<?php echo $prd_id ?>">
                            <div class="box-news-1">
                                <div class="body">
                                    <h5><?php echo $obj->get_product_category($cat_id);   ?> &nbsp;<span class=""><?php echo  $obj->get_product_type($typ_id);   ?></span></h5>			
                                </div>
                                <div class="media gbr">
                                  <?php
							$q1= mysqli_query($idb,"select * from products_image_gallery where prd_id='$prd_id'");
							 $f1 = mysqli_fetch_array($q1);
 							  ?>
                                     <img src="intra/assets/images/products/<?php echo $f1['img_name']; ?>" alt="" class="img-responsive">
                                </div>
                                <div class="body">
                                    <div class="title" align="center"> <?php echo $row['prd_nme']; ?></div>							
                                </div>
                            </div>
                            </a>
                        </div>
                        
<?php

}

}
?>                        
                        
                        
                    </div>
				</div>
                
    <!--            <div class="col-sm-3 col-md-3" >-->
                
				<!--<div class="margin-bottom-10"> -->
				<!--      <h4>Product Category</h4>-->
	   <!--                    <ul class="list">-->
				<!--			<li><a href="products.php" title="Products">Products</a></li>-->
				<!--			<li><a href="clients.php" title="Clients">Clients</a></li>-->
    <!--                        <li><a href="gallery-photo.php" title="Gallery">Gallery</a></li>-->
    <!--                        <li><a href="careers.php" title="">Careers</a></li>-->
				<!--		</ul>-->
    <!--                    </div>-->
    <!--                    <h4>Product Search</h4>-->
				<!--	<form action="#" class="form-contact" data-toggle="validator" novalidate="true">-->
							
				<!--			<div class="form-group">-->
				<!--				<select class="form-control">-->
				<!--				  <option>Category</option>-->
				<!--				  <option></option>-->
				<!--				</select>-->
				<!--			</div>-->
    <!--                        <div class="form-group">-->
				<!--				<select class="form-control">-->
				<!--				  <option>Sub Category</option>-->
				<!--				  <option></option>-->
				<!--				</select>-->
				<!--			</div>-->
    <!--                        <div class="form-group">-->
				<!--				<select class="form-control">-->
				<!--				  <option>Type</option>-->
				<!--				  <option></option>-->
				<!--				</select>-->
				<!--			</div>-->
				<!--			<div class="form-group">-->
				<!--				<div id="success"></div>-->
				<!--				<button type="submit" class="btn btn-secondary disabled" style="pointer-events: all; cursor: pointer;">Search</button>-->
				<!--			</div>-->
				<!--		</form>-->
				
				<!--</div>-->
				
								
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
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
					<div class="title-page">Products Details</div>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Products</li>
					</ol>
				</div>
			</div>
		</div>
	</div>


<?php
$prd_id = $_GET['prd'];

  $tsql="select *  from products_list  where prd_id ='$prd_id'  ";
 $tqry=mysqli_query($idb,$tsql)or die(mysqli_error());
 if(mysqli_num_rows($tqry)>0)
 {
 $sno=1;

 $row=mysqli_fetch_array($tqry);

?>

	<div class="section feature overlap">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-6 col-md-9">
                	<div class="single-page gallery">
                    	<h2 class="section-heading">
							<?php echo $row['prd_nme']; ?>
						</h2>
						<!--<img src="images/blog-1.jpg" alt="" class="img-responsive"> -->
                        
                        
                        
<?php


 $uri = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
 function removeFilename($url)
{
    $file_info = pathinfo($url);
    return isset($file_info['extension'])
        ? str_replace($file_info['filename'] . "." . $file_info['extension'], "", $url)
        : $url;
}
function remove_http($url) {
   $disallowed = array('http://', 'https://');
   foreach($disallowed as $d) {
      if(strpos($url, $d) === 0) {
         return str_replace($d, '', $url);
      }
   }
   return $url;
}
 $uri_old = removeFilename($uri);

 $uri_new= remove_http($uri_old);

?>                        
                        <div class="carousel">
                        
                        
                        
    
    <input type="radio" id="image1" name="gallery-control" checked>
    <input type="radio" id="image2" name="gallery-control">
    <input type="radio" id="image3" name="gallery-control">
    <input type="radio" id="image4" name="gallery-control">
    
    
    <input type="checkbox" id="fullscreen" name="gallery-fullscreen-control"/>
    
    <div class="wrap">
      <?php
		  $q1= mysqli_query($idb,"select * from products_image_gallery where prd_id='$prd_id'");
 			 while($f1 = mysqli_fetch_array($q1))
				 {
				 ?>
      <figure>
        <label for="fullscreen">
          <img src="intra/assets/images/products/<?php echo $f1['img_name']; ?>" alt="image1"/>
        </label>
      </figure>
      
      <?php
	  
				 }
	  ?>
      
      
      
    </div>
    
    <div class="thumbnails">
      
      <div class="slider"><div class="indicator"></div></div>
         <?php
 		  $sq1= mysqli_query($idb,"select * from products_image_gallery where prd_id='$prd_id'");

			 while($sf1 = mysqli_fetch_array($sq1))
				 {
				 ?>
                              
      
      
      
      <label for="image1" class="thumb" style="background-image: <?php echo $uri_new?>intra/assets/images/products/<?php echo $sf1['img_name']; ?>"></label>
      <?php
				 }
	  ?>
      
      
     
    </div>
    
    </div>
                        
						<div class="margin-bottom-30"></div>
						<h2 class="section-heading">
							Application
						</h2>
						<p><?php echo $row['prd_appln']; ?></p>						
						<div class="margin-bottom-50"></div>
                        
                        <h2 class="section-heading">
							Specification
						</h2>
						<p><?php echo $row['prd_spec']; ?></p>						
						<div class="margin-bottom-50"></div>
                     </div>
				</div>
                
                <?php
				
 }
				?>
                
                
                <div class="col-sm-6 col-md-3">
                	<h4>Product Search</h4>
					<form action="#" class="form-contact" data-toggle="validator" novalidate="true">
							
							<div class="form-group">
								<select class="form-control">
								  <option>Category</option>
								  <option></option>
								</select>
							</div>
                            <div class="form-group">
								<select class="form-control">
								  <option>Sub Category</option>
								  <option></option>
								</select>
							</div>
                            <div class="form-group">
								<select class="form-control">
								  <option>Type</option>
								  <option></option>
								</select>
							</div>
							<div class="form-group">
								<div id="success"></div>
								<button type="submit" class="btn btn-secondary disabled" style="pointer-events: all; cursor: pointer;">Search</button>
							</div>
						</form>
                        
                        <div class="margin-bottom-10"> 
	                        <a href="">
                            <div class="box-news-1">
                                <div class="body">
                                    <h5>Sub Category >> <span class="">Type</span></h5>			
                                </div>
                                <div class="media gbr">
                                    <img src="images/blog-1.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="body">
                                    <div class="title">Title</div>							
                                </div>
                            </div>
                            </a>
                        </div>
                        
                        <div class="margin-bottom-10"> 
	                        <a href="">
                            <div class="box-news-1">
                                <div class="body">
                                    <h5>Sub Category >> <span class="">Type</span></h5>			
                                </div>
                                <div class="media gbr">
                                    <img src="images/blog-1.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="body">
                                    <div class="title">Title</div>							
                                </div>
                            </div>
                            </a>
                        </div>
                        
                        <div class="margin-bottom-10"> 
	                        <a href="">
                            <div class="box-news-1">
                                <div class="body">
                                    <h5>Sub Category >> <span class="">Type</span></h5>			
                                </div>
                                <div class="media gbr">
                                    <img src="images/blog-1.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="body">
                                    <div class="title">Title</div>							
                                </div>
                            </div>
                            </a>
                        </div>
				</div>
				
								
			</div>
		</div>
	</div>


		
	
	 

	<?php include ("include/top-footertop.php");?>
    
    <?php include ("include/top-footer.php");?>
	

	

		
</body>
</html>
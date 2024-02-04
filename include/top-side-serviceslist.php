<div class="widget info-detail" >
        <div class="widget-title">
            Service Category
        </div>
    </div>
    <div class="widget categories" >
        <ul class="category-nav">
   <?php
   $file_nme = $_SERVER['PHP_SELF'];
$q1=mysqli_query($idb,"select * from service_categories where status='0'  Limit 4 ");
while($f1=mysqli_fetch_array($q1))
{
$cat_id = $f1['srcat_id'];
$lnk ="$file_nme?srv=$cat_id ";	
	
?>
            <li><a href="<?php echo $lnk ?>"><?php echo $f1['name']; ?></a></li>
 <?php

}
?>            
          
        </ul>
    </div> 
    
				

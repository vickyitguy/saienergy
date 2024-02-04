<div class="widget info-detail">
        <div class="widget-title">
            Archives
        </div>
    </div>
    
 
 
 <?php
 
$cnt_yr = date('Y'); ;
 $yr = isset($_GET['year']) ? $_GET['year'] : $cnt_yr;
   ?>
    
     
    
    
    <div class="widget categories">
         <ul class="archive-nav">
        
        <?php
	  $sql=("select perf_yr  from monthly_perfomances where status ='1' and perf_yr != '$yr' group by perf_yr order by perf_yr DESC ");
            $tqry=mysqli_query($idb,$sql)or die(mysqli_error($idb));
      while($row=mysqli_fetch_array($tqry))
        {
		?>
          <li  style="float:left"><a href="per-monthlyperform.php?year=<?php echo  $row['perf_yr'];  ?>"><?php echo  $row['perf_yr']; ?></a></li>
        <?php
		
		}
		?>
        
          
        </ul>
    </div> 
    
    
    
<style type="text/css">
.archive-nav li
{
	float:left;
	margin:1%;
	list-style:none
 
 }
 
 
 .archive-nav li a {
    color: #fff;
    display: block;
    padding: 3px;
    margin-bottom: 5px;
    background-color: #d1343a;
    border-left: 3px solid transparent;
}
</style>    
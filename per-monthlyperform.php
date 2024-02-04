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
					<div class="title-page">Monthly Performance Report</div>
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
                <p>Each Project handled by SPEL is provided with data on performance figures with achievement, maintenance and failure / tripping details on monthly basis as a record of document. These reports are listed year wise and Customer wise for reference and records of each Customer.
</p>
					<table class="table table-bordered table-condensed" width="100%">
                    	<tr class="t-head-1">
                        	<th width="5%">S.No</th>
                        	<th width="35%">Title</th>
                            <th width="15%">Month</th>
                             <th width="10%" class="text-center">PDF</th>
                        <tr>
  <?php
  
  $cnt_yr = date('Y'); ;
 $yr = isset($_GET['year']) ? $_GET['year'] : $cnt_yr;

$q1=mysqli_query($idb,"select *  from monthly_perfomances where status ='1' and perf_yr = '$yr'   order by prf_id DESC   ");
$rws1 = mysqli_num_rows($q1);
if($rws1>0)
{
 	
}else{
 	$q1=mysqli_query($idb,"select max(perf_yr) as yr  from monthly_perfomances where status ='1'    ");
	$f1 = mysqli_fetch_array($q1);
	$yr = $f1['yr'];

}

 
    
  echo  $tsql="select *  from monthly_perfomances where status ='1' and perf_yr = '$yr'   order by prf_id DESC   ";
 $tqry=mysqli_query($idb,$tsql)or die(mysqli_error());
 if(mysqli_num_rows($tqry)>0)
 {
 $sno=1;
 while($row=mysqli_fetch_array($tqry))
 {
$prf_id=$row['prf_id'];

$mnth =  date("F", mktime(0, 0, 0, $row['perf_mnth'], 1)); 
$yr = $row['perf_yr'];

$mnth = "$mnth $yr ";


  ?>
                        
                        
                        <tr>
                        	<td align="center" style="text-align:center"><?php echo  $sno ?></td>
                            <td><?php echo   $row['title']; ?></td>
                            <td><?php echo $mnth; ?></td>
                             <td class="text-center"><a target="_blank" href="intra/assets/docs/perfomances/<?php echo $row['perf_doc'] ?>" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i></a></td>
                        </tr>
<?php
$sno=$sno+1;
}
} 

 ?>                        
                    </table>
				</div>
                
                <div class="col-sm-6 col-md-3">
					<?php include ("include/top-side.php");?>
                    <?php include ("peformance_archives.php");?>
				</div>
				
								
			</div>
		</div>
	</div>


		
	
	 

	<?php include ("include/top-footertop.php");?>
    
    <?php include ("include/top-footer.php");?>
	

	

		
</body>
</html>
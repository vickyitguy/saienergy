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
					<div class="title-page">Articles</div>
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
                
                <p>Our Team of Experts are not only performing their regular tasks and they wish to publish their experiences, challenges, technical innovations and research findings as Articles to the entire fraternity of their Profession. It will give support and help the younger generations to understand and learn the facts and to carry forward further.<br>
The List of Articles is given in the Table below and to view the individual Articles we can click the PDF Icon and read the content.
</p>
                
                	<table class="table table-bordered table-condensed" width="100%">
                    	<tr class="t-head-1">
                        	<th width="8%">S.No</th>
                            <th width="15%">Post Date</th>
                            <th width="67%">Article Name</th>
                            <th width="10%" class="text-center">PDF</th>
                        <tr>
   <?php

 
  $tsql="select *  from articles_list where status ='1'   order by art_id DESC   ";
 $tqry=mysqli_query($idb,$tsql)or die(mysqli_error());
 if(mysqli_num_rows($tqry)>0)
 {
 $sno=1;
 while($row=mysqli_fetch_array($tqry))
 {
 

  
 ?>                        
                        <tr>
                        	<td align="center" style="text-align:center"><?php echo  $sno ?></td>
                            <td><?php echo $date = date("F Y", $row['crt_stm']); ?></td>
                            <td><?php echo $row['title']?></td>
                            <td class="text-center">
                            <a target="_blank" href="intra/assets/docs/articles/<?php echo $row['art_doc'] ?>" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i></a></td>
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
				</div>
				
								
			</div>
		</div>
	</div>


		
	
	 

	<?php include ("include/top-footertop.php");?>
    
    <?php include ("include/top-footer.php");?>
	

	

		
</body>
</html>
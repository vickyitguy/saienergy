<!doctype html>
<html lang="en">
<head>
	<?php include('../header.php'); ?>
</head>
<body>

<div class="wrapper">
    <?php include('../sidebar.php'); ?>

    <div class="main-panel">
		
 <?php include('../top_nav.php'); ?>

        <div class="content">
       
            <div class="container-fluid">
             <div class="row">
         <div class="col-md-6"><div class="header">
                                <h3 class="adtt">Add Events List</h3>
                            </div>
     
         </div>
         <div class="col-md-6">
         <ul class="breadcrumb">
                        <li><a>Masters</a></li>                       
                        <li class="active" ><a >Events List</a></li>
                    </ul>
                                </div>
         </div>
         <!--------add------>
      
         
         
         <!-----List-------->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h3 class="lstt">Events List</h3>
                            </div>
                            <div class="content">
                            <div class="row">
                            
                        <div class="col-md-12">
                          <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="thd">
            <tr>
               
                <th width="5%">S.No.</th>
                <th width="20%">Event Category</th>
                <th width="20%">Event Title</th>
                 <th width="36%">Title Image</th>
                <th width="45%">Description</th>
                <th width="10%">Options</th>
            </tr>
        </thead>
		 <tbody>
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
                    
        <tr>
       
        <td>
										
										<input name="revn_id" id="revn_id" value="<?php echo $evn_id ?>" type="hidden">
										
										<?php echo $sno?></td>
        <td><?php echo $obj->get_event_category($cat_id); ?></td>
                                        <td><?php echo   $row['title'];   ?></td>
                                        <td align="center"> <img style="width:90%"  src="../assets/images/events/<?php echo $row['title_image']; ?>" >;</td>
                                    
										  <td style="max-width:150px;word-wrap:break-word;"><?php echo $row['descr']; ?></td>
        <td align="center">
       
 <button type="button"  title="Edit" data-id="<?php echo $row['evn_id']; ?>" class="btn btn-edit btn-fill edit_btn" data-original-title="Edit" ><i class="glyphicon glyphicon-edit"></i></button>
  <button  title="Delete" class="btn btn-danger btn-fill del_btn"  data-id="<?php echo $row['evn_id']; ?>" type="submit" data-original-title="Delete" ><i class="glyphicon glyphicon-trash"></i></button>
  
 <button  title="View" class="btn  btn-info btn-fill view_btn"  data-id="<?php echo $row['evn_id']; ?>" type="submit"  ><i class="glyphicon glyphicon-eye-open"></i></button>    
  
        </td>
        </tr>
		  <?php
$sno=$sno+1;
}




}
									?>
       </tbody>
    </table>
    </div>
                            </div>
                                
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
        
        
        <!-----------//------------------->

 <?php include('../footer.php'); ?>
        

    </div>
</div>


<div class="modal fade" id="viewModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">View Event Details</h4>
                        </div>
                        <div class="modal-body">
                        
                                
                           
                        </div>
                        <div class="modal-footer">
                      <button  class="btn btn-danger btn-fill" type="button" id="cncl1" data-dismiss="modal" > <i class="glyphicon glyphicon-remove-sign"></i><span>&nbsp;Close</span></button> 
                      
                                 
                          
                        </div>
                        </form>
                    </div>
                </div>
            </div>



<?php include('../foo_scripts.php'); ?>

</body>
</html>


<script type="text/javascript" src="../includes/js/gallery.js"> </script>
<script type="text/javascript">
///modal box
 
 
    $(document).ready(function() {
    var table = $('#example').DataTable( {
	"ordering": false
		
		
       // responsive: true
    } );
	///cancel
	$('#cncl,#cncl1').click(function(){
 	 window.location.href ="eventslist.php";
});
});


$(document).on("click",".edit_btn", function () {	
var id=$(this).attr("data-id");
window.location.href='editevent.php?evn='+id;
	
});	




$(document).on("click",".view_btn", function () {	

var id=$(this).attr("data-id");

 

$('#viewModal .modal-body ').load('load_event.php?id='+id,function(){
        $('#viewModal').modal({show:true});
    });
	 
	 
	 
	 
		  
 

});








 

$(document).on("click",".del_btn", function () {
//$('#rpt_tbl').on( 'click', '.del_btn', function (e) {	

var id=$(this).attr("data-id");  
 

	  if (confirm("Do you want to Confirm \u275B Delete \u275C ?") ) 
   {
	 
		  $.ajax({
		 url:"gallery_sql.php",
		 data: { evn_del: id },
		 type:'GET',
		 success:function(result)
 			 {
 				
				if(result== '1')
				{

				alert('Record Deleted Sucessfully!');
				window.location.href='eventslist.php';

				 //location.reload();
				}else
				{
				 alert('Operation Failed!');	
				 return false;
					
				}
				 

	         }
			 
		  
	    });
		
   }
		
		
		
		
 	 
 		
	 
	 
	 
 
 

});
    </script>

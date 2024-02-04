<?php
$usr_id = $_SESSION['susr_id'];
include("spel_config.php");

class glibrary
{
	
public function get_state($id)
 {
    global $idb;	
 
		$qry=mysqli_query($idb,"select name from states_list where st_id='$id'");
		$row=mysqli_fetch_array($qry);
		$name=$row['name'];  
		
 
		 return $name;
 }
 public function get_country($id)
 {   global $idb;
    	
 		$qry=mysqli_query($idb,"select name from countries where country_id='$id'");
		$row=mysqli_fetch_array($qry);
		$name=$row['name'];  
  
		 return $name;
 }
 
 
  public function get_active_status($id)
 {
	 if($id == '0')
	 {
		$sts ='Pending For Approval'; 
	 }else if($id == '1')
	 {
		$sts ='Approved'; 
	 }else if($id == '2')
	 {
		$sts ='Under Review'; 
	 }
	 
	 return $sts;
	 
 }
 public function get_service_category($id)
 {   global $idb;
    	
     $qry=mysqli_query($idb,"select name from service_categories where srcat_id='$id'");
		$row=mysqli_fetch_array($qry);
		$name=$row['name'];  
 		 return $name;
  }
 
  
 
 
  public function get_service_type($id)
 {   global $idb;
    	
     $qry=mysqli_query($idb,"select name from service_types where styp_id='$id'");
		$row=mysqli_fetch_array($qry);
		$name=$row['name'];  
		 return $name;
 }
 public function get_product_category($id)
 {   global $idb;
    	
     $qry=mysqli_query($idb,"select name from product_categories where prcat_id='$id'");
		$row=mysqli_fetch_array($qry);
		$name=$row['name'];  
 		 return $name;
  } 
   public function get_product_subcategory($id)
 {   global $idb;
    	
     $qry=mysqli_query($idb,"select name from product_subcategories where prscat_id='$id'");
		$row=mysqli_fetch_array($qry);
		$name=$row['name'];  
 		 return $name;
  }
  
   public function get_product_type($id)
 {   global $idb;
    	
     $qry=mysqli_query($idb,"select name from product_types where ptyp_id='$id'");
		$row=mysqli_fetch_array($qry);
		$name=$row['name'];  
		 return $name;
 }
 
  public function get_event_category($id)
 {   global $idb;
    	
     $qry=mysqli_query($idb,"select name from event_categories where ecat_id='$id'");
		$row=mysqli_fetch_array($qry);
		$name=$row['name'];  
 		 return $name;
  } 
 
  public function get_job_position($id)
 {   global $idb;
    	
     $qry=mysqli_query($idb,"select name from job_positions where jpos_id='$id'");
		$row=mysqli_fetch_array($qry);
		$name=$row['name'];  
  
		 return $name;
  
 } 
   public function get_location($id)
 {   global $idb;
    	
     $qry=mysqli_query($idb,"select name from location_list where loc_id='$id'");
		$row=mysqli_fetch_array($qry);
		$name=$row['name'];  
 		 return $name;
  } 
  public function get_edu_qualification($id)
 {   global $idb;
    	
     $qry=mysqli_query($idb,"select name from edu_qualifications where eql_id='$id'");
		$row=mysqli_fetch_array($qry);
		$name=$row['name'];  
 		 return $name;
  } 
  
  
 
 
public function get_serv_pending($id = '',$sts='')
 {   
 global $idb;
 $usr_id = $_SESSION['susr_id'];
   if($id>0)
  {
	 $e_qry = " and  crt_by ='$usr_id' ";   
  }else{
  $e_qry = '';
 }
   
   echo  $qry=("select count(*) as cnt from services_list where status = '$sts' $e_qry ");

    $qry=mysqli_query($idb,"select count(*) as cnt from services_list where status = '$sts' $e_qry ");
	$row=mysqli_fetch_array($qry);
		$cnt=$row['cnt'];  
 		// return $cnt;
 }
 public function get_prd_pending($id = '')
 {  
  global $idb;
 
  $usr_id = $_SESSION['susr_id'];
	  if($id>0)
	  {
		 $e_qry = " and  crt_by ='$usr_id' ";   
	  }else{
	  $e_qry = '';
	 }
 
      $qry=mysqli_query($idb,"select count(*) as cnt from products_list where status = '0'  $e_qry ");
	$row=mysqli_fetch_array($qry);
		$cnt=$row['cnt'];  
 		 return $cnt;
 }
 
 public function get_user_role($id)
 {   global $idb;
    	
 		$qry=mysqli_query($idb,"select name from user_roles where rl_id='$id'");
		$row=mysqli_fetch_array($qry);
		$name=$row['name'];  
  
		 return $name;
 }
 
 
  public function get_user_details($id)
 {   global $idb;
    	
 		$qry=mysqli_query($idb,"select * from users_list where usr_id='$id'");
		$row=mysqli_fetch_array($qry);
		$rl_id=$row['rl_id'];  
		$emp_nme= strtoupper($row['emp_name']);
  
		  return array('emp_nme'=>$emp_nme,'rl_id'=>$rl_id);

 }
 
 
 
   public function get_jobdesc_details($id)
 {   global $idb;
    	
 		$qry=mysqli_query($idb,"select * from job_descriptions where jd_id='$id'");
		$row=mysqli_fetch_array($qry);
		$jd_code= strtoupper($row['jd_code']);
  
		  return array('jd_cod'=>$jd_code);

 }
 
 
 
  public function get_maxpi()
 {   global $idb;
    	
 		 	 
 $tqry=mysqli_query($idb,"select MAX(inw_no) as inw_no,count(*) as cnt  from pi_list  order by  inw_id DESC LIMIT 0,1 " );
 $r1=mysqli_fetch_array($tqry);
  $cnt=$r1['cnt'];
	  
	  if($cnt>0)
	  {	   
	    $inw_no=$r1['inw_no'];
	    $var=1;
        $inw_no=$inw_no+ $var;
	   } else
	   {
		  $inw_no='1001';  
	   }
		  
		  
		  $inw_no=  str_pad($inw_no, 4, '0', STR_PAD_LEFT);	
	   return $inw_no;
  
 }
 
 
	
}

 ?>
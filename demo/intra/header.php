<?php
include("../spel_config.php");



$stm_nw = strtotime('now');
 
session_start();
 $susr_id=$_SESSION['susr_id'];
 
 if (!isset($_SESSION['susr_id']))
 
 {
	 echo "<script>alert('Your Session Expired! Please relog'); window.location.href='../index.php';</script>";
 }

 include("../cmn_lib.php");
 
 $obj = new glibrary();
?>



<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title>SRI SAI POWER & EQUIPMENTS PRIVATE LIMITED</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	
	<link rel="stylesheet" type="text/css" href="../data/css/datepicker3.css">
	

    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="../assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <!---<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">---->
    <link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
       <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

    <!---------table linkd--------->
    <link type="text/css" rel="stylesheet" href="../data/css/bootstrap.min.css"  />
<link type="text/css" rel="stylesheet" href="../data/css/dataTables.bootstrap.min.css"  />
<link type="text/css" rel="stylesheet" href="../data/css/responsive.bootstrap.min.css"  />
<!-------date picker--------->
<!--<link href="../assets/css/jquery.datepick.css" rel="stylesheet">-->



    
    
    <style type="text/css">
 
.navbar-brand { visibility:hidden; display:none;}
#bg {border-radius:none; background-color:#ddd;}
#bg1 {border-radius:none; background-color:#ddd; border-bottom-left-radius:0; border-bottom-right-radius:0;}
#bg2 {border-radius:none; background-color:#ddd;}
#bg3 {border-radius:none; background-color:#ddd; border-bottom-left-radius:0; border-bottom-right-radius:0;}
#bg4 {border-radius:none; background-color:#ddd;}
#bg ul li {list-style:none;}
#bg1 ul li {list-style:none;}
#bg2 ul li {list-style:none;}
#bg3 ul li {list-style:none;}
#bg4 ul li {list-style:none;}
.bor { box-shadow: none;}
button a { color:#fff; font-weight: 500;}
.header .adtt, .header .edtt, .card .lstt, .header .vwtt{
    
    font-weight: 500; margin-top:5px; margin-bottom:5px;
}
.card .lstt {
    color: #FF4A55;
}
.header .adtt {
    color:#0147de;/* #3472f7;*/
}
.header .adtt1 {
    color:#0147de;/* #3472f7;*/ margin-bottom:20px;
}
.card h4 { padding-left:15px; margin-top: 0; }
.header .edtt {
    color: #673ab7;
}
.header .vwtt {
    color: #ff9500;
}
.mp {padding:0; margin:0;}
.thd tr th{ background:#E91E63; color:#ffffff; text-align:center}

table .bg-grey { background:#babfb9; /*#a7c9a0*/}
table .cl { color:#FFEB3B; font-waight:600;}
table .cl01 { color:#5d05f9; font-waight:600;}
table .cl02 { color:#e90552; font-waight:600;}
   @media screen and (max-width: 320px){#sri_text { font-size:12px;}
	.navbar-brand { display:inline-block; visibility:visible} .card label {float:left;}}
@media screen and (max-width: 480px){#sri_text { font-size:12px;}
.navbar-brand { display:inline-block; visibility:visible}.card label {float:left;}}
@media screen and (max-width: 650px){#sri_text { font-size:12px;}
.navbar-brand { display:inline-block; visibility:visible}.card label {float:left;}}
hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #eee;
}
.bg {background:#9E9E9E; margin-bottom:10px;}
@font-face {
    font-family: 'rupee_foradianregular';
	/*src:url(assets/css/fonts/Rupee_Foradian.ttf);*/
    src: url('assets/css/fonts/rupee_foradian-webfont.eot');
    src: url('assets/css/fonts/rupee_foradian-webfont.eot?#iefix') format('embedded-opentype'),
         url('assets/css/fonts/rupee_foradian-webfont.woff2') format('woff2'),
         url('assets/css/fonts/rupee_foradian-webfont.woff') format('woff'),
         url('assets/css/fonts/rupee_foradian-webfont.ttf') format('truetype'),
         url(assets/'css/fonts/rupee_foradian-webfont.svg#rupee_foradianregular') format('svg');
    font-weight: normal;
    font-style: normal;

}
	.rupee {
	font-family: rupee_foradianregular;
   }

/* Modals ====================================== */
/*.modal .modal-header {
  border: none;
  padding: 25px 25px 5px 25px; }
  .modal .modal-header .modal-title {
    font-weight: bold;
    font-size: 16px; }

.modal .modal-content {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.31) !important;
  border: none; z-index:1045 }
  .modal .modal-content .modal-body {
    color: #777;
    padding: 15px 25px; }
.modal .modal-content .modal-body .form-control {padding-left:10px; border-radius:3px;}
.modal .modal-footer {
  border: none; }*/
  
  textarea
  {
	  resize:none
	  
	  
  }



#two {

    background: #aaa;

	 position:fixed; top:0; left:1; background:rgba(0,0,0,0.6);

	 background-image:url(../data/images/loading.gif);

	 background-repeat:no-repeat;

	 background-position:center; 
 	 
 	 z-index:5; width:100%; height:100%;
     

}



    </style>





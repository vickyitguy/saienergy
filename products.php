<!DOCTYPE html>
<html lang="zxx">
  <head>

    <?php include ("include/top-header.php");?>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
    <link rel="stylesheet" href="css/cards-gallery.css">
    <style>
        
.list2 {
	margin: 0;
	margin-top: 19px;
	margin-bottom: 10px;
	
}
.list2 li {
	display: block;
	padding-left: 16px;
	background:url(../images/list_marker1.png) 0 10px no-repeat;
	
}
.list2 li a {
	color: #282828;
	text-decoration: none;
	font: 16px/28px;
}

.list2 li ul {
	display: block;
	padding-left: 30px;
	background: url(../images/list_marker1.png) 0 10px no-repeat;
}
.list2 li ul a {
	color: #282828;
	text-decoration: none;
	font: 16px/28px ;
}

.list2 li a:hover, .list2 li.current a {
	color: #bb3500;
}


.list3 {
	margin: 0;
	margin-top: 5px;
	margin-bottom: 5px;
}
.list3 li {
	display: block;
	padding-left: 16px;
	background: url(images/list_marker1.png) 0 10px no-repeat;
	font-size:14px;
}
.list3 li a {
	color: #282828;
	text-decoration: none;
	font: 16px/28px ;
}

.list3 li a:hover, .list2 li.current a {
	color: #e50202;
}
h5 {
    /* font-family: 'Roboto', sans-serif!important; */
    font-size: 24px!important;
    line-height: 20px;
    font-weight: 600;
    color: #014f7d;
    margin-top: 20px!important;
    margin-bottom: 15px!important;
}
/* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/
html,
body,
div,
span,
applet,
object,
iframe,
h1,
h2,
h3,
h4,
h5,
h6,
p,
blockquote,
pre,
a,
abbr,
acronym,
address,
big,
cite,
code,
del,
dfn,
em,
img,
ins,
kbd,
q,
s,
samp,
small,
strike,
strong,
sub,
sup,
tt,
var,
b,
u,
i,
center,
dl,
dt,
dd,
ol,
ul,
li,
fieldset,
form,
label,
legend,
table,
caption,
tbody,
tfoot,
thead,
tr,
th,
td,
article,
aside,
canvas,
details,
embed,
figure,
figcaption,
footer,
header,
hgroup,
menu,
nav,
output,
ruby,
section,
summary,
time,
mark,
audio,
video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: middle;
}
/* HTML5 display-role reset for older browsers */
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
  display: block;
}
body {
  line-height: 1;
}
ol,
ul {
  list-style: none;
}
blockquote,
q {
  quotes: none;
}
blockquote:before,
blockquote:after,
q:before,
q:after {
  content: '';
  content: none;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
.clearfix {
  *zoom: 1;
}
.clearfix:before,
.clearfix:after {
  display: table;
  content: "";
  line-height: 0;
}
.clearfix:after {
  clear: both;
}
.container .alpha {
  margin-left: 0px;
}
.container .omega {
  margin-right: 0px;
}
.row {
  margin-left: -30px;
  *zoom: 1;
}
.row:before,
.row:after {
  display: table;
  content: "";
  line-height: 0;
}
.row:after {
  clear: both;
}
[class*="grid_"] {
  float: left;
  min-height: 1px;
  margin-left: 30px;
}
.container {
  width: 1170px;
}
.grid_12 {
  width: 1170px;
}
.grid_11 {
  width: 1070px;
}
.grid_10 {
  width: 970px;
}
.grid_9 {
  width: 870px;
}
.grid_8 {
  width: 770px;
}
.grid_7 {
  width: 670px;
}
.grid_6 {
  width: 570px;
}
.grid_5 {
  width: 470px;
}
.grid_4 {
  width: 303px;
}
.grid_3 {
  width: 270px;
}
.grid_2 {
  width: 170px;
}
.grid_1 {
  width: 70px;
}
.preffix_12 {
  margin-left: 1230px;
}
.preffix_11 {
  margin-left: 1130px;
}
.preffix_10 {
  margin-left: 1030px;
}
.preffix_9 {
  margin-left: 930px;
}
.preffix_8 {
  margin-left: 830px;
}
.preffix_7 {
  margin-left: 730px;
}
.preffix_6 {
  margin-left: 630px;
}
.preffix_5 {
  margin-left: 530px;
}
.preffix_4 {
  margin-left: 430px;
}
.preffix_3 {
  margin-left: 330px;
}
.preffix_2 {
  margin-left: 230px;
}
.preffix_1 {
  margin-left: 130px;
}
.container {
  margin-right: auto;
  margin-left: auto;
  *zoom: 1;
}
.container:before,
.container:after {
  display: table;
  content: "";
  line-height: 0;
}
.container:after {
  clear: both;
}
@media (min-width: 980px) and (max-width: 1199px) {
  .row {
    margin-left: -20px;
    *zoom: 1;
  }
  .row:before,
  .row:after {
    display: table;
    content: "";
    line-height: 0;
  }
  .row:after {
    clear: both;
  }
  [class*="grid_"] {
    float: left;
    min-height: 1px;
    margin-left: 20px;
  }
  .container {
    width: 940px;
  }
  .grid_12 {
    width: 940px;
  }
  .grid_11 {
    width: 860px;
  }
  .grid_10 {
    width: 780px;
  }
  .grid_9 {
    width: 700px;
  }
  .grid_8 {
    width: 620px;
  }
  .grid_7 {
    width: 540px;
  }
  .grid_6 {
    width: 460px;
  }
  .grid_5 {
    width: 380px;
  }
  .grid_4 {
    width: 300px;
  }
  .grid_3 {
    width: 220px;
  }
  .grid_2 {
    width: 140px;
  }
  .grid_1 {
    width: 60px;
  }
  .preffix_12 {
    margin-left: 980px;
  }
  .preffix_11 {
    margin-left: 900px;
  }
  .preffix_10 {
    margin-left: 820px;
  }
  .preffix_9 {
    margin-left: 740px;
  }
  .preffix_8 {
    margin-left: 660px;
  }
  .preffix_7 {
    margin-left: 580px;
  }
  .preffix_6 {
    margin-left: 500px;
  }
  .preffix_5 {
    margin-left: 420px;
  }
  .preffix_4 {
    margin-left: 340px;
  }
  .preffix_3 {
    margin-left: 260px;
  }
  .preffix_2 {
    margin-left: 180px;
  }
  .preffix_1 {
    margin-left: 100px;
  }
}
@media (min-width: 768px) and (max-width: 979px) {
  .row {
    margin-left: -20px;
    *zoom: 1;
  }
  .row:before,
  .row:after {
    display: table;
    content: "";
    line-height: 0;
  }
  .row:after {
    clear: both;
  }
  [class*="grid_"] {
    float: left;
    min-height: 1px;
    margin-left: 20px;
  }
  .container {
    width: 748px;
  }
  .grid_12 {
    width: 748px;
  }
  .grid_11 {
    width: 684px;
  }
  .grid_10 {
    width: 620px;
  }
  .grid_9 {
    width: 556px;
  }
  .grid_8 {
    width: 492px;
  }
  .grid_7 {
    width: 428px;
  }
  .grid_6 {
    width: 364px;
  }
  .grid_5 {
    width: 300px;
  }
  .grid_4 {
    width: 236px;
  }
  .grid_3 {
    width: 172px;
  }
  .grid_2 {
    width: 108px;
  }
  .grid_1 {
    width: 44px;
  }
  .preffix_12 {
    margin-left: 788px;
  }
  .preffix_11 {
    margin-left: 724px;
  }
  .preffix_10 {
    margin-left: 660px;
  }
  .preffix_9 {
    margin-left: 596px;
  }
  .preffix_8 {
    margin-left: 532px;
  }
  .preffix_7 {
    margin-left: 468px;
  }
  .preffix_6 {
    margin-left: 404px;
  }
  .preffix_5 {
    margin-left: 340px;
  }
  .preffix_4 {
    margin-left: 276px;
  }
  .preffix_3 {
    margin-left: 212px;
  }
  .preffix_2 {
    margin-left: 148px;
  }
  .preffix_1 {
    margin-left: 84px;
  }
}
.select-menu {
  display: none !important;
}
@media (max-width: 767px) {
  .container {
    width: 420px;
    padding: 0 0px;
  }
  .row {
    margin-left: 0;
  }
  [class*="grid_"] {
    float: none;
    display: block;
    width: 100%;
    margin-left: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  .grid_12 {
    width: 100%;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  .select-menu {
    display: block !important;
  }
}
@media (max-width: 479px) {
  body {
    padding: 0;
  }
  .container {
    width: 300px;
    padding: 0 0px;
  }
  .row {
    margin-left: 0;
  }
}
.wrapper{width:100%; overflow:hidden; position:relative;}
  .extra_wrap{overflow:hidden; display:block;}

.list4 {
	margin: 0;
	margin-top: 10px;
	margin-bottom: 10px;
	
}
.list4 li {
	display: block;
	padding-left: 46px;
	background: url(images/list_marker1.png) 30px 10px no-repeat;
	
}
.list4 li a {
	color: #0351a0;
	text-decoration: none;
	font: 17px/28px;
}

.list4 li a:hover, .list4 li.current a {
	color: #459e18;
}
.topbar .topbar-left .welcome-text {
    font-style: italic;
    color: #ffffff;
    padding: 8px 0;
    font-size: 15px;
    padding-top:12px;
}
body{
    overflow-x:hidden;
}
    </style>
</head>

<body>

	<?php include ("include/top-headerlogo.php");?>
 
	<div class="section banner-page about">
    <div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">Products</div>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Products</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="section feature overlap">
		<div class="container">
			<div class="row">
			
	
				<div class="col-sm-12 col-md-12 gallery-block cards-gallery">
				     <div class="grid_4" style="padding-top:23px;">
                            <div class="sidebr1" style="border:1px solid rgba(119, 117, 117, 0.11);padding:20px;">
                            <h5>Spares</h5>
                            <ul class="list3">
                            <li>Boiler Pressure Parts</li>
                            <li>Boiler Non-Pressure Parts</li>
                            <li>Rotating Equipments</li>
                            <li>ESP</li>
                            <li>WTP & ETP</li>
                            
                            </ul>
							<!--<h5>Chemicals</h5>-->
       <!--                     <ul class="list3">-->
       <!--                     <li>For WTP/ETP</li>-->
       <!--                     <li>For Cooling towers</li>-->
							<!--<li>For Boiler</li>-->
							<!--</ul>-->
                            <p>&nbsp;</p>
                              
                            </div>
                            
                               <img   src="images/Products Images 2.jpg" style="border:1px solid rgba(119, 117, 117, 0.11);width: 398px;
    margin-top: 86px;">
    
       
    <img src="images/Products Image-2.jpg" style="border:1px solid rgba(119, 117, 117, 0.11);width: 398px;
    margin-top: 86px;">
    <img src="images/drumgroup1.png" style="border:1px solid rgba(119, 117, 117, 0.11);width: 398px;
    margin-top: 86px;">
                            
							</div>
                
               <div class="grid_8">
                            <h5>PRODUCTS - Spares</h5>
                             <p>We can supply the following spares for Boilers and Power Plant Equipments of various types and capacities;</p>
                             <div class="row">
                             <div class="grid_12">
                             
                             <div class="row">
                             <div class="grid_4">
                              <h5>Boiler Pressure Parts</h5>
                            <ul class="list3">
                            <li>Bed coils with or without stud</li>
                            <li>Bed Superheater coils</li>
                            <li>Waterwall panels and loose tubes</li>
                            <li>Primary and secondary Superheater coils</li>
                            <li>Bank Tubes</li>
                            <li>Economiser coils</li>
                            <li>De-superheaters</li>
                            <li>Bends - All</li>
							<li>Fin tube bundle for cement plants WHRB</li>
                            <li>Blowdown tanks</li>
                            <li>IBR Valves and Fittings</li>
							<li>End Caps</li>
							<li>Tees &amp; Elbows</li>
							<li>Flash steam recovery system</li>
                            </ul>
                             </div>
                             <div class="grid_5">
                             <img src="images/Products Images.jpg" style="border:1px solid rgba(119, 117, 117, 0.11);width: 398px;
    margin-top: 86px;">
                             </div>
                              </div>
                              <br>
                              <div class="row">
                             <div class="grid_4">
                            <h5>Boiler Non-Pressure Parts</h5>
                            <ul class="list3">
                            <li>Air Nozzles for AFBC Boilers</li>
							<li>Air Nozzles for CFBC Boilers</li>
                            <li>Mixing Nozzle</li>
                            <li>Fuel Nozzle</li>
                            <li>Fuel Nozzle Cap</li>
							<li>Fuel Nozzle Cap with design improvement</li>
                            <li>Cross</li>
                            <li>Pocket feeder</li>
                            <li>Rotor for pocket feeder</li>
                            <li>Drag Chain Feeder</li>
                            <li>Chain for Drag Chain Feeder</li>
                            <li>Ash Feeder</li>
                            <li>MDC Cone</li>
                            <li>MDC inlet guide vane</li>
                            <li>MDC outlet guide vane</li>
                            
                           
                            </ul>
                            </div>
                             <div class="grid_4">
                             <ul class="list3" style="margin-top:25px;">
                              <li>SS Ferrules</li>
                            <li>Man Hole Door</li>
                            <li>Clinker Cleaning Door</li>
                            <li>Scalloped Plates</li>
                            <li>Shield for superheater, economizer coils</li>
                            <li>Grate bars</li>
                            <li>Air heater tubes</li>
                            <li>Air heater tube sheets</li>
							<li>Air heaters assembly</li>
                            <li>Airbox assembly and Distributer plates</li>
                            <li>Expansion Bellows</li>
                            <li>Dampers</li>
                            <li>Silencers</li>
                            <li>Thermowells</li>
                             </ul>
                             </div>
                             <!--<div class="grid_4">
                             <img src="images/non-pressure.jpg" style="border:1px solid rgba(119, 117, 117, 0.11);" >
                             </div>-->
                              </div>
                              <br>
                               
                              <div class="row">
                              <div class="grid_4">
                               <h5>Rotating Equipments</h5>
                            <ul class="list3">
                            <li>Impeller with shaft assembly for FD Fan</li>
                            <li>Impeller with shaft assembly for ID Fan</li>
                            <li>Impeller with shaft assembly for PA Fan</li>
                            <li>Impeller with shaft assembly for SA Fan</li>
                            <li>Casing and base frames for FD,ID,PA&amp;SA Fans</li>
                            <li>Fan shaft - Hollow &amp; Solid</li>
                            <li>Cooling fans</li>
                            </ul>
                            </div>
                            <div class="grid_4">
                            <h5>ESP</h5>
                            <ul class="list3">
                            <li>Collecting electrodes</li>
                            <li>Emitting electrodes</li>
                            <li>Top / Bottom suspension frame</li>
                            <li>GD Screen</li>
                            <li>Support Insulator</li>
                            <li>Shaft Insulator</li>
                            <li>Bushing Insulator</li>
                            </ul>
                              </div>
							  
                              <!--<div class="grid_4">
                             <img src="images/rotating.jpg" style="border:1px solid rgba(119, 117, 117, 0.11);" >
                             </div>-->
                              </div>
							  <div class="row">
							      <div class="grid_12">
							                <h5>Water Treatment Spares & Consumables</h5>
							      </div>
							  <div class="grid_4">
                      
                            <ul class="list3">
                            <li>Membranes</li>
                            <li>Resins</li>
                            <li>Ejector</li>
                            <li>Strainers</li>
                            <li>Flow meters </li>
                            <li>Ro & UF spares, etc.,</li>
                            
                            
                            </ul>
                              </div>
                              <div class="grid_4">
                        
                            <ul class="list3">
                           
                            <li>Micron Cartridge Filters</li>
                            <li>Dosing Pumps</li>
                            <li>Valves</li>
                            <li>Laboratory instruments, Glassware and accessories </li>
                            
                            </ul>
                              </div>
							  </div>
                              <br><br>
                              <p>We also supply the following Chemicals suitable for Water Treatement Plants and Boilers</p>
                              <div class="row">
                              
                              <div class="grid_8">
                              <h5>Water Treatment Plant and Boiler Chemicals</h5>
                               <ul class="list3">
                               <li>Special Chemicals for Boilers, DM plant, <br>RO plant &amp; Cooling Towers</li>
                               <li>Laboratory Chemicals – (Merck / Qualigens / Rankem)</li>
                               <li>RO – Antiscalant</li>
                               <li>RO – Cleaning chemicals</li>
                               <li>UF – Cleaning chemicals</li>
                               <li>Boiler treatment chemicals – Hydrazine hydrate, Tri Sodium phosphate</li>
                               <li>DM plant chemicals – Morpholine,Caustic soda  and HCL</li>
                               <li>Pre Treatment chemicals – Ferric chloride, Lime, Cationic polymer, Hypo, Alum, and SMBS</li>
                               
                               </ul>
                               <br>
                               <!-- <h5>Water Treatment Spares</h5>
                                <ul class="list3">
                                <li>Membranes</li>
                                 <li>Resins</li>
                                  <li>Ejectors</li>
                                   <li>Strainers etc.,</li>
                                </ul>-->
                            </div>
                            <!--<div  class="grid_3">
                               <img src="images/drum1.png" style="border:1px solid rgba(119, 117, 117, 0.11);" >
                              </div>-->
                              <!--<div class="grid_7">
                             <img src="images/drumgroup1.png" style="border:1px solid rgba(119, 117, 117, 0.11);" >
                             </div>-->
                              </div>
                              
                              <!--<div class="row">
                              <div  class="grid_4">
                              
                              </div>
                              </div>-->
                              </div>
                              </div>
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
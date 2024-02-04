 <!DOCTYPE html>

 <html lang="zxx">

 <head>

     <?php include("include/top-header.php"); ?>

 </head>





 <body>





     <?php include("include/top-headerlogo.php"); ?>







     <!-- BANNER -->



     <div id="slides" class="section banner">



         <ul class="slides-container">



             <li>



                 <img src="images/slide-2.jpg" alt="">



                 <div class="overlay-bg"></div>



                 <div class="container">



                     <div class="wrap-caption">



                         <h2 class="caption-heading">



                             O & M Services



                         </h2>



                         <p class="excerpt"> Expertise Man Power with relevant Technical Knowledge </p>



                         <a href="service.php?srv=1" class="btn btn-primary" title="LEARN MORE">Learn More</a> <a
                             href="contactus.php" class="btn btn-secondary" title="CONTACT US">Contact Us</a>



                     </div>



                 </div>



             </li>



             <li>



                 <img src="images/slide-3.jpg" alt="">



                 <div class="overlay-bg"></div>



                 <div class="container">



                     <div class="wrap-caption">



                         <h2 class="caption-heading">



                             Pre-Commissioning & Commissioning Services



                         </h2>



                         <p class="excerpt">With more than three decades of Rich Experience</p>



                         <a href="service.php?srv=2" class="btn btn-primary" title="LEARN MORE">Learn More</a> <a
                             href="contactus.php" class="btn btn-secondary" title="CONTACT US">Contact Us</a>



                     </div>



                 </div>



             </li>



             <li>



                 <img src="images/slide-5.jpg" alt="">



                 <div class="overlay-bg"></div>



                 <div class="container">



                     <div class="wrap-caption">



                         <h2 class="caption-heading">



                             Performance Test & Energy Audit



                         </h2>



                         <p class="excerpt">Energy optimization of BTG & BOP’s. </p>



                         <a href="service.php?srv=4" class="btn btn-primary" title="LEARN MORE">Learn More</a> <a
                             href="contactus.php" class="btn btn-secondary" title="CONTACT US">Contact Us</a>



                     </div>



                 </div>



             </li>







             <li>



                 <!--<img src="images/slide-1.jpg" alt="">-->

                 <img src="intra/assets/images/events/e1_NY-power-plant-e1521205168344.jpg" alt="">



                 <div class="overlay-bg"></div>



                 <div class="container">



                     <div class="wrap-caption">



                         <h2 class="caption-heading">





                             Specialised Services

                         </h2>



                         <p class="excerpt">Expertise in Energy Efficiency and Reliability.</p>



                         <a href="service.php?srv=6" class="btn btn-primary" title="LEARN MORE">Learn More</a> <a
                             href="contactus.php" class="btn btn-secondary" title="CONTACT US">Contact Us</a>



                     </div>



                 </div>



             </li>



         </ul>tes







         <nav class="slides-navigation">



             <div class="container">



                 <a href="#" class="next">



                     <i class="fa fa-chevron-right"></i>



                 </a>



                 <a href="#" class="prev">



                     <i class="fa fa-chevron-left"></i>



                 </a>



             </div>



         </nav>







     </div>







     <!-- ABOUT FEATURE -->







     <section id="news-marquee-section" style="display:none">



         <div class="container">



             <ul class="nmq-wrapper">



                 <li class="hidden-xs">Updates</li>



                 <li>



                     <div class="scroll-left">



                         <div class="news-slider">



                             <div class="pt-1"><strong></strong></div>



                             <marquee behavior="scroll" direction="left" onmouseover="this.stop();"
                                 onmouseout="this.start();" scrolldelay="90">



                                 <div class="slide"><?php $tq1 = mysqli_query($idb, "select *  from website_updates $e_qry   order by upd_id DESC  ");







																																				if (mysqli_num_rows($tq1) > 0) {



																																					$sno = 1;



																																					while ($tr1 = mysqli_fetch_array($tq1)) {



																																						echo $tr1['upd_descr'];



																																						echo "&nbsp;&nbsp;&nbsp; ";



																																					}







																																				} ?></div>



                             </marquee>



                         </div>



                     </div>



                 </li>



             </ul>



         </div>



     </section>







     <div class="section feature">



         <div class="container">







             <div class="row">







                 <div class="col-sm-4 col-md-4 text-center">



                     <!-- BOX 1 overlap -->



                     <div class="box-icon-2">



                         <div class="icon">



                             <img src="images/icon-1.png" width="50" alt="icon">



                         </div>



                         <div class="body-content">



                             <div class="heading">Vision</div>



                             <p>To become leader in service provider for Operation and Maintenance of thermal power
                                 plant of all types and capacity to achieve maximum plant availability, reliability and
                                 optimum performance. This is achieved through clarity in procedures, trained human
                                 resource, timely spares planning, maintenance management, health & safety and adherence
                                 of environmental requirements. </p>



                             <!--<a href="aboutus.php" class="readmore">read more</a>-->



                         </div>



                     </div>



                 </div>



                 <div class="col-sm-4 col-md-4 text-center">



                     <!-- BOX 2 -->



                     <div class="box-icon-2">



                         <div class="icon">



                             <img src="images/icon-2.png" width="50" alt="icon">



                         </div>



                         <div class="body-content">



                             <div class="heading">Mission</div>



                             <p>Knowledge is Power.<br>

                                 Knowledge enrichment of Engineers and Technicians in their working areas to deliver the
                                 requirements of the clients in the power plant performance, availability, reliability
                                 to ensure their satisfaction.

                             </p>

                             <br><br>

                             <!--<a href="aboutus.php" class="readmore">read more</a>-->



                         </div>



                     </div>



                 </div>



                 <div class="col-sm-4 col-md-4 text-center">



                     <!-- BOX 3 -->



                     <div class="box-icon-2">



                         <div class="icon">



                             <img src="images/icon-3.png" width="50" alt="icon">



                         </div>



                         <div class="body-content">



                             <div class="heading">Values</div>



                             <p style="text-align:left">

                                 01. Understanding the Client's requirements<br>

                                 02. Offering effective tailor made solution<br>

                                 03. Deploying knowledge based human resources<br>

                                 04. Implementing solution and evaluation

                             </p>

                             <br><br><br><br>

                             <!--<a href="aboutus.php" class="readmore">read more</a>-->



                         </div>



                     </div>



                 </div>







             </div>







             <div class="row" style="display:none">



                 <div class="col-sm-12 col-md-12">



                     <h2 class="section-heading">



                         About the Company



                     </h2>



                 </div>



             </div>







             <div class="row" style="display:none">



                 <div class="col-sm-5 col-md-5">



                     <div class="jumbo-heading">



                         <img src="images/aboutus-01.jpg" class="img-responsive" alt="Aboutus">



                     </div>



                 </div>



                 <div class="col-sm-7 col-md-7">



                     <h3><span><img src="images/icon-6.png" width="30" alt="icon"></span> Corporate Profile</h3>



                     <p class="lead"> An ISO 9001:2015 Certified Company</p>



                     <p class="text-justify">Incorporated in the Year 2013;</p>



                     <p class="text-justify">SPEL, an ISO 9001:2015 Certified Company, promoted by the Group of young
                         Engineers having more than two decades of rich experience in the fields of Proposal, Marketing,
                         Project Management, Manufacturing, Erection, Commissioning, Troubleshooting, Operation and
                         Maintenance of Thermal Power Plants of various capacities;</p>



                     <p class="text-justify">Their vast experience and Engineering back ground in Utility and Industrial
                         thermal power plants prompted them to establish this company with an aim to help industries
                         like cement, steel, sugar, pharma and other captive and co-gen power plants of all industries
                         for their operation and maintenance service and spares needs.</p>







                     <h4>Objectives</h4>



                     <ul class="list-style">



                         <li>To meet the target fixed by the client</li>



                         <li>To maintain the plant in good working condition always</li>



                         <li>To execute all scheduled maintenance of each equipment</li>



                         <li>To meet statutory requirements to run the plant</li>



                         <li>To maintain a clean environment of the plant</li>



                     </ul>



                     <h6>WE WILL ASSURE OUR BEST SERVICES EVER & FOR EVER.</h6>



                 </div>







             </div>







             <div class="row" style="display:none">



                 <div class="col-sm-5 col-md-6">



                     <h3><span><img src="images/icon-4.png" width="30" alt="icon"></span> Quality Policy</h3>



                     <p class="text-justify">We are committed to meeting customer requirements through continual
                         improvements of our Quality Managements Systems. We shall sustain organizational excellence
                         through timely responsiveness, Quality consciousness, visionary leadership, employees
                         participation and innovative efforts.</p>



                 </div>



                 <div class="col-sm-7 col-md-6">



                     <h3><span><img src="images/icon-5.png" width="30" alt="icon"></span> Safety Policy </h3>



                     <p class="text-justify">We SPEL believe that our business enhancement depends on providing a
                         healthy safe working environment and culture to our employees and we are ensuring optimal
                         utilization of men, machines and resources in contribution to the growth of organization and
                         society.</p>



                 </div>







             </div>







             <div class="row" style="display:none">



                 <div class="col-sm-12 col-md-12">



                     <h3><span><img src="images/icon-8.png" width="30" alt="icon"></span> HR Policy <span
                             class="text-right"><a href="careers.php" class="btn btn-danger">Current Vacancy</a></span>
                     </h3>



                     <p class="text-justify">SPEL is an Agile Organisation implementing strong HR Policies for the
                         benefits of both Employees and the Growth of the Company. SPEL is implementing the HR Policies
                         on Recruitment of Rightly Qualified Resources for the Right Job, Retention of High Performing
                         and Valuable Resources, Training, Development and continual Assessments to promote individual
                         career growth within the Organisation and to increase the overall value of the Organisation,
                         maintaining Safe, Healthy and Stimulating Working Environment, creating the values of great
                         Culture, Integrity, Trust and Inclusiveness.</p>



                     <p class="text-justify">SPEL is an Equal Opportunity Employer gives a Professional Environment for
                         the Employees to approach freely within the Organisation and even the Top Level Management by
                         providing inspiration and encouragement for a high level of employee morale through
                         Recognition, Effective Communication and Constant Feedback.</p>



                 </div>



             </div>







         </div>



     </div>







     <!-- ABOUT COMPANY -->



     <div class="section why section-border bglight" style="display:none">



         <div class="container">



             <div class="row">







                 <div class="col-sm-5 col-md-5">



                     <div class="director-image">



                         <img src="images/aboutus-02.jpg" class="img-responsive" alt="Aboutus" style="

    height: 440px;

">



                     </div>



                     <div class="margin-bottom-30"></div>



                 </div>



                 <div class="col-sm-7 col-md-7">



                     <h3 class="director-title"><span><img src="images/icon-7.png" width="30" alt="icon"></span>
                         Directors Profile</h3>



                     <div class="director-position"></div>



                     <div class="margin-bottom-30"></div>



                     <p>SPEL is promoted and effectively managed by the well qualified and experienced team of DIRECTORS
                         who have a common vision of establishing the Organisation as Globally one of the best in this
                         sector. They are able to acquire many challenging projects with their collective experience and
                         wide contact of leading Industrial Houses. They have achieved highest performances in all their
                         projects by engaging and guiding a team of experts who are all technically sound and
                         experienced in their relevant portfolio. </p>







                     <div class="row">







                         <div class="col-sm-6 col-md-6">



                             <div class="body-content box-bord">



                                 <div class="people">
                                     <h4>Mr. B.V.Ramesh</h4>
                                 </div>



                                 <div class="position">Director, Business Development</div>



                                 <span><a href="about-ramesh.php" class="readmore">read more</a></span>



                             </div>



                         </div>







                         <div class="col-sm-6 col-md-6">



                             <div class="body-content box-bord">



                                 <div class="people">
                                     <h4>Mr. S.Sivakumar</h4>
                                 </div>



                                 <div class="position">Director, Operations</div>



                                 <span><a href="about-sivakumar.php" class="readmore">read more</a></span>



                             </div>



                         </div>







                         <div class="col-sm-6 col-md-6">



                             <div class="body-content box-bord">



                                 <div class="people">
                                     <h4>Mr. P.Thangaraju</h4>
                                 </div>



                                 <div class="position">Director, Marketing</div>



                                 <span><a href="about-thangaraju.php" class="readmore">read more</a></span>



                             </div>



                         </div>







                         <div class="col-sm-6 col-md-6">



                             <div class="body-content box-bord">



                                 <div class="people">
                                     <h4>Mr. K.Venkatachalaraja</h4>
                                 </div>



                                 <div class="position">Director, Manufacturing Services</div>



                                 <span><a href="about-venkat.php" class="readmore">read more</a></span>







                             </div>



                         </div>







                     </div>







                 </div>



             </div>



         </div>



     </div>







     <!-- PROJECTS -->



     <!-- PROJECTS -->

     <div class="section project" style="display:none">

         <div class="container">

             <div class="row">

                 <div class="col-sm-12 col-md-12">

                     <h2 class="section-heading white">

                         Projects

                     </h2>

                 </div>

             </div>

             <div class="row">

                 <div class="col-sm-12 col-md-12">

                     <nav class="categories">

                         <ul class="portfolio_filter">

                             <li style="display:none"><a href="" class="active" data-filter="*">all</a></li>

                             <?php







$pq1 = mysqli_query($idb, "SELECT expr_id FROM experience_list where status = '1' and srcat_id ='1' order by expr_id DESC LIMIT 0,3  ");

$f_ids1 = array();



while ($pf1 = mysqli_fetch_array($pq1)) {

	$f_ids1[] = $pf1["expr_id"];



	$fst_pjts = implode(", ", $f_ids1);



}











$ids1 = array();

$ids2 = array();



$iq1 = mysqli_query($idb, "SELECT expr_id,srcat_id FROM experience_list where status = '1' group by srcat_id order by crt_stm DESC LIMIT 0,6 ");

while ($if1 = mysqli_fetch_array($iq1)) {

	$ids1[] = $if1["expr_id"];

	$ids2[] = $if1["srcat_id"];





	$pjt_ids = implode(", ", $ids1);

	$cat_ids = implode(", ", $ids2);



}









$om_pjts = explode(",", $fst_pjts);

$otr_pjts = explode(",", $pjt_ids);



$tot_pjts = array_merge($om_pjts, $otr_pjts);



$fnl_pjts = array_unique($tot_pjts);





$fnl_pjts = implode(",", $fnl_pjts);





//print_r($tot_pjts);



 //print_r($fnl_pjts);





$q1 = mysqli_query($idb, "select *  from service_categories where srcat_id IN($cat_ids)");

if (mysqli_num_rows($q1) > 0) {

	$sno = 1;

	while ($f1 = mysqli_fetch_array($q1)) {

		$cat_id = $f1['srcat_id'];

		$srw = $obj->get_service_category($cat_id);



		$cat_nme = $srw['name'];



		$scat_nme = preg_replace("/[^A-Z]+/", "", $cat_nme);



		$srt_nme = mb_substr($scat_nme, 0, 3);

		?>



                             <li><a href="" id="srv<?php echo $sno ?>" class="pjt_ld"
                                     data-filter=".<?php echo $srt_nme ?>"><?php echo $srw['name']; ?></a></li>

                             <?php

$sno = $sno + 1;

}

}

?>



                         </ul>

                     </nav>

                 </div>

             </div>







             <div class="row grid-services default">







                 <?php





$sq1 = mysqli_query($idb, "select *  from experience_list where status = '1' and  expr_id IN($fnl_pjts) ");



if (mysqli_num_rows($sq1) > 0) {

	$sno = 1;

	?>



                 <?php

while ($sf1 = mysqli_fetch_array($sq1)) {

	$cat_id = $sf1['srcat_id'];

	$srw = $obj->get_service_category($cat_id);

	$cat_nme = $srw['name'];

	$scat_nme = preg_replace("/[^A-Z]+/", "", $cat_nme);

	$srt_nme = mb_substr($scat_nme, 0, 3);



	?>

                 <div class="col-sm-6 col-md-4 <?php echo $srt_nme ?> manufacturing gas srct">

                     <div class="box-image-4">

                         <a href="per-experiencelist.php?srv=<?php echo $cat_id ?>" title="<?php echo $cat_nme ?>">

                             <div class="media">

                                 <img src="intra/assets/images/projects/<?php echo $sf1['pjt_img']; ?>" alt=""
                                     class="img-responsive">

                             </div>

                             <div class="body">

                                 <div class="content">

                                     <h4 class="title"><?php echo $sf1['cmr_nme']; ?></h4>

                                     <span class="category"><?php echo $sf1['cmr_loc']; ?></span>

                                 </div>

                             </div>

                         </a>

                     </div>

                 </div>

                 <?php

}

}

?>



                 <?php



 //}

?>



             </div>







             <div class="row grid-services all" style="display:none">





                 <?php



$cat_rw = explode(',', $cat_ids);

foreach ($cat_rw as $cat_id) {

	$sq1 = mysqli_query($idb, "select *  from experience_list where  status = '1' and  srcat_id IN($cat_id)order by  expr_id DESC LIMIT 0,6 ");



	if (mysqli_num_rows($sq1) > 0) {

		$sno = 1;

		?>



                 <?php

while ($sf1 = mysqli_fetch_array($sq1)) {

	$cat_id = $sf1['srcat_id'];

	$srw = $obj->get_service_category($cat_id);

	$cat_nme = $srw['name'];

	$scat_nme = preg_replace("/[^A-Z]+/", "", $cat_nme);

	$srt_nme = mb_substr($scat_nme, 0, 3);



	?>

                 <div class="col-sm-6 col-md-4 <?php echo $srt_nme ?> manufacturing gas srct">

                     <div class="box-image-4">

                         <a href="per-experiencelist.php?srv=<?php echo $cat_id ?>" title="<?php echo $cat_nme ?>">

                             <div class="media">

                                 <img src="intra/assets/images/projects/<?php echo $sf1['pjt_img']; ?>" alt=""
                                     class="img-responsive">

                             </div>

                             <div class="body">

                                 <div class="content">

                                     <h4 class="title"><?php echo $sf1['cmr_nme']; ?></h4>

                                     <span class="category"><?php echo $sf1['cmr_loc']; ?></span>

                                 </div>

                             </div>

                         </a>

                     </div>

                 </div>

                 <?php

}

}

?>



                 <?php



}

?>



             </div>





         </div>

     </div>











     <div class="section services">



         <div class="container">



             <div class="row">



                 <div class="col-sm-12 col-md-12">



                     <h2 class="section-heading">



                         Our Services



                     </h2>



                 </div>



             </div>







             <div class="row no-gutter">



                 <?php

			$iq1 = mysqli_query($idb, "select GROUP_CONCAT(DISTINCT srcat_id)  as  cat_ids  from service_subcategories where status ='0' Limit 6");

			$if1 = mysqli_fetch_array($iq1);

			$cat_ids = $if1['cat_ids'];





			$q2 = mysqli_query($idb, "select *  from service_categories where status ='0' and srcat_id NOT IN($cat_ids) Limit 3");



			if (mysqli_num_rows($q2) > 0) {



				$sno = 1;

				while ($f2 = mysqli_fetch_array($q2)) {

					$cat_id = $f2['srcat_id'];

					$icon_img = $f2['icon_img'];





					$iq2 = mysqli_query($idb, "select descr,srv_id  from services_list where srcat_id='$cat_id' Limit 6");

					$if2 = mysqli_fetch_array($iq2);

					$descr = $f2['descr'];



					?>







                 <div class="col-sm-6 col-md-4">



                     <!-- BOX 1 -->



                     <div class="flip-box">



                         <div class="line-t"></div>



                         <div class="flip-box-inner">



                             <div class="flip-box-front">







                                 <div class="icon">



                                     <img src="intra/assets/images/services/<?php echo $f2['icon_img']; ?>" width="50"
                                         alt="icon">



                                 </div>



                                 <div class="heading"> <?php echo $f2['name']; ?></div>



                             </div>



                             <div class="flip-box-back">



                                 <div class="heading"> <?php echo $f2['name']; ?></div>



                                 <?php echo $f2['descr']; ?>







                                 <a href="service.php?srv=<?php echo $cat_id ?>" class="readmore">READ MORE</a>



                             </div>



                         </div>



                         <div class="line-b"></div>







                     </div>







                 </div>







                 <?php



}



}



?>











                 <?php

  //$q3=mysqli_query($idb,"select * from service_subcategories where status ='0' and srv_order between 1 and 3 order by srv_order ASC LIMIT 0,3  " );

$q3 = mysqli_query($idb, "select * from service_subcategories where status ='0'  order by srv_order ASC LIMIT 0,3  ");



if (mysqli_num_rows($q3) > 0) {

	$sno = 1;

	while ($f3 = mysqli_fetch_array($q3)) {

		$cat_id = $f3['srcat_id'];



		$srw = $obj->get_service_category($cat_id);

		$sbcat_id = $f3['srsbcat_id'];



		$iq3 = mysqli_query($idb, "select descr,sbcat_id  from services_list where srsbcat_id='$sbcat_id' Limit 6");

		$if3 = mysqli_fetch_array($iq3);

		$descr = $srw['descr'];



		?>











                 <div class="col-sm-6 col-md-4">



                     <!-- BOX 1 -->



                     <div class="flip-box">



                         <div class="line-t"></div>



                         <div class="flip-box-inner">



                             <div class="flip-box-front">







                                 <div class="icon">



                                     <img src="intra/assets/images/services/<?php echo $srw['icon_img']; ?>" width="50"
                                         alt="icon">



                                 </div>



                                 <div class="heading"> <?php echo $f3['name']; ?></div>



                             </div>



                             <div class="flip-box-back">



                                 <div class="heading"> <?php echo $f3['name']; ?></div>



                                 <?php echo $srw['descr']; ?>



                                 <a href="service.php?srv=<?php echo $cat_id ?>" class="readmore">READ MORE</a>



                             </div>



                         </div>



                         <div class="line-b"></div>







                     </div>







                 </div>





                 <?php



}

}

?>







             </div>



         </div>



     </div>

















     <div class="container">



         <div class="row">



             <div class="col-sm-12 col-md-12">



                 <h2 class="section-heading">



                     EXPERIENCE AND HUMAN RESOURCES



                 </h2>



             </div>



         </div>

     </div>



     <section id="stats-section" style="margin-bottom:50px;">



         <div class="container">

             <div class="stats-wrapper">



                 <ul>



                     <li>



                         <div class="wow fadeInUp">

                             <h5>Range of Plant Capacity</h5>

                             <h4>1.25 to 350 MW</h4>







                         </div>



                     </li>



                     <li>



                         <div class="wow fadeInDown">

                             <h5>Current Projects</h5>

                             <h4>17+</h4>







                         </div>



                     </li>



                     <li>



                         <div class="wow fadeInUp">

                             <h5>Clients</h5>

                             <h4>85+</h4>







                         </div>



                     </li>



                     <li>



                         <div class="wow fadeInDown">

                             <h5>Skilled Man Power </h5>

                             <h4>750+</h4>







                         </div>



                     </li>







                 </ul>



             </div>



         </div>



     </section>







     <!-- TESTIMONIALS -->



     <div class="section testimony bglight" style="display:none">



         <div class="container">







             <div class="row">







                 <div class="col-sm-12 col-md-12">







                     <div class="row">



                         <div class="col-sm-12 col-md-12">



                             <h2 class="section-heading">



                                 Testimonials



                             </h2>



                         </div>



                     </div>







                     <div class="flip-boxa p-1">







                         <div id="owl-testimony">



                             <?php 



						$q3 = mysqli_query($idb, "select *  from testimonials_list where status ='0'");



						if (mysqli_num_rows($q3) > 0) {



							$sno = 1;



							while ($f3 = mysqli_fetch_array($q3)) {







								?>



                             <div class="item">



                                 <div class="testimonial-1 carousel slide">



                                     <div class="body">



                                         <div class="testimonial-wrapper">

                                             <div class="testimonial"><?php echo $f3['tstmnl']; ?></div>

                                             <div class="media">



                                                 <div class="media-body">

                                                     <div class="overview">

                                                         <div class="name"><b><?php echo $f3['prsn_nme']; ?></b></div>

                                                         <div class="details"><?php echo $f3['cmp_nme']; ?></div>

                                                     </div>

                                                 </div>

                                             </div>

                                         </div>



                                         <!--<div class="title"><?php echo $f3['prsn_nme']; ?></div>-->



                                         <!--<div class="company"><?php echo $f3['cmp_nme']; ?></div>-->



                                         <!--<p><?php echo $f3['tstmnl']; ?> </p>-->



                                     </div>



                                 </div>



                             </div>







                             <?php







}



}



?>















                         </div>







                     </div>







                 </div>







             </div>



         </div>



     </div>







     <!-- CTA -->



     <div class="section cta section contact">



         <div class="container">







             <div class="row">



                 <div class="col-sm-12 col-md-12">



                     <div class="cta-info">



                         <h3 class="text-center">



                             Quick Enquiry



                         </h3>



                         <form action="index.php" class="form-contact" id="contactForm" data-toggle="validator"
                             method="post" novalidate="true">



                             <div class="form-group row">



                                 <div class="col-sm-12 col-md-6">



                                     <input type="text" class="form-control" id="name" name="name" maxlength="50"
                                         placeholder="Name & Designation" required="">



                                     <div class="help-block with-errors"></div>



                                 </div>



                                 <div class="col-sm-12 col-md-6">


									<input type="text" class="form-control" id="cname" name="cname" maxlength="50"
											placeholder="Company Name" required="">
                                     



                                     <div class="help-block with-errors"></div>



                                 </div>



                             </div>







                             <div class="form-group row">

								 <div class="col-sm-12 col-md-6">


									<input type="text" class="form-control" id="mobile" name="mobile"
                                         placeholder="Mobile no." required=""
                                         onKeyPress="return blockNonNumbers(this,event,2,false);" maxlength="10">



										<div class="help-block with-errors"></div>



										</div>



                                 <div class="col-sm-12 col-md-6">



                                     <input type="email" class="form-control"
                                         pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" id="email" name="email"
                                         placeholder="E-mail ID" required="">



                                     <div class="help-block with-errors"></div>



                                 </div>



                             </div>



                             <div class="form-group row">



                                 <div class="col-md-12">



                                     <textarea id="qu_message" name="qu_message" class="form-control" rows="6"
                                         placeholder="Requirment Description" maxlength="400"></textarea>



                                     <div class="help-block with-errors"></div>



                                 </div>



                             </div>



                             <div class="form-group text-center">



                                 <div id="success"></div>



                                 <button type="submit" name="submit" id="qenquiry" class="btn btn-cta"
                                     style="pointer-events: all; cursor: pointer;">Send Enquiry</button>



                             </div>



                         </form>



                     </div>



                 </div>



             </div>



         </div>



     </div>





     <div class="section services">



         <div class="container">



             <div class="row">



                 <div class="col-sm-12 col-md-12">



                     <h2 class="section-heading">



                         KEY PERFORMANCE INDICATORS (KPI)



                     </h2>



                 </div>



             </div>

             <div class="row">





                 <div class="col-sm-6">







                     <ul class="list-style">

                         <li>Plant load factor</li>

                         <li>Plant availability factor</li>

                         <li>Plant Heat rate</li>

                         <li> Boiler thermal efficiency (as fired fuel)</li>

                         <li>

                             Turbine heat rate

                         </li>



                         <li>

                             Auxiliary Power consumption

                         </li>

                         <li>

                             Specific fuel consumption

                         </li>

                         <li>Specific steam consumption</li>

                         <li>Specific combustion air flow</li>

                     </ul>

                 </div>



                 <div class="col-sm-6">





                     <ul class="list-style">



                         <li> Specific flue gas flow</li>

                         <li> Compressed air consumption.</li>

                         <li> Steam fuel ratio.</li>

                         <li> Specific power consumption of ID,FD,PA / SA fans</li>

                         <li> Raw water & DM water consumption </li>

                         <li> Excess air control</li>

                         <li> Flue gas temperature leaving at APH.</li>

						 <li> Percentage of blow down</li>
						 
						 <li> Emission Monitoring – SPM, SOx, NOx, CO.</li>

                     </ul>

                 </div>



             </div>















         </div>



     </div>







     <!-- BLOG -->



     <div class="section blog" style="display:none">



         <div class="container">



             <div class="row">







                 <div class="col-sm-6 col-md-6">



                     <div class="flip-boxa p-2">



                         <h2 class="section-heading">



                             Monthly Performance Report



                         </h2>



                         <div class="box-news-1">



                             <marquee loop="infinite" height="150" behavior="scroll" scrollamount="2" scrolldelay="15"
                                 direction="up" onMouseOver="this.stop();" onMouseOut="this.start();">



                                 <ul class="bull">



                                     <?php 



$q4 = mysqli_query($idb, "select *  from monthly_perfomances where status ='1'");



if (mysqli_num_rows($q4) > 0) {



	$sno = 1;



	while ($f4 = mysqli_fetch_array($q4)) {







		?>







                                     <li> <a target="_blank"
                                             href="intra/assets/docs/perfomances/<?php echo $f4['perf_doc'] ?>">
                                             <?php echo $f4['title'] ?></a> </li>







                                     <?php







}



}



?>



                                 </ul>



                             </marquee>







                         </div>







                     </div>



                 </div>







                 <div class="col-sm-6 col-md-6">



                     <div class="flip-boxa p-2">



                         <h2 class="section-heading">



                             Articles



                         </h2>







                         <div class="box-news-1">



                             <marquee loop="infinite" height="150" behavior="scroll" scrollamount="2" scrolldelay="15"
                                 direction="up" onMouseOver="this.stop();" onMouseOut="this.start();">



                                 <ul class="bull">



                                     <?php 



																													$q5 = mysqli_query($idb, "select *  from articles_list where status ='1'");



																													if (mysqli_num_rows($q5) > 0) {



																														$sno = 1;



																														while ($f5 = mysqli_fetch_array($q5)) {







																															?>







                                     <li> <a target="_blank"
                                             href="intra/assets/docs/articles/<?php echo $f5['art_doc'] ?>">
                                             <?php echo $f5['title'] ?></a> </li>







                                     <?php







}



}



?>



                                 </ul>



                             </marquee>







                         </div>



                     </div>



                 </div>















             </div>



         </div>



     </div>











     <div class="section testimony bglight" style="display:none">



         <div class="container">







             <div class="row">







                 <div class="col-sm-12 col-md-12">







                     <div class="row">



                         <div class="col-sm-12 col-md-12">



                             <h2 class="section-heading">



                                 Clients



                             </h2>



                         </div>



                     </div>







                     <div id="owl-testimony4">







                         <?php 



$q6 = mysqli_query($idb, "select *  from clients_list where status ='0'");



if (mysqli_num_rows($q6) > 0) {



	$sno = 1;



	while ($f6 = mysqli_fetch_array($q6)) {











		?>







                         <div class="item">



                             <div class="testimonial-4">



                                 <div class="media text-center bg-white"><img
                                         src="intra/assets/images/clients/<?php echo $f6['cnt_img']; ?>" alt=""></div>



                             </div>



                         </div>







                         <?php



}



}



?>



















                     </div>







                 </div>







             </div>



         </div>



     </div>



















     <?php include("include/top-footertop.php"); ?>







     <?php include("include/top-footer.php"); ?>















     <script src="js/site.js"></script>











 </body>



 </html>







 <script>
$(document).ready(function() {



    var crnt = 'srv1';



    //$("#"+crnt+"").trigger('click');







    //$("a[data-slide='" + crnt +"']")[0].click();



    //$("#myanchor")[0].click()



});







$(".pjt_ld").click(function() {







    //alert('sdfdsg');	



    $('.all').show();



    $('.default').hide();















    //$('.pjt_list').show();







});
 </script>
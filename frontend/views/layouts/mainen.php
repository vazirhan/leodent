<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/favicon.ico">
	<script src="https://api-maps.yandex.ru/2.0-stable/?apikey=<79e1b9d8-6f3c-423e-995e-20343d4f6cc9>&load=package.full&lang=ru-RU" type="text/javascript"></script>
    <?= Html::csrfMetaTags() ?>
    <title>AUGMENTED REALITY DENTAL SIMULATOR </title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<body data-spy="scroll" data-target=".tm-primary-nav">
    
    <!-- Start Preloader -->
   
    <!-- End Preloader -->
    
    <!-- Start Site Header Wrap -->
    <header>
        <div class="tm-site-header">
            <div class="tm-header-info-wrap">
                <div class="container tm-header-info">
                
                <a href="#"><?php echo $this->params['country'];?></a>
                <a href="/" >RU</a>
                <a href="#" class="active-lg">EN</a>
                    <a href="#"><i class="fa fa-phone"></i>1-800-915-6271</a>
                    <a href="#"><i class="fa fa-envelope"></i>info@leodentrus.com</a>
                </div>
            </div>
            <div class="tm-header-menu">
                <div class="container tm-header-menu-container">
                    <div class="tm-site-branding">
                        <!-- For Image Logo -->
                        <a href="index.html" class="tm-logo-link">
                            <img src="/img/logo.png" alt="" class="tm-logo">
                        </a>
                        <!-- For Site Title -->
                        <!-- <span class="tm-site-title">
                        <a href="index.html">Trustlife</a>
                        </span> -->
                    </div>
                    <nav class="tm-primary-nav">
                        <ul class="tm-primary-nav-list">
                            <li class="menu-item menu-item-has-children current-menu-ancestor current-menu-parent">
                                <a href="#home" class="nav-link">HOME</a>
                                
                            </li>
                            <li class="menu-item"><a href="#about" class="nav-link">ABOUT</a></li>
                            <li class="menu-item"><a href="#department" class="nav-link">DEPARTMENT</a></li>
                            <li class="menu-item"><a href="/site/download" class="nav-link">DOWNLOAD</a></li>
                        
                            <li class="menu-item"><a href="#contact" class="nav-link">CONTACT</a></li>
                    
                        </ul>
                    </nav>
                </div><!-- .tm-header-menu-container -->
            </div><!-- .tm-header-menu -->
        </div><!-- .tm-site-header -->
    </header>
    <!-- End Site Header Wrap -->

    <!-- Start Hero Section -->
    <section class="hero tm-bg parallax" id="home" style="background-image: url(/img/slide-02.jpg);">
        <div class="container">
            <div class="slider-text">
                <h1 class="tm-headline letters tm-rotate-text">AUGMENTED<br> REALITY DENTAL <br>SIMULATOR
                    <span class="tm-words-wrapper">
                        <b class="is-visible">LEONARDO</b>
                        <b>LEONARDO</b>
                       
                    </span>
                </h1>
                <div class="empty-space col-sm-b20 col-xs-b10"></div>
               
                <p>It is a multi task AR simulator assessing <br>clinical
competencies integrated in a realistic<br>
environment with accurate 3D visualization</p>
                
                <div class="empty-space col-md-b55 col-sm-b35 col-xs-b25"></div>
                <div class="tm-hero-btn">
                <a href="#leonardo2" class="tm-btn1">MORE...</a>
                </div>
            </div>
        </div><!-- .container -->
        <div class="hero-overlay"></div>
        <div class="shap-wrap">
            <div class="shape"><i class="icofont icofont-tooth"></i></div>
            <div class="shape"><i class="icofont icofont-tooth"></i></div>
            <div class="shape"><i class="fa fa-hospital-o"></i></div>
            <div class="shape"><i class="fa fa-medkit"></i></div>
            <div class="shape"><i class="icofont icofont-tooth"></i></div>
            <div class="shape"><i class="fa fa-ambulance"></i></div>
            <div class="shape"><i class="fa fa-wheelchair-alt"></i></div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Start  -->
    
    <!-- Start  -->
 <!-- Start Department Section -->
    <section class="tm-gray-bg" id="about">
        <div class="empty-space col-md-b30 col-xs-b70"></div>
        <div class="tm-section-heading text-center" id="leonardo2">
            <h2>SIMULATOR LEONARDO</h2>
			    <div class="tm-section-seperator"><span></span></div>
           
        </div>
        <div class="container">
            <div class="tm-tab-wrap">
               <!-- <div class="tm-tabs-wrap">
                    <ul class="tabs">
                        <li><i class="icofont icofont-tooth"></i>DENTAL CARE</li>
                        <li><i class="icofont icofont-brain"></i>NEUROLOGY</li>
                        <li><i class="icofont icofont-crutches"></i>CRUTCHES</li>
                        <li><i class="icofont icofont-pulse"></i>CARDIOLOGY</li>
                        <li><i class="icofont icofont-lungs"></i>PULMONARY</li>
                        <li><i class="icofont icofont-xray"></i>X-RAY</li>
                    </ul> <!-- .tabs 
                </div>-->
                <div class="empty-space col-md-b60 col-xs-b40"></div>
                <div class="tm-tab-content" >
                  
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tm-dept-img"><img src="/img/1.dental.jpg" alt=""></div>
                            </div><!-- .col -->
                            <div class="col-lg-6">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about tm-gray-bg">
									   <h3 class="tm-about-title">REALISTIC ENVIRONMENT & MULTIDISCIPLINARY DEVICE</h3>
                                        <div class="tm-about-text">
										<div class="l-description">
											<i class="icofont icofont-check-circled"></i><span> Used tools are real HP and Typodont without
any trackers</span>
										</div>
										<div class="l-description">
											<i class="icofont icofont-check-circled"></i><span> No more heavy trackers attached to dental tools</span>
										</div>
										<div class="l-description">
											<i class="icofont icofont-check-circled"></i><span> Simple and real automated calibration</span>
										</div>
                                         
										<div class="l-description">
											<i class="icofont icofont-check-circled"></i><span> Integration with major brand of Typodont selected
by the dental institution
</span>
										</div>
                                        <div class="l-description">
											<i class="icofont icofont-check-circled"></i><span> No more issue with smooth tracking system</span>
										</div>
                                           
                                        <div class="l-description">
											<i class="icofont icofont-check-circled"></i><span> Cavity preparation procedures designed by dental
instructors and integrated easily in the simulator</span>
										</div>    
                                        <div class="l-description">
											<i class="icofont icofont-check-circled"></i><span> Radiography Module</span>
										</div>
                                        <div class="l-description">
											<i class="icofont icofont-check-circled"></i><span> Anesthesiology Module</span>
										</div>
                                        <div class="l-description">
											<i class="icofont icofont-check-circled"></i><span> More in development (Hygiene Module)</span>
										</div>
                                           
                                        </div>
										 
                                        
                                    </div>
									  </div>
                            </div><!-- .col -->
                        </div>
               
                 
                    
                  
                   
                    
                    
                </div> <!-- .tm-tab-content -->
            </div> <!-- .tab -->
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </section>
	<section class="empty-space " id="leonardo2">
   
        
        <div class="container ">
            <div class="tm-tab-wrap">
            
                <div class="empty-space col-md-b60 col-xs-b40"></div>
                <div class="tm-tab-content">
                  
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tm-dept-img">
								<img src="/img/video-bg.jpg" alt="">
								</div>
                            </div><!-- .col -->
                            <div class="col-lg-6">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about ">
                                    <h2>REAL TIME 3D-VISUALISATION</h2>
										 <p> AR is enabling the user to visualize his Handpiece positioning in real time</p>
                                         <p>Real time Feedback provided in 3D rendering similar
to digital scanning</p>
<p>Handpiece doesn’t need a tracker so the user feels like
he works with a regular Handpiece</p>
				  


										</div>
                            </div><!-- .col -->
                        </div>

                </div> <!-- .tm-tab-content -->
            </div> <!-- .tab -->
        </div>
        <div class="empty-space col-md-b30 col-xs-b70"></div>
    </section>
	
    <!-- End Department Section -->
	 
    <!-- End FAQ Section -->
	
	<section class="tm-gray-bg " >
      
      
        <div class="container ">
            <div class="tm-tab-wrap">
            
                <div class="empty-space col-md-b60 col-xs-b40"></div>
                <div class="tm-tab-content">
                  
                        <div class="row">
                        <div class="col-lg-6">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about ">
                                    <h2>CARIOLOGY ASSESSMENT</h2>
				<p> At the end of the session a student will get a detailed report on a clinical criteria of preparation:</p>
                            <ul>
                                <li>Deleted carious tissue (%)</li>
                                <li> Healthy tissue damaged (%)</li>
                                <li>Pulp damage (%)</li>
                                <li>Soft tissue damage</li>
                                <li>Neighbor teeth damage</li>
                                <li>Retention</li>
                                <li>Outline shape</li>
                            </ul>
				  


										</div>
                            </div><!-- .col -->
                        </div>
                            <div class="col-lg-6">
                                <div class="tm-dept-img">
								<img src="/img/assessment.jpg" alt="">
								</div>
                            </div><!-- .col -->
                         </div>

                </div> <!-- .tm-tab-content -->
            </div> <!-- .tab -->
        </div>
        <div class="empty-space col-md-b30 col-xs-b30"></div>
    </section>
	<section class="empty-space " >
        
        
        <div class="container ">
            <div class="tm-tab-wrap">
            
                <div class="empty-space col-md-b60 col-xs-b40"></div>
                <div class="tm-tab-content">
                  
                        <div class="row">
						
                            <div class="col-lg-6">
                                <div class="tm-dept-img">
								<img src="/img/debriefing.jpg" alt="">
								</div>
                            </div><!-- .col -->
                            <div class="col-lg-6">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about ">
                                    <h2>DEBRIEFING OR SESSION REVIEW</h2>
                                    <ul>
                                        <li>3D-player with a zoom and rotation tool option</li>
                                        <li>Real video capture from the camera synchronized with 3D-player enabling the instructor to check ergonomic and posture</li>
                                        <li>Real Video capture eliminates issues of cheating during testing</li>
                                        <li>Real Video capture enables to control classroom environment remotely</li>
                                       

                                    </ul>
				 					</div>
                            </div><!-- .col -->
                        </div>   

                </div> <!-- .tm-tab-content -->
            </div> <!-- .tab -->
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </section>
                	
                		
    <section class="tm-gray-bg " >
       
        <div class="container ">
            <div class="tm-tab-wrap">
            
                <div class="empty-space col-md-b60 col-xs-b40"></div>
                <div class="tm-tab-content">
                  
                        <div class="row">
                        <div class="col-lg-6">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about ">
                                    <h2>LESSON MODE</h2>
				<p>In a lesson mode a color of the syringe changes from
red to green depending on the needle position </p>
<p>The gum is colored in 2 shades of grey for the injection</p>
<p>The correct/incorrect angle
of the bur is indicated by
green or red color</p>
				  


										</div>
                            </div><!-- .col -->
                        </div>
                            <div class="col-lg-6">
                                <div class="tm-dept-img">
								<img src="/img/briefing1.jpg" alt="">
								</div>
                            </div><!-- .col -->
                          

                </div> <!-- .tm-tab-content -->
            </div> <!-- .tab -->
        </div>
        <div class="empty-space col-md-b30 col-xs-b30"></div>
    </section>     
		 
		 
		 
		<section class="empty-space " >
        
        <div class="container ">
            <div class="tm-tab-wrap">
            
                <div class="empty-space col-md-b60 col-xs-b40"></div>
                <div class="tm-tab-content">
                  
                        <div class="row">
                        <div class="col-lg-6">
                                <div class="tm-dept-img">
								<img src="/img/crown.jpg" alt="">
								</div>
                            </div><!-- .col -->
						<div class="col-lg-6">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about ">
                                    <h2>EXAMINATION MODE</h2>
                                    <ul>
                                        <li>A color of the syringe doesn`t change depending on the
needle position</li>
                                        <li>The gum isn`t colored in shades of grey for the injection</li>
                                        <li>The correct/incorrect angle of the
bur is not indicated by any color</li>
                                        <li>The teacher sets an exam`s duration</li>
                                      
                                    </ul>
								</div>
                            </div><!-- .col -->
                        </div>
                            
                            

                </div> <!-- .tm-tab-content -->
            </div> <!-- .tab -->
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </section> 
		 
	
<section class="tm-gray-bg " >
      
          
		
        </div>
        <div class="container ">
            <div class="tm-tab-wrap">
            
                <div class="empty-space col-md-b60 col-xs-b40"></div>
                <div class="tm-tab-content">
                  
                        <div class="row">
                          
                            <div class="col-lg-6">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about ">
                                    <h2>RADIOLOGY MODULE</h2>
				                            <p>X-ray image can
                                            be taken on low
                                            and upper jaws </p>
                                            <p>Every image is
                                            saved in a library
                                            and available for
                                            debriefing</p>
				  


										</div>
                            </div><!-- .col -->
                        </div>
                        <div class="col-lg-6">
                                <div class="tm-dept-img">
								<img src="/img/x-ray1.jpg" alt="">
								</div>
                            </div><!-- .col -->
                </div> <!-- .tm-tab-content -->
            </div> <!-- .tab -->
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </section> 

	<section class="empty-space " >
        
        <div class="container ">
            <div class="tm-tab-wrap">
            
                <div class="empty-space col-md-b60 col-xs-b40"></div>
                <div class="tm-tab-content">
                  
                        <div class="row">
                        <div class="col-lg-6">
                                <div class="tm-dept-img">
								<img src="/img/Visualization-in-real.jpg" alt="">
								</div>
                            </div><!-- .col -->
						<div class="col-lg-6">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about ">
                                    <h2>ANESTHESIA SELECTION</h2>
				 <p> According to the current case and patient’s answers
a student has to select:
</p>
										<ul>
                                        <li>Anesthesia type</li>
                                        <li>Anesthetic type</li>
                                        <li>Vasoconstrictor concentration</li>
                                        <li>Length of the needle</li>

                                        </ul>
									
										</div>
                            </div><!-- .col -->
                        </div>
                         
                            

                </div> <!-- .tm-tab-content -->
            </div> <!-- .tab -->
        </div>
        <div class="empty-space col-md-b30 col-xs-b70"></div>
    </section> 
	
<section class="tm-gray-bg " >
       
        <div class="container ">
            <div class="tm-tab-wrap">
            
                <div class="empty-space col-md-b60 col-xs-b40"></div>
                <div class="tm-tab-content">
                  
                        <div class="row">
                        <div class="col-lg-6">
                                <div class="tm-dept-details-wrap">
                                    <div class="tm-about ">
                                    <h2>Presentation of the hybrid dental simulator Leonardo</h2>
				<p>В рамках стоматологической конференции IDS (Кельн, Германия) состоялась презентация единственного в мире гибридного стоматологического симулятора Leonardo</p>
				  


										</div>
                            </div><!-- .col -->
                        </div>
                            <div class="col-lg-6">
                                <div class="tm-dept-img">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YIwK5aIyy8w" frameborder="0" allowfullscreen=""></iframe>
								</div>
								</div>
                            </div><!-- .col -->
                          

                </div> <!-- .tm-tab-content -->
            </div> <!-- .tab -->
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </section> 
		 
		 
		 
	<br>
	</div>
	
	
    <!-- Start News Letter Section -->
    <div class="tm-newsletter tm-bg">
        <div class="tm-nl-overlay"></div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="container">
            <div class="tm-section-heading text-center">
				<h2 style="color:#fff;  position:relative;">VOCATIONAL DYNAMIC TRAINING</h2>
		
			</div>
                 
                
       
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </div>
    <!-- End News Letter Section -->


   
    <!-- Start Team Member -->
    <section id="department">
        <div class="empty-space col-md-b100 col-xs-b70"></div>
        <div class="tm-section-heading text-center">
            <h2>Our Experienced doctors</h2>
            <div class="tm-section-seperator"><span></span></div>
            <div class="empty-space col-md-b60 col-xs-b40"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tm-member-carousel owl-carousel tm-nam-tm-style1  tm-dots1">
                        <div class="tm-team-member">
                            <div class="tm-member-hover">
                                <a href="#" class="tm-member-thumb">
                                    <img src="/img/doctor-01.jpg" alt="">
                                </a>
                                <div class="tm-member-social-btn-wrap">
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-facebook-square"></i>
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-twitter-square"></i>
                                            <i class="fa fa-twitter-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-linkedin-square"></i>
                                            <i class="fa fa-linkedin-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-skype"></i>
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </div>
                                </div><!-- .tm-member-social-btn-wrap -->
                            </div>
                            <div class="tm-member-meta tm-gray-bg text-center">
                                <h3 class="tm-member-name"><a href="#">Dr. Willie Crowley</a></h3>
                                <span class="tm-member-speciality">Cardiologist</span>
                            </div>
                        </div><!-- .tm-team-member -->
                        <div class="tm-team-member">
                            <div class="tm-member-hover">
                                <a href="#" class="tm-member-thumb">
                                    <img src="/img/doctor-02.jpg" alt="">
                                </a>
                                <div class="tm-member-social-btn-wrap">
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-facebook-square"></i>
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-twitter-square"></i>
                                            <i class="fa fa-twitter-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-linkedin-square"></i>
                                            <i class="fa fa-linkedin-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-skype"></i>
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </div>
                                </div><!-- .tm-member-social-btn-wrap -->
                            </div>
                            <div class="tm-member-meta tm-gray-bg text-center">
                                <h3 class="tm-member-name"><a href="#">Dr. Jay Swanson</a></h3>
                                <span class="tm-member-speciality">Gynecologist</span>
                            </div>
                        </div><!-- .tm-team-member -->
                        <div class="tm-team-member">
                            <div class="tm-member-hover">
                                <a href="#" class="tm-member-thumb">
                                    <img src="/img/doctor-03.jpg" alt="">
                                </a>
                                <div class="tm-member-social-btn-wrap">
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-facebook-square"></i>
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-twitter-square"></i>
                                            <i class="fa fa-twitter-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-linkedin-square"></i>
                                            <i class="fa fa-linkedin-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-skype"></i>
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </div>
                                </div><!-- .tm-member-social-btn-wrap -->
                            </div>
                            <div class="tm-member-meta tm-gray-bg text-center">
                                <h3 class="tm-member-name"><a href="#">Dr. Alex Abbott</a></h3>
                                <span class="tm-member-speciality">Neurology</span>
                            </div>
                        </div><!-- .tm-team-member -->
                        <div class="tm-team-member">
                            <div class="tm-member-hover">
                                <a href="#" class="tm-member-thumb">
                                    <img src="/img/doctor-04.jpg" alt="">
                                </a>
                                <div class="tm-member-social-btn-wrap">
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-facebook-square"></i>
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-twitter-square"></i>
                                            <i class="fa fa-twitter-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-linkedin-square"></i>
                                            <i class="fa fa-linkedin-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-skype"></i>
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </div>
                                </div><!-- .tm-member-social-btn-wrap -->
                            </div>
                            <div class="tm-member-meta tm-gray-bg text-center">
                                <h3 class="tm-member-name"><a href="#">Dr. Kay Conley</a></h3>
                                <span class="tm-member-speciality">Diagnosis</span>
                            </div>
                        </div><!-- .tm-team-member -->
                        <div class="tm-team-member">
                            <div class="tm-member-hover">
                                <a href="#" class="tm-member-thumb">
                                    <img src="/img/doctor-01.jpg" alt="">
                                </a>
                                <div class="tm-member-social-btn-wrap">
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-facebook-square"></i>
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-twitter-square"></i>
                                            <i class="fa fa-twitter-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-linkedin-square"></i>
                                            <i class="fa fa-linkedin-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-skype"></i>
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </div>
                                </div><!-- .tm-member-social-btn-wrap -->
                            </div>
                            <div class="tm-member-meta tm-gray-bg text-center">
                                <h3 class="tm-member-name"><a href="#">Dr. Willie Crowley</a></h3>
                                <span class="tm-member-speciality">Cardiologist</span>
                            </div>
                        </div><!-- .tm-team-member -->
                        <div class="tm-team-member">
                            <div class="tm-member-hover">
                                <a href="#" class="tm-member-thumb">
                                    <img src="/img/doctor-02.jpg" alt="">
                                </a>
                                <div class="tm-member-social-btn-wrap">
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-facebook-square"></i>
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-twitter-square"></i>
                                            <i class="fa fa-twitter-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-linkedin-square"></i>
                                            <i class="fa fa-linkedin-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-skype"></i>
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </div>
                                </div><!-- .tm-member-social-btn-wrap -->
                            </div>
                            <div class="tm-member-meta tm-gray-bg text-center">
                                <h3 class="tm-member-name"><a href="#">Dr. Jay Swanson</a></h3>
                                <span class="tm-member-speciality">Gynecologist</span>
                            </div>
                        </div><!-- .tm-team-member -->
                        <div class="tm-team-member">
                            <div class="tm-member-hover">
                                <a href="#" class="tm-member-thumb">
                                    <img src="/img/doctor-03.jpg" alt="">
                                </a>
                                <div class="tm-member-social-btn-wrap">
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-facebook-square"></i>
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-twitter-square"></i>
                                            <i class="fa fa-twitter-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-linkedin-square"></i>
                                            <i class="fa fa-linkedin-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-skype"></i>
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </div>
                                </div><!-- .tm-member-social-btn-wrap -->
                            </div>
                            <div class="tm-member-meta tm-gray-bg text-center">
                                <h3 class="tm-member-name"><a href="#">Dr. Alex Abbott</a></h3>
                                <span class="tm-member-speciality">Neurology</span>
                            </div>
                        </div><!-- .tm-team-member -->
                        <div class="tm-team-member">
                            <div class="tm-member-hover">
                                <a href="#" class="tm-member-thumb">
                                    <img src="/img/doctor-04.jpg" alt="">
                                </a>
                                <div class="tm-member-social-btn-wrap">
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-facebook-square"></i>
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-twitter-square"></i>
                                            <i class="fa fa-twitter-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-linkedin-square"></i>
                                            <i class="fa fa-linkedin-square"></i>
                                        </a>
                                    </div>
                                    <div class="tm-member-socila-btn">
                                        <a href="#" class="tm-social-btn white">
                                            <i class="fa fa-skype"></i>
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </div>
                                </div><!-- .tm-member-social-btn-wrap -->
                            </div>
                            <div class="tm-member-meta tm-gray-bg text-center">
                                <h3 class="tm-member-name"><a href="#">Dr. Kay Conley</a></h3>
                                <span class="tm-member-speciality">Diagnosis</span>
                            </div>
                        </div><!-- .tm-team-member -->
                    </div><!-- .member-carousel -->
                </div><!-- .col -->
            </div>
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </section>
    <!-- End Team Member -->


    


    


    <!-- Start Contact Section -->
    <section id="contact">
      
        <div class="tm-section-heading text-center">
            <h2>Get In Touch</h2>
            <div class="tm-section-seperator"><span></span></div>
            <div class="empty-space col-md-b60 col-xs-b40"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div id="tm-alert"></div>
                    <form action="#" class="row tm-contact-form" method="post"  id="contact-form">
                        <div class="col-lg-6">
                            <div class="tm-form-field">      
                                <input type="text" id="name" name="name" required>
                                <label>Full Name</label>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-6">
                            <div class="tm-form-field">      
                              <input type="text" id="email" name="email" required>
                              <label>Email Address</label>
                          </div>
                        </div><!-- .col -->
                        <div class="col-lg-6">
                            <div class="tm-form-field">      
                                <input type="text" id="subject" name="subject" required>
                                <label>Subject</label>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-6">
                            <div class="tm-form-field">      
                                <input type="text" id="phone" name="phone" required>
                                <label>Phone</label>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-12">
                            <div class="tm-form-field">      
                                <textarea cols="30" rows="10" id="msg" name="msg" required></textarea>
                                <label>Your Message</label>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-12">
                            <button class="tm-btn1" type="submit" id="submit" name="submit"><span>SEND MESSAGE</span></button>
                            <div class="empty-space col-lg-b30"></div>
                        </div><!-- .col -->
                    </form>
                </div><!-- .col -->
                <div class="col-lg-4">
                    <div class="empty-space col-md-b0 col-xs-b40"></div>
                    <div class="tm-contact-info">
                        <div class="tm-single-contact">
                            <i class="fa fa-map-marker"></i>
                            <h3>Address</h3>
                            <p>2855 Speer Blvd, Denver, CO 80211, USA</p>
                        </div>
                        <div class="empty-space col-xs-b25"></div>
                        <div class="tm-single-contact">
                            <i class="fa fa-phone"></i>
                            <h3>Phone</h3>
                            <p>1-800-915-6270 <br>
                               1-800-915-6272</p>
                        </div>
                        <div class="empty-space col-xs-b25"></div>
                        <div class="tm-single-contact">
                            <i class="fa fa-envelope"></i>
                            <h3>Email</h3>
                            <p>info@trustlife.com <br>
                            Skype: example</p>
                        </div>
                        <div class="empty-space col-xs-b25"></div>
                    </div>
                </div><!-- .col -->
            </div>
        </div>
        <div class="empty-space col-md-b70 col-xs-b40"></div>
    </section>
    <!-- End Contact Section -->

    <!-- Start Map Section -->
    <div id="map">
   
    </div>
    <!-- End Map Section -->

    <!-- Start Clients Section -->
    <div class="tm-clients-wrap">
       
        <div class="container">
            <div class="tm-clients-curosor owl-carousel">
                <div class="tm-client"><img src="/img/client-logo-01.png" alt=""></div>
                <div class="tm-client"><img src="/img/client-logo-02.png" alt=""></div>
                <div class="tm-client"><img src="/img/client-logo-03.png" alt=""></div>
                <div class="tm-client"><img src="/img/client-logo-04.png" alt=""></div>
                <div class="tm-client"><img src="/img/client-logo-05.png" alt=""></div>
                <div class="tm-client"><img src="/img/client-logo-06.png" alt=""></div>
            </div>
        </div>
        <div class="empty-space col-md-b100 col-xs-b70"></div>
    </div>
    <!-- End Clients Section -->

    <!-- Start Footer -->
    <footer class="tm-overflow-hidden">
        <div class="tm-gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="tm-footer-social">
                            <h2>Follow Us</h2>
                            <div class="tm-footer-social-list">
                                <a href="#" class="tm-social-btn blue">
                                    <i class="fa fa-facebook-square"></i>
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="#" class="tm-social-btn blue">
                                    <i class="fa fa-google-plus-square"></i>
                                    <i class="fa fa-google-plus-square"></i>
                                </a>
                                <a href="#" class="tm-social-btn blue">
                                    <i class="fa fa-twitter-square"></i>
                                    <i class="fa fa-twitter-square"></i>
                                </a>
                                <a href="#" class="tm-social-btn blue">
                                    <i class="fa fa-linkedin-square"></i>
                                    <i class="fa fa-linkedin-square"></i>
                                </a>
                                <a href="#" class="tm-social-btn blue">
                                    <i class="fa fa-skype"></i>
                                    <i class="fa fa-skype"></i>
                                </a>
                            </div>
                        </div>
                    </div><!-- .col -->
                </div>
            </div>
        </div>
        <div class="tm-site-footer">
            <div class="container"><!-- row-md-reverce -->
                <div class="row row-sm-reverce">
                    <div class="col-md-7 col-lg-8">
                        <p class="tm-copyright">Copyright © 2019 LEODENTRUS. Designed by thememarch </p>
                    </div><!-- .col -->
                    <div class="col-md-5 col-lg-4">
                        <div class="tm-footer-hotline">
                            <div class="tm-footer-hotline-in">
                                <div class="tm-phone-icon"><i class="fa fa-mobile"></i></div>
                                <h3>Toll Free</h3>
                                <p>1-800-915-6270</p>
                            </div>
                        </div>
                    </div><!-- .col -->
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

	<!-- Scroll Up -->
    <div id='scrollup'></div>


<?php $this->endBody() ?>

<script type="text/javascript">
    var map = new ymaps.Map ("map", {
            center: [55.747079, 37.631281], 
            zoom: 7
        });
</script>
</body>
</html>
<?php $this->endPage() ?>

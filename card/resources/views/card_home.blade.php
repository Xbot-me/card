@extends('welcome')

@section('content_home')

        
<!-- PAGE CONTENT -->
<div id="page-content">

	<!-- HEADER -->
	<header id="header" class="overlay-bottom">        
		<div class="header-inner clearfix">
			
           <!-- DEFAULT HEADER CONTENT -->
		   	<div class="default-header-content">                 
				<div id="logo" class="left-float">
					<a id="default-logo" class="logotype" href="index-2.html"><img src="uploads/pond-logo-light.png" alt="Logo"></a>
					<a id="fixed-logo" class="logotype" href="index-2.html"><img src="uploads/pond-logo.png" alt="Logo"></a>
				</div>    
				
				<div class="menu right-float clearfix">
					<a href="#" class="open-nav"><span></span></a>
					<nav id="main-nav" class="text-light">
						<div class="nav-logo"><img src="uploads/pond-logo-light.png" alt="Logo"></div>
						<div class="nav-inner">
						<ul>
						<li class="current-menu-item"><a href="#home" class="scroll-to" data-bigletter="H">Home</a></li>
						<li><a href="#about" class="scroll-to" data-bigletter="A">About</a></li>
						<li><a href="#services" class="scroll-to" data-bigletter="S">Service</a></li>
						<li><a href="#work" class="scroll-to" data-bigletter="W">Work</a></li>
						<li><a href="elements.html" data-bigletter="F">Features</a>
								<ul class="sub-menu">
                                                <li><a href="{{Route('business')}}">{{__('Business Card')}}</a></li>    
									<li><a href="{{Route('wedding')}}">{{__('Wedding Card')}}</a></li>    
									<li><a href="{{Route('birthday')}}">{{__('Birthday Card')}}</a></li>
									<li><a href="{{Route('invite')}}">{{__('Invitation Card')}}</a></li>
								</ul>
							</li>
						<li><a href="#contact" class="scroll-to" data-bigletter="C">Contact</a></li>
						</ul>
						</div>
						<div class="nav-social">
							<ul class="socialmedia-widget social-share">
								<li class="facebook"><a href="#"></a></li>
								<li class="twitter"><a href="#"></a></li>
								<li class="linkedin"><a href="#"></a></li>
								<li class="dribbble"><a href="#"></a></li>
								<li class="behance"><a href="#"></a></li>
								<li class="instagram"><a href="#"></a></li>
							</ul>
						</div>
						<div class="nav-bg"></div>
					</nav>
				</div>
			</div>
           <!-- DEFAULT HEADER CONTENT -->
                    
		</div> <!-- END .header-inner -->
	</header> <!-- END header -->
	<!-- HEADER -->    
	
	
	<!-- HOME (SLIDER) -->
	<section id="home" class="notoppadding text-light">
		<div class="section-inner">
			 
		<!-- REVOLUTION SLIDER -->
		<div class="rev-slider-container">
			<div class="rev-slider" >
				<ul>
				
					<!-- THE FIRST SLIDE -->
					<li data-transition="slidedown" data-slotamount="5" data-masterspeed="1200" >
						<!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
						<img src="uploads/slider-bg1.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
						
						<!-- LAYER NR. 1 -->    
						<div class="tp-caption srcaption-bigwhite lft ltb"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="0"
						data-speed="800"
						data-start="400"
						data-easing="easeInOutQuad"
						data-endspeed="800"
						data-endeasing="easeInOutQuad"
						style="z-index: 2"><strong>Designed to attract</strong>
						</div>
						
					</li> <!-- end first slide -->
				
					<!-- THE SECOND SLIDE -->
					<li data-transition="slidedown" data-slotamount="5" data-masterspeed="1200" >
						<!-- THE MAIN IMAGE IN THE SECOND SLIDE -->
						<img src="uploads/slider-bg2.jpg"   alt="slidebg2"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
						<!-- LAYER NR. 1 -->    
						<div class="tp-caption srcaption-bigwhite lft ltb"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="0"
						data-speed="800"
						data-start="400"
						data-easing="easeInOutQuad"
						data-endspeed="800"
						data-endeasing="easeInOutQuad"
						style="z-index: 2"><strong>Creative Minimalism</strong>
						</div>
												
					</li>
					
					<!-- THE THIRD SLIDE -->
					<li data-transition="slidedown" data-slotamount="5" data-masterspeed="1200" >
						<!-- THE MAIN IMAGE IN THE SECOND SLIDE -->
						<img src="uploads/slider-bg3.jpg"   alt="slidebg3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
						<!-- LAYER NR. 1 -->    
						<div class="tp-caption srcaption-bigwhite lft ltb"
						data-x="center" data-hoffset="0"
						data-y="center" data-voffset="0"
						data-speed="800"
						data-start="400"
						data-easing="easeInOutQuad"
						data-endspeed="800"
						data-endeasing="easeInOutQuad"
						style="z-index: 2"><strong>Sharp Elegance</strong>
						</div>
						
					</li>
			   
				</ul>

			</div>
		</div> <!-- END .rev-slider-container -->        
		<!-- REVOLUTION SLIDER -->
	
		</div>
	</section>
	<!-- HOME (SLIDER) -->
	
	
	<!-- PAGEBODY -->
	<div class="page-body">
	
       <!-- ABOUT --> 
      	<section id="about">
            <div class="section-inner">

            	<div class="wrapper">
				
					<div class="main-title align-center">
						<h2 data-bigletter="A"><strong>About</strong></h2>
						<div class="separator"><span></span></div>
						<h5 class="alttitle title-minimal">This template has been crafted to perfection</h5>
					</div>
					
					<div class="spacer spacer-medium"></div>
									
					<div class="column-section clearfix">
						<div class="column one-third">
							<h5 class="title-standard">We're Creative</h5>
							<div class="separator-small"><span></span></div>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore. Ferri reque integre mea ut, eu eos vide errem noluise.</p>
					  	</div>
					  	<div class="column one-third">
							<h5 class="title-standard">We're Professional</h5>
							<div class="separator-small"><span></span></div>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore. Ferri reque integre mea ut, eu eos vide errem noluise.</p>
					  	</div>
						<div class="column one-third last-col">
							<h5 class="title-standard">We're Friendly</h5>
							<div class="separator-small"><span></span></div>
							<p>Lorem ipsum dolor sit amet, <a href="#">consetetur sadipscing</a> elitr, sed diam nonumy eirmod tempor invidunt ut labore. Ferri reque integre mea ut, eu eos vide errem noluise.</p>
					  	</div>
					</div> <!-- END .column-section -->
				</div> <!-- END .wrapper -->
            
			<div class="spacer spacer-big"></div>
			
			<div id="agency-split" class="split-section clearfix" style="background: #0d0d0d;">
				
				<div class="split-right split-half text-light">
					<div class="split-mini-content">
						<h5 class="title-minimal">Agency</h5>
						<div class="spacer spacer-mini"></div>
						<p><strong>Pond</strong> is a premium Template which has been crafted to perfection. It is the ideal way to make your project stand out from the crowd.  Ferri reque integre mea ut, eu eos vide errem noluise se.</p>
						<p>Putent laoreet et ius dissentias ut et ius eos vide.  Praesent augue arcu, ornare ut tincidunt eu, mattis a libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					</div>
				</div> <!-- END .split-right -->
				
				<div class="split-left split-half text-light">
					<div class="split-mini-content vertical-center align-center">
						<a href="http://player.vimeo.com/video/90519625" class="sr-button sr-button2 openfancybox fancybox.iframe" >Watch full Movie</a>
					</div>
					<div class="split-bg videobg-section"
					   data-videofile="uploads/surf" 
					   data-videowidth="1280"
					   data-videoheight="720"
					   data-videoposter="uploads/surf.jpg"
					   data-videoparallax="false"
					   data-videooverlaycolor="#000000"
					   data-videooverlayopacity="0.2"
						data-sound="false"></div>
				</div> <!-- END .split-left -->
								
			</div> <!-- END .split-section -->
			
          	<div class="spacer spacer-big"></div>
			
			<!-- TEAM -->
			<div class="wrapper"> 
			 
				<div class="main-title align-center">
					<h2 data-bigletter="T"><strong>Team</strong></h2>
					<div class="separator"><span></span></div>
					<h5 class="alttitle title-minimal">We have big ideas</h5>
				</div>
				
				<div class="spacer spacer-medium"></div>
			
            	<div class="column-section clearfix">
                	<div class="column one-third">
						<div class="imgoverlay overlay-dark overlay-transparent">
							<img src="uploads/team1.jpg" alt="SEO IMAGE NAME">
							<div class="overlaycaption">
								<h4 class="overlay-name title-minimal"><strong>Tom Burly</strong></h4>
								<div class="separator-small"><span></span></div>
								<ul class="socialmedia-widget alttitle">
									<li class="facebook"><a href="#"></a></li>
									<li class="dropbox"><a href="#"></a></li>
									<li class="flickr"><a href="#"></a></li>
									<li class="vimeo"><a href="#"></a></li>
								</ul>
							</div>
						</div>
						<h6>Creative Director</h6>
                    	<p>
                     	Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempora invidunt ut labore.  
                  	</p>
                  </div> 
                  <div class="column one-third">
						<div class="imgoverlay overlay-dark overlay-transparent">
							<img src="uploads/team2.jpg" alt="SEO IMAGE NAME">
							<div class="overlaycaption">
								<h4 class="overlay-name title-minimal"><strong>Jhon White</strong></h4>
								<div class="separator-small"><span></span></div>
								<ul class="socialmedia-widget alttitle">
									<li class="twitter"><a href="#"></a></li>
									<li class="googleplus"><a href="#"></a></li>
								</ul>
							</div>
						</div>
						<h6>Designer</h6>
                    	<p>
                     	Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempora invidunt ut labore.  
                  	</p>
                  </div>
                  <div class="column one-third last-col">
						<div class="imgoverlay overlay-dark overlay-transparent">
							<img src="uploads/team3.jpg" alt="SEO IMAGE NAME">
							<div class="overlaycaption">
								<h4 class="overlay-name title-minimal"><strong>Alice Boga</strong></h4>
								<div class="separator-small"><span></span></div>
								<ul class="socialmedia-widget alttitle">
									<li class="dribbble"><a href="#"></a></li>
									<li class="twitter"><a href="#"></a></li>
									<li class="behance"><a href="#"></a></li>
								</ul>
							</div>
						</div>
						<h6>Web Developper</h6>
                    	<p>
                     	Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempora invidunt ut labore.  
                  	</p>
                  </div>    
           	</div> <!-- END .column-section -->
			</div> <!-- END .wrapper -->		
			
          	<div class="spacer spacer-medium"></div>
			<div class="separator align-center"><span></span></div>
          	<div class="spacer spacer-medium"></div>
			
			<div class="wrapper-small">
				<div class="column-section clearfix">
					<div class="column one-half">
						<h5 class="title-minimal"><strong>History</strong></h5>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat vel illum dolore eu feugiat nulla facilisis at vero eros.</p>
					</div>
					<div class="column one-half last-col">
						<h5 class="title-minimal"><strong>Skills</strong></h5>
						<div class="skill">
							<h6 class="alttitle skill-name"><strong>Photoshop</strong></h6>
							<div class="skill-bar"><div class="skill-active" style="" data-perc="88">
							<span class="tooltip">88%</span></div></div>
						</div> 
						<div class="skill">
							<h6 class="alttitle skill-name"><strong>Html & Css</strong></h6>
							<div class="skill-bar"><div class="skill-active" style="" data-perc="97">
							<span class="tooltip">97%</span></div></div>
						</div>
						<div class="skill">
							<h6 class="alttitle skill-name"><strong>Illustrator</strong></h6>
							<div class="skill-bar"><div class="skill-active" style="" data-perc="59">
							<span class="tooltip">59%</span></div></div>
						</div>  
					</div>
				</div>
			</div>
			<!-- TEAM -->
			
          	<div class="spacer spacer-big"></div>
							
			<div class="horizontalsection text-light parallax-section" data-parallax-image="uploads/parallax-bg1.jpg">
				<div class="horizontalinner wrapper align-center">
					<div class="column-section clearfix align-center"> 
						<div class="column one-fourth">
						<div class="counter">
							<div class="counter-value" data-from="0" data-to="237" data-speed="12">0</div>
							<h6 class="counter-name alttitle title-minimal"><strong>Projects Completed</strong></h6>
						</div>
						</div> <!-- END .column -->
						<div class="column one-fourth">
							<div class="counter">
								<div class="counter-value" data-from="0" data-to="21589" data-speed="831">0</div>
								<h6 class="counter-name alttitle title-minimal"><strong>Cups Consumed</strong></h6>
							</div>
						</div> <!-- END .column -->
						<div class="column one-fourth">
							<div class="counter">
								<div class="counter-value" data-from="0" data-to="118" data-speed="9">0</div>
								<h6 class="counter-name alttitle title-minimal"><strong>Satisfied Clients</strong></h6>
							</div>
						</div> <!-- END .column -->
						<div class="column one-fourth last-col">
							<div class="counter">
							<div class="counter-value" data-from="0" data-to="667" data-speed="31">0</div>
								<h6 class="counter-name alttitle title-minimal"><strong>Pizzas' ordered</strong></h6>
							</div>
						</div> <!-- END .column --> 
					</div> <!-- END .column-section -->
				</div>
			</div> <!-- END .horizontalsection-->
				
			</div> <!-- END .section-inner-->
		</section>
       	<!-- ABOUT -->
			
	   
		<!-- SERVICE -->	    
     	<section id="services">
        	<div class="section-inner"> 
				
				
				<div class="wrapper">
					<div class="main-title align-center">
						<h2 data-bigletter="S"><strong>Our Services</strong></h2>
						<div class="separator"><span></span></div>
						<h5 class="alttitle title-minimal">Making the impossible possible.  That's what we do.</h5>
					</div>
					
					<div class="spacer spacer-medium"></div>
					   
					<div class="column-section clearfix">
						<div class="column one-third align-center">
							<i class="pe-7s-browser pe-4x"></i>
							<h5 class="title-minimal" data-bigletter="R"><strong>Responsive</strong></h5>
							<div class="separator-small"><span></span></div>
							<p>Ferri reque integre mea ut, eu eos vide errem noluise se. Putent laoreet et ius utroque dissentias ut et ius eos vide.</p>
					  </div>
						<div class="column one-third align-center">
							<i class="pe-7s-gleam pe-4x"></i>
							<h5 class="title-minimal" data-bigletter="D"><strong>Design</strong></h5>
							<div class="separator-small"><span></span></div>
							<p>Ferri reque integre mea ut, eu eos vide errem noluise se. Putent laoreet et ius utroque dissentias ut et ius eos vide.</p>
					  </div>
						<div class="column one-third last-col align-center">
							<i class="pe-7s-help2 pe-4x"></i>
							<h5 class="title-minimal" data-bigletter="S"><strong>Support</strong></h5>
							<div class="separator-small"><span></span></div>
							<p>Ferri reque integre mea ut, eu eos vide errem noluise se. Putent laoreet et ius utroque dissentias ut et ius eos vide.</p>
					  </div>
					</div> <!-- END .column-section -->
					
					<div class="column-section clearfix">
						<div class="column one-third align-center">
							<i class="pe-7s-camera pe-4x"></i>
							<h5 class="title-minimal" data-bigletter="M"><strong>Media</strong></h5>
							<div class="separator-small"><span></span></div>
							<p>Ferri reque integre mea ut, eu eos vide errem noluise se. Putent laoreet et ius utroque dissentias ut et ius eos vide.</p>
					  </div>
						<div class="column one-third align-center">
							<i class="pe-7s-loop pe-4x"></i>
							<h5 class="title-minimal" data-bigletter="F"><strong>Flexible</strong></h5>
							<div class="separator-small"><span></span></div>
							<p>Ferri reque integre mea ut, eu eos vide errem noluise se. Putent laoreet et ius utroque dissentias ut et ius eos vide.</p>
					  </div>
						<div class="column one-third last-col align-center">
						<i class="pe-7s-paper-plane pe-4x"></i>
							<h5 class="title-minimal" data-bigletter="U"><strong>Unique</strong></h5>
							<div class="separator-small"><span></span></div>
							<p>Ferri reque integre mea ut, eu eos vide errem noluise se. Putent laoreet et ius utroque dissentias ut et ius eos vide.</p>
					  </div>
					</div> <!-- END .column-section -->
				</div> <!-- END .wrapper -->
					
         		<div class="spacer spacer-big"></div>
				
				<div class="horizontalsection  parallax-section" data-parallax-image="uploads/parallax-bg2.jpg" data-speed="0.5">
					<div class="horizontalinner wrapper align-center">
						<div class="spacer spacer-mini"></div>
						<h6 class="alttitle title-ultraminimal">Awesomeness meets</h6>
						<h2 class="title-minimal" data-bigletter="U"><strong>Uniqueness</strong></h2>
						<div class="spacer spacer-mini"></div>
						<span class="time">Est. 2014</span>
						<div class="spacer spacer-big"></div>
					</div>
				</div> <!-- END .horizontalsection-->
				
			</div> <!-- END .section-inner-->
		</section> <!-- END SECTION #service-->
		<!-- SERVICE -->
		
		
		
		<!-- PORTFOLIO/WORK -->
		<section id="work">
       		<div class="section-inner">
			
			
			<div class="main-title wrapper align-center">
				<h2 data-bigletter="W"><strong>Work</strong></h2>
				<div class="separator"><span></span></div>
				<h5 class="alttitle title-minimal">Let's point out what we can help you with</h5>
				
				<div class="spacer spacer-medium"></div>
				
				<ul id="portfolio-filter" class="filter clearfix" data-related-grid="portfolio-grid">
					<li><a class="active" href="#" data-option-value="*">All</a></li>
					<li><a data-option-value=".branding" href="#" title="Branding">Branding</a></li>
					<li><a data-option-value=".print" href="#" title="Print">Print</a></li>
				</ul>
			</div>
			
			<div class="spacer spacer-small"></div>
			
			<div id="portfolio-grid" class="masonry portfolio-entries clearfix" data-maxitemwidth="600">
			
				<div class="portfolio-masonry-entry masonry-item branding">
					<div class="entry-thumb portfolio-thumb">
						<div class="imgoverlay name-hidden">
							<img src="uploads/portfolio11-600x450.jpg" alt="SEO IMAGE NAME">
							<div class="overlaycaption">
								<h5 class="overlay-name title-minimal"><strong>The Essentials</strong></h5>
								<div class="separator-small"><span></span></div>
								<h6 class="alttitle">Branding</h6>
							</div>
							<a href="portfolio-single3.html" class="transition"></a>
						</div>
				   </div>
				</div> <!-- END .portfolio-masonry-entry -->
				
				<div class="portfolio-masonry-entry masonry-item print">
					<div class="entry-thumb portfolio-thumb">
						<div class="imgoverlay name-hidden">
							<img src="uploads/portfolio5-600x450.jpg" alt="SEO IMAGE NAME">
							<div class="overlaycaption">
								<h5 class="overlay-name title-minimal"><strong>Overhead View</strong></h5>
								<div class="separator-small"><span></span></div>
								<h6 class="alttitle">Print</h6>
							</div>
							<a href="portfolio-single2.html" class="transition"></a>
						</div>
				   </div>
				</div> <!-- END .portfolio-masonry-entry -->
				
				<div class="portfolio-masonry-entry masonry-item branding">
					<div class="entry-thumb portfolio-thumb">
						<div class="imgoverlay name-hidden">
							<img src="uploads/portfolio3-600x900.jpg" alt="SEO IMAGE NAME">
							<div class="overlaycaption">
								<h5 class="overlay-name title-minimal"><strong>Lokomotive</strong></h5>
								<div class="separator-small"><span></span></div>
								<h6 class="alttitle">Branding</h6>
							</div>
							<a href="portfolio-single.html" class="transition"></a>
						</div>
				   </div>
				</div> <!-- END .portfolio-masonry-entry -->
				
				<div class="portfolio-masonry-entry masonry-item print">
					<div class="entry-thumb portfolio-thumb">
						<div class="imgoverlay name-hidden">
							<img src="uploads/portfolio10-600x450.jpg" alt="SEO IMAGE NAME">
							<div class="overlaycaption">
								<h5 class="overlay-name title-minimal"><strong>Sixten & Frans</strong></h5>
								<div class="separator-small"><span></span></div>
								<h6 class="alttitle">Print</h6>
							</div>
							<a href="portfolio-single2.html" class="transition"></a>
						</div>
				   </div>
				</div> <!-- END .portfolio-masonry-entry -->
				
				<div class="portfolio-masonry-entry masonry-item branding">
					<div class="entry-thumb portfolio-thumb">
						<div class="imgoverlay name-hidden">
							<img src="uploads/portfolio8-600x900.jpg" alt="SEO IMAGE NAME">
							<div class="overlaycaption">
								<h5 class="overlay-name title-minimal"><strong>Bag Edit</strong></h5>
								<div class="separator-small"><span></span></div>
								<h6 class="alttitle">Branding</h6>
							</div>
							<a href="portfolio-single3.html" class="transition"></a>
						</div>
				   </div>
				</div> <!-- END .portfolio-masonry-entry -->
				
				<div class="portfolio-masonry-entry masonry-item print">
					<div class="entry-thumb portfolio-thumb">
						<div class="imgoverlay name-hidden">
							<img src="uploads/portfolio2-600x450.jpg" alt="SEO IMAGE NAME">
							<div class="overlaycaption">
								<h5 class="overlay-name title-minimal"><strong>Poster</strong></h5>
								<div class="separator-small"><span></span></div>
								<h6 class="alttitle">Print</h6>
							</div>
							<a href="portfolio-single.html" class="transition"></a>
						</div>
				   </div>
				</div> <!-- END .portfolio-masonry-entry -->
				
				<div class="portfolio-masonry-entry masonry-item branding">
					<div class="entry-thumb portfolio-thumb">
						<div class="imgoverlay name-hidden">
							<img src="uploads/portfolio6-600x450.jpg" alt="SEO IMAGE NAME">
							<div class="overlaycaption">
								<h5 class="overlay-name title-minimal"><strong>Disk & Envelope</strong></h5>
								<div class="separator-small"><span></span></div>
								<h6 class="alttitle">Branding</h6>
							</div>
							<a href="portfolio-single2.html" class="transition"></a>
						</div>
				   </div>
				</div> <!-- END .portfolio-masonry-entry -->
				
			</div> <!-- END #portfolio-grid -->	
           
         	<div class="spacer spacer-big"></div> 
			
		   	<!-- CLIENTS -->
			<div class="wrapper">
				
				<div class="main-title align-center">
					<h4><strong>Clients</strong></h4>
					<div class="separator-small"><span></span></div>
					<h6 class="alttitle title-minimal">Who we worked with</h6>
				</div>
				
				<div class="spacer spacer-mini"></div>
				
				<div class="owlcarousel content-carousel" data-autoplay="6000" data-pagination="false">
					<div class="align-center">
						<img src="uploads/logo-1.jpg" alt="Client Logo">
					</div>
					<div class="align-center">
						<img src="uploads/logo-2.jpg" alt="Client Logo">
					</div>
					<div class="align-center">
						<img src="uploads/logo-3.jpg" alt="Client Logo">
					</div>
					<div class="align-center">
						<img src="uploads/logo-4.jpg" alt="Client Logo">
					</div> 
					<div class="align-center">
						<img src="uploads/logo-5.jpg" alt="Client Logo">
					</div>
				</div>
			</div>
		   	<!-- CLIENTS -->
			
         	<div class="spacer spacer-big"></div> 
           
		   	<!-- TESTIMONIALS -->			
           <div id="testimonials" class="horizontalsection text-light parallax-section" data-parallax-image="uploads/parallax-bg3.jpg">
				<div class="horizontalinner wrapper">
				
					<div class="owlslider testimonial-slider">
					  	<div class="testimonial-item">
							<div class="testimonial-quote">As a designer there are not many other templates that comes close to this. This template really understands the main purposes of webdesign.</div>
							<h6 class="testimonial-name"><strong>Patrick Hamilton</strong></h6>
							<h6 class="testimonial-namesub alttitle">Rip Curl</h6>
						</div>
					  	<div class="testimonial-item">
							<div class="testimonial-quote">Clean, simple and so mighty.</div>
							<h6 class="testimonial-name"><strong>Andy Smith</strong></h6>
							<h6 class="testimonial-namesub alttitle">Quicksilver</h6>
						</div>
						<div class="testimonial-item">
							<div class="testimonial-quote">Wow, just amazing. Made it very easy for me to get my website up and running.</div>
							<h6 class="testimonial-name"><strong>Sementha Garro</strong></h6>
							<h6 class="testimonial-namesub alttitle">Billabong</h6>
						</div>
					</div> <!-- END .owlslider -->
                	                    
				</div>
         	</div> <!-- END #testimonials -->
			<!-- TESTIMONIALS -->
                          
          	</div> <!-- END .section-inner-->
     	</section> <!-- END SECTION #portfolio-->
       	<!-- PORTFOLIO --> 
 
	   	<!-- CONTACT --> 
       <section id="contact" class="notoppadding">
       		<div class="section-inner">
			
			<div id="contact-split" class="split-section clearfix">
				
				<div class="split-left split-half">
					<div class="split-wrapped-content">
						
						<div class="main-title align-center">
							<h3 data-bigletter="C"><strong>Contact</strong></h3>
							<div class="separator"><span></span></div>
							<h6 class="alttitle title-minimal">Get in touch with us</h6>
						</div>
						
						<form id="contact-form" class="checkform" action="#" target="contact-send.php" method="post" >
                      	
								<div class="form-row clearfix">
									<label for="name" class="req">Name *</label>
									<input type="text" name="name" class="name" id="name" value="" placeholder="Name" />
								</div>
								
								<div class="form-row clearfix">
									<label for="email" class="req">Email *</label>
									<input type="text" name="email" class="email" id="email" value="" placeholder="Email"/>
								</div>
								
								<div class="form-row clearfix textbox">
									<label for="message" class="req">Message *</label>
									<textarea name="message" class="message" id="message" rows="15" cols="50" placeholder="Message"></textarea>
								</div>
								
								<div id="form-note">
									<div class="alert alert-error">
										<strong>Error</strong>: Please check your entries!
									</div>
								</div>
								
								<div class="form-row form-submit">
									<input type="submit" name="submit_form" class="submit" value="Send" />
								</div>
						
								<input type="hidden" name="subject" value="Contact Subject Pond html" />
								<input type="hidden" name="fields" value="name,email,message," />
								<input type="hidden" name="sendto" value="spabrice@gmail.com" />  
							
						</form> 	
						</div>	
				</div> <!-- END .split-left -->
				
				
				<div class="split-right split-half">
					<div class="split-bg">
					<!-- GOOGLE MAP -->
					<div id="map" style="height:100%;min-height:300px;"></div>
						<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
						<script type="text/javascript">
							function mapinitialize() {
								var latlng = new google.maps.LatLng(-33.86938,151.204834);
								var myOptions = {
									zoom: 14,
									center: latlng,
									scrollwheel: false,
									scaleControl: false,
									disableDefaultUI: false,
									mapTypeId: google.maps.MapTypeId.ROADMAP,
									// Google Map Color Styles
									styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},
				{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},
				{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]/**/},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}
				]/**/},{featureType:"water",elementType:"labels",stylers:[{visibility:"on"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#ffff00"},{lightness:-25},{saturation:-97}]}]
								};
								var map = new google.maps.Map(document.getElementById("map"),myOptions);
								
								var image = "uploads/map-pin.png";
								var image = new google.maps.MarkerImage("uploads/map-pin.png", null, null, null, new google.maps.Size(84,30));
								var marker = new google.maps.Marker({
									map: map, 
									icon: image,
									position: map.getCenter()
								});
								
								var contentString = '<b>Office</b><br>Streetname 13<br>50000 Sydney';
								var infowindow = new google.maps.InfoWindow({
									content: contentString
								});
											
								google.maps.event.addListener(marker, 'click', function() {
								  infowindow.open(map,marker);
								});
												
									
							}
							mapinitialize();
						</script>
					<!-- GOOGLE MAP -->
					</div>
				</div> <!-- END .split-right -->
								
			</div> <!-- END .split-section -->
			
			</div> <!-- END .section-inner-->
     	</section>
		<!-- CONTACT -->
        
      	<!-- FOOTER -->  
		<footer>
			<div class="footer-inner wrapper">
				<a id="backtotop" href="#">To Top</a>
				<ul class="socialmedia-widget left-float">
					<li class="facebook"><a href="#"></a></li>
					<li class="twitter"><a href="#"></a></li>
					<li class="linkedin"><a href="#"></a></li>
					<li class="dribbble"><a href="#"></a></li>
					<li class="behance"><a href="#"></a></li>
					<li class="instagram"><a href="#"></a></li>
				</ul>
				<div class="copyright right-float">
					Copyright &copy; 2014 by Pond.  Made with Love by SpabRice
				</div>
         	</div>
    	</footer>
      	<!-- FOOTER -->         
        
 	</div> <!-- END .page-body -->
	<!-- PAGEBODY -->
    
</div> <!-- END #page-content -->
<!-- PAGE CONTENT -->

        
@endsection
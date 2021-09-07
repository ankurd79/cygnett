<?php
$devicetye=devicedetector($_SERVER['HTTP_USER_AGENT']);

if($devicetye=='mobile'){
    $image1='bd-topimage-mob.jpg'; 
 }else{
    $image1='bd-banner-img1.jpg';
 }
?>
<div role="main" class="main">
        <!-- Top Carousel -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url() ?>images/static/<?php echo $image1 ?>" alt="First slide" loading='lazy'>
    </div>
    
    
  </div>
  
</div>
<section class="bd-container">
  			<div class="container inner-page-pad pt-3">
 						<div class="col-md-12">
 						<!-- <div class="breadcrumb"><span class="pr-1"><a href="javascript:void(0);">Home</a></span> > <span class="pl-1 pr-1"><a href="javascript:void(0);">Our Story</a></span> > <span class="pl-1">Overview</span></div> -->
 					<div class="row mb-0">
          <div class="col-md-12">	
                	
                   <div class="tabs tabs-bottom tabs-simple bd-tabs">
                <ul class="nav nav-tabs">
                  <?php $this->load->view('site/bd/bd-navigation');?>
                  
                </ul>
              </div>
              </div>
              </div> 

               <div class="row mb-5 pb-4 business-dev">
                  <div class="col-md-6"><img src="<?php echo base_url() ?>images/static/bd-img1.jpg" loading='lazy' class="img-fluid"></div>
                  <div class="col-md-6">
                    <h4 class="mb-3">Welcome to Cygnett</h4>
                  <p>Cygnett Hotels and Resorts Pvt. Ltd. (CH&RPL) is a young, progressive, and tech-savvy, international award-winning hotel Company responsive to the demands of a metamorphosing world. The multi-brand portfolio having a multidirectional approach gives it the edge to cater to the rapidly changing hotel industry on the founding tenets of hospitality, quality, comfort, and unique Cygnetture services.</p>
                  <p>Today's Cygnett Hotel Group offers a <strong>diverse hotel portfolio, attractive fees</strong> that <strong>optimize profitability</strong>, a relevant approach to our investment partners, and creating meaningful & Cygnetture experiences for our guests.</p>

                  </div>
                </div>  

                <div class="row mb-5">                  
                  <div class="col-md-6">                  
                  <p>At CH&RPL, we welcome you to explore the opportunity to grow with us and know, how you can benefit from the Cygnett CX system and Cygnett brands to achieve the right returns on your investment. With dedicated team support, focused marketing, and dynamic sales and distribution systems, we have the resources to launch your project and expertise to position effectively in the right markets to achieve market leadership.</p>
                  <p><strong>For your Unstoppable Growth and Momentum, Cygnett brands can be a game-changer for you.</strong></p>
                  
                  </div>
                  <div class="col-md-6"><img src="<?php echo base_url() ?>images/static/bd-img2.jpg" loading='lazy' class="img-fluid"></div>
                </div> 

                <!-- <div class="row mb-5">
                  <div class="col-md-12">
                  <h4 class="mb-3">What do our owners and partners say about us?</h4>
                </div>
                <div class="col-md-12">
                <div class="owl-carousel owl-theme" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 3}, '1199': {'items': 3}}, 'loop': false, 'autoHeight': true, 'margin': 10}">
                    <div>
                      <div class="testimonial testimonial-style-4 bd-testimonial">
                <blockquote>
                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                </blockquote>
                <div class="testimonial-arrow-down"></div>
                <div class="testimonial-author pb-3">
                  <div class="testimonial-author-thumbnail">
                    <img src="<?php echo base_url() ?>images/static/client-speak-img1.jpg" loading='lazy' class="img-fluid rounded-circle" alt="">
                  </div>
                  <p><strong class="font-weight-extra-bold">John Smith</strong><span>CEO & Founder - Okler</span></p>
                </div>
              </div>
                    </div>
                    <div>
                      <div class="testimonial testimonial-style-4 bd-testimonial">
                <blockquote>
                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                </blockquote>
                <div class="testimonial-arrow-down"></div>
                <div class="testimonial-author pb-3">
                  <div class="testimonial-author-thumbnail">
                    <img src="<?php echo base_url() ?>images/static/client-speak-img5.jpg" loading='lazy' class="img-fluid rounded-circle" alt="">
                  </div>
                  <p><strong class="font-weight-extra-bold">John Smith</strong><span>CEO & Founder - Okler</span></p>
                </div>
              </div>
                    </div>
                   <div>
                      <div class="testimonial testimonial-style-4 bd-testimonial">
                <blockquote>
                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                </blockquote>
                <div class="testimonial-arrow-down"></div>
                <div class="testimonial-author pb-3">
                  <div class="testimonial-author-thumbnail">
                    <img src="<?php echo base_url() ?>images/static/client-speak-img3.jpg" loading='lazy' class="img-fluid rounded-circle" alt="">
                  </div>
                  <p><strong class="font-weight-extra-bold">John Smith</strong><span>CEO & Founder - Okler</span></p>
                </div>
              </div>
                    </div>
                    <div>
                      <div class="testimonial testimonial-style-4 bd-testimonial">
                <blockquote>
                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                </blockquote>
                <div class="testimonial-arrow-down"></div>
                <div class="testimonial-author pb-3">
                  <div class="testimonial-author-thumbnail">
                    <img src="<?php echo base_url() ?>images/static/client-speak-img4.jpg" loading='lazy' class="img-fluid rounded-circle" alt="">
                  </div>
                  <p><strong class="font-weight-extra-bold">John Smith</strong><span>CEO & Founder - Okler</span></p>
                </div>
              </div>
                    </div>
                    <div>
                      <div class="testimonial testimonial-style-4 bd-testimonial">
                <blockquote>
                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                </blockquote>
                <div class="testimonial-arrow-down"></div>
                <div class="testimonial-author pb-3">
                  <div class="testimonial-author-thumbnail">
                    <img src="<?php echo base_url() ?>images/static/client-speak-img2.jpg" loading='lazy' class="img-fluid rounded-circle" alt="">
                  </div>
                  <p><strong class="font-weight-extra-bold">John Smith</strong><span>CEO & Founder - Okler</span></p>
                </div>
              </div>
                    </div>
                    
                  </div>
                </div>
                </div> -->

                <div class="row">
                  <div class="col-md-12">
                    <h4 class="mb-3">Our Value Proposition</h4>                                    
                  </div>
                </div>
                  
                <div class="row mb-5 pb-4 business-dev">
                  <div class="col-md-5"><img src="<?php echo base_url() ?>images/static/value-proposition.png" loading='lazy' class="img-fluid"></div>
                  <div class="col-md-7">
                    <h4 class="mb-3">Why we make good partners</h4>
                  <p>We know the importance of striking the right balance between scientific, efficient and time-tested process and dynamic innovation and creativity. All our projects are developed with complete customization and exacting attention in detail.</p>
                    <h4 class="mb-3">Some of our key tenets are:</h4> 
                    <ul>
                      <li>International award-winning brands that bring in innovative and progressive technology</li>
                      <li>Wide & flexible positioning spectrum to cater to the individual needs of owners</li>
                      <li>Owner-friendly management module: flexible monetary terms, transparency in operations, expert services and support leading to assured growth in brand value</li>
                      <li>Risk minimization and value creation through standardized procedures and processes, quality assurance and brand establishment</li>
                      <li>Carefully customized and perfected systems of quality and cost control to ensure high ROI for owners</li>
                      <li>Powerful sales and distribution strategy that includes a highly effective Central Reservation System that in connected with all premier Global Distribution Systems</li>
                      <li>Marketing support in positioning on a local as well as international level</li>
                    </ul>                 
                  </div>
                  
                </div> 

                </div>
 					</div>
 					


 			</section>

      <?php //$this->load->view('site/bd/meet-our-team-common');?>
      

 			

				<!-- Brand page content ends here -->
			</div>
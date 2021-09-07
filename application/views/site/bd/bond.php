<?php
$devicetye=devicedetector($_SERVER['HTTP_USER_AGENT']);

if($devicetye=='mobile'){
    $image1='generic-img1-mob.jpg'; 
 }else{
    $image1='bd-banner-img2.jpg';
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

               <!-- <div class="row mb-5">
                <div class="col-md-12">
               <blockquote class="blockquote-primary">
                    <p>Pellentesque pellentesque eget tempor tellus. Fusce lacllentesque eget tempor tellus ellentesque pelleinia tempor malesuada. Pellentesque pellentesque eget tempor tellus ellentesque pellentesque eget tempor tellus.</p>
                    <footer>John Smith <cite title="Source Title">CEO & Founder - Okler</cite></footer>
                  </blockquote>
                </div>
                </div> -->

               <div class="row mb-5">
                  
                  <div class="col-md-12">
                    <h4 class="mb-3">More Reasons than Ever To Bond With CYGNETT</h4>
                  <p>At Cygnett Hotels & Resorts, we firmly believe that our success would be driven by delivering exceptional value for all our stakeholders. Cygnett is the fastest-growing hotel management & brand franchise company. When you join us, we are committed to providing you with cutting-edge technology and management services to boost revenue, optimize costs, and maximize your return on investment.</p>
                  <p>Our focus is to actualize your hospitality vision with our resources, industry expertise, and exciting brands. As our patron, you have the commitment and support of <strong>Cygnett, an aggrandize hospitality organization</strong> and experienced team, as well as access to services designed to help optimize your business.</p>
                  <h4 class="mt-5 text-center">Cygnett Is the one stop hospitality Solutions</h4>
                  <p class="text-center"><img src="<?php echo base_url() ?>images/static/hospitality-solutions.png" loading='lazy'class="img-fluid-mob"></p>
                  </div>
                  
                </div> 

                <div class="row">
                  
                  <div class="col-md-12">
                    <h4 class="mb-3">Next Generation Technology  & operation efficiencies</h4>
                  <ul>
                    <li>Cygnett supports all its hotels with cutting-edge technology for upgrading the digital marketing strategy with its well-knit online network prompting the same to its global guests.</li>
                    <li>Cygnett provides intense brand visibility and higher room revenue generation through its distribution network and e-commerce support.</li>
                    <li>Our next-generation technology Cygnett CX & Operation Efficiencies, influence 70% of your revenues. We deliver one of the robust GOP margins of the industry</li>
                    <li>We know the importance of striking the right balance between scientific, efficient, and time-tested processes, dynamic innovations, and operational efficiencies</li>
                  </ul>
                  </div>


                  <div class="col-md-3 mb-4">
                      <div class="signature-box tech-box">
                      <img src="<?php echo base_url() ?>images/static/cygnett-cx.jpg" class="img-fluid" loading='lazy'>
                      <div class="signature-content text-left  tech-brands">                        
                        <p>Our reservation & distribution platform which uses several layers of intermesh data
to provide seamless booking experience</p>                       
                      </div>
                    </div>
                    </div>

                    <div class="col-md-3 mb-4">
                      <div class="signature-box tech-box">
                      <img src="<?php echo base_url() ?>images/static/cygnett-travel.jpg" class="img-fluid" loading='lazy'>
                      <div class="signature-content text-left  tech-brands">                        
                        <p>An amalgamation of all the properties with our holiday club offering</p>                       
                      </div>
                    </div>
                    </div>

                    <div class="col-md-3 mb-4">
                      <div class="signature-box tech-box">
                      <img src="<?php echo base_url() ?>images/static/cygnett-gold.jpg" class="img-fluid" loading='lazy'>
                      <div class="signature-content text-left  tech-brands">                        
                        <p>Our loyalty system which rewards Customers in points which are redeemable even
outside the Cygnett exosphere</p>                       
                      </div>
                    </div>
                    </div>

                    <div class="col-md-3 mb-4">
                      <div class="signature-box tech-box">
                      <img src="<?php echo base_url() ?>images/static/cygnett-cla.jpg" class="img-fluid" loading='lazy'>
                      <div class="signature-content text-left tech-brands">                        
                        <p>Cygnett Learning & Academics is an initiative to build the professionals of tomorrow
by providing world-class learning & training atmosphere</p>                       
                      </div>
                    </div>
                    </div>
                  
                </div> 

                <!-- <div class="row mb-5">
                <div class="col-md-12">
               <blockquote class="blockquote-primary">
                    <p>Pellentesque pellentesque eget tempor tellus. Fusce lacllentesque eget tempor tellus ellentesque pelleinia tempor malesuada. Pellentesque pellentesque eget tempor tellus ellentesque pellentesque eget tempor tellus.</p>
                    <footer>John Smith <cite title="Source Title">CEO & Founder - Okler</cite></footer>
                  </blockquote>
                </div>
                </div> -->
               
                </div>               

                </div>
          </div>
          


      </section>

          <?php //$this->load->view('site/bd/meet-our-team-common');?>

      

        <!-- Brand page content ends here -->
      </div>
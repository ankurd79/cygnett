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

               

               <div class="row">                  
                  <div class="col-md-12">
                    <h4 class="mb-3">Dynamic Business Model</h4>
                  <p>From building design to operating model to service levels, every element of Cygnett Hotels has been vigorous to deliver the best experience to the guests & the maximum return to investors. Cygnett offers prolific business models at the handpicked site for timeless enrichment.</p>
                  <p>Our objective is to offer you a tailor-made solution.</p>
                  <p><strong>Managed Hotels | Franchised Hotels | Leased hotels</strong></p>                  
                  </div>                 
                </div>

                <div class="divider divider-solid divider-style-4 taller">
                <i class="fas fa-chevron-down"></i>
                </div>

                <div class="row mb-4" id="management-hotels">
                  <div class="col-md-6">
                    <h4 class="mb-3">Management Services</h4>
                    <p>Under this hotel management agreement, Cygnett Hotels & Resorts handles the day-to-day operations of your property. Our specialized teams of talented professionals in sales, revenue management, finance, human resources, training, marketing initiatives, operations efficiency, loyalty program, reservations center, and our online power distribution coherently boost your hotel revenue.</p>
                    <p>Today Cygnett, with its demonstrated successful record, has become a preferred name in hospitality management for cost optimization, smooth operations, and profit maximization.</p>
                    <img src="<?php echo base_url() ?>images/static/business-model-img1.jpg" class="img-fluid" loading='lazy'>
                  </div>
                  <div class="col-md-6">
                  <h5>THE BENEFITS OF PARTNERING WITH US</h5>                    
                  <ul>
                    <li>International award-winning brands that bring in innovative and progressive technology.</li>
                    <li>Owner-friendly management module: flexible monetary terms, transparency in operations, expert services, and support leading to assured growth in brand value.</li>
                    <li>Extensive and flexible positioning spectrum caters to the owner's preferences.</li>
                    <li>We deploy experts & know-how specialists who provide customized operations & solutions.</li> 
                    <li>Accuracy in budgeting & forecast systems using dynamic reporting tools.</li>
                    <li>Substantial sales and distribution networks include a highly effective central reservation system connected with all premier global distribution systems.</li>
                    <li>We manage your Hotel's cyclic operations, accounting, performance, and human resources.</li>
                    <li>Cygnett has developed a set of distinctive culinary concepts to delight all palates. From the most discerning to the most experimental. Also, we offer Cygnetture Cuisine - A unique & innovative F&B programming from master chef partnerships. It embraces the F&B and generates local market demand, and maximizes ROI.</li> 
                    <li>Risk minimization and value creation through standardized procedures and processes, quality assurance, and brand establishment.</li>                            
                  </ul>
                  </div> 
                  
                </div>

                <div class="divider divider-solid divider-style-4 taller">
                <i class="fas fa-chevron-down"></i>
                </div>

                <div class="row mb-4" id="franchised-hotels">
                  <div class="col-md-6">
                    <h4 class="mb-3">Franchise Services</h4>
                    <p>Our franchise is an integral part of our expansion plan. There has never been a better time to partner with us.</p>
                    <p>Due to the growing competition in the franchise landscape, hotel owners are looking for a significant tech-savvy brand to expand their presence in the market. 
Under a hotel franchise agreement, Cygnett offers access to the brand to its patrons — it sells them the right to use the brand name & technology. Furthermore, expert assistance focusing on sales & marketing programs, quality & guest experience platforms, training programs, cloud-based reservations & global distribution systems for consistent successful operations.</p>
                    <img src="<?php echo base_url() ?>images/static/business-model-img2.jpg" class="img-fluid" loading='lazy'>
                  </div>
                  <div class="col-md-6">
                  <h5>THE BENEFITS OF PARTNERING WITH US</h5>                    
                  <ul>
                    <li>Young, Dynamic, Progressive, and attractive Brands</li>
                    <li>Marketing</li>
                    <li>Stimulate hotel’s sales, increase your average room rate and generate additional revenue</li> 
                    <li>Powerful Distribution and Revenue Management</li>
                    <li>Central Reservation System and E-Commerce</li> 
                    <li>Cygnett’s next-gen technology engine “Cygnett CX’’</li>
                    <li>Customer Loyalty Programme </li>
                    <li>Product brand standards</li> 
                    <li>Operating Brand standards</li> 
                    <li>Support for operational optimization</li>
                    <li>Technical Services</li>
                    <li>Growth opportunities within the network</li> 
                    <li>Quality control and assurance</li>
                    <li>Benchmarking</li> 
                    <li>Lower market barriers to entry</li> 
                    <li>Economies of scale</li>
                    <li>Innovation</li>
                    <li>Franchisor’s support </li>                   
                  </ul>
                  </div> 
                  
                </div>

               
                </div>               

                </div>
          </div>
          


      </section>

    <?php //$this->load->view('site/bd/meet-our-team-common');?>
      </div>  

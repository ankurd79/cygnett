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

               

               <div class="row ">                  
                  <div class="col-md-12">
                    <h4 class="mb-3">Technical Support and Pre-opening Services</h4>
                    <p>Cygnett provides comprehensive technical assistance for all its projects, whether you are building a new hotel, renovating, or converting an existing asset. We ensure that our final product delivers a superior customer experience while maintaining operational efficiencies. Our expert teams perform on universal brand standards, design guidelines and navigate your management through compliant execution to timely completion, efficient architecture, landscaping to interior design, and information systems. </p>
                    <p>With complete customization and exacting attention to detail, Cygnett empowers every project to create a benchmark in the hospitality world.</p>
                  </div>                  
                </div>

                <div class="row">
                <div class="col-md-12"><h4>Technical Support - Development Process:</h4></div>
                </div>

                <div class="row mb-4 tech-support">                  
                  <div class="col-md-6"><img src="<?php echo base_url() ?>images/static/tech-support-img1.jpg" class="img-fluid" loading='lazy'></div>
                  <div class="col-md-6">
                    <h4 class="mb-3">Project Appraisal</h4>
                  <ul>
                    <li>Conceptual design brief</li>
                    <li>Assistance with a feasibility study or market research</li> 
                    <li>Analysis of competition</li>
                    <li>Financial review and models</li>                   
                  </ul>
                  </div>
                </div>

                <div class="row mb-4 flex-column-reverse flex-lg-row tech-support">
                  <div class="col-md-6">
                    <h4 class="mb-3">Concepts and Design</h4>
                    <ul>
                    <li>Concept Design brief to the design team</li> 
                    <li>Area Requirements brief</li> 
                    <li>Customer and Operational flow chart</li>
                    <li>Review of all Architectural / Interior Design drawings</li>                  
                  </ul>
                  </div>
                  <div class="col-md-6"><img src="<?php echo base_url() ?>images/static/tech-support-img2.jpg" class="img-fluid" loading='lazy'></div>
                </div>


                <div class="row mb-4 tech-support">                  
                  <div class="col-md-6"><img src="<?php echo base_url() ?>images/static/tech-support-img3.jpg" class="img-fluid" loading='lazy'></div>
                  <div class="col-md-6">
                    <h4 class="mb-3">Detail Design and Planning</h4>
                  <ul>
                    <li>M&E specifications</li> 
                    <li>Compilation of FF&E</li> 
                    <li>Recommendations of equipment suppliers</li> 
                    <li>Preparation of operations manual</li> 
                    <li>Assist with budgets and financial planning</li> 
                    <li>Critical Path analysis and opening countdown</li>
                    <li>Regular meetings and review of all detail designs</li>               
                  </ul>
                  </div>
                </div> 

                <div class="row mb-4 flex-column-reverse flex-lg-row tech-support"> 
                  <div class="col-md-6">
                    <h4 class="mb-3">Project Supervision</h4>
                  <ul>
                    <li>Technical input and drawings as required</li>
                    <li>Regular review of interior design and finishes with the interior designers</li>
                    <li>Recommend computer and software management systems</li>
                    <li>Site visits troubleshoot and problem-solving for the client</li>
                    <li>Assisting and advising on the commissioning of all equipment</li>                    
                  </ul>
                  </div>
                  <div class="col-md-6"><img src="<?php echo base_url() ?>images/static/tech-support-img4.jpg" class="img-fluid" loading='lazy'></div>
                </div> 


                <div class="row">
                <div class="col-md-12"><h4>Pre Opening Support</h4></div>
                </div>

                <div class="row mb-4 tech-support">
                <div class="col-md-6"><img src="<?php echo base_url() ?>images/static/hotel-services-support.jpg" class="img-fluid" loading='lazy'></div> 
                  <div class="col-md-6">
                    <h4 class="mb-3">Hotel Services Support</h4>
                  <ul>
                    <li>Brand Standards</li>
                    <li>Latest Standard Operating Practices’</li> 
                    <li>Training Initiatives</li>
                    <li>Development Program</li> 
                    <li>HR hiring support</li>  
                    <li>Public relations</li>
                    <li>Dedicated Management Support Team</li> 
                    <li>Worldwide Sales Network & Effective Marketing Strategy Support</li>
                    <li>Access to Corporate Relationships</li> 
                    <li>Conference Support</li>
                    <li>Operations Support</li>
                    <li>Quality Assurance</li> 
                    <li>International Recognition</li>  
                    <li>Creating a “Cygnetture Experiences” Service culture at the hotel</li>  
                    <li>Strong Procurement Solutions</li>          
                  </ul>
                  </div>                  
                </div> 

                <div class="row mb-4 flex-column-reverse flex-lg-row tech-support"> 
                  <div class="col-md-6">
                    <h4 class="mb-3">Next Generation Technology Support</h4>
                  <ul>
                    <li>Cygnett website design and maintenance</li> 
                    <li>GDS & RFP set up, integration and visibility</li> 
                    <li>CRS Cloud (CRS) Reservation System and E-Commerce Support</li>
                    <li>CRS Voice</li>
                    <li>CRM</li>
                    <li>Cygnett’s AI powered next-gen technology engine, ‘Cygnett CX’</li>
                    <li>Powerful Distribution and Revenue Management</li> 
                    <li>Loyalty Program*</li>
                    <li>My Cloud PMS – CYGNETT</li> 
                    <li>Reputation Management Software</li> 
                    <li>Payment Gateway</li>
                    <li>Revenue Management Software</li>  
                    <li>SEO & SMO Management</li>
                    <li>AI Chatbot</li>                   
                  </ul>
                  </div> 
                  <div class="col-md-6"><img src="<?php echo base_url() ?>images/static/next-gen-tech.jpg" class="img-fluid" loading='lazy'></div>                 
                </div>

                <div class="row mb-4 tech-support"> 
                  <div class="col-md-6"><img src="<?php echo base_url() ?>images/static/financial.jpg" class="img-fluid" loading='lazy'></div>
                  <div class="col-md-6">
                    <h4 class="mb-3">Financial Know How</h4>
                  <p>Accountants have a host of responsibilities in the hotel industry. From delivering accurate month-end account statements, they also have to focus on the following activities -</p>
                  <ul>
                    <li>Budgets</li>
                    <li>Compare profits (between current and past periods)</li>
                    <li>Prepare financial statements, balance sheets</li>
                    <li>Cash flow statements</li> 
                    <li>Payroll management</li> 
                    <li>Regular monitoring and guidance from our Corporate Finance Controller result in better controlling. Financial statements of each department are vital for hotel owners/management to understand the monetary health of their hotel business. Information such as how your room is priced compared to competitors, or the current month’s profit as compared to the previous month gives deep insights. Generating and procuring all these details without constant guidance, consumes time and involves tremendous effort.</li>
                  </ul>
                  </div>                  
                </div>

                <div class="row mb-4 flex-column-reverse flex-lg-row tech-support"> 
                  <div class="col-md-6">
                    <h4 class="mb-3">Brand Support</h4>
                  <p>In a situation where we are selling our product or service to many customers, it’s best to first connect all of them to a common platform, and then articulate clearly what’s there for each of them. The goal is to generate an engaging conversation which will allows us to change perceptions, diagnose expectations, and forge clarity in the dialogue. Our branding teams are also researching and deriving new marketing strategies and concepts for a better brand recall.</p>                  
                  </div>
                  <div class="col-md-6"><img src="<?php echo base_url() ?>images/static/brand-support.jpg" class="img-fluid" loading='lazy'></div>                  
                </div>

                <div class="row mb-4 tech-support"> 
                  <div class="col-md-6"><img src="<?php echo base_url() ?>images/static/it-development.jpg" class="img-fluid" loading='lazy'></div> 
                  <div class="col-md-6">
                    <h4 class="mb-3">IT Development</h4>
                  <p>We understand that Hotel IT solutions are highly complex. Our team’s deep knowledge and experience working with a range of hotels, means that we can fix your technology issues quickly and ensure high productivity and focused on providing your guests with a positive experience and hotel PMS integration with our other technological tools.</p>                  
                  </div>                  
                </div>

                <div class="row mb-4 flex-column-reverse flex-lg-row tech-support"> 
                  <div class="col-md-6">
                    <h4 class="mb-3">Central Reservations & OTAs</h4>
                  <p>Cygnett CRS is a web-based Central Reservation Software System providing real-time reservations of room booking. This Online booking system will automate bookings of your property centrally through the Internet and contribute to maximize the hotel’s room revenue. Room Reservations can be made 24 x 7 using a simple dialup Internet connection. All the bookings will be updated to your property system on on-line mode and improve efficiency in Guest room bookings. Our dedicated revenue management team monitors competitors multiple time daily and change the pricing accordingly for better yield.</p>                  
                  </div>
                  <div class="col-md-6"><img src="<?php echo base_url() ?>images/static/central-reservations.jpg" class="img-fluid" loading='lazy'></div>                   
                </div>

                <div class="row mb-4 tech-support">
                <div class="col-md-6"><img src="<?php echo base_url() ?>images/static/rso-support.jpg" class="img-fluid" loading='lazy'></div> 
                  <div class="col-md-6">
                    <h4 class="mb-3">RSO Support</h4>
                  <p>Dedicated RSO teams scattered across India enables us in building one to one personal relationships with corporate houses and travel agents. Our on-field managers work collaboratively with off-property sales channels to ensure sales efforts are coordinated</p>
                  </div>                  
                </div>

                <div class="row mb-4 flex-column-reverse flex-lg-row tech-support"> 
                  <div class="col-md-6">
                    <h4 class="mb-3">Staffing and Operational matters</h4>
                  <ul>
                    <li>Selection of General Manager</li>
                    <li>Recruitment</li>
                    <li>Training and management orientation</li>
                    <li>Writing operational standards</li> 
                    <li>Developing signature treatments</li> 
                    <li>Opening set up and product training</li>
                    <li>Pre-opening team training process</li>
                  </ul>
                  </div>
                  <div class="col-md-6"><img src="<?php echo base_url() ?>images/static/staffing-operation.jpg" class="img-fluid" loading='lazy'></div>                  
                </div>

                <div class="row mb-4 tech-support"> 
                  <div class="col-md-6"><img src="<?php echo base_url() ?>images/static/marketing.jpg" class="img-fluid" loading='lazy'></div>
                  <div class="col-md-6">
                    <h4 class="mb-3">Marketing</h4>
                  <ul>
                    <li>Pre-opening marketing material</li>
                    <li>A Web presence - www.cygnetthotels.com</li>
                    <li>Marketing packages to hotel/resort</li>
                    <li>Assistance with Cygnett PR team for the hotel/ resort & spa in appropriate magazines and media.</li>
                  </ul>
                  </div>
                                    
                </div>
               

               
                </div>               

                </div>
          </div>
          


      </section>

          <?php //$this->load->view('site/bd/meet-our-team-common');?>
      </div>  

<?php
$data=siteConfig();
$this->load->view('site/our-presence');
$class=$this->router->fetch_class();
//echo '<br>';
$method=$this->router->fetch_method();
?>
<!-- Footer -->
      <footer class="site-footer">
    <div class="site-footer__main">
      <div class="container">
        <div class="row">
          <!-- <div class="col-md-12 col-sm-12 col-12">
            <p style="text-align: center; font-size:16px;"><img src="img/f-quick-links.png" class="image wp-image-1275  attachment-full size-full" alt="" style="max-width: 2%; height: auto;vertical-align: bottom;"> <strong>Quick Links :-</strong> 
            <a href="javascript:void(0);">Corporate Enquiry</a> | <a href="javascript:void(0);">Media &amp; News</a> | <a href="javascript:void(0);">Guest Reviews</a> | <a href="javascript:void(0);" data-toggle="modal" data-target="#cancellation-policy">Cancellation Policy</a> | <a href="javascript:void(0);">Terms &amp; Conditions</a>            
            </p><div class="empty-space marg-xs-b30"></div>
          </div> -->
      <div class="col-md-12 col-sm-12 col-12 text-center">
      <p><img src="<?php echo base_url() ?>images/static/cygnett-footer-logo.png" class="image wp-image-1275  attachment-full size-full" alt="Cygnett" style="max-width: 60%; height: auto; margin-right:20px; opacity: 0.5;"> <a href='https://www.ayurvyaas.com/' target='_blank'><img src="<?php echo base_url() ?>images/static/ayurvyaas-footer-logo.png" class="image wp-image-1275  attachment-full size-full" alt="Ayurvaas" style="max-width: 60%; height: auto; margin-right:20px; opacity: 0.5;"></a> <a href='https://cozzetstay.com/' target='_blank'><img src="<?php echo base_url() ?>images/static/cozzet-footer-logo.png" class="image wp-image-1275  attachment-full size-full" alt="cozzet" style="max-width: 60%; height: auto; margin-right:20px; opacity: 0.5;"></a>
            <a href='<?php echo base_url() ?>brands/details/elect-hotel/MTc='><img src="<?php echo base_url() ?>images/static/elect-footer-logo.png" class="image wp-image-1275  attachment-full size-full" alt="elect" style="max-width: 60%; height: auto; margin-right:20px; opacity: 0.5;"></a>
      </p>
      </div>    
      <!-- <div class="col-md-12 col-sm-12 col-12" style="text-align:center;"><span style="color:#fff;">For career contact:</span> <a href="mailto:hr@cygnetthotels.com"><i class="fa fa-envelope-o"></i> hr@cygnetthotels.com</a></div> -->
      <div class="col-md-12 col-sm-12 col-12" style="color: #fff; font-size: 16px; text-align: center;margin-top: 0px;  border-bottom: 1px solid #274497;margin-bottom: 20px;padding-bottom: 20px;">
          Asia, Middle East, Africa and Europe </div>
          <div class="col-md-12 col-sm-12 col-12 pt-3 pb-5 footer-mainlinks">
            <div class="row">
              <?php
                $footernavapi=base_url().'api/navigations/sitenav/fetchfooternav';
                $navarr=(getapicurlconnect($footernavapi));
                foreach($navarr as $nop){
              ?>
                <div class="col-md-3">
                  <p class="footer-links-title"><?php echo $nop['menu_name'] ?></p>
                  <ul class="footer-links-items">
                    <?php

                                  $apiurl=base_url().'api/navigations/sitenav/fetchsubmneu';
                                    $arr=(getapicurlconnect($apiurl,$nop['id']));
                                    foreach($arr as $n){
                                      $menuname=formattext($n['menu_name']);
                                      if($n['url']){
                                          $purl=base_url().$n['url'];
                                      }else{
                                          $purl='javascript:void(0);';
                                      }

                    ?>
                    <li><a href="<?php echo $purl ?>" <?php if($n['id']==48) {?>target='_blank' <?php } ?>title='<?php echo $n['menu_name'] ?>'><?php echo $n['menu_name'] ?></a></li>
                  <?php } ?>
                  </ul>
                </div>
              <?php } ?>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-12" style="border-top:1px solid #274497; border-bottom:1px solid #274497; margin-bottom: 10px;">
           <div class="row">
        <div class="col-md-12 col-sm-12 col-12 col-md-offset-3" style="padding: 0px 0px 6px; text-align:center;">
        <div id="media_image-1" class="widget footer_widget widget_media_image"><img src="<?php echo base_url() ?><?php echo folder_front ?>/img/f-contact-us.png" class="image wp-image-1275  attachment-full size-full" alt="" style="width: 6%; height: auto;">
             <span class="widget-title">Contact Us</span>
             </div>
            <div id="contact-details-1" class="widget footer_widget widget_contact_details">             
              <ul class="contact-info">
                <li class="contact-info-item"> <i class="fa fa-map-marker"></i> <?php echo $data['addressline'] ?>
                   <?php echo $data['city'] ?> <?php echo $data['pincode'] ?>, <?php echo $data['state'] ?>, <?php echo $data['country'] ?></li>
                <li class="contact-info-item"> <i class="fa fa-phone"></i> <a href="tel:+<?php echo $data['phone'] ?>"><?php echo $data['phone'] ?></a>, <a href="tel:+91 <?php echo $data['mobile'] ?>"><?php echo $data['mobile'] ?></a>, <a href="tel:+91 <?php echo $data['mobile2'] ?>"><?php echo $data['mobile2'] ?></a></li>
                <li class="contact-info-item"> <a href="mailto:<?php echo $data['email'] ?>"><i class="fa fa-envelope-o"></i>
                  <?php echo $data['email'] ?></a></li>
              </ul>
            </div>
      </div>
            <div class="empty-space marg-xs-b30"></div>
       </div>
          </div>
          <div class="col-md-12 col-sm-12 col-12 social-icons"><a href="https://www.facebook.com/cygnetthotels/" target="_blank" rel="nofollow"><i class="fab fa-facebook-square"></i></a><a href="https://twitter.com/cygnetthotels" target="_blank" rel="nofollow"><i class="fab fa-twitter-square"></i></a><a href=" https://www.instagram.com/cygnett_hotels/" target="_blank" rel="nofollow"><i class="fab fa-instagram"></i></a><a href="https://www.linkedin.com/company/cygnett-hotels-&amp;-resorts/?originalSubdomain=in" target="_blank" rel="nofollow"><i class="fab fa-linkedin"></i></a><a href="https://www.youtube.com/user/CygnettHotels" target="_blank" rel="nofollow"><i class="fab fa-youtube"></i></a></div>
        </div>
      </div>
    </div>
    <div class="site-footer__copyright">
      <div class="container">© Copyright@2021, Cygnett Hotels. All rights reserved.</div>
    </div>
  <a href="#" class="bookyourstay-mob">BOOK YOUR STAY</a>
  </footer>
      <!-- Footer -->
      </div>    
    </div>
    <!-- Vendor -->
    <script src="<?php echo base_url() ?><?php echo folder_front ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?><?php echo folder_front ?>/vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="<?php echo base_url() ?><?php echo folder_front ?>/vendor/jquery.easing/jquery.easing.min.js"></script>
    <!-- <script src="vendor/jquery.cookie/jquery.cookie.min.js"></script> -->
    <!-- <script src="vendor/popper/umd/popper.min.js"></script> --> 
    
    <!--<script src="<?php echo base_url() ?><?php echo folder_front ?>/vendor/bootstrap/js/bootstrap.min.js"></script>-->
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script src="<?php echo base_url() ?><?php echo folder_front ?>/vendor/common/common.min.js"></script>
    
    
    
    <!-- <script src="vendor/jquery.validation/jquery.validate.min.js"></script> -->
    <!-- <script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script> -->
    <!-- <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script> -->
    <!-- <script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script> -->
    <!-- <script src="vendor/isotope/jquery.isotope.min.js"></script> -->
    <script src="<?php echo base_url() ?><?php echo folder_front ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?><?php echo folder_front ?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- <script src="vendor/vide/jquery.vide.min.js"></script> -->
    <!-- <script src="vendor/vivus/vivus.min.js"></script> -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <!---for career page-->
    <script src="<?php echo base_url() ?>js/common_validate.js"></script>
    <?php if(($class=='sitenav')&&($method=='career')) {?>
    <script src="<?php echo base_url() ?>front/assets/job.js"></script>
    <?php } ?>
    
    <?php if(($class=='site')&&($method=='sitebranddetails')) {?>
        <script src="<?php echo base_url() ?>front/assets/bpillar.js"></script>
    <?php } ?>
    
    <?php if(($class=='unit')&&($method=='pages')) {?>
    <script src="<?php echo base_url() ?>front/assets/dining_event.js"></script>
    <?php } ?>
    
    <?php if(($class=='sitenav')&&($method=='hotellist')) {?>
        <script src="<?php echo base_url() ?>front/assets/hotel_list.js"></script>
    <?php } ?>
    <?php if(($class=='sitenav')&&($method=='corpenquiry')) {?>
        <script src="<?php echo base_url() ?>front/assets/corp_enquiry.js"></script>
    <?php } ?>
    <?php if(($class=='sitenav')&&($method=='guestreview')) {?>
        <script src="<?php echo base_url() ?>front/assets/guest_review.js"></script>
    <?php } ?>
    <?php if(($class=='sitenav')&&($method=='contactus')) {?>
    <script src="<?php echo base_url() ?>front/assets/contact_frm.js"></script>
    <?php } ?>
    <!---for career page-->
    
    <!-- Theme Base, Components and Settings -->
    <script src="<?php echo base_url() ?><?php echo folder_front ?>/js/theme.js"></script>
    
    <!-- Theme Custom -->
    <script src="<?php echo base_url() ?><?php echo folder_front ?>/js/custom.js"></script>
    
    <!-- Theme Initialization Files -->
    <script src="<?php echo base_url() ?><?php echo folder_front ?>/js/theme.init.js"></script>


    <div class="mob-book-now"><a href="javascript:void(0);">BOOK NOW</a></div>

    <!-- Book Now Modal -->
    <div class="modal fade bd-example-modal-lg mob-booknow-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Book Your Stay</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <div style="width:100%" class="be-container">
                          <p>BOOK YOUR STAY<span><a href="javascript:void(0);"><i class="fas fa-times-circle"></i></a></span></p>
        <div id="bookingwidgetBEwidget"></div>
        <input type="hidden" id="loadPropertyId" value="MZ1Yuon624w126M4r1DCeR/N+2aHjYBc0RmeZVgSLNI=">
        <script id="BEJSGROUP" src="https://maxbe.staah.net/be/js/mainwidgetbe.js?v=2.98" ></script>
</div>
      </div>
      


    </div>
  </div>
</div>

<style>
    
    @media (max-width: 460px) and (min-width: 320px){
    #bookingwidgetBEwidget .fte-bootstrap-wrapper .fte-searcharea .fte-form-group .fte-form-control, #bookingwidgetBEwidget .fte-bootstrap-wrapper .fte-searcharea .fte-form-group i {
    color: #ffffff !important;
    }
    }
</style>
  </body>
</html>
<?php
//ob_end_flush();
?>
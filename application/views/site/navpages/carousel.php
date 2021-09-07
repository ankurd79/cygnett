
			<div role="main" class="main">
				<!-- Top Carousel -->
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
  <div class="carousel-inner">
      
      <?php 
    $i = 0;
    $devicetye=devicedetector($_SERVER['HTTP_USER_AGENT']);
    if(!empty($bannerimg)){
        foreach($bannerimg as $b){ 
          
            if($devicetye=='mobile'){
              $image1=$b['mobile_banner_image']; 
            }else{
              $image1=$b['banner_image'];
            }
    
            $i++;
        ?>
        <?php if($b['is_active']=='1') {?>
        <div class="carousel-item <?php if($i==1) {?>active<?php } ?>">
          <img class="d-block w-100" src="<?php echo base_url()?>images/nav_banners/<?php echo $image1 ?>" alt="First slide" loading='lazy'>
        </div>
      <?php } ?>
      <?php } ?>
      <?php } else {?>
      
      <?php if($devicetye=='mobile'){
                $image1='generic-img1-mob.jpg';
                $image2='generic-img2-mob.jpg';
      }else{
      //$deviceused='Desktop';
              $image1='generic-img1.jpg';
              $image2='generic-img2.jpg';
          }?>
    
    
    
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url() ?>images/static/<?php echo $image1 ?>" loading='lazy' alt="First slide">
    </div>
      
      
      
      <?php } ?>
    
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <?php $this->load->view('site/booking-widget');?>
</div>
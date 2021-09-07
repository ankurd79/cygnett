<?php if($homepagebanners){?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3500">
  <div class="carousel-inner">
    <?php 
    $i=0;
    foreach($homepagebanners as $banner){
        $devicetye=devicedetector($_SERVER['HTTP_USER_AGENT']);
        if($devicetye=='mobile'){
          $image1=$banner['mobile_banner_image']; 
        }else{
          $image1=$banner['banner_image'];
        }  
        $i++;
      ?>
      <div class="carousel-item <?php if($i==1) {?>active<?php } ?>">
        <img class="d-block w-100" src="<?php echo base_url() ?>images/<?php echo folder_global ?>/banners/<?php echo $image1 ?>" loading="lazy" alt="First slide">
      </div>
    <?php }  ?>
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
<?php } ?>
<?php //exit; ?>
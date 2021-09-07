<?php
($arr=$details['results']);

//print_r($arr);
$parr=$pointers['results'];
$bannerlist=($bannerdetails['results']);

?>
<div role="main" class="main">
        <!-- Top Carousel -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
  <div class="carousel-inner">
    <?php 
    $i = 0;
    foreach($bannerlist as $b){ 
      $devicetye=devicedetector($_SERVER['HTTP_USER_AGENT']);
        if($devicetye=='mobile'){
          $image1=$b['mobile_banner_image']; 
        }else{
          $image1=$b['banner_image'];
        }

        $i++;
    ?>
    <?php if($b['is_active']=='1') {?>
    <div class="carousel-item <?php if($i==1) {?>active<?php } ?>">
      <img class="d-block w-100" src="<?php echo base_url()?>images/<?php echo folder_brand?>/banners/<?php echo $image1 ?>" alt="First slide">
    </div>
  <?php } ?>

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
<section class="brands-container <?php echo strtolower($arr[0]['brand_styling']) ?>">
        <div class="container inner-page-pad brands  pt-3">
            <div class="col-md-8 offset-md-2">
                  
          <div class="col-md-12 breadcrumb"><span class="pr-1"><a href="<?php echo base_url() ?>">Home</a></span> > <span class="pl-1 pr-1"><a href="<?php echo base_url() ?>brands.php">Brands</a></span> > <span class="pl-1"><?php echo ucfirst($arr[0]['brand_name']) ?></span></div>     
                  
                  <div class="row mb-4">
                  <div class="col-md-3"><img src="<?php echo base_url() ?>images/<?php echo folder_brand ?>/<?php echo $arr[0]['logo_image'] ?>" title='<?php echo $arr[0]['brand_tagline']  ?>' class="img-fluid brand-logo" loading='lazy'></div>
                  <div class="col-md-9 pt-4"><h3><?php echo ucfirst($arr[0]['brand_tagline']) ?></h3></div>
                  </div>
                  <?php 
                    $descArr=explode("*****",$arr[0]['description']);
                    $arraycount=count($descArr);
                    //exit;
                    echo htmlspecialchars_decode($descArr[0]);
                  //echo (htmlspecialchars_decode($arr[0]['description'])) 
                  ?>  
                  

                  
                  <h4><strong>Why <?php echo ucfirst($arr[0]['brand_name']) ?> ?</strong></h4>
                  <?php if($arr[0]['infographic']) {?>
                  <p class="text-center mt-4 mb-4"><img src="<?php echo base_url() ?>images/<?php echo folder_brand ?>/infographics/<?php echo $arr[0]['infographic'] ?>" loading='lazy' class="img-fluid-mobile"></p>
                  <?php } ?>                 
                  <?php
                  if($arraycount>1){
                  echo htmlspecialchars_decode($descArr[1]); 
                  }
                  
                  ?>
                            <?php if($arr[0]['pdf']) {?>
                            <!--<div class="row">
                                <div class="col-md-12">
                                    <p><span class="factsheet-icon"><i class="far fa-file-pdf"></i></span> <em>
                                      <a href='<?php echo base_url() ?>images/<?php //echo folder_brand ?>/pdf/<?php //echo $arr[0]['pdf'] ?>'>Download Factsheet</a></em></p>
                                </div>
                            </div>-->
                          <?php } ?>
                </div>
                

          </div>
      </section>

      <!-- <section class="brands-video">
      <div class="container">
          <div class="brand-media video-pad">
            <div class="col-md-8 offset-md-2">
              <iframe width="100%" height="450" src="https://www.youtube.com/embed/IPL2eTjxIKA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
 </section> -->

<?php if($carousellist) {?>
        <section class="brands-video">
      <div class="container">
          <div class="brand-media video-pad">
            <div class="col-md-8 offset-md-2">
              
                <div class="owl-carousel owl-theme nav-inside nav-style-1 nav-light" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}">
                <?php foreach($carousellist as $cls) {?>
                <div>
                  <div class="card card-shadow">
                <img class="card-img-top" src="<?php echo base_url() ?>images/<?php echo folder_brand ?>/brand_carousel/<?php echo $cls['image'] ?>" alt="<?php echo $cls['text'] ?>" loading='lazy'>
                <div class="card-body brand-title">
                  <h4 class="mb-0 pb-0 text-center"><?php echo $cls['text'] ?></h4>                                   
                </div>
              </div>
                </div>
                <?php } ?>
                
                

              </div>
              <?php  
              $data=array('brand'=>$arr[0]['brand_name']);
              $this->load->view('site/brands/brand-pillar-request-form',$data);
              ?>
              
          
            </div>
          </div>
        </div>
 </section>
<?php } ?>

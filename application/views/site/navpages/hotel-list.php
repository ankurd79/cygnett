			<?php
			//print_r(locationwithuints());
			$locations=locationwithuints();
			//print_r($locations);
			?>
			<div role="main" class="main">				
				<h3 class="hotellist-head-mob">Our Hotels</h3>
				<!-- Top Carousel -->
				
		
			<!-- Location starts here -->
			<section class="container cygnett-offers">
				<div class="breadcrumb-black mt-3 mb-3"><span class="pr-1"><a href="<?php echo base_url() ?>">Home</a></span> > <span class="pl-1 pr-1">Our Hotels</span></div>	
		
			
				<div class="row">
					
					<div class="col-md-12 search-heading-mob"><a href="javascript:void(0);"><i class="fas fa-search"></i> Search For Hotels</a></div>
					<div class="col-md-12 hotel-search-mob">
						<span class="mob-search-close">X</span>
						<div class="card card-shadow">
								<div class="card-body search-hotel-form">
									<form autocomplete='off'>
								<div class="row">
									<div class="col-md-6">    								
  									<div class="row">
										<div class="col-md-3 field-label"><i class="fas fa-search"></i> Search By</div>
										<div class="col-md-9">
										<input type="text" class="form-control" id="txtsearch" name="txtsearch" placeholder="Search">
    								</div>
									</div>
									</div>
									<div class="col-md-3">
										<div class="row">
										<div class="col-md-4 field-label">Country</div>
										<div class="col-md-8">
										<select class="filter form-control" name='country' id="exampleFormControlSelect1">
      										<option value='all'>Choose Country</option>
      										<option value='India'>India</option>
      										<option value='Nepal'>Nepal</option>
    									</select>
    								</div>
									</div>

									</div>
									<div class="col-md-3">
										<div class="row">
										<div class="col-md-4 field-label">Filter By</div>
										<div class="col-md-8">
										<select class="filter form-control" name='brands' id="brands">
											<option value='all'>Brand</option>
      										<option value='Cygnett Resort'>Cygnett Resort</option>
      										<option value='Cygnett Park'>Cygnett Park</option>
      										<option value='Cygnett Residences'>Cygnett Residences</option>
      										<option value='Cygnett Style'>Cygnett Style</option>
      										<option value='Cygnett Inn'>Cygnett Inn</option>
    									</select>
    								</div>
									</div>
									</div>
								</div>
							</form>
								</div>
							</div>
					</div>

					<div class="col-md-4 mt-3 mb-5 hotel-list-pad-mob">
						
						<div class="hotel-list-location">
							<?php foreach($locations as $loc){

								$unitcount=count(getlocationwiseunits($loc['id']));
								$unitcountElect=count(getlocationwiseElectunits($loc['id']));
								$unitcount=$unitcount+$unitcountElect;
								if($unitcount>1){
									$str="s";
								}else{
									$str='';
								}

								?>
								<div class='content'>
								<div class="accordion_head">
								    <div class="row">
								        <div class="col-md-4 hotel-list-img-mob">
								            <?php if($loc['list_image']) {?>
								            <img src="<?php echo base_url() ?>/images/<?php echo folder_location ?>/<?php echo $loc['list_image'] ?>" loading="lazy" class="img-fluid">
								            
								            <?php } else { ?>
								            
								            <img src="<?php echo base_url() ?>images/nainital-listing.jpg" loading="lazy" class="img-fluid">
								            
								            
								            <?php } ?>
								            
								            
								            </div>
								        <div class="col-md-8">
								<h3><a href="<?php echo urlothers($loc['custom_url']); ?>" target='_blank'><?php echo $loc['location'] ?></a></h3>
								<span class="hotel-count"><?php echo $unitcount ?> Hotel<?php echo $str ?></span>
								<span class="plusminus"></span>
								</div>
								</div>
								</div>
								<div class="accordion_body" style="display: none;">
									 <?php 
									 	$m=0;
									 	$unitlist=getlocationwiseunits($loc['id']);
									 	foreach($unitlist as $u){
									 ?>
									 
									 <div class="row hotel-list-items mb-3" >
									 	<span style='display:none;'><?php echo $u['nicename'] ?> | <?php echo $u['brand_name'] ?></span>
					 					<div class="col-md-4 pr-0 app" ><a href="<?php echo urlgeneratorunitnav($u['custom_url'].'/unit-overview') ?>" target='_blank'><img src="<?php echo base_url() ?>images/<?php echo folder_units ?>/<?php echo $u['list_image'] ?>" title="<?php echo $u['hotel_name'] ?>" class="img-fluid" loading="lazy" ></a></div>
									 	<div class="col-md-8 mob-hotel-listing">
									 		<h6><a href="<?php echo urlgeneratorunitnav($u['custom_url'].'/unit-overview') ?>" target='_blank'><?php echo $u['hotel_name'] ?></a></h6>
									 		<p><?php echo $u['location'] ?>, <?php echo $u['name'] ?></p>
									 		<p class="mt-2"><a href="<?php echo urlgeneratorunitnav(($u['custom_url'].'/unit-overview')) ?>" target='_blank'><button type="button" class="btn btn-outline btn-primary btn-xs mb-2 explore-hotel-mob">Explore Hotel</button></a>  <a href="javascript:void(0);" class='mapview' id='h_<?php echo $u['id'] ?>'><button type="button" class="btn btn-outline btn-primary btn-xs mb-2 view-map-mobile">View Map</button></a></p>
									 	</div>
									</div>
									<?php } ?>
									
									<?php
									$electunitlist=getlocationwiseElectunits($loc['id']);
									if($electunitlist){
									?>
									<p style="font-weight:500;">Elect -  Cygnett Collection Hotels</p>
									<hr style="margin:5px 0px 10px 0px;">
									<!--elect block-->
									<?php
									    
									 	foreach($electunitlist as $eu){
									?>
									<div class="row hotel-list-items mb-3" >
									 	<span style='display:none;'><?php echo $eu['nicename'] ?> | <?php echo $eu['brand_name'] ?></span>
					 					<div class="col-md-4 pr-0 app" ><a href="<?php echo urlgeneratorunitnav($eu['custom_url'].'/unit-overview') ?>" target='_blank'><img src="<?php echo base_url() ?>images/<?php echo folder_units ?>/<?php echo $eu['list_image'] ?>" title="<?php echo $eu['hotel_name'] ?>" class="img-fluid" loading="lazy" ></a></div>
									 	<div class="col-md-8 mob-hotel-listing">
									 		<h6><a href="<?php echo urlgeneratorunitnav($eu['custom_url'].'/unit-overview') ?>" target='_blank'><?php echo $eu['hotel_name'] ?></a></h6>
									 		<p><?php echo $eu['location'] ?>, <?php echo $eu['name'] ?></p>
									 		<p class="mt-2"><a href="<?php echo urlgeneratorunitnav($eu['custom_url'].'/unit-overview') ?>" target='_blank'><button type="button" class="btn btn-outline btn-primary btn-xs mb-2 explore-hotel-mob">Explore Hotel</button></a>  <a href="javascript:void(0);" class='mapview' id='h_<?php echo $eu['id'] ?>'><button type="button" class="btn btn-outline btn-primary btn-xs mb-2 view-map-mobile">View Map</button></a></p>
									 	</div>
									</div>
									<?php } ?>
									<!--elect block-->
									<?php } ?>
								
								</div>
								</div>
							<?php }  ?>



							
 
						</div>






					</div>
					<div class="col-md-8 mt-3 mb-5 hotel-list-map-container" id='mapblock'>
						<div class="lds-facebook"><div></div><div></div><div></div></div>
					</div>
				</div>



			</section>






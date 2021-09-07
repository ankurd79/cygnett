<?php 
     //print_r($homepagebanners);
?>

			<div role="main" class="main">
							
				<?php $this->load->view('site/home/carousel',$homepagebanners);?>
			<!--  Popular destinations -->
				<?php $this->load->view('site/home/populardestinationblock');?>
			<!--  Popular destinations -->	
			<!--  Offers -->
				<?php $this->load->view('site/home/offersblock');?>
			<!--  Offers -->
			<!--  Cygnett Happenings -->
				<?php $this->load->view('site/home/happeningsblock');?>
			<!--  Cygnett Happenings -->
			<!--  Other 3 Sections -->
				<?php $this->load->view('site/home/hiddenblock');?>
			<!--  Other 3 Sections -->	
			<!--  Our Brands -->
			<?php $this->load->view('site/home/ourbrandsblock');?>
			<!--  Our Brands -->
			<!--  News -->
			<?php $this->load->view('site/home/newsblock');?>
			<!--  News -->
			
			
			<?php //$this->load->view('site/our-presence');?>
			
			
				
			
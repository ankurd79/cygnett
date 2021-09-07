<?php
//print_r($hotelnavigation);
?>



		
			<?php
				
				if($navid==1){
					$this->load->view('site/unit/overview1');
				}elseif($navid==3){
					$this->load->view('site/unit/accomodation',$navid);	
				}elseif($navid==7){
					$this->load->view('site/unit/offers',$navid);	
				}elseif($navid==5){
					$this->load->view('site/unit/dining',$navid);	
				}elseif($navid==4){
					$this->load->view('site/unit/meeting',$navid);	
				}elseif($navid==6){
					$this->load->view('site/unit/gallery',$navid);	
				}







			?>

</div>
			</section>
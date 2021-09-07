<?php
$url=base_url().'api/media/media/mediafetch';
$arr=fetchapidata($url);
$result=($arr['results']);
#print_r($result);
?>
<section class="pb-4 cygnett-news">
				<div class="container">
					<h3 class="mb-3">NEWS</h3>
					<div class="owl-carousel owl-theme show-nav-title" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 2}, '979': {'items': 3}, '1199': {'items': 3}}, 'loop': true, 'autoHeight': true, 'margin': 20, 'nav': true, 'dots': false}">
								<?php 
								$counter =0;
								foreach($result as $r) {?>
								<?php if($counter<10){ ?><div>
									<div class="card card-shadow news-home-class">
								<img class="card-img-top" src="images/<?php echo folder_media ?>/<?php echo $r['image'] ?>" loading="lazy" alt="<?php echo $r['news_title'] ?>">
								<div class="card-body">
									<h4 class="mb-2 pb-0">
									    <?php 
									        if(str_word_count($r['news_title'])>11)
									            echo wordLimit($r['news_title'],11).' ...'; 
									        else
									            echo $r['news_title'];
									   ?>  
									</h4>
									<!--<p ><?php echo $r['intro_text'] ?></p>-->
									<p class="news-date"><?php echo str_replace('-',' ',formatDateTime($r['date_of_publishing'],1)) ?></p>
									<a href='<?php echo $r['url'] ?>' target='_blank' title='<?php echo $r['news_title'] ?>' rel="nofollow"><button type="button" class="btn btn-primary btn-sm mb-2">View Page</button></a>
								</div>
							</div>
								</div>
								<?php } ?>
								<?php $counter++; ?>
							<?php } ?>
							</div>
				</div>
			</section>
<!DOCTYPE html>
<html>
	<head>
		
<!-- End Google Tag Manager -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	
		<title><?php echo $title ?></title>	
		<meta name="keywords" content="<?php echo $keywords ?>" />
		<meta name="description" content="<?php echo $description ?>">
		<meta name="author" content="">
		<?php if(isset($canonical)) {?>
		    <link rel="canonical" href="<?php echo $canonical ?>" />
		<?php } ?>
		<?php if(isset($nocrawl)&&($nocrawl==1)) {?>
		    <meta name="robots" content="noindex, nofollow">
		<?php } ?>
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>images/fav-icon.png">
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?><?php echo folder_front ?>/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?><?php echo folder_front ?>/vendor/fontawesome-free/css/all.min.css">
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
		<link rel="stylesheet" href="<?php echo base_url() ?><?php echo folder_front ?>/vendor/animate/animate.min.css">
		<!-- <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css"> -->
		<link rel="stylesheet" href="<?php echo base_url() ?><?php echo folder_front ?>/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?><?php echo folder_front ?>/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?><?php echo folder_front ?>/vendor/magnific-popup/magnific-popup.min.css">
		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?><?php echo folder_front ?>/css/theme.css">
		<link rel="stylesheet" href="<?php echo base_url() ?><?php echo folder_front ?>/css/theme-elements.css">
		<link rel="stylesheet" href="<?php echo base_url() ?><?php echo folder_front ?>/css/skins/default.css"> 
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?><?php echo folder_front ?>/css/custom.css">
		<link rel="stylesheet" href="<?php echo base_url() ?><?php echo folder_front ?>/css/leadership.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>css/custom.css">
		<!-- Head Libs -->
		<script src="<?php echo base_url() ?><?php echo folder_front ?>/vendor/modernizr/modernizr.min.js"></script>
		<script>
var base_url='<?php echo base_url()?>';
//alert (base_url);
function isNumberKey(evt){var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))return false;return true;}
</script>
<meta name="google-site-verification" content="qoaKCZWDLJXssaFpi-TNxkZLaDV3DjuGAhmJNvhiwd0" />
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-62755048-5" defer></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-62755048-5');
</script>
<script src="https://assets.what3words.com/sdk/v3/what3words.js"></script>
	</head>
	<body data-spy="scroll" data-target="#sidebar" data-offset="120">
	        <!-- Google Tag Manager (noscript) -->

		<div class="body">
			<!-- Header -->
				<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': false, 'stickyStartAt': 0}">
				<div class="header-body border-top-0">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="<?php echo base_url() ?>">
											<img alt="" width="122" height="80" src="<?php echo base_url() ?><?php echo folder_front ?>/img/cygnett.png" loading="lazy">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<?php 
														if($headernavigation){
															foreach($headernavigation as $hnav){
																if($hnav['url']){
																	$url=base_url().$hnav['url'];
																}else{
																	$url='javascript:void(0);';
																}
													?>
													<li class="dropdown dropdown-mega">
														<a class="dropdown-item dropdown-toggle" href="<?php echo $url ?>">
															<?php echo $hnav['menu_name'] ?>
														</a>
													<?php if($hnav['id']==1) {?>		
														<ul class="dropdow-menu">
															<li>
																<div class="dropdown-mega-content our-story-megamenu">
																	<div class="tab">
																	<?php
																		$apiurl=base_url().'api/navigations/sitenav/fetchsubmneu';
																		$arr=(getapicurlconnect($apiurl,$hnav['id']));
																		foreach($arr as $n){
																			$menuname=formattext($n['menu_name']);
																			if($n['url']){
																					$purl=base_url().$n['url'];
																			}else{
																					$purl='javascript:void(0);';
																			}

																	?>		
  																		<a href="<?php echo $purl ?>" class="tablinks" onmouseover="openCity(event, '<?php echo $menuname ?>')"><?php echo $n['menu_name'] ?></a>
  																		<?php } ?>
																	</div>
																	<?php 
																	$j=0;
																	foreach($arr as $t){
																		$j++;?>	
																	<div id="<?php echo formattext($t['menu_name']) ?>" class="tabcontent" <?php if($j==1) {?>style="display:block;"<?php } ?>>
  																	
  																	<div class="row">
  																	<?php
  																		$apiurl=base_url().'api/navigations/sitenav/fetchrolloverdata';
																		$rollarr=(getapicurlconnect($apiurl,$t['id']));
																		foreach($rollarr as $r){
  																	?>
  																	<?php if(count($rollarr)>1) {?>
  																	<div class="col-md-6">	
  																	<h3 class="mb-3"><?php echo $r['title'] ?></h3>
  																	<p class="mb-2"><img src="<?php echo base_url() ?>images/<?php echo folder_nav_ro ?>/<?php echo $r['image'] ?>" alt="<?php echo $r['title'] ?>" class="img-fluid" loading="lazy"></p>
  																	<p class="mb-2"><?php echo htmlspecialchars_decode($r['description']) ?></p>
  																	</div>
  																<?php } else { ?>
  																	<div class="col-md-6">	
  																	<h3 class="mb-3"><?php echo $r['title'] ?></h3>
  																	<p class="mb-2"><?php echo htmlspecialchars_decode($r['description']) ?></p>
  																	</div>
  																	<div class="col-md-6">						
  																	<p class="mb-2"><img src="<?php echo base_url() ?>images/<?php echo folder_nav_ro ?>/<?php echo $r['image'] ?>" alt="<?php echo $r['title'] ?>" class="img-fluid" loading="lazy"></p> 					
  																	</div>
  																<?php } ?>	
  																<?php } ?>
  																   </div>
																	</div>
																<?php } ?>
																</div>
															</li>
														</ul>
														<?php }elseif($hnav['id']==6){?>	
															<ul class="dropdown-menu">
<li>
																<div class="dropdown-mega-content cygnett-brands-megamenu">
																	<div class="tab">
  																	<h4>Our Restaurants</h4>
  																	<p><?php echo $hnav['dropdown_text'] ?></p>	
																	</div>
																	<div class="other-tabcontent" style="display:block;">
  																	<div class="content-grid mt-4 mb-4">
										<div class="row content-grid-row" style="text-align: center;">
											<?php foreach($restaurantlist as $res){?>
    											<div class="content-grid-item col-lg-3 text-center">
    													<div class="p-3">
    														<a href="<?php echo urlgenerator('dining',$res['name'],$res['id']); ?>"><img class="img-fluid brand-logo" src="<?php echo base_url() ?>images/<?php echo folder_restaurant ?>/<?php echo $res['logo_image'] ?>" alt="<?php echo $res['name'] ?>" loading="lazy"></a>
    													</div>
    											</div>
											<?php }  ?>
										</div>
									</div>
																	</div>
																</div>
															</li>
														</ul>
														<?php }  ?>	
													</li>
													<?php }}?>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- Header -->
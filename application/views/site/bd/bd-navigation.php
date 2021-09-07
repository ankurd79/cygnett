<?php

$class=$this->router->fetch_class();
//echo '<br>';
$method=$this->router->fetch_method();
?>
<li class="nav-item <?php if(($class=='businessdev')&&($method=='index')) {?>active<?php } ?>">
                    <a class="nav-link" href="<?php echo base_url() ?>business-development" >Why Cygnett</a>
                  </li>
                  <li class="nav-item <?php if(($class=='businessdev')&&($method=='bond')) {?>active<?php } ?>">
                    <a class="nav-link" href="<?php echo base_url() ?>why-bond-with-cygnett" >Bond with Cygnett</a>
                  </li>
                   <li class="nav-item <?php if(($class=='businessdev')&&($method=='brands')) {?>active<?php } ?>">
                    <a class="nav-link" href="<?php echo base_url() ?>our-brands" >Our Brands</a>
                  </li>
                  <li class="nav-item <?php if(($class=='businessdev')&&($method=='businessmodel')) {?>active<?php } ?>">
                    <a class="nav-link" href="<?php echo base_url() ?>business-model" >Business Model</a>
                  </li>                 
                  <li class="nav-item <?php if(($class=='businessdev')&&($method=='team')) {?>active<?php } ?>">
                    <a class="nav-link" href="<?php echo base_url() ?>our-team" >Our Team</a>
                  </li>
                  <li class="nav-item <?php if(($class=='businessdev')&&($method=='projecttech')) {?>active<?php } ?>">
                    <a class="nav-link" href="<?php echo base_url() ?>projects-and-tech-support" >Projects & Tech Support</a>
                  </li>
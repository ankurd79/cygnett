<?php
/*
$url=base_url().'api/locations/location/locationfetch';
$arr=fetchapidata($url);
$locarr=($arr['results']);
*/
$locarr=locationwithuints();
?>
<section class="pb-4 pt-4 our-presence">
                <div class="container">
                    <p class="pb-0 mb-0"><a href="javascript:void(0);" class="our-presence-link">We Have Our Presence At +</a></p>
                    <div class="panel-body">
                        <div class="row">
                        <div class="col-md-12">
                         <ul>
                            <?php foreach($locarr as $loc){ ?>
                                <li><a href="<?php echo urlothers($loc['custom_url']) ?>" class="prtnr"> Hotels in <?php echo $loc['location'] ?></a></li>
                            <?php } ?>
                        </ul>        

                        </div>                                     
                    
                </div>
                </div>
                </div>
            </section>
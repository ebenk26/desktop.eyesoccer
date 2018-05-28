<?php 
$popular = json_decode($popular);
$uservid = json_decode($uservid);
$star    = json_decode($star);
//p(json_decode($popular));p(json_decode($uservid));p(json_decode($star))?>
<div class="container tab">
    <span href="" id="star" data-target="#esTab" data-slide-to="0" class="active nonactive" active="true">eyesoccer star</span>
    <span href="" id="vpopuler" data-target="#esTab" data-slide-to="1" class="nonactive">video popular</span>
    <span href="" id="vkamu" data-target="#esTab" data-slide-to="2" class="nonactive">video kamu</span>
    <hr>
    <div id="esTab" class="carousel slide">
		<div role="listbox" class="carousel-inner">                    
            <div id="star" class="box item active">
                <div class="box-vl pd-b-10">
                    <a href="<?php echo EYETUBE ?>"><span class="vl">Video Lainnya</span>
					<i class="material-icons r-vl">keyboard_arrow_right</i>        
					</a>                        
                </div>
				<?php
				#foreach ($eyetube_stars as $stars)
				if($star->status == 'Success'):
					foreach($star->data as $v):?>

						<a href="<?php echo$v->share_url; ?>" style="text-decoration: unset;">
						<div class="vid-box-vl">
							<div class="vid-box-vl-img">
								<img class="lazy" src="<?= $v->url_thumb;?>/medium" alt="">										
							</div>
							<div class="container h41"><span class="vid-ttl"><?= $v->title; ?></span><br></div>
							<p class="vid-time"><?php
						#$date 		=  new DateTime($stars['createon']);
						#$tanggal 	= date_format($date,"Y-m-d H:i:s");

						#echo relative_time($tanggal) . ' ago - '.$stars['tube_view'].' views';
					?></p>                              
					</div>
				</a>



					<?php

					endforeach;
				endif;
		
				?>
											
            </div>
            <div id="vpopuler" class="box item">
                <div class="box-vl">
                    <a href="" class="vl">Video Lainnya</a>
                    <i class="material-icons r-vl">keyboard_arrow_right</i>                                
                </div>
				<?php
				if($popular->status == 'Success'):
					foreach($popular->data as $v):?>
			
						<a href="<?php echo $v->share_url; ?>" style="text-decoration: unset;">
					<div class="vid-box-vl">
						<!--<img class="lazy" src="assets/img/video-small.png" alt="">-->
						<div class="vid-box-vl-img">
							<img class="lazy" src="<?php echo $v->url_thumb?>" alt="">										
						</div>
						<div class="container h41"><span class="vid-ttl"><?php echo $v->title?></span><br></div>
						<p class="vid-time"><?php
						#$date 		=  new DateTime($populer['createon']);
						#$tanggal 	= date_format($date,"Y-m-d H:i:s");

						#echo relative_time($tanggal) . ' ago - '.$populer['tube_view'].' views';
					?></p>                              
					</div>
				</a>
				<?php
					endforeach;
				endif;
				?>									
            </div>
            <div id="vkamu" class="box item">
                <div class="box-vl">
                    <a href="" class="vl">Video Lainnya</a>
                    <i class="material-icons r-vl">keyboard_arrow_right</i>                                
                </div>
				<?php
				if($uservid->status == 'Success'):

					foreach ($uservid->data as $v):
				#{
				?>							
				<a href="<?php echo $v->share_url?>" style="text-decoration: unset;">
					<div class="vid-box-vl">
						<div class="vid-box-vl-img">
							<img class="lazy" src="<?php echo $v->url_thumb?>" alt="">
						</div>
						<div class="container h41" ><span class="vid-ttl"><?php echo $v->title?></span><br></div>
						<p class="vid-time"><?php
						#$date 		=  new DateTime($kamu['createon']);
						#$tanggal 	= date_format($date,"Y-m-d H:i:s");

						#echo relative_time($tanggal) . ' ago - '.$kamu['tube_view'].' views';
					?></p>                              
					</div>
				</a>
				<?php		
					endforeach;
				endif;
				?>							
            </div>
        </div>					
    </div>
</div>
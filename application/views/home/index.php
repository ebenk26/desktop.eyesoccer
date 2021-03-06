<style>
	.tvchanel{
		color:#d19595;
		padding: 3px 0px;
		border-radius: 15px;
		background-color:#e6e6e652;
	}
	.notvchanel{
		padding: 10px 0px;
	}
	.listmatch:hover{
	background-color:#00a71a14;
	}


	/* .zona_ucl{background-color: #00580c3b;} */
	.zona_degradasi{background-color: #FFEBEE;color: #F44336;}
	/* .zona_ucl:hover{background-color: #00580c54;} */
	.zona_uefa:hover{background-color: #333e9652;}
	.zona_degradasi:hover{background-color: #FFCDD2;}
	.zona_ucl, .zona_uefa, .zona_acl{background-color: #C5E1A5;}
	.zona_afc{background-color: #D1C4E9;}
	.zona_afc_wl{background-color: #F3E5F5;}
	.zona_ucl:hover, .zona_uefa:hover, .zona_acl:hover{background-color: #AED581;}
	.zona_afc:hover{background-color: #CE93D8;}
	.zona_afc_wl:hover{background-color: #E1BEE7;}

.detailzona_kontinental2, .detailzona_kontinental1, .detailzona_degradasi{
    font-size: 12px;
	position: relative;
	float: left;
}
.detailkontinental1{
	background-color: #C5E1A5;
}
.detailkontinental1, .detailkontinental2, .detaildegradasi{
	width: 20px;
	height: 20px;
	margin: 0px 10px;
	border-radius: 10px;
	display: block;
	float: left;
	box-sizing: border-box;
}
.detailkontinental2{
	background-color:#D1C4E9;
}
.detaildegradasi{
	background-color:#FFCDD2;
}
.detailklasemen{
	float: left;
	height: 25px;
	margin-top: 10px;
	width: 100%;
}
</style>

<div class="baseurl" val="<?php echo base_url()?>"></div>
<!-- JADWAL begin-->
<div id="jadwal" class="jadwal carousel slide" style="overflow:  hidden;">
    <div class="left navigate" href="#jadwal" role="button">
        <i class="material-icons">keyboard_arrow_left</i>
    </div>
    <div class="baseurl" val="<?php echo base_url()?>"></div>
    <div role="listbox" class="j-box carousel-inner">
        <div class="over item active">
		<?php foreach ($jadwal as $jadual):?>	
				<div class="j-content">
					<span class="t"><?=date("d M Y",strtotime($jadual["jadwal_pertandingan"]))?></span><br>
					<span class="r"><?=$jadual["club_a"]?></span><span class="s"><?=$jadual["score_a"]?></span><br>
					<span class="r"><?=$jadual["club_b"]?></span><span class="s"><?=$jadual["score_b"]?></span><br>
				</div>			

		<?php endforeach;?>
        </div>
        <div class="over item">
        <?php foreach ($jadwal_2 as $jadual_2):?>	
			<div class="j-content">
				<span class="t"><?=date("d M Y",strtotime($jadual_2["jadwal_pertandingan"]))?></span><br>
				<span class="r"><?=$jadual_2["club_a"]?></span><span class="s"><?=$jadual_2["score_a"]?></span><br>
				<span class="r"><?=$jadual_2["club_b"]?></span><span class="s"><?=$jadual_2["score_b"]?></span><br>
			</div>			
		<?php endforeach;?>
        </div>
    </div>
     <div class="right navigate" href="#jadwal" role="button">
        <i class="material-icons">keyboard_arrow_right</i>
    </div>
</div>
<!-- TRENDING -->
<div class="trending">
    <span class="x-c">
        <span>Trending</span>
			<?php 
			foreach ($trend_eyetube as $trendnya_tube)
			{
				$judul_trend 	= word_limiter($trendnya_tube['title'],3);
			?>
				<a href="<?php echo base_url(); ?>eyetube/detail/<?= $trendnya_tube['url']; ?>" title="<?php echo $trendnya_tube['title'] ?>">
					<?php echo $judul_trend; ?>
				</a>
			<?php
			}
			?>
			<?php
			foreach ($trend_eyenews as $trendnya_news)
			{
			?>
				<a href="<?php echo base_url(); ?>eyenews/detail/<?= $trendnya_news['url']; ?>" title="<?php echo $trendnya_news['title']; ?>">
					<?php echo word_limiter($trendnya_news['title'],3); ?>
				</a>
			<?php		
			}
			?>
    </span>
</div>
<!-- EYEPROFILE -->
<div class="carous center-desktop" style="margin-top: -30px;">
    <img class="img-title lazy" src="<?php echo base_url()?>assets/home/img/ic_eyeprofile.png" alt="">
    <h2 class="title ep"><a href="<?php echo base_url();?>eyeprofile/klub/Liga-Usia-Muda/SSB">EyeProfile</a></h2>
    <hr class="x-ep">
    <span>
        <a href="<?php echo base_url()?>eyeprofile/klub/Liga-Usia-Muda/SSB"><span class="kl">Klub Lainnya</span>
        <i class="material-icons r-kl">keyboard_arrow_right</i>                       </a>         
    </span>            
  
    <div id="reqprofile" class="loadprofile" action>    
    <input type="hidden" name="fn" value="profile_club" class="cinput">  
    	<script>
    		$(document).ready(function(){
    			$(window).on('load',function(){
    			ajaxOnLoad('loadprofile');
    			});
    		})
    	</script>          
    </div>
	<div id="reslistclub">
  		<?php for($i= 0;$i < 4;$i++){?>
        	<div class="box-content box-bg">
        	</div>	
        <?php }?>	
	</div>
    <div class="pemain">
	    <div class="bx-nav">
	        <i class="material-icons leftp i-bx-nav" href="#topPemain" role="button">keyboard_arrow_left</i>
	        <i class="material-icons rightp i-bx-nav" href="#topPemain" role="button">keyboard_arrow_right</i>
	    </div>

    <h3 class="o">Pemain Paling Banyak Dilihat</h3>
	    <div id="resplayerlist">
	    <div style="margin:auto;width:76%">
	    	<div id="reqplayerlist" class="loadplayerlist" action>
	    		<input type="hidden" name="fn" value="list_player" class="cinput">
	    			<script>
	    				$(document).ready(function(){
	    					$(window).on('load',function(){
	    						ajaxOnLoad('loadplayerlist');
	    					});
	    				});
	    			</script>
	            <?php for($i= 0;$i < 3;$i++){?>
	            	<div class="box-content box-bg">
	            	</div>	
	            <?php }?>	
	    	</div>
		</div>
		</div>

        <!-- EYETUBE -->
        <div class="center-desktop">        
            <img class="img-title lazy" src="<?php echo base_url()?>assets/home/img/ic_eyetube.png" alt="">
            <h2 class="title et"><a href="<?php echo base_url();?>eyetube">EyeTube</a></h2>
            <hr class="x-et">
            <div class="et-content">
                <div class="et-content1 m-t-22">
				<?php
				foreach ($video_eyetube as $videonya)
				{
				?>
					<a href="<?=base_url().'eyetube/detail/'.$videonya['url']; ?>">
						<div class="et-v-content">
							<img class="lazy" src="<?= MEVID.$videonya['thumb']; ?>/small" alt="">
							<!--<img class="lazy" src="<?=base_url()?>systems/eyetube_storage/<?= $videonya['thumb']; ?>" alt="">-->
							<div class="btn-play">
								<img class="lazy" src="<?php echo base_url()?>assets/home/img/btn-play.png" alt="">
							</div>
						</div>
					</a>
                    <span class="et-st">
					<?php
						$date 		=  new DateTime($videonya['createon']);
						$tanggal 	= date_format($date,"Y-m-d H:i:s");
						echo relative_time($tanggal) . ' ago - '.$videonya['tube_view'].' views';						
					?>					
					</span>
					<a href="<?=base_url().'eyetube/detail/'.$videonya['url']; ?>" style="text-decoration: unset;">
						<h1 class="et-title"><?= $videonya['title']; ?></h1>
					</a>
                    <p class="et-d" style="max-height:60px; overflow:hidden;">
					<?php
						$keterangan = strip_tags($videonya['description']);
						echo word_limiter($keterangan,25);
					?>					
					</p>
					<?php
					break;
					}
					?>
                </div>
                <div class="et-content2" style="margin-top:  -21px;">				
                    <div class="v-et-content2">
					<?php
						$i = 0;
						foreach ($video_eyetube as $videonya)
						{
							if ($i != 0)
							{
					?>			
						<a href="<?=base_url().'eyetube/detail/'.$videonya['url']; ?>" style="text-decoration: unset;display:  block;height:  250px;overflow:  hidden; margin-bottom: 15px;">
                        <!-- judul eyetube
						<div class="t-et-content2">
                            <span class="et-st"><?php
						$date 		=  new DateTime($videonya['createon']);
						$tanggal 	= date_format($date,"Y-m-d H:i:s");
						echo relative_time($tanggal) . ' ago - '.$videonya['tube_view'].' views';						
					?></span>
                            <p class="et-st-det"><?= $videonya['title']; ?></p>
                        </div> -->
						<img class="v-et-2 v-et-100 lazy" width="100%" src="<?= MEVID.$videonya['thumb']; ?>/small" alt="" style="margin-bottom: 10px;bottom: unset;">
							<!-- <div class="container btn-play2"><img class="lazy" src="<?php echo base_url()?>assets/home/img/btn-play.png" alt="" style="z-index:1;width:100%;height:100%;"></div>	 -->
						</a>
					<?php
					}
					$i++;

			}
			?>						
            </div>
		
        </div>					
    </div>

	<!--TUBE list begin--> 
	 <div id="reqlistvid" class="load_list_vid" action>    
	    <input type="hidden" name="fn" value="get_list_video" class="cinput">  
	    	<script>
	    		$(document).ready(function(){
	    			$(window).on('load',function(){
	    			ajaxOnLoad('load_list_vid');
	    			});
	    		})
	    	</script> 
	    	<div class="box-bg box-content" style="width: 100%;height: 200px">
	        </div>	         
	 </div>
	<!--TUBE list end--> 
 </div>
 <!-- EYETUBE end -->

<!-- EYENEWS -->
<div class="center-desktop">
    <div class="et-content m-b-150">
        <div class="et-content1">
            <img class="img-title lazy" src="<?php echo base_url(); ?>assets/img/ic_eyenews.png" alt="">
            <h2 class="title en"><a href="<?php echo base_url();?>eyenews">EyeNews</a></h2>
            <hr class="x-en">
			<a href="<?php echo base_url(); ?>eyenews/detail/<?php echo $eyenews_main->url?>">
				<div class="t-en-content2" style="margin-top:-20px; z-index:1; top:283px; padding:10px; width:580px; background-color:#00000050;"> 
					<span class="et-st">	  					
						<small>
						<?php
							$date 		=  new DateTime($eyenews_main->createon);
							$tanggal 	= date_format($date,"Y-m-d H:i:s");

							echo relative_time($tanggal) . ' ago';
						?>
						</small>
					</span>
					<p class="et-st-det"><?php echo $eyenews_main->title; ?></p>
				</div>					
            <!--<img class="v-et-2 w-100" src="assets/img/video-small.png" alt="">-->
			<div class="container" style="width:100%;height:345px;"><img style="margin-bottom:-40px !important;" class="v-et-2 w-100 lazy" src="<?php echo imgUrl(); ?>systems/eyenews_storage/<?= $eyenews_main->thumb1; ?>" alt="<?php echo $eyenews_main->title; ?>" ></div>
			</a>
            <div class="h-berita-terkait" style="margin:40px 0;height:135px;overflow:hidden;">
                <h3 class="mb-10">Berita Terkait</h3>
				<?php
				$i = 0;
				foreach ($eyenews_similar as $similar)
				{
				if ($i != 0)
				{
				?>						
                <ul>
                    <li>
                        <a href="<?php echo base_url(); ?>eyenews/detail/<?= $similar['url'];?>">
						<img class="lazy" src="<?php echo base_url(); ?>assets/img/chevron-right-red.png"> <?= $similar['title']; ?></a>
                    </li>
                </ul>
				<?php			
				}
				$i++;
				}
				?>						
            </div>
        </div>
        <div class="et-content2">
            <img class="img-title lazy" src="<?php echo base_url()?>assets/home/img/ic-eyeme.png" alt="">
            <h2 class="title em"><a href="<?php echo base_url();?>eyeme">EyeMe</a></h2>
            <hr class="x-em">				
            <div class="c-em-content2 container" style="top: -31px;">
            	<?php 
            		for($i=0;$i < 9 ; $i++){
            			echo '<div class="eyeme-list">';
                			echo '<a href="'.(isset($imgEyeme[$i]) ? MEPROFILE.$imgEyeme[$i]->username : '#').'">';
                			echo '<img class="lazy" src="'.(isset($imgEyeme[$i]) ? MEIMG.$imgEyeme[$i]->img_name :  DEFAULTIMG ).'" class="c-em-content2-img">';
                			echo '</a>';
            			echo '</div>';
            		}
            	?>
			</div>
			<div class="container tx-c m-t-20">
				<a href="<?php echo EYEEXPLORE ?>" class="em-btn">Lihat Foto Lainnya</a>
			</div>
        </div>
    </div>
</div>
<div class="center-desktop">
    <div class="et-content">
        <div class="et-content1">
            <div class="container tab2">
                <span href="" id="tab_rekom" class="active nonactive" active="true">rekomendasi</span>
                <span href="" id="tab_usia" class="nonactive">usia muda</span>
                <span href="" id="tab_populer" class="nonactive">terpopuler</span>
                <hr>
                <div id="tab2" class="carousel slide">
                    <div role="listbox" class="carousel-inner">                    
                        <div id="tab_populer" class="box item">
							<x>
							<a href="<?=base_url()?>eyenews">
                                <span>Berita Lainnya</span>
								<i class="material-icons r-tab2">keyboard_arrow_right</i>
								</a>                                
							</x>
						<?php
						foreach($eyenews_populer as $populer){
						?>
                            <div class="rek-ber">
								<a href="<?=base_url().'eyenews/detail/'.$populer['url']; ?>">
								<div class="rek-ber-c">
									<!--<img class="lazy" src="assets/img/video-small.png" style="width:150px" alt="">-->
									<div style="width: 160px;height: 100px;overflow:  hidden;display:  inline-block;"><img class="lazy" src="<?php echo imgUrl(); ?>systems/eyenews_storage/<?= $populer['thumb1']; ?>" style="width:100%; min-height:100%;" alt=""></div>
									<div class="container" style="width: 70%;float:  right;"><a href="<?=base_url().'eyenews/detail/'.$populer['url']; ?>">
										<span style="font-size: .65em;color: gray;font-weight: 500;"><?=$populer['createon'];?></span>
										<h1 style="line-height: 1em;font-size: 1em;font-weight: 500;margin-top: 1px;height: 40px;overflow: hidden;">
											<a href="<?=base_url().'eyenews/detail/'.$populer['url']; ?>" style="text-decoration: unset;color:black;"><?=$populer['title'];?>
											</a>
										</h1>
										<a href="<?=base_url().'eyenews/detail/'.$populer['url']; ?>">
										<p style="font-size: .7em;color: #aba6a6;height: 32px;overflow: hidden;"><?php
											$keterangan = strip_tags($populer['description']);
											echo word_limiter($keterangan,25);
										?></p>
										</a></a>
									</div>
								</div>    
							</a>                                  
                            </div>
						<?php
						}
						?>

                        </div>
                        <div id="tab_rekom" class="box item active">
							<x>
                                <a href="<?=base_url()?>eyenews">Berita Lainnya</a>
                                <i class="material-icons r-tab2">keyboard_arrow_right</i>                                
                            </x>
						<?php
						foreach($eyenews_rekomendasi as $rekomendasi){
						?>

                            <div class="rek-ber">
								<div class="rek-ber-c">
								<a href="<?=base_url().'eyenews/detail/'.$rekomendasi['url']; ?>">
								<div style="width: 160px;height: 100px;overflow:  hidden;display:  inline-block;"><img class="lazy" src="<?php echo imgUrl(); ?>systems/eyenews_storage/<?= $rekomendasi['thumb1']; ?>"style="width:100%; min-height:100%;" alt=""></div>
								<div class="container" style="width: 70%;float:  right;">	
								<a href="<?=base_url().'eyenews/detail/'.$rekomendasi['url']; ?>">
									<span style="font-size: .65em;color: gray;font-weight: 500;"><?=$rekomendasi['createon'];?></span>
									<h1 style="line-height: 1em;font-size: 1em;font-weight: 500;margin-top: 1px;height: 40px;overflow: hidden;">
										<a href="<?=base_url().'eyenews/detail/'.$rekomendasi['url']; ?>" style="text-decoration: unset;color:black;">
										<?=$rekomendasi['title'];?>
										</a>
									</h1>
									<a href="<?=base_url().'eyenews/detail/'.$rekomendasi['url']; ?>">
									<p style="font-size: .7em;color: #aba6a6;height: 32px;overflow: hidden;"><?php
										$keterangan = strip_tags($rekomendasi['description']);
										echo word_limiter($keterangan,15);
									?></p></a>
								</a>
								</div>
								</a>
								</div>
                            </div>
							<?php
							}
							?>

                        </div>
                        <div id="tab_usia" class="box item">
							<x>
                                <a href="<?php echo base_url()?>eyenews">Berita Lainnya</a>
                                <i class="material-icons r-tab2">keyboard_arrow_right</i>                                
                            </x>
						<?php
						foreach($eyenews_muda as $muda){
						?>
                            <div class="rek-ber">
								<div class="rek-ber-c">
								<a href="<?=base_url().'eyenews/detail/'.$muda['url']; ?>">
								<div style="width: 160px;height: 100px;overflow:  hidden;display:  inline-block;"><img class="lazy" src="<?php echo imgUrl(); ?>systems/eyenews_storage/<?= $muda['thumb1']; ?>" style="width:100%; min-height:100%;" alt=""></div>
									<div class="container" style="width: 70%;float:  right;">	
										<a href="<?=base_url().'eyenews/detail/'.$muda['url']; ?>">
										<span style="font-size: .65em;color: gray;font-weight: 500;"><?=$muda['createon'];?></span>
										<h1 style="line-height: 1em;font-size: 1em;font-weight: 500;margin-top: 1px;height: 40px;overflow: hidden;">
											<a href="<?=base_url().'eyenews/detail/'.$muda['url']; ?>" style="text-decoration: unset;color:black;">
											<?=$muda['title'];?>
											</a>
										</h1>
										<a href="<?=base_url().'eyenews/detail/'.$muda['url']; ?>">
										<p style="font-size: .7em;color: #aba6a6;height: 32px;overflow: hidden;"><?php
											$keterangan = strip_tags($muda['description']);
											echo word_limiter($keterangan,15);
										?></p>
										</a>
										</a>
									</div>
								</a>
								</div>
                            </div>
							<?php
							}
							?>									

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="et-content2">
            <img class="img-title lazy" src="<?php echo base_url()?>assets/home/img/ic_eyemarket.png" alt="">
            <h2 class="title emar"><a href="<?php echo base_url();?>eyemarket">EyeMarket</a></h2>
            <hr class="x-emar">
                <div class="rek-ber" style="margin-top: -4px;">			
					<?php foreach ($products as $produk)
					{
					?>
					<div class="rek-ber-c">
						<div style="width: 100px;height:  100px;overflow:  hidden;display:  inline-block;">
							<img class="lazy" src="<?= MEIMG; ?><?= $produk['image1'] ?>" alt="" style="width:100%; min-height:100%;">
						</div>
                        <div class="container" style="width: 75%;display:  inline-block;float:  right;">
							<h1 style="line-height: 1em;font-size: 1em;font-weight: 500;margin-top: 1px;height: 34px;overflow: hidden;"><?= $produk['nama']; ?></h1>
							<span class="price" style="font-size: .7em;color: gray;font-weight: 400;text-transform: uppercase;top: 20px;">HARGA</span>
							<p class="prices" style="font-size: 1em;color: black;font-weight: 500;margin:  0;">Rp.<?= number_format($produk['harga'],0,',','.'); ?></p>
							<a href="<?= base_url(); ?>eyemarket/detail/<?= $produk['toko']; ?>/<?= $produk['title_slug']; ?>" style="text-decoration:  none;color: #ff9900;font-weight:  500;">
								<button type="text" class="beli" style="float:  right;position:  relative;top: -25px;">Beli</button>
							</a>
						</div>
						
					</div>
					<?php 
					}
					?>
                </div>
        </div>
    </div>
</div>
<!-- BANNER -->
<div class="center-desktop">
    <div class="banner-150" style="margin-top: 20px;background-color: unset;height: unset;background: url('<?php echo base_url()?>assets/img/banner/1065X100px.png');background-repeat: no-repeat;">
		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- dekstopHomeBannerBawah -->
		<ins class="adsbygoogle"
			style="display:inline-block;width:970px;height:90px"
			data-ad-client="ca-pub-2741155188155052"
			data-ad-slot="3625920443"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
        <!-- <img class="lazy" src="<?php echo base_url()?>assets/img/banner-home.jpeg" alt=""> -->
    </div>
</div>
<!-- EYEVENT -->
<div class="center-desktop">
    <img class="img-title lazy" src="<?php echo base_url()?>assets/home/img/ic_eyevent.png" alt="">
    <h2 class="title ee"><a href="<?php echo base_url();?>eyevent">EyeVent</a></h2>
    <hr class="x-ee">
    <span>
		<a href="<?=base_url()?>eyevent">
		<span class="el">Event Lainnya</span>
		<i class="material-icons r-el">keyboard_arrow_right</i>                                
		</a>
    </span>
    <div class="container">
        <div id="evSlide" class="carousel slide t-30" style="width: 100% !important;overflow:hidden;height: 250px;">
            <div role="listbox" class="carousel-inner" style="width: max-content;height: 225px;">  				
                <div class="box item active">	
				<?php
				foreach($eyevent_main as $row){
				?>
                    <div class="ev-box-content">
                        <!--<img class="lazy" src="assets/img/video-small.png" alt="">-->
						<a href="<?php echo base_url()."eyevent/detail/".$row['url']?>"><img class="lazy" src="https://static.eyesoccer.id/v1/cache/images/<?php print $row['pic']; ?>">								
                    </a></div>
				<?php }?>
                </div>
                <div class="box item">	
				<?php
				foreach($eyevent_main_2 as $row){
				?>
                    <div class="ev-box-content">
                        <!--<img class="lazy" src="assets/img/video-small.png" alt="">-->
						<a href="<?php echo base_url()."eyevent/detail/".$row['url']?>"><img class="lazy" src="https://static.eyesoccer.id/v1/cache/images/<?php print $row['pic']; ?>">								
                    </a></div>
				<?php }?>
                </div>
				<div class="box item">	
				<?php
				foreach($eyevent_main_3 as $row){
				?>

                    <div class="ev-box-content">
                        <!--<img class="lazy" src="assets/img/video-small.png" alt="">-->
						<a href="<?php echo base_url()."eyevent/detail/".$row['url']?>"><img class="lazy" src="https://static.eyesoccer.id/v1/cache/images/<?php print $row['pic']; ?>">								
                    </a></div>
				<?php }?>
                </div>
            </div>  

            <div class="carousel-indicators bx-dot ev-dot">
                <span data-target="#evSlide" data-slide-to="0" class="dot active"></span>
                <span data-target="#evSlide" data-slide-to="1" class="dot"></span>
                <span data-target="#evSlide" data-slide-to="2" class="dot"></span> 
            </div>  
        </div>
    </div>
</div>
<!-- JADWAL PERTANDINGAN & KLASEMEN -->
<div class="center-desktop t-40">
    <div class="container">
        <div class="et-content1">
            <span class="jp green">JADWAL PERTANDINGAN</span>
            <div class="border-box" style="margin-top: 22px;">
					<div id="jadwal_home" class="max-height-500">
					<table class="table border-b">
					<?php
						if(empty($jadwal_home)){
					?>
						<tbody>
							<tr>
								<td align="center"><span class="t-live"> Tidak Ada Pertandingan Selanjutnya</span></td>
							</tr>
						</tbody>
					<?php
						}
					else
						{
							foreach($jadwal_home as $row){
					?>
						<tbody>
							<tr class="listmatch">
								<td class="tx-r">
								<a href="<?php 
                                        if(($row["liga_a"]=='Liga Lainnya') OR ($row["liga_a"]=='Liga International'))
                                            {
                                                $href_a="#no_detail_club_".$row["club_a"];
                                            }
                                        else
                                            {
                                                $href_a=base_url()."eyeprofile/klub_detail/".$row["url_a"];
                                            }
                        
                        					echo $href_a ?>">
								<span class="clb"><?=$row["club_a"]?></span></a></td>
								<td><span class="i-l"><img class="lazy" src="<?=imgUrl()?>systems/club_logo/<?php print $row['logo_a']; ?>" alt=""></span></td>
								<td class="tx-c">
								<span class="t-live"><?=$row["jadwal_pertandingan"]?></span>
								<span
											<?php
											if($row['live_pertandingan']==NULL)
											{
												$live=' class="t-live notvchanel"> ';
											}
											else
											{
												$live=' class="t-live tvchanel"> '.$row['live_pertandingan'];
											}

											echo $live;
											?>
								</span>
								<span class="t-live"><?=$row["lokasi_pertandingan"]?></span>
								</td>
								<td><span class="i-r"><img class="lazy" src="<?=imgUrl()?>systems/club_logo/<?php print $row['logo_b']; ?>" alt=""></span></td>
								<td class="tx-l">
								<a href="<?php 
                                        if(($row["liga_b"]=='Liga Lainnya') OR ($row["liga_b"]=='Liga International'))
                                            {
                                                $href_b="#no_detail_club_".$row["club_b"];
                                            }
                                        else
                                            {
                                                $href_b=base_url()."eyeprofile/klub_detail/".$row["url_b"];
                                            }
                        
                        					echo $href_b ?>">
								<span class="clb"><?=$row["club_b"]?></a></span></td>
							</tr>
						</tbody>
					<?php
							} 
						}
					?>
					</table>
				</div>
                <div class="t-c-b">
                    <a href="<?=base_url()?>jadwal-bola"><button type="" class="btn-green">Lihat Jadwal Lainnya</button></a>
                </div>
            </div>
        </div>
        <div class="et-content2">
            <span class="jp">KLASEMEN</span>
        <select id="select_league" name="" selected="true" class="slc-musim fl-r">
		<?php
			foreach($kompetisi as $row){
		?>
			<option value="<?=$row['value']?>"><?=$row['competition']?></option>';  
		<?php
			}
		?>
   
          </select>
				<div id="klasemen4liga" class="max-height-500" style="margin-top: 23px;max-height: 572px;">
						<div id="liga_indonesia" style="top:-10px;">
							<div id="reqscrapindonesia" class="loadscrapindonesia" action>
								<input type="hidden" name="fn" value="scrapindonesia" class="cinput">
									<script>
										$(document).ready(function(){
											$(window).on('load',function(){
												ajaxOnLoad('loadscrapindonesia');
											});
										});
									</script>	
							</div>
						</div>
						<div id="liga_inggris" style="display:none;">
							<div id="reqscrapinggris" class="loadscrapinggris" action>
								<input type="hidden" name="fn" value="scrapinggris" class="cinput">
									<script>
										$(document).ready(function(){
											$(window).on('load',function(){
												ajaxOnLoad('loadscrapinggris');
											});
										});
									</script>	
							</div>
						</div>
						
						<div id="liga_italia" style="display:none;">
							<div id="reqscrapitalia" class="loadscrapitalia" action>
								<input type="hidden" name="fn" value="scrapitalia" class="cinput">
									<script>
										$(document).ready(function(){
											$(window).on('load',function(){
												ajaxOnLoad('loadscrapitalia');
											});
										});
									</script>	
							</div>
						</div>
						<div id="liga_spanyol" style="display:none;">
							<div id="reqscrapspanyol" class="loadscrapspanyol" action>
								<input type="hidden" name="fn" value="scrapspanyol" class="cinput">
									<script>
										$(document).ready(function(){
											$(window).on('load',function(){
												ajaxOnLoad('loadscrapspanyol');
											});
										});
									</script>	
							</div>
						</div>
				</div>
        </div>
    </div>
</div>
 </div>
</div>


<script>
	$(document).ready(function(){
		$(document).on('click', '.tab2 span', function() {
			var id = $(this).attr('id');
			$('.tab2 span').each(function(){
				var idx = $(this).attr('id');
				if($(this).attr('active') == 'true')
				{
					$(this).removeClass('active');
					$(this).addClass('nonactive');
					$(this).removeAttr('active');
					$('#tab2 div#'+idx).fadeOut('fast');
				}
				
			})
			$('.tab2 span#'+id).addClass('active');
			$('.tab2 span#'+id).removeClass('nonactive');
			$('.tab2 span#'+id).attr('active', 'true');
			$('#tab2 div#'+id).fadeIn('fast');
		});

		$(document).on('click', '.tab span', function() {
			var id = $(this).attr('id');

			$('.tab span').each(function(){
				var idx = $(this).attr('id');
				if($(this).attr('active') == 'true')
				{
					$(this).removeClass('active');
					$(this).addClass('nonactive');
					$(this).removeAttr('active');
					$('#tab div#'+idx).fadeOut('fast');
				}
				
			})

			$('.tab span#'+id).addClass('active');
			$('.tab span#'+id).removeClass('nonactive');
			$('.tab span#'+id).attr('active', 'true');
			$('#tab div#'+id).fadeIn('fast');
		})
		

		$('#tbl_jadwal_kemaren,#tbl_jadwal_besok').hide();
			
		$('#jadwal_hariini').click(function(){
			$('#tbl_jadwal_kemaren,#tbl_jadwal_besok').hide();
			$('.day-choose').removeClass('t-active');
			$('#jadwal_hariini').addClass('t-active');
			$('#tbl_jadwal_hariini').show();
		});
		$('#jadwal_kemaren').click(function(){
			$('#tbl_jadwal_besok,#tbl_jadwal_hariini').hide();
			$('.day-choose').removeClass('t-active');
			$('#jadwal_kemaren').addClass('t-active');
			$('#tbl_jadwal_kemaren').show();
		});
		$('#jadwal_besok').click(function(){
			$('#tbl_jadwal_kemaren,#tbl_jadwal_hariini').hide();
			$('.day-choose').removeClass('t-active');
			$('#jadwal_besok').addClass('t-active');
			$('#tbl_jadwal_besok').show();
		});
		$("#select_league").change(function(){
			if($("#select_league").val() == "liga_indonesia"){
				$("#liga_inggris,#liga_italia,#liga_spanyol").hide();
				$("#liga_indonesia").show();
			}else if($("#select_league").val() == "liga_inggris"){
				$("#liga_indonesia,#liga_italia,#liga_spanyol").hide();
				$("#liga_inggris").show();
			}else if($("#select_league").val() == "liga_italia"){
				$("#liga_indonesia,#liga_inggris,#liga_spanyol").hide();
				$("#liga_italia").show();
			}else if($("#select_league").val() == "liga_spanyol"){
				$("#liga_indonesia,#liga_inggris,#liga_italia").hide();
				$("#liga_spanyol").show();
			}
		});
	})
	


	$('.multi-item-carousel').carousel({
			interval: false
});

</script>
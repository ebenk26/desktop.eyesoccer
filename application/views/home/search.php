<div style="width: 1065px;margin: auto;text-align: center;">Hasil Pencarian : <?php echo $_GET['q']?></div>
<div class="baseurl" val="<?php echo base_url()?>"></div>
	<div id="reqsearch" class="loadsearch" action="home" loading="off">
		<script>
			$(function(){
				ajaxOnLoad('loadsearch');
			})
		</script>
		<input type="hidden" name="fn"  value="search" class="cinput">
		<input type="hidden" name="query" value="<?php echo $this->input->get('q')?>" class="cinput">

		<div class="center-desktop m-t-35 box-bg" style="margin: auto;height: 100px ">
			<!-- <div class="box-bg">
			</div> -->
		</div>
		<div class="center-desktop m-t-35" style="margin: auto;">
			<img class="img-title" src="<?php echo base_url()?>assets/home/img/ic_eyetube.png" alt="">
			<h2 class="title et">EyeTube</h2>

			<hr class="x-et">
			
			<div class="box-bg" style="margin: auto;height:100px ">
			</div>
		</div>
		<div class="carous center-desktop m-t-35">
			<img class="img-title" src="<?php echo base_url()?>assets/home/img/ic_eyeprofile.png" alt="">
			<h2 class="title ep">EyeProfile</h2>

			<hr class="x-ep">

			<div class="box-bg" style="margin: auto;height:100px;margin-bottom:10px; ">
			</div>
	</div>	
</div>
</div>
<?php
$news = json_decode($news);
$tube = json_decode($tube);
$player = json_decode($player);
$club = json_decode($club);
$query = $query['search'];
?>
<div class="center-desktop m-t-35" style="margin: auto;">
	<img class="img-title" src="<?php echo base_url(); ?>assets/img/ic_eyenews.png" alt="">
	<h2 class="title en">EyeNews</h2>
	Result : <?php echo count($news->data)?>
	<hr class="x-en" style="width: 890px;top: -41px;left: 173px;">
	<?php
		foreach ($news->data as $value)
		{
	?>
		<div>
			<a href="<?php echo $value->url?>"><?php echo str_replace(array($query,ucwords($query),strtoupper($query),strtolower($query)),'<span style="background-color:yellow;">'.$query.'</span>',$value->title)?></a><br>
			<?php echo strip_tags(word_limiter($value->title,25));?>
		</div>
		<hr>
	<?php
		}
	?>
</div>
<div class="center-desktop m-t-35" style="margin: auto;">
	<img class="img-title" src="<?php echo base_url()?>assets/home/img/ic_eyetube.png" alt="">
	<h2 class="title et">EyeTube</h2>
	Result : <?php echo count($tube->data)?>
	<hr class="x-et">
	<?php
	//p($tube);

		foreach ($tube->data as $value)
		{
	?>
		<div>
			<a href="<?php echo base_url()?>eyetube/detail/<?php echo $value->slug?>"><?php echo str_replace(array($query,ucwords($query),strtoupper($query),strtolower($query)),'<span style="background-color:yellow;">'.$query.'</span>',$value->title)?></a><br>
			<?php echo strip_tags(word_limiter($value->title,25));?>
		</div>
		<hr>
	<?php
		}
	?>
</div>
<div class="carous center-desktop m-t-35">
	<img class="img-title" src="<?php echo base_url()?>assets/home/img/ic_eyeprofile.png" alt="">
	<h2 class="title ep">EyeProfile</h2>
	Result : <?php echo count($player->data)+count($club->data)?>
	<hr class="x-ep">
	<?php
	//p($player);
		foreach ($player->data as $value)
		{
	?>
		<div>
			<div class="box-img-radius" style="float: left;width: 50px;top: -8px;height: 55px;left: 0;padding: 10px;box-shadow: 3px 4px 5px #888888;margin-right: 20px;">
				<img src="<?php echo  $value->url_pic?>">                
			</div>
			<a href="<?php echo base_url()?>eyeprofile/pemain_detail/<?php echo $value->slug?>"><?php echo str_replace(array($query,ucwords($query),strtoupper($query),strtolower($query)),'<span style="background-color:yellow;">'.$query.'</span>',$value->name)?></a>
			<br>
			Posisi : <?php echo $value->position_a;?>
			<br>
			No. Punggung: <?php echo $value->back_number;?>
			<br>
			Klub : <?php echo $value->club;?>
		</div>
		<hr>
	<?php
		}
	?>
	
	<?php
		foreach ($club->data as $value)
		{
	?>
		<div>
			<div class="box-img-radius" style="float: left;width: 50px;top: -8px;height: 55px;left: 0;padding: 10px;box-shadow: 3px 4px 5px #888888;margin-right: 20px;">
				<img src="<?php echo imgUrl()?>systems/club_logo/<?php if(!empty($value->logo)){echo $value->logo;}else{echo 'LOGO UNTUK APLIKASI.jpg';}?>">                
			</div>
			<a href="<?php echo base_url()?>eyeprofile/klub_detail/<?php echo $value->slug?>"><?php echo str_replace(array($query,ucwords($query),strtoupper($query),strtolower($query)),'<span style="background-color:yellow;">'.$query.'</span>',$value->name)?></a>
			<br>
			Julukan : <?php echo strip_tags($value->nickname);?>
			<br>
			kompetisi  : <?php echo strip_tags($value->competition);?>
		</div>
		<hr>
	<?php
		}
	?>

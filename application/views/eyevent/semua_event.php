    <?php
		$totalPage = ceil($count / 12);
		$urlpage = $this->uri->segment(3);
		if($urlpage){
			$page = $urlpage;
		}else{
			$page = 1;
		}
	?>
	<style>
    body{
        margin-top: -10px; 
    }
    </style>
    <div class="fl-l">
        <h4 style="color: rgb(61, 139, 61); cursor: default !important;">Event Lainnya</h4>
    </div>

    <div class="container ">
        <?php 
            foreach ($eyevent->data as $value)
            {
        ?>
                <div class="w4">
                    <a href="<?= base_url(); ?>eyevent/detail/<?= $value->slug; ?>">
                        <div class="w4-f p-r">
                            <img src="<?= $value->url_pic; ?>" style="min-width:100%;height: 100%;position: absolute;top: 50%;left: 50%;margin-right: -50%;transform: translate(-50%, -50%);">
                        </div>
                        <p class="sub-en"><?= $value->title; ?></p>
                        <span class="time-view">
                            <?php
                                $date       =  new DateTime($value->createon);
                                $tanggal    = date_format($date,"Y-m-d H:i:s");

                                echo relative_time($tanggal) . ' lalu';
                            ?>                       
                        </span>
                    </a>
                </div>
        <?php        
            }
        ?>
		<div class="pull-right m-t20-lr0-b30">
		  <ul class="orange-default">
			<?php echo ($page > 1 ? '<li>'.anchor(base_url().'eyevent/semua_event/'.($page-1) ,'Sebelumnya','display="block"').'</li>' : '')?>
			<?php  
				if($page > 4 ){?>

				<li><?php echo anchor(base_url().'eyevent/semua_event/1','1')?></li>
				<li>...</li>
			<?php }
		   
			for($i=($page-2); $i < ($page+2);$i++):

			if($i < 1 ){ continue; }
			if($i > $totalPage){ break;}?>

				<li <?php echo ($page == $i ? 'class="active"' : '')?>><?php echo  anchor(base_url().'eyevent/semua_event/'.$i,$i)?></li>

			<?php endfor;?>
			<?php if($totalPage-1 > $page){?>
				<li>...</li>
				<li><?php echo anchor(base_url().'eyevent/semua_event/'.$totalPage,$totalPage) ?></li>
			<?php }?>

		   <?php echo ($page < $totalPage ?'<li>'.anchor(base_url().'eyevent/semua_event/'.($page > 0 ? ($page+1) : $page),'Selanjutnya').'</li>' : '')?>
		  </ul>
		</div>
    </div>
    <div class="container"><?php /*echo $pagging['pagging'];*/?></div>
</div>
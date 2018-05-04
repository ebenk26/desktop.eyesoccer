<style>
.listmatch{
background-color:#fcfcfc;
}
.listmatch:hover{
background-color:#fdd79f38;
}
.clubname {
    text-transform: uppercase;
}
.livechanel{
            color:#d19595;
			padding: 3px 0px;
			border-radius: 15px;
			background-color:#fa4f4f52;
}
.livechanel:hover{
    background-color: #ff4141a3;
}
</style>
    <div class="crumb redhover">
        <ul>
        <li><a href='<?php echo base_url(); ?>' style='display: unset'>Home</a></li>
        <li><a href='<?php echo base_url().'eyevent'; ?>' style='display: unset'>EyEvent</a></li>
        <li><a href='<?php echo base_url().'hasil-pertandingan'; ?>' style='display: unset'>Hasil Pertandingan</a></li>
        </ul>
    </div>
    <h3 class="o">Hasil Pertandingan Sebelumnya</h3>
    <table class="tb-hasil" id="tbl-date" style="display: none;">                    
        <thead>
            <tr>
                <th colspan="2">
                    <div id="ajax-tgl"></div>                              
                </th>
                <th style="text-align: right;">
                    <button class="btn-merah" id="btn-tutup" style="cursor: pointer;">Tutup</button>
                </th>
            </tr>
        </thead>
            <tbody id="body-ajax">
                                            
            </tbody>
    </table>
    <table class="tb-hasil">                    
    <?php 
            if (empty($get_hasil))
            {
        ?>
                <tbody>
                    <tr>
                        <td colspan="3" style="text-align: center;">
                            Tidak Ada Jadwal Pada Tanggal Ini
                        </td>
                    </tr>                            
                </tbody>  
        <?php        
            }
            else
            {
                foreach($get_hasil as $get_hasil)
                {
        ?>
                    <tbody>
                        <tr class="listmatch">
                            <td>
                                <a href="<?php 
                                                if(($get_hasil["liga_a"]=='Liga Lainnya') OR ($get_hasil["liga_a"]=='Liga International'))
                                                    {
                                                        $href_a="#no_detail_club_".$get_hasil["club_a"];
                                                    }
                                                else
                                                    {
                                                        $href_a=base_url()."eyeprofile/klub_detail/".$get_hasil["url_a"];
                                                    }
                                
                                echo $href_a ?>">
                                <cn class="clubname"><?=$get_hasil["club_a"]?></cn>
                                    <img src="<?=imgUrl()?>systems/club_logo/<?php print $get_hasil['logo_a']; ?>" alt="">
                                </a>
                            </td>
                            <td>
                                <span <?php
                                if($get_hasil['live_pertandingan']==NULL)
                                {
                                    $live='>';
                                }
                                else
                                {
                                    $live=' class="livechanel"> Live '.$get_hasil['live_pertandingan'];
                                }

                                echo $live;
                                ?></span>
                                <span><?= $get_hasil["kompetisi"]; ?></span>
                                <?= $get_hasil["score_a"]; ?> - <?= $get_hasil["score_b"]; ?>
                                <span><?= $get_hasil["jadwal_pertandingan"]; ?></span>
                                <span><?= $get_hasil["lokasi_pertandingan"]; ?></span>
                            </td>
                            <td>
                                <a href="<?php 
                                                if(($get_hasil["liga_b"]=='Liga Lainnya') OR ($get_hasil["liga_b"]=='Liga International'))
                                                    {
                                                        $href_b="#no_detail_club_".$get_hasil["club_b"];
                                                    }
                                                else
                                                    {
                                                        $href_b=base_url()."eyeprofile/klub_detail/".$get_hasil["url_b"];
                                                    }
                                
                                echo $href_b ?>">
                                    <img src="<?=imgUrl()?>systems/club_logo/<?php print $get_hasil['logo_b']; ?>" alt="">
                                    <cn class="clubname"><?=$get_hasil["club_b"]?></cn>
                                </a>
                            </td>
                        </tr>
                    </tbody>
        <?php            
                }
            }
        ?>
    </table>
</div>
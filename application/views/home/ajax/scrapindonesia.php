<table class="border-box radius" cellspacing="0" cellpadding="0" style="margin:  unset;">
	<thead>
		<tr>
			<th title="Posisi">#</th>
			<th title="Klub">Klub</th>
			<th title="Bermain">B</th>
			<th title="Menang">M</th>
			<th title="Seri">S</th>
			<th title="Kalah">K</th>
			<th title="Selisih Goal">SG</th>
			<th title="Points">Pts</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$html = file_get_contents(LinkScrapingLigaIndonesia()); //get the html returned from the following url

		$premiere_doc = new DOMDocument();

		libxml_use_internal_errors(TRUE); //disable libxml errors

		if(!empty($html)){ //if any html is actually returned

			$premiere_doc->loadHTML($html);
			libxml_clear_errors(); //remove errors for yucky html
			
			$pokemon_xpath = new DOMXPath($premiere_doc);

			//get all the h2's with an id
			$pokemon_row = $pokemon_xpath->query('//tr[@data-team_id]');
			$pokemon_list = array();
			$i = 1;
			if($pokemon_row->length > 0){
				foreach($pokemon_row as $row){
					if($i == 1){
						$trclass="<tr class='zona_acl'>";}
					elseif($i == 2){
						$trclass="<tr class='zona_afc'>";}
					elseif($i == 3){
						$trclass="<tr class='zona_afc_wl'>";}
					elseif($i == 16){
						$trclass="<tr class='zona_degradasi'>";}
					elseif($i == 17){
						$trclass="<tr class='zona_degradasi'>";}
					elseif($i == 18){
						$trclass="<tr class='zona_degradasi'>";}		
					else{
						$trclass="<tr class='zona_aman'>";}
					
					echo $trclass;
					if($i <= 18){
						$types = $pokemon_xpath->query('td', $row);
						$n = 0;
						foreach($types as $type){
							if($type->nodeValue != ""){
								if($n != 1){
									if($n != 7){
										if($n != 8){
											if($n != 11){
												if($n != 12){
													if($n != 13){
														$nodeValue = "<td>".$type->nodeValue.'</td>';
														echo $nodeValue;
													}
												}
											}
										}
									}
								}
							}
							$n++;
						}
						$i ++;
					}
					echo "</tr>";
				}
			}
		} 
	?>
	</tbody>
</table>
<div class="detailklasemen">
	<div class="detailzona_kontinental1"> <span class="detailkontinental1"></span>
	AFC Champion
	</div>
	<div class="detailzona_kontinental2"> <span class="detailkontinental2"></span>
	AFC Cup
	</div>
	<div class="detailzona_degradasi"> <span class="detaildegradasi"></span>
	Zona Degradasi
	</div>
</div>
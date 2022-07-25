<?php  
$week_days = array(
	"Dom","Seg","Ter","Qua","Qui","Sex","Sab"
);
?>


<table border="0" width="100%" align="center" cellpadding="12" cellspacing="12" style="font-size: 14px;">
	<tr>
		<?php foreach ($week_days as $key => $day): ?>
			<th>
				<?php echo $day; ?>
			</th>
		<?php endforeach ?>		
	</tr>

	<tr>
		<?php for($l = 0; $l < $linhas; $l++): ?>
			<tr>
				<?php for($q = 0; $q < 7; $q++): ?>
					<?php
					$t = strtotime(($q + ($l * 7)). ' days', strtotime($data_inicio));
					$w = date('Y-m-d', $t);
					?>
					<?php if (date('d', $t) == '01') { ?>
					<td class="td__one-day">
					<?php } else {?>
					<td class="td_common-day">
					<?php } ?>
						<?php 
						if (date('d', $t) == '01') {
							echo "<span class='one-day'>".date('d', $t)."</span>"."<br><br>";
						} else {
							echo date('d', $t)."<br><br>"; 	
						}
						
						$w = strtotime($w);

						foreach ($list as $item) {
							$dr_inicio = strtotime($item['data_inicio']);
							$dr_fim = strtotime($item['data_fim']);

							if ($w >= $dr_inicio && $w <= $dr_fim) {
								echo $item['pessoa']."(".$item['id_carro'].") <br>";
							}
						} 
						?>
					</td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</tr>
</table>

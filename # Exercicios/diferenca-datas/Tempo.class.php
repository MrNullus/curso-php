<?php  

class Tempo {

	public function diferenca() {
		$dataInicio = strtotime("d/m/Y' H:i:s"); 
		$dataFim = strtotime("2018-09-21 10:44:01"); 
	  
		// Formulate the Difference between two dates
		$diff = abs($dataFim - $dataInicio); 
	  
	  
		// To get the year divide the resultant date into
		// total seconds in a year (365*60*60*24)
		$anos = floor($diff / (365 * 60 * 60 *24)); 
	  
	  
		// To get the month, subtract it with years and
		// divide the resultant date into
		// total seconds in a month (30*60*60*24)
		$meses = floor(
			($diff - $anos * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24)
		); 
	  
	  
		// To get the day, subtract it with years and 
		// months and divide the resultant date into
		// total seconds in a days (60*60*24)
		$dias = floor(
			($diff - $anos * 365*60*60*24 - $meses*30*60*60*24)/ (60*60*24)
		);
	  
	  
		// To get the hour, subtract it with years, 
		// months & seconds and divide the resultant
		// date into total seconds in a hours (60*60)
		$horas = floor(
			($diff - $anos * 365*60*60*24 - $meses*30*60*60*24 - $dias*60*60*24) / (60*60)
	  ); 
	  
	  
		// To get the minutes, subtract it with years,
		// months, seconds and hours and divide the 
		// resultant date into total seconds i.e. 60
		$minutos = floor(
			($diff - $anos * 365*60*60*24 - $meses*30*60*60*24 - $dias*60*60*24 - $horas*60*60)/ 60
		); 
		  
		  
		// To get the minutes, subtract it with years,
		// months, seconds, hours and minutes 
		$secondos = floor(
			($diff - $anos * 365*60*60*24 - $meses*30*60*60*24 - $dias*60*60*24 - $horas*60*60 - $minutos*60)
		); 

		return ("
		$anos years, $meses months, $dias days, $horas hours, $minutos minutes, $secondos seconds
		");
	}

}

?>
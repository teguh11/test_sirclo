<?php

function fivaa($number){
	$string_j = "";
	for($i=$number+1 ; $i>=0 ; $i--){
		
		if($i-2 < 0){
			break;
		}

		$string_j .= ($i-2).($i-2);

		for($j = $i-1; $j > 0 ; $j--)
		{
			$string_j .= $i;
		}

		$string_j .="<br>";

	}

	echo $string_j;
}

fivaa(5);

?>
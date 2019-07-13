<?php

function beliTelur($tanggal, $uangnya){
	echo $dapet_telur = $uangnya / 2000;
	echo "<br />";
	if(!$tanggal%2 == 0){
		if($dapet_telur >= "20"){
			echo $dapet_telur + 3;
			echo "<br />";
		}
	}
	for ($i = 2; $i <= $tanggal-1; $i++)
	{
		if($tanggal % $i == 0)
		{
			break;
		}else{
			if($dapet_telur >= "12"){
				echo $dapet_telur + 1;
				break;
			}
		}
	}
}

beliTelur('21', '70000');

?>
<?php
/*
$bilangan = "9";
$hasil = "";
for($i=1; $i<=10;$i++){  
	for($j=1; $j<=$i;$j++){
		for($i = 1;$i<=$bilangan;$i++){
			$p = 0;
			for($j = 1; $j <= $i; $j++){
				if($i % $j == 0){
					$p += 1;
				}
			}
			if($p <= 2){
				$hasil .= $i.", ";
			}
		}
		echo $hasil;
    }
    echo '<br/>';
}

*/
$bilangan = "150";

$hasil = "";

for($a=1; $a<=10;$a++){  
	for($o=1; $o<=$a;$o++){  
        for($i = 1;$i <= $bilangan; $i++){

			$p = 0;//total pembagi

			for($j = 1; $j <= $i; $j++){
				if($i % $j == 0){
					$p += 1;
				}
			}

			if($p <= 2){
				$hasil .= $i.", ";
			}
		}
    }  
    echo '<br/>';  
}

$hasil2 = '';

for($i = 1;$i <= $bilangan; $i++){

	$p = 0;//total pembagi

	for($j = 1; $j <= $i; $j++){
		if($i % $j == 0){
			$p += 1;
		}
	}

	if($p <= 2){
		$hasil2 .= $i.", ";
	}
}

echo $hasil2;

?>
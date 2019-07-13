<?php
    function badenPowel($kalimatnya, $kalimat_balik, $katanya)
    {
    	if(count_chars($katanya) <= count_chars($kalimatnya)){
    		$kata_balik = strrev($katanya);
        	$data = substr_count($kalimatnya, $katanya)+substr_count($kalimat_balik, $kata_balik);
    	}else{
    		$data = "String yang anda masukkan terlalu banyak";
    	}

        return $data;
    }

    $kalimatnya = "banananananana";
    $kalimat_balik = strrev($kalimatnya);
    $result = badenPowel($kalimatnya, $kalimat_balik, 'nana');

    echo $result;
 ?>
<?php

function cek_password($pass){
	if((preg_match("/[@]/",$pass)) && (count($pass) <= 8)){
		echo "betulllll";
	}else{
		echo "salah";
	}
}

$pass = 'aaaaaa';

cek_password($pass);

function cek_username($username){
	if(!preg_match("/^[0-9]/",$username)){
		echo "benar";
	}else{
		echo "salah";
	}
}

$username = "abcdefghijklmn";

cek_username($username);

?>
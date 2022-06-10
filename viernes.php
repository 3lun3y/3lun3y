<?php
	$data='';
	$filename='viernes.json';

	if (is_file($filename)) {
		$data=file_get_contents($filename);
	}
	$json_arr=json_decode($data, true);
	$json_arr[]=array(
		'id'=>$_REQUEST['id'],
		'nombre'=>$_REQUEST['id'],
		'edad'=>$_REQUEST['id'],
		'identidadsecreta'=>$_REQUEST['id'],
		'poderes'=>$_REQUEST['id'],
		'imagen'=>$_REQUEST['imagen'],
	);
	file_get_contents($filename, json_encode($json_arr));
	header("Location:http://Escritorio/Luna/viernes.html")
?>

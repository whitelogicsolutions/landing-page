<?php
	$my_file = 'config.php';
	$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
	$data = '<?php ';
	foreach($_GET as $key=>$field){
		if($key != 'submit')
			$data .= 'define("'.$key.'","'.str_replace('"','\"',$field).'");
			';
	}
	$data .= '  ?>';
	fwrite($handle, $data);
?>
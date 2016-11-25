<?php
        $base=$_REQUEST['image'];
         $username = $_REQUEST['name'];

    $binary=base64_decode($base);
	 
    header('Content-Type: bitmap; charset=utf-8');
	
    $file = fopen($username , 'wb');
	
    fwrite($file, $binary);
	
    fclose($file);
	
    echo "Done!!!!";
?>

<?php

$dirname = '/Users/simon/Documents/miage/2012-2013/nuit de linfo/timelapse/store/';
$dir = opendir($dirname); 
$new=345;
while($file = readdir($dir)) {
	if($file != '.' && $file != '..' && !is_dir($dirname.$file))
	{
		
		
		$parse=explode(".", $file);
			if($parse[0]>"428"){
				$new_name="00".$new.".jpg";
				
				rename($dirname.$file, $dirname.$new_name);
				
				$new++;
				
			}
		
			}
}

closedir($dir);

?>
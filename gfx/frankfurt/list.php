<?php

	$files = array();
	if ($handle = opendir('.')) {

		while (false !== ($file = readdir($handle))) {
			if ($file != "." && $file != ".." &&  strpos($file, "_tn") === false && strpos($file, "video") === false && strpos($file, ".jpg") !== false) {
				array_push($files, $file);
			}
		}

		closedir($handle);
	}
	sort($files);
	#print_r($files);

	foreach($files as $i => $file) {
		$file_tn = str_replace(".jpg", "_tn.jpg", $file);
		echo '<li><a href="gfx/frankfurt/'.$file.'" rel="prettyPhoto[pp_gal_frankfurt]" title="Bilder der Demo in Frankfurt"><img src="gfx/frankfurt/'.$file_tn.'" width="265" height="177" border="0" alt=""></a></li>';
	}

?>

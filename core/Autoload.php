<?php 

require_once __DIR__ . '/../vendor/autoload.php';

function GetListFiles($folder, &$all_files)
{
	$fp = opendir($folder);
	while($cv_file = readdir($fp))
	{
		if(is_file($folder."/".$cv_file))
		{
			$all_files[] = $folder . "/" . $cv_file;
		}
		elseif($cv_file != "." && $cv_file != ".." && is_dir($folder . "/" . $cv_file))
		{
			GetListFiles($folder . "/" . $cv_file, $all_files);
		}
	}
	closedir($fp);
}

$all_files = array();
GetListFiles(__DIR__, $all_files);

foreach ($all_files as $file) {
	require_once $file;
}


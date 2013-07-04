	<?PHP 
	$file = file_get_contents('./branding.config', true);
	$brandinginfo = explode("::", $file);
	$string1 = $brandinginfo[0];
	?>
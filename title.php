	<?PHP  #Read the name of the website and tag line from a text file called branding.config
	$file = file_get_contents('./branding.config', true);
	$brandinginfo = explode("::", $file);
	$string1 = $brandinginfo[0];
	?>
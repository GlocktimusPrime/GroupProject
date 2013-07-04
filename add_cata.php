<?php

 if(isset($_POST['catatitle']) && ($_POST['catadesc'])) { //only do file operations when appropriate
        $catatitle = $_POST['catatitle'];
		$catadesc = $_POST['catadesc'];
	
	
	
	
	
		$listinginfo = "::$catatitle" . "\n" . "::$catadesc";
 $listingFile = "catadata/$catatitle.txt";
		if (file_exists($listingFile)) { header("Location: admin_logon.php");  }else{ 
	
        $fh = fopen($listingFile, 'a+') or die("Write error");
        fwrite($fh, $listinginfo);
        fclose($fh);
	header("Location: admin_addcata.php?submit=2"); 
	}
		}

?>
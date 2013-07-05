<?
if(!isset($_SESSION)) {
     session_start();
}function readitems(){
global $file;
global $string;
$i=0;
//List files in directory
if ($dir = opendir('catadata/')) {
	$items = array();
	while (false !== ($file = readdir($dir))) {
		if ($file != "." && $file != "..") {
			$items[] = $file; 
		}
	}
	closedir($dir);
}
	foreach($items as $item) {
	$i++;
	$editid = $item;	
		$string = trim($item, "Listing Number;");
		$string = trim($string, ".txt");
$fp3 = fopen("catadata/$item", 'r');
if ($fp3) {
   $array = explode("::", fread($fp3, filesize("catadata/$item")));
}
echo $array[1];
echo"<form name='$string' method='post' action='admin_editcata.php'>	<input type='hidden' name='idtoedit' value='$editid'/>
	<button type='submit' name='submit' class='btn btn-info btn-small'><i class='fam-application-edit'></i> Edit</button> 
</form>
	<hr>
	</br>";
	$string1 = "catadata/" .$file;
	global $string1;
}
	}
 if(isset($_POST['catatitle']) && ($_POST['catadesc']) && ($_POST['idtoedit'])) { //only do file operations when appropriate
        $catatitle = $_POST['catatitle'];
		$catadesc = $_POST['catadesc'];	
$id = $_POST['idtoedit'];
$listinginfo = "::$catatitle" . "\n" . "::$catadesc";
$listingFile = "catadata/$id"; 
file_put_contents($listingFile, $listinginfo);	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin - Edit Category</title>
							<? include 'authnav.php';?>			
			<script type="text/javascript" src="/assets/js/bootstrap-dropdown.js"></script>
		</div>
<body>
<?php
admin_viewcata();
function admin_viewcata(){	   if (strlen(session_id()) < 1) {
		session_start();
	}
		if(isset($_SESSION['logged']) && $_SESSION['logged'] == "yes" &&  $_SESSION['isadmin'] = "yes") { 
			print "<div class='container'>
                <div class='row'>
                    <div class='well'>";
		if(isset($_POST['submit'])== false){readitems();}else{$id = $_POST['idtoedit'];
		$fp3 = fopen("catadata/$id", 'r');
if ($fp3) {
   $array = explode("::", fread($fp3, filesize("catadata/$id")));
}
		echo"<form action='admin_editcata.php' method='post'><input type='hidden' name='idtoedit' value='$id'/>
<div class='control-group'>
  <label class='control-label' for='catatitle'>Name <i class='fam-pencil'></i></label>
  <div class='controls'>
    <input id='catatitle' name='catatitle' type='text' value='$array[1]' class='input-large' required=''> 
  </div>
</div>
<div class='control-group'>
  <label class='control-label' for='catadesc'>Description <i class='fam-pencil'></i></label>
  <div class='controls'>                     
    <textarea id='catadesc' name='catadesc' required=''>$array[2]</textarea>
  </div>
</div>
<button type='submit' name='submit' class='btn-large btn-inverse'>Submit</button></form>";}
echo"</div></div></div>";
		}else {print "<div class='container'>
                <div class='row'>
                    <div class='span12'>
<div class=well>
</div></div></div></div>"; 
}
}
?>  <hr/>
 <div class="container">
<div class=" footer"> 
<span><a href="" ><span class="label label-inverse">Home</span></a></span>
<span><a href="help.php" >Help</a></span>
<span>
<?php
include('footer.php');
?>
</span> 	
</div>     
	</div>
  </body>
</html>
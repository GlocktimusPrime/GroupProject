<?
if(!isset($_SESSION)) {
     session_start();
}function readitems(){
global $file;
global $string;
$i=0;
$r=0;
$t=0;
//List files in directory
if ($dir = opendir('listingdata/')) {
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
$fp3 = fopen("listingdata/$item", 'r');
if ($fp3) {
   $array = explode("::", fread($fp3, filesize("listingdata/$item")));
}
echo $array[1]; #Write the name of each ad and then the id and a edit button
echo"
<form name='$string' method='post' action='edit_ad.php'>	<input type='hidden' name='idtoedit' value='$editid'/>
	<div class=container>Listing ID:" . $string . "</div> 

	<button type='submit' class='btn btn-info btn-small'><i class='fam-application-edit'></i> Edit</button>
	 
</form>
	<hr>
	</br>";
	$string1 = "listingdata/" .$file;
	$r++;
		$t++;
	global $string1;
}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin - Edit Listings</title>
							<? include 'authnav.php';?>					
			<script type="text/javascript" src="/assets/js/bootstrap-dropdown.js"></script>
		</div>
<body>
<?php
admin_adminview();
function admin_adminview(){	   if (strlen(session_id()) < 1) {
		session_start();
	}
		if(isset($_SESSION['logged']) && $_SESSION['logged'] == "yes" &&  $_SESSION['isadmin'] = "yes") { 
			print "	            <div class='container'>
                <div class='row'>
                    <div class='well'>";
				readitems();
					echo"</div></div></div>";
			} 
		else { #Part of the admin template, shows up if user isnt an admin
			print "<div class='container'>
                <div class='row'>
                    <div class='span12'>
<div class=well>
</div>
		</div></div></div>					"; 
		}
}
?> <hr/>
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
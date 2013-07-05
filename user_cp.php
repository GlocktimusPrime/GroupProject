<?if(!isset($_SESSION)) {
     session_start();
}?><!DOCTYPE html><?
$string1 = "Brand";	
include 'title.php';
?>
<html lang="en">
<head>
	<title><?php echo $string1; ?></title>	
<?php
		include 'authnav.php';		
	include 'make_listing.php';
				?>			
</head>
<body>		
	            <div class="container">
                <div class="row">
                    <div class="span12">        
                    </div><? 
  if (isset($_POST['idtoedit']) ) {
      $id = $_POST['idtoedit'];
   }
 function readitems(){
global $file;
global $string;
$i=0;
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
if( stristr($array[5],$_SESSION['username']) !== false) {
echo $array[1];
echo"<form name='$string' method='post' action='edit_ad.php'>	<input type='hidden' name='idtoedit' value='$editid'/>
	<div class=container>Listing ID:" . $string . "</div> 
	<button type='submit' class='btn btn-info btn-small'><i class='fam-application-edit'></i> Edit</button> 
</form>
	<hr>
	</br>";
	$string1 = "listingdata/" .$file;
	global $string1;
}}
	}
			print "<div class='container'>
                <div class='row'>
                    <div class='span12'>
		<div class=well>"; readitems(); print "</div>
		</div></div></div>";
?>  
</div>
</div>
<hr/>
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
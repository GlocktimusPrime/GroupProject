<? if(!isset($_SESSION)) {
     session_start();
}

 function readitems(){
global $file;
global $string;

 
$dir = dir("listingdata/");

//List files in directory
while (($file = $dir->read()) !== false){
	//Make sure it's a .txt file
	
	if(strlen($file) < 5 || substr($file, -4) != '.txt')
		continue;
		
		$string = trim($file, "Listing Number;");
		$string = trim($string, ".txt");

	echo "
	<form method='post' action='admin_removelisting.php'>
	<div class=container>Listing ID:" . $string . "</div> 
	<input type='hidden' name='idToDelete' id='hiddenField' value='$file' />	

	<button type='submit' id='singlebutton' name='submit' value='submit' class='btn btn-danger'><i class='fam-cancel'></i> Remove</button>
</form>
		 <a class='confirm' href=#>Alert!</a>
	</br>";
	$string1 = "listingdata/" .$file;
	global $string1;

}

$dir->close();

			  

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin - </title>

							<? include 'authnav.php';?>
						
					
			<script type="text/javascript" src="/assets/js/bootstrap-dropdown.js"></script>
		</div>
	
	
	
<body>

<?php
admin_isadmin();



function admin_isadmin(){	   if (strlen(session_id()) < 1) {
		session_start();
	
	
	}	global $file;
		if(isset($_SESSION['logged']) && $_SESSION['logged'] == "yes" &&  $_SESSION['isadmin'] = "yes") { 
			print "	            <div class='container'>
                <div class='row'>
                    <div class='span12'>
		<div class=well>"; readitems(); print "</div>
		</div></div></div>";
			} 
		else { 
			print "		            <div class='container'>
                <div class='row'>
                    <div class='span12'>

<legend>Error</legend><div class=well><p style='color:crimson;'>Error </br></br>

Error </p></div>
<div class=well>
You are not an admin, nice try!

</div>
		</div></div></div>					"; 
		}

}

	
	
?>  

<script>	bootbox.confirm("Are you sure?", function(result) { Example.show("Confirm result: "+result); });</script>
  </body>
</html>
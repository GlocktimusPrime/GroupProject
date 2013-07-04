<? if(!isset($_SESSION)) {
     session_start();
}
  if (isset($_POST['deletecata']) ) {
      $id = $_POST['deletecata'];
	  echo "Cata deleted: ".$_POST['deletecata'];
     unlink("catadata/$id");
   }


 function readitems(){
global $file;
global $string;

 

$i=0;
$r=0;
$t=0;
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
sort($items, SORT_STRING);
	foreach($items as $item) {
		
	
	

	$deleteid = $items[$i];


	$string = trim($items[$i], ".txt");
	$i++;
echo "
		 <script src='js/bootbox.min.js'></script>
	   <script>
	   $(document).on('click', '#test', function(e) {
    e.preventDefault();
  bootbox.confirm('Are you sure?', function(result) {
  if(+result == true){
  bootbox.alert('Confirm result: '+result);
document.forms['$string'].submit();
  }else{
   };
}); 
  
});
    </script>";
echo"
<form name='$string' method='post' action='admin_removecata.php'>	<input type='hidden' name='deletecata' value='$deleteid'/>
	<div class=container>Cata ID:" . $string . "</div> 

	<a id='test' class='btn btn-danger btn-small'><i class='fam-cancel'></i> Delete</a>
	 
</form>
	<hr>
	</br>";
	$string1 = "catadata/" .$file;
	$r++;
		$t++;
	global $string1;
}
	}

			  



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
 	<title>Admin - Remove Cata</title>

							<? include 'authnav.php';?>
    <!-- CSS dependencies -->

</head>
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
 
    <!-- JS dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 
    <!-- bootbox code -->
  
</body>
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
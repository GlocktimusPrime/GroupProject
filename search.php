<? 	if(!isset($_SESSION)) {#if no session is started
     session_start();#start the session
}
include 'make_listing.php';
$string1 = "Brand";	
include 'title.php';
if(isset($_GET['searchterms'])){
$test2 = $_GET['searchterms'];
} else {
$test2 = "";
}?>
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
img {
    position: middle;
    top: 0; bottom:0; left: 0; right:0;
}
</style>
<head>
	<title><?php echo $string1; ?></title>	
		<?php include 'authnav.php';?>		
</head>
<body>	
<div class="container">
   <h1>Search Results</h1>
    <div class="row">
     <? readlisting4($test2);?>	
    </div></div>  
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
</div></div>
</body>
</html>
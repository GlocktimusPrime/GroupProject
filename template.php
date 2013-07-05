	<?php	
	if(!isset($_SESSION)) {#if no session is started
     session_start();#start the session
}?>
<!DOCTYPE html>
<?
include 'make_listing.php';
$string1 = "Brand";	
include 'title.php';	
?>
<html lang="en">
<head>
	<title><?php echo $string1; ?></title>	
		<?php include 'authnav.php';?>		
</head>
<body>	
	            <div class="container">
                <div class="row">
                    <div class="span12">   
<!--  Content for regular pages that dont require auth go here -->
                    </div>
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
</div></div>
</body>
</html>
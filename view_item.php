<? if(!isset($_SESSION)) {
     session_start();
}

	include 'authnav.php';	
include 'make_listing.php';
$string1 = "Brand";	
include 'title.php';

if(isset($_GET['showid'])){
$test2 = $_GET['showid'];
} else {
$test2 = "";
}
		
							?>
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
			
</head>
<body>

			
	            <div class="container">
                <div class="row">
				
			
	<div class="row">
 

   <h1></h1>
    <div class="row">

     <? 
				readlisting3($test2)
				
				?>
			
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
</div>      
	</div>
</body>



</html>

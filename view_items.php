<?php if(!isset($_SESSION)) {
     session_start();
}
include 'authnav.php';			
include 'make_listing.php';
$string1 = "Barter Brothers";	
include 'title.php';
if(isset($_REQUEST['catchoice'])){
$test2 = $_REQUEST['catchoice'];
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
   #cata {  
border-width: 5px;
border-style: groove;
border-color: grey;
position:relative;
text-align: left;
top:35%;
right:100%;
bottom:75%;
left:0%;
   }
</style>
<head>
	<title><?php echo $string1; ?></title>	
</head>
<body>
    <div class="row">
      <div class="span2">   <div  id="cata" class="span2 text-left"><p  class="text-center">Categories</p><br><?readcata();?>
	  </div></div>
      <div class="span4"><h1 style='text-align:center;'>Item Listing</h1>
      <div class="span12"><? readlisting2($test2);?>
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
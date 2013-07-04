<?
if(!isset($_SESSION)) {
     session_start();
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
admin_addlisting();
function admin_addlisting(){	   if (strlen(session_id()) < 1) {
		session_start();
	}
		if(isset($_SESSION['logged']) && $_SESSION['logged'] == "yes" &&  $_SESSION['isadmin'] = "yes") { 
			print "	            <div class='container'>
                <div class='row'>
                    <div class='span12'>
	
		</div></div></div>";
			} 
		else { 
			print "		            <div class='container'>
                <div class='row'>
                    <div class='span12'>

<div class=well>
	

</div>
		</div></div></div>					"; 
		}

}
	#if isset submit
	
	
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


<?
	
	
			  
	?>
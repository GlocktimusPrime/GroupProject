

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Help</title>

									<?
$destination = $_SERVER['DOCUMENT_ROOT'];
						include "$destination/authnavfolder.php";?>
						
					
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
	<legend>Help</legend><div class=well><p style='color:crimson;'>Help info </br></br>

Help here </p></div>

		</div></div></div>";
			} 
		else { 
			print "		            <div class='container'>
                <div class='row'>
                    <div class='span12'>

<legend>Help</legend><div class=well><p style='color:crimson;'>Help info </br></br>

Help here </p></div>
<div class=well>
Help here 

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
include('../footer.php');
?>
</span> 	
</div>     
	</div>
  </body>
</html>


<?
	
	
			  
	?>
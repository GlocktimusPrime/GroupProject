<? if (strlen(session_id()) < 1) {
		session_start();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin - </title>
							<? include "authnav.php";?>
			<script type="text/javascript" src="/assets/js/bootstrap-dropdown.js"></script>
		</div>
<body>
<?php
admin_info();
function admin_info(){	  
		if(isset($_SESSION['logged']) && $_SESSION['logged'] == "yes" &&  $_SESSION['isadmin'] = "yes") { 
			print "<div class='container'>
                <div class='row'>
                    <div class='span12'>
	<legend>Help</legend><div class=well><p style='color:crimson;'>About Us </br></br>
</p><h2>Devloped by Alex Hughes</h2></div>
		</div></div></div>";
			} 
		else {print "<div class='container'>
                <div class='row'>
                    <div class='span12'>
	<legend>Help</legend><div class=well><p style='color:crimson;'>About Us </br></br>
</p><h2>Devloped by Alex Hughes</h2></div>
Help here </p></div>
<div class=well>
Help here 
</div></div></div></div>"; 
}
}
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
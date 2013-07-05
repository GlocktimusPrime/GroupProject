<?
if(!isset($_SESSION)) {
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
admin_addlisting();
function admin_addlisting(){   
		if(isset($_SESSION['logged']) && $_SESSION['logged'] == "yes" &&  $_SESSION['isadmin'] = "yes") { 
			print "	            <div class='container'>
                <div class='row'>
                    <div class='well'>
<legend>Contact Us</legend>
<div class='control-group'>
  <label class='control-label' for='firstname'>First Name</label>
  <div class='controls'>
    <input id='firstname' name='firstname' type='text' placeholder='' class='input-xlarge' required=''>
  </div>
</div>
<div class='control-group'>
  <label class='control-label' for='lastname'>Last Name</label>
  <div class='controls'>
    <input id='lastname' name='lastname' type='text' placeholder='' class='input-xlarge' required=''>    
  </div>
</div>
<div class='control-group'>
  <label class='control-label' for='email'>E-Mail Address</label>
  <div class='controls'>
    <input id='email' name='email' type='text' placeholder='' class='input-xlarge' required=''>
  </div>
</div>
<button type='submit' id='singlebutton' name='submit' value='1' class='btn-large btn-inverse'>Submit</button>
</div></div></div>";
}else {print "<div class='container'>
                <div class='row'>
                    <div class='span12'>
<legend>Contact Us</legend>
<div class='control-group'>
  <label class='control-label' for='firstname'>First Name</label>
  <div class='controls'>
    <input id='firstname' name='firstname' type='text' placeholder='' class='input-xlarge' required=''>
  </div>
</div>
<div class='control-group'>
  <label class='control-label' for='lastname'>Last Name</label>
  <div class='controls'>
    <input id='lastname' name='lastname' type='text' placeholder='' class='input-xlarge' required=''>  
  </div>
</div>
<div class='control-group'>
  <label class='control-label' for='email'>E-Mail Address</label>
  <div class='controls'>
    <input id='email' name='email' type='text' placeholder='' class='input-xlarge' required=''>
  </div>
</div>
<button type='submit' id='singlebutton' name='submit' value='1' class='btn-large btn-inverse'>Submit</button>
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
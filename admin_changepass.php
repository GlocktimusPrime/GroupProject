<?if(!isset($_SESSION)) {
     session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin - Change Password</title>

							<? include 'authnav.php';?>
						
					
			<script type="text/javascript" src="/assets/js/bootstrap-dropdown.js"></script>
		</div>
	

	
<body>
<?php
admin_changepass();
function admin_changepass(){	   if (strlen(session_id()) < 1) {#checks to see if the session is admin
		session_start();
	}
		if(isset($_SESSION['logged']) && $_SESSION['logged'] == "yes" &&  $_SESSION['isadmin'] = "yes") { #print the change admin menu
			print "	            <div class='container'>
                <div class='row'>
                    <div class='span12'>
		<form class='form-horizontal' action='admin_changepass.php' method='post'>
<fieldset>

<!-- Form Name --><div class=well>
<legend>Change Admin Pass</legend>

<!-- Text input-->
<div class='control-group'>
  <label class='control-label' for='textinput'>New Password</label>
  <div class='controls'>
  
    <input id='textinput' name='newpass' type='password' placeholder='' class='input-xlarge' required=''>
    
  </div>
</div>

<!-- Button -->
<div class='control-group'>
  <label class='control-label' for='singlebutton'></label>
  <div class='controls'>
    <button id='singlebutton' name='submit' class='btn btn-primary'>Submit</button>
  </div>
</div>
</div>
</fieldset>
</form>";
if(isset($_POST['submit'])== true)
		{
		$userinfo = file_get_contents('userdata/' . $_SESSION['username'] . ".user");

		$userarray = explode("\n", $userinfo);
	
		$userarray[1] = hash('sha256', $_REQUEST["newpass"]);#recieves the new password 
	
file_put_contents('userdata/' . $_SESSION['username'] . ".user", implode("\n", $userarray));
#	file_put_contents('userdata/' . $_SESSION['username'] . ".user", $userarray);
		}

echo"
		</div></div></div>";
			} 
		else { 
			print "		            <div class='container'>
                <div class='row'>
                    <div class='span12'>

<div class=well>
You are not an admin.#print if you are not an admin
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
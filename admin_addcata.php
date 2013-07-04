<?php 
if(!isset($_SESSION)) {#start session if not started yet
     session_start();
}
$successmsg = "";
if(isset($_REQUEST['submit'])) {
$successmsg = "</br> <div class='alert alert-success'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button> <h4 class='alert-heading'>Success!<i class='icon-ok'></i></h4> 
   Successfully created catagory!
  ";
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin - Add Listing</title>
							<?
							include 'authnav.php';?>					
			<script type="text/javascript" src="/assets/js/bootstrap-dropdown.js"></script>
		</div>	
<body>
<?php
  if (strlen(session_id()) < 1) {
		session_start();
		}
		?>
		       <div class='container'>
                <div class='row'>
                    <div class='span12'>	
<legend>Admin - Add Item</legend><div class=well><p style='color:crimson;'>Catagories
</p></div>
<div class=well>
 <form action='add_cata.php' class='form-horizontal' method='POST'>
<div class='control-group'>
  <label class='control-label' for='catatitle'>Name <i class='fam-pencil'></i></label>
  <div class='controls'>
    <input id='catatitle' name='catatitle' type='text' placeholder='' class='input-large' required=''>  
  </div>
</div>
<div class='control-group'>
  <label class='control-label' for='catadesc'>Description <i class='fam-pencil'></i></label>
  <div class='controls'>                     
    <textarea id='catadesc' name='catadesc' required=''></textarea>
  </div>
</div>
<button type="submit" id="singlebutton" name="submit" value="1" class="btn-large btn-inverse">Go</button>
</form>
</fieldset>
<?PHP echo $successmsg;?>
</div>
		</div></div></div>   
  </body>
</html>
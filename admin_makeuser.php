<!DOCTYPE html>
<?php
$regstring = "";
if(isset($_REQUEST['submit'])) {
include 'register_proc.php';
adduser();
}
function  includenav(){							
include 'authnav.php';}
?>
<html lang="en">
<head>
	<title>Login</title>
<?php includenav();?>		
</div>
<script type="text/javascript" src="/assets/js/bootstrap-dropdown.js"></script>
</div>
<div class="container">
<div class="row">
  <div class="span12">        
<div class="well">
<!-- Form Name -->
<legend>Add User</legend>
<!-- Text input-->
<form action="<?php $_PHP_SELF ?>" method="POST">
  Name:  &nbsp;&nbsp; <input type="text" name="user" /></br>
  Password:&nbsp;&nbsp;&nbsp;	 <input type="password" name="password" /></br>
 Birthday:  &nbsp;&nbsp;&nbsp;<div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
<input id="bday" name="bday" class="span2" size="16" type="text" value="12-02-2012">
  <span class="add-on"><i class="icon-th"></i></span>
</div></br>
  Is Admin?:&nbsp;&nbsp;  <select name="isadmin" class="selectpicker" data-style="btn-primary"><option value="0">No</option><option value="1">Yes</option></select>
 </br>
 <button type="submit" id="singlebutton" name="submit" value="1" class="btn-large btn-inverse">Submit</button>
    </form>
</div>
</br>
<?php 
echo $regstring;
 ?>
 </div></div></div></div></div></div>
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
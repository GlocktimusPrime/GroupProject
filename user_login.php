<?php
if(!isset($_SESSION)) {
     session_start();
}
function  includenav(){include 'authnav.php';}			
?><!DOCTYPE html>
<html lang="en">
<head>
<title>Barter Brothers Co.</title>
<?php includenav();	?>		
<script type="text/javascript" src="/assets/js/bootstrap-dropdown.js"></script>
</div>
</head>
<body>	
<div class="container">
<div class="row">
<div class="span10">          
<div class="well">
<!-- Form Name -->
<legend>Login</legend>
<?php 
include 'login3.php';
if(isset($_POST['submit']))
{
logintoaccount();
}
   ?>
<form action="<?php $_PHP_SELF ?>" method="POST">
Name: <input type="text" name="user" />
Password: <input type="password" name="pass" />
<button type="submit" id="singlebutton" name="submit" value="1" class="btn-large btn-inverse">Go</button>
</form>
</br>
</div></div></div></div>  
</body>
<hr/>
<div class="container">
<div class="footer"> 
<span><a href="" ><span class="label label-inverse">Home</span></a></span>
<span><a href="help.php" >Help</a></span>
<?php
include('footer.php');
?>
</div></div>
</html>
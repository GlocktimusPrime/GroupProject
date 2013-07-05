<?php
global $name;
#checks that it was given a username, if not all these function will be inaccessable 
#fas it returns to items.php or whever you called this from
if(isset($name)){
$name = (isset($_GET["user"])?$_GET["user"]:'blank');
}else{
return;
}
function register(){
$bday = $_REQUEST["bday"];
$username = (isset($_REQUEST["user"])?$_REQUEST["user"]:'blank');
$filename = "userdata/$username.user";
if (file_exists($filename) == FALSE) {
$userinfo = array(
			  "name" => $username,
              "password" => "\n" . hash('sha256', $_REQUEST["password"]) . "\n",
              "birthday" => "$bday" . "\n", #remove quotes and fix isset
			  "lastlogon" => date(DATE_RFC822) . "\n",
              "admin" => 0);
#Name in userinfo array effects the filename of the output file
		$dir = "userdata/";  
if (file_exists($filename) === true) {
$regstring = "</br><div class='alert alert-error'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button> <h4 class='alert-heading'>Error!</h4> 
   That username was already taken!
</div>";
} else {
   file_put_contents($filename, $userinfo);
   $regstring = "</br><div class='alert alert-success'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button> <h4 class='alert-heading'>Success!<i class='icon-ok'></i></h4> 
   Your account has been registered successfully!
</div>";
}
}else{
global $taken;
$taken = "</br><div class='alert alert-error'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button> <h4 class='alert-heading'>Failure!<i class='icon-remove'></i></h4> 
   Account name taken!
</div>";
}
}
function get_userinfo(){
global $name;
$filename = "userdata/$username.user";
	$dir = "userdata/";  
$filename = "userdata/$username.user";
$stuff = file_get_contents("$filename", true);
$userfile = explode("\n", $stuff);
return;
//Userfile is loaded to each array element
//0 = Name - String
//1 = Password - Sha256 hash
//2 = Birthday - Date from html calender?
//3 = Last logon - Date/time
//4 = Admin - ?
}
#Admin function for adding users from admin menu.
function adduser(){
if (strlen(session_id()) < 1) {
    session_start();
}
$isadmin =  isset($_SESSION['isadmin']) ? $_SESSION['isadmin'] : null;
     if ($isadmin == "yes") { 	
$bday =  isset($_POST['bday']) ? $_POST['bday'] : null;
$id=  isset($_POST['user']) ? $_POST['user'] : null;
$password= hash('sha256', isset($_POST['pass']) ? $_POST['pass'] : null);
$username = (isset($_REQUEST["user"])?$_REQUEST["user"]:'blank');
$isadmin = $_REQUEST["isadmin"];
$filename = "userdata/$username.user";
$userinfo = array(
			  "name" => $id,
              "password" => "\n" . hash('sha256', $_REQUEST["password"]) . "\n",
              "birthday" => "$bday" . "\n", #remove quotes and fix isset
			  "lastlogon" => date(DATE_RFC822) . "\n",
              "admin" => $_REQUEST["isadmin"]);
#Name in userinfo array effects the filename of the output file
		$dir = "userdata/";  
  file_put_contents($filename, $userinfo);
   $regstring = "</br><div class='alert alert-success'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button> <h4 class='alert-heading'>Success!<i class='icon-ok'></i></h4> 
   Your account has been registered successfully!
</div>";} else{ $regstring = "</br><div class='alert alert-error'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button> <h4 class='alert-heading'>Failure<i class='icon-exclamation-sign'></i></h4> 
   Your account has is not an admin! Nice try! ;D
</div>";}
 }
?>
<?php
function logintoaccount(){
	if(!isset($_SESSION)) {#if no session is started
     session_start();#start the session
}
  if(isset( $_REQUEST["user"]) || isset($_REQUEST["pass"]) )#checks the user and password
  {$id=  isset($_POST['user']) ? $_POST['user'] : null;
$password1= hash('sha256', isset($_POST['pass']) ? $_POST['pass'] : null);
$u = $id;
$p = $password1;
$filename = "userdata/$id.user";
 if ( file_exists($filename)== true){
#add if file exists here

$urls="$filename";
$page = join(" ",file("$urls"));
$kw = explode("\n", $page);
for($i=0;$i<count($kw);$i++){
#echo $kw[$i];   debug
}
if($p == trim($kw[1], " ") && $kw[4]==1){# $kw1 is password and $kw4 is whether they're an admin
   $_SESSION['username'] = $u; 
      $_SESSION['logged'] = "yes" ;
	  $_SESSION['isadmin'] = "yes";
	  echo    "</br><div class='alert alert-success'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button> <h4 class='alert-heading'>Success!<i class='icon-ok'></i></h4> 
   Successfully logged in! You are also an admin!<META HTTP-EQUIV='refresh' CONTENT='1;URL=index.php'>
</div>";}elseif($password1 == trim($kw[1], " ")){ #sets to regular use if theyre not admin
if(session_id() == '') {
   session_start();
}
      $_SESSION['username'] = "$u"; 
      $_SESSION['logged'] = "yes" ;
	  echo    "</br><div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button> <h4 class='alert-heading'>Success!<i class='icon-ok'></i></h4> 
   Successfully logged in!<META HTTP-EQUIV='refresh' CONTENT='1;URL=index.php'>
</div>";

      }else#if they got the username or passowrd wrong it prints this
	  { 
      print "</br><div class='alert alert-error'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button> <h4 class='alert-heading'>Failure!<i class='icon-remove'></i></h4> 
   Username or password incorrect!<META HTTP-EQUIV='refresh' CONTENT='1;URL=user_login.php'>
</div>"; 
     }  
     exit();
  }
  else
	  { 
      print "</br><div class='alert alert-error'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button> <h4 class='alert-heading'>Failure!<i class='icon-remove'></i></h4> 
   Username or password incorrect!<META HTTP-EQUIV='refresh' CONTENT='1;URL=user_logon.php'>
</div>"; 
     }  
  }
  }
?>

 
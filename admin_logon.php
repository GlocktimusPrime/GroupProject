<?php if(!isset($_SESSION)) {
     session_start();
}
#Gets admin news from my website.
$homepage = file_get_contents('http://www.noodlynetwork.com/groupnews.txt');
		
 	?>
<!DOCTYPE html>

<html lang="en">
<head>
	<title>Admin Menu</title>

							<? include "authnav.php";?>
						
					
			<script type="text/javascript" src="/assets/js/bootstrap-dropdown.js"></script>
		</div>
	
	
	

			
	            <div class="container">
                <div class="row">
                    <div class="span12">

<?php
  if(isset( $_POST["user"]) || isset($_REQUEST["password"]) )
  {
$pp = isset($_POST['password']) ? $_POST['password'] : null;

$id=  isset($_POST['user']) ? $_POST['user'] : null;
$password1= hash('sha256', $pp);
$u = $id;
$p = $password1;
$filename = "userdata/$id.user";
if (file_exists($filename)) {

$urls="$filename";
$page = join(" ",file("$urls"));
$kw = explode("\n", $page);
$page = (string)$page;
for($i=0;$i<count($kw);$i++){
#echo $kw[$i];   DEBUG

}#Logged in and an admin.
if($kw[0] == $id && $p == trim($kw[1], " " )&& $kw[4] == "1"){ 
   
      $_SESSION['username'] = $u; 
      $_SESSION['logged'] = "yes" ;
	  $_SESSION['isadmin'] = "yes" ;

	  echo    "</br> <div class='well'><div class='alert alert-success'>

  <button type='button' class='close' data-dismiss='alert'>&times;</button> <h4 class='alert-heading'>Success!<i class='icon-ok'></i></h4> 
   Successfully logged in! You are also an admin.
</div>     <div class='btn-toolbar' align='center' style='margin: 0;'>
              <div class='btn-group'>
                <button class='btn dropdown-toggle' data-toggle='dropdown'><i class='icon-wrench'></i> General Settings <span class='caret'></span></button>
                <ul class='dropdown-menu'>
                  <li><a href='#'>Basic Settings</a></li>
                  <li><a href='branding.php'>Theme/Branding Settings</a></li>
                  <li><a href='#'>CSS Settings</a></li>
                  <li class='divider'></li>
                  <li><a href='#'>Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div class='btn-group'>
                <button class='btn btn-primary dropdown-toggle' data-toggle='dropdown'><i class='icon-user'></i> User Managment <span class='caret'></span></button>
                <ul class='dropdown-menu'>
                  <li><a href='admin_makeuser.php'>Add User</a></li>
                  <li><a href='#'>Edit User</a></li>
                  <li><a href='#'>Remove/Ban User</a></li>
                  <li class='divider'></li>
                  <li><a href='#'>Mass Delete</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div class='btn-group'>
                <button class='btn btn-danger dropdown-toggle' data-toggle='dropdown'><i class='icon-th'></i> Cata Manager <span class='caret'></span></button>
                <ul class='dropdown-menu'>
                  <li><a href='admin_addcata.php'>Add Cata</a></li>
                  <li><a href='#'>Edit Cata</a></li>
                  <li><a href='admin_removecata.php'>Remove Cata</a></li>
                  <li class='divider'></li>
                  <li><a href='#'>Mass Delete</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div class='btn-group'>
                <button class='btn btn-warning dropdown-toggle' data-toggle='dropdown'><i class='icon-tags'></i> Listing Manager <span class='caret'></span></button>
                <ul class='dropdown-menu'>
                  <li><a href='admin_addlisting.php'>Add Listing</a></li>
                  <li><a href='admin_editads.php'>Edit Listing</a></li>
                  <li><a href='admin_removead.php'>Remove Listing</a></li>
                  <li class='divider'></li>
                  <li><a href='#'>Mass Delete</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div class='btn-group'>
                <button class='btn btn-success dropdown-toggle' data-toggle='dropdown'><i class='icon-globe'></i> Information <span class='caret'></span></button>
                <ul class='dropdown-menu'>
                  <li><a href='info/help.php'>Help</a></li>
                  <li><a href='/info/about.php'>About</a></li>
                  <li><a href='/info/contact.php'>Contact</a></li>
                  <li class='divider'></li>
                  <li><a href='/info/licensing.php'>Licensing</a></li>
                </ul>
              </div><!-- /btn-group -->
          
            </div><!-- /btn-toolbar -->
          </div>
		  </div>
		  </div>	
		  </br>
		  <pre style='background: -moz-linear-gradient(top,  rgba(30,87,153,0) 0%, rgba(30,87,153,0.8) 15%, rgba(30,87,153,1) 19%, rgba(30,87,153,1) 20%, rgba(41,137,216,1) 50%, rgba(30,87,153,1) 80%, rgba(30,87,153,1) 81%, rgba(30,87,153,0.8) 85%, rgba(30,87,153,0) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(30,87,153,0)), color-stop(15%,rgba(30,87,153,0.8)), color-stop(19%,rgba(30,87,153,1)), color-stop(20%,rgba(30,87,153,1)), color-stop(50%,rgba(41,137,216,1)), color-stop(80%,rgba(30,87,153,1)), color-stop(81%,rgba(30,87,153,1)), color-stop(85%,rgba(30,87,153,0.8)), color-stop(100%,rgba(30,87,153,0))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(30,87,153,0) 0%,rgba(30,87,153,0.8) 15%,rgba(30,87,153,1) 19%,rgba(30,87,153,1) 20%,rgba(41,137,216,1) 50%,rgba(30,87,153,1) 80%,rgba(30,87,153,1) 81%,rgba(30,87,153,0.8) 85%,rgba(30,87,153,0) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(30,87,153,0) 0%,rgba(30,87,153,0.8) 15%,rgba(30,87,153,1) 19%,rgba(30,87,153,1) 20%,rgba(41,137,216,1) 50%,rgba(30,87,153,1) 80%,rgba(30,87,153,1) 81%,rgba(30,87,153,0.8) 85%,rgba(30,87,153,0) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(30,87,153,0) 0%,rgba(30,87,153,0.8) 15%,rgba(30,87,153,1) 19%,rgba(30,87,153,1) 20%,rgba(41,137,216,1) 50%,rgba(30,87,153,1) 80%,rgba(30,87,153,1) 81%,rgba(30,87,153,0.8) 85%,rgba(30,87,153,0) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(30,87,153,0) 0%,rgba(30,87,153,0.8) 15%,rgba(30,87,153,1) 19%,rgba(30,87,153,1) 20%,rgba(41,137,216,1) 50%,rgba(30,87,153,1) 80%,rgba(30,87,153,1) 81%,rgba(30,87,153,0.8) 85%,rgba(30,87,153,0) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#001e5799', endColorstr='#001e5799',GradientType=0 ); /* IE6-9 */
'>
  <p>$homepage</p>
</pre>
		  
		  
		  
		  
		  ";
#Logged in but not an admin
      }elseif($kw[0] == $id && $p == trim($kw[1], " " )){ 
      $_SESSION['username'] = $u; 
      $_SESSION['logged'] = "yes" ;
		  echo    "</br></br><div class='alert alert-warning'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button> <h4 class='alert-heading'>Semi-Success!<i class='icon-ok'></i></h4> 
   Successfully logged in! Unfortuantly you are not an admin and cannot access this page.
</div>";

      }
	
	
     exit();
  
  }#Incorrect login info
	  else
	  { 
      print "</br><div class='alert alert-error'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button> <h4 class='alert-heading'>Failure!<i class='icon-remove'></i></h4> 
   Username or password incorrect!
</div>"; 
     }  
  } else if(isset( $_SESSION["isadmin"]) == "yes")
  {
	  echo    "</br> <div class=well><div class='btn-toolbar' align='center' style='margin: 0;'>
              <div class='btn-group'>
                <button class='btn dropdown-toggle' data-toggle='dropdown'><i class='icon-wrench'></i> General Settings <span class='caret'></span></button>
                <ul class='dropdown-menu'>
                  <li><a href='#'>Basic Settings</a></li>
                  <li><a href='branding.php'>Theme/Branding Settings</a></li>
                  <li><a href='#'>CSS Settings</a></li>
                  <li class='divider'></li>
                  <li><a href='#'>Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div class='btn-group'>
                <button class='btn btn-primary dropdown-toggle' data-toggle='dropdown'><i class='icon-user'></i> User Managment <span class='caret'></span></button>
                <ul class='dropdown-menu'>
                  <li><a href='admin_makeuser.php'>Add User</a></li>
                  <li><a href='#'>Edit User</a></li>
                  <li><a href='#'>Remove/Ban User</a></li>
                  <li class='divider'></li>
                  <li><a href='#'>Mass Delete</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div class='btn-group'>
                <button class='btn btn-danger dropdown-toggle' data-toggle='dropdown'><i class='icon-th'></i> Cata Manager <span class='caret'></span></button>
                <ul class='dropdown-menu'>
                  <li><a href='admin_addcata.php'>Add Cata</a></li>
                  <li><a href='#'>Edit Cata</a></li>
                  <li><a href='admin_removecata.php'>Remove Cata</a></li>
                  <li class='divider'></li>
                  <li><a href='#'>Mass Delete</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div class='btn-group'>
                <button class='btn btn-warning dropdown-toggle' data-toggle='dropdown'><i class='icon-tags'></i> Listing Manager <span class='caret'></span></button>
                <ul class='dropdown-menu'>
                  <li><a href='admin_addlisting.php'>Add Listing</a></li>
                  <li><a href='admin_editads.php'>Edit Listing</a></li>
                  <li><a href='admin_removead.php'>Remove Listing</a></li>
                  <li class='divider'></li>
                  <li><a href='#'>Mass Delete</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div class='btn-group'>
                <button class='btn btn-success dropdown-toggle' data-toggle='dropdown'><i class='icon-globe'></i> Information <span class='caret'></span></button>
                <ul class='dropdown-menu'>
                  <li><a href='/info/help.php'>Help</a></li>
                  <li><a href='/info/about.php'>About</a></li>
                  <li><a href='/info/contact.php'>Contact</a></li>
                  <li class='divider'></li>
                  <li><a href='/info/licensing.php'>Licensing</a></li>
                </ul>
                </ul>
              </div><!-- /btn-group -->
          
            </div><!-- /btn-toolbar -->
			</div>
          </div>
		
		  </div>	
		  </br>
		  <pre style='color:white; background: rgb(211,211,211); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(211,211,211,1) 0%, rgba(173,173,173,1) 6%, rgba(89,89,89,1) 15%, rgba(48,48,48,1) 23%, rgba(48,48,48,1) 30%, rgba(0,0,0,1) 42%, rgba(0,0,0,1) 48%, rgba(0,0,0,1) 69%, rgba(0,0,0,1) 75%, rgba(17,17,17,1) 77%, rgba(10,10,10,1) 78%, rgba(17,17,17,1) 83%, rgba(0,0,0,1) 86%, rgba(0,0,0,1) 92%, rgba(19,19,19,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(211,211,211,1)), color-stop(6%,rgba(173,173,173,1)), color-stop(15%,rgba(89,89,89,1)), color-stop(23%,rgba(48,48,48,1)), color-stop(30%,rgba(48,48,48,1)), color-stop(42%,rgba(0,0,0,1)), color-stop(48%,rgba(0,0,0,1)), color-stop(69%,rgba(0,0,0,1)), color-stop(75%,rgba(0,0,0,1)), color-stop(77%,rgba(17,17,17,1)), color-stop(78%,rgba(10,10,10,1)), color-stop(83%,rgba(17,17,17,1)), color-stop(86%,rgba(0,0,0,1)), color-stop(92%,rgba(0,0,0,1)), color-stop(100%,rgba(19,19,19,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(211,211,211,1) 0%,rgba(173,173,173,1) 6%,rgba(89,89,89,1) 15%,rgba(48,48,48,1) 23%,rgba(48,48,48,1) 30%,rgba(0,0,0,1) 42%,rgba(0,0,0,1) 48%,rgba(0,0,0,1) 69%,rgba(0,0,0,1) 75%,rgba(17,17,17,1) 77%,rgba(10,10,10,1) 78%,rgba(17,17,17,1) 83%,rgba(0,0,0,1) 86%,rgba(0,0,0,1) 92%,rgba(19,19,19,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(211,211,211,1) 0%,rgba(173,173,173,1) 6%,rgba(89,89,89,1) 15%,rgba(48,48,48,1) 23%,rgba(48,48,48,1) 30%,rgba(0,0,0,1) 42%,rgba(0,0,0,1) 48%,rgba(0,0,0,1) 69%,rgba(0,0,0,1) 75%,rgba(17,17,17,1) 77%,rgba(10,10,10,1) 78%,rgba(17,17,17,1) 83%,rgba(0,0,0,1) 86%,rgba(0,0,0,1) 92%,rgba(19,19,19,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(211,211,211,1) 0%,rgba(173,173,173,1) 6%,rgba(89,89,89,1) 15%,rgba(48,48,48,1) 23%,rgba(48,48,48,1) 30%,rgba(0,0,0,1) 42%,rgba(0,0,0,1) 48%,rgba(0,0,0,1) 69%,rgba(0,0,0,1) 75%,rgba(17,17,17,1) 77%,rgba(10,10,10,1) 78%,rgba(17,17,17,1) 83%,rgba(0,0,0,1) 86%,rgba(0,0,0,1) 92%,rgba(19,19,19,1) 100%); /* IE10+ */
background: linear-gradient(to bottom,  rgba(211,211,211,1) 0%,rgba(173,173,173,1) 6%,rgba(89,89,89,1) 15%,rgba(48,48,48,1) 23%,rgba(48,48,48,1) 30%,rgba(0,0,0,1) 42%,rgba(0,0,0,1) 48%,rgba(0,0,0,1) 69%,rgba(0,0,0,1) 75%,rgba(17,17,17,1) 77%,rgba(10,10,10,1) 78%,rgba(17,17,17,1) 83%,rgba(0,0,0,1) 86%,rgba(0,0,0,1) 92%,rgba(19,19,19,1) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d3d3d3', endColorstr='#131313',GradientType=0 ); /* IE6-9 */
'><a href='admin_changepass.php' class='btn btn-warning'><i class='fam-arrow-rotate-anticlockwise'></i> Change Admin Pass</a>
  $homepage
</pre>";
		  
		  
		  
		  
  }
?>
<?php
echo "</br>";
include('./footer.php');


?>
 
 





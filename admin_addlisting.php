<?
if(!isset($_SESSION)) {
     session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin - Add Listing</title>

							<? include 'authnav.php';?>
						
					
			<script type="text/javascript" src="/assets/js/bootstrap-dropdown.js"></script>
		</div>
	
	
	
<body>
<?php
admin_addlisting();
function admin_addlisting(){	   if (strlen(session_id()) < 1) { #checks to see if the session is started
		session_start();
	}
		if(isset($_SESSION['logged']) && $_SESSION['logged'] == "yes" &&  $_SESSION['isadmin'] = "yes") { #print the admin menu if you're logged in as an admin
			print "	            <div class='container'>
                <div class='row'>
                    <div class='span12'>
		
<legend>Admin - Add Item</legend><div class=well><p style='color:crimson;'>There will be more options here to allow admins to make listings different from regular users</br></br>

If a form has an icon like this: <i class='fam-pencil'></i> it is required to submit. 
</p></div>
<div class=well>

 <form action='user_createlisting.php' class='form-horizontal' method='POST'>

<div class='control-group'>
  <label class='control-label' for='itemtitle'>Item <i class='fam-pencil'></i></label>
  <div class='controls'>
    <input id='itemtitle' name='itemtitle' type='text' placeholder='' class='input-large' required=''>
    
  </div>
</div>

<div class='control-group'>
  <label class='control-label' for='itemdesc'>Description <i class='fam-pencil'></i></label>
  <div class='controls'>                     
    <textarea id='itemdesc' name='itemdesc' required=''></textarea>
  </div>
</div>


<div class='control-group'>
  <label class='control-label' for='Category'>Category</label>
  <div class='controls'>
    <select id='Category' name='Category' class='input-large' multiple='multiple'>
      <option>Make</option>
      <option>This</option>
      <option>Option</option>
      <option>Later</option>
    </select>
  </div>
</div>

<div class='control-group'>
  <label class='control-label' for='accept'>What would you accept?</label>
  <div class='controls'>
    <label class='checkbox' for='accept-0'>
      <input type='checkbox' name='accept[]' id='checkbox-0' value='Cash' >
      Cash <i class='fam-money'></i>
    </label>
    <label class='checkbox' for='accept-1'>
      <input type='checkbox' name='accept[]' id='checkbox-1' value='Goods'>
      Goods <i class='fam-package-green'></i>
    </label>
    <label class='checkbox' for='accept-2'>
      <input type='checkbox' name='accept[]' id='checkbox-2' value='Services'>
      Services <i class='fam-user-suit'></i>
    </label>
  </div>
</div>


<div class='control-group'>
  <label class='control-label' for='price'>Perceived Value <i class='fam-pencil'></i></label>
  <div class='controls'>
    <div class='input-prepend'>
      <span class='add-on'><i class='fam-coins'></i></span>

      <input id='price' name='price' class='input-xlarge' placeholder='' required='' type='number'>
    </div>
    
  </div>
</div>



<div class='control-group'>
  <label class='control-label' for='Item Pic.'>Image</label>
  <div class='controls'>
    <input id='Item Pic.' name='Item Pic.' class='input-file' type='file'>
  </div>
</div>

<button type='submit' id='singlebutton' name='submit' value='1' class='btn-large btn-inverse'>Submit</button>
		

		</form>
</div>
		</div></div></div>";
			} 
		else { #if the user is not an admin its prints a message
			print "		            <div class='container'>
                <div class='row'>
                    <div class='span12'>

<legend>Error</legend><div class=well><p style='color:crimson;'>Error </br></br>

Error </p></div>
<div class=well>
You are not an admin, nice try!

</div>
		</div></div></div>					"; 
		}

}

if(isset($_REQUEST['submit'])) {
include './make_listing.php';
addlisting();#makes the listing 


	}
	
	
	
	
	
?>  
  </body>
</html>
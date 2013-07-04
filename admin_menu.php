<?php
if(!isset($_SESSION)) {
     session_start();
}
include 'login.php';
$logstring = "";
if(isset($_GET['submit'])) {

login();
if ($isloggedin == 1){
$logstring = "</br><div class='alert alert-inverse'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button> <h4 class='alert-heading'>Semi-Success!<i class='icon-ok'></i></h4> 
   You have been logged in successfully! Unfortunatly you do not have admin access.
</div>";
}elseif ($isloggedin == 0){
$logstring = "</br><div class='alert alert-error'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button> <h4 class='alert-heading'>Failure!<i class='icon-remove'></i></h4> 
   Username or password incorrect!
</div>";
}

}
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Menu</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="span12">
				
				<div class="page-header">
 <h1>Master Barters <small>Trade, for what you want!</small></h1>
</div>
			<div class="navbar navbar-inverse">
					<div class="navbar-inner">
						
						<ul class="nav pull-center">
							<li><a href="./">Home</a></li>
							<li><a href="register.php">Register</a></li>	
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									Viewing Cars <b class="caret"></b>
								</a>
								
								<ul class="dropdown-menu">
									<li><a href="#">Prod 1</a></li>
									<li><a href="#">Prod 2</a></li>
									<li><a href="#">Prod 3</a></li>
									<li><a href="#">Prod 4</a></li>
								</ul>
								
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									Viewing Knives <b class="caret"></b>
								</a>
								
								<ul class="dropdown-menu">
									<li><a href="#">Prod 1</a></li>
									<li><a href="#">Prod 2</a></li>
									<li><a href="#">Prod 3</a></li>
									<li><a href="#">Prod 4</a></li>
								</ul>
													
							</li>
							
        <!-- The drop down menu -->
        <ul class="nav pull-right">
              <li class="divider-vertical"></li>
          <li class="dropdown">
        
            <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                <li class="dropdown" data-dropdown="dropdown">
        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">    Login 
        <b class="caret"></b></a>
        <ul class="dropdown-menu dropdown-menu-large">
            <li>
                <div style="padding:20px;">
				 <label class="control-label" for="user">Username</label>
				  <input id="user" name="user" type="text" placeholder="" class="input-xlarge" required="">
                    <br />
					 <label class="control-label" for="user">Password</label>
			    <input id="password" name="password" type="password" placeholder="" class="input-xlarge" required="">

	
                	<script>
$('.dropdown-menu input').click(function(e) {
    e.stopPropagation();
});
</script>
		<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
<button type="submit" id="singlebutton" name="submit" value="1" class="btn-large btn-inverse">Go</button>
</form>
				</div>
            </li>
         </ul>     
    </li> <ul class='nav nav-collapse collapse pull-right'>
									<li class="">
										<form class="navbar-search">
												<div class="input-prepend">
										  <span class="add-on"><i class="icon-search"></i></span>
											<input type="text" class="span2" placeholder="Search">
									</div>
										</form>
									</li></div>
						</ul>
            </div>
          </li>
        </ul>
								
								</ul>

					
					</div>	
				
				</div>
				
			</div>
			<script type="text/javascript" src="/assets/js/bootstrap-dropdown.js"></script>
		</div>
	
	
	

			
	            <div class="container">
                <div class="row">
                    <div class="span12">
             		  <form class="form-horizontal">
<fieldset>
<?php
$param = '<?=$_SERVER["PHP_SELF"];?>';
if ($isloggedin == 0)
{echo "
<legend>Login</legend>


<div class='control-group'>
  <label class='control-label' for='nameinput'>Username</label>
  <div class='controls'>
    <input id='user' name='user' type='text' placeholder='' class='input-xlarge' required=''>
    
  </div>
</div>


<div class='control-group'>
  <label class='control-label' for='passwordinput'>Password</label>
  <div class='controls'>
    <input id='password' name='password' type='password' placeholder='' class='input-xlarge' required=''>
    
  </div>
</div>

<div class='control-group'>
  <label class='control-label' for='singlebutton'>Submit</label>
  <div class='controls'>

<form action='$param' method='post'>
<button type='submit' id='singlebutton' name='submit' value='1' class='btn-large btn-inverse'>Go</button>
</form>
  

</br>";

}
?>
<?php 



if ($isadmin == 1){
print "</br><div class='alert alert-success'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button> <h4 class='alert-heading'>Success!<i class='icon-ok'></i></h4> 
   Successfully logged in. You are also an admin! Below are admin functions!
</div>

<div class='accordion' id='accordion2'>
  <div class='accordion-group'>
    <div class='accordion-heading'>
      <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapseOne'>
        Add a listing
      </a>
    </div>
    <div id='collapseOne' class='accordion-body collapse in'>
      <div class='accordion-inner'>
       

<form class='form-horizontal'>
<fieldset>

<!-- Form Name -->
<legend>Add new item</legend>

<!-- Text input-->
<div class='control-group'>
  <label class='control-label' for='textinput'>Title</label>
  <div class='controls'>
    <input id='textinput' name='textinput' type='text' placeholder='' class='input-xlarge' required=''>
    
  </div>
</div>

<!-- Textarea -->
<div class='control-group'>
  <label class='control-label' for='textarea'>Description</label>
  <div class='controls'>                     
    <textarea id='textarea' name='textarea'></textarea>
  </div>
</div>

<!-- Select Basic -->
<div class='control-group'>
  <label class='control-label' for='selectbasic'>Catagory</label>
  <div class='controls'>
    <select id='selectbasic' name='selectbasic' class='input-xlarge'>
      <option>Option one</option>
      <option>Option two</option>
    </select>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class='control-group'>
  <label class='control-label' for='checkboxes'>What are you willing to accept?</label>
  <div class='controls'>
    <label class='checkbox' for='checkboxes-0'>
      <input type='checkbox' name='checkboxes' id='checkboxes-0' value='Cash'>
      Cash
    </label>
    <label class='checkbox' for='checkboxes-1'>
      <input type='checkbox' name='checkboxes' id='checkboxes-1' value='Service'>
      Service
    </label>
    <label class='checkbox' for='checkboxes-2'>
      <input type='checkbox' name='checkboxes' id='checkboxes-2' value='Goods'>
      Goods
    </label>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class='control-group'>
  <label class='control-label' for='checkboxes'>What is this</label>
  <div class='controls'>
    <label class='checkbox' for='checkboxes-0'>
      <input type='checkbox' name='checkboxes' id='checkboxes-0' value='Service'>
      Service
    </label>
    <label class='checkbox' for='checkboxes-1'>
      <input type='checkbox' name='checkboxes' id='checkboxes-1' value='Good'>
      Good
    </label>
  </div>
</div>

<!-- File Button --> 
<div class='control-group'>
  <label class='control-label' for='filebutton'>File Button</label>
  <div class='controls'>
    <input id='filebutton' name='filebutton' class='input-file' type='file'>
  </div>
</div>

</fieldset>
</form>
      </div>
    </div>
  </div>
  <div class='accordion-group'>
    <div class='accordion-heading'>
      <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion2' href='#collapseTwo'>
        Create a catagory
      </a>
    </div>
    <div id='collapseTwo' class='accordion-body collapse'>
      <div class='accordion-inner'>
        Catagory options go here
      </div>
    </div>
  </div>
    <div class='accordion-group'>
    <div class='accordion-heading'>
      <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion3' href='#collapseThree'>
        Manage Users
      </a>
    </div>
    <div id='collapseThree' class='accordion-body collapse'>
      <div class='accordion-inner'>";
 include 'read_users.php';
     print " </div>
    </div>
  </div>
    <div class='accordion-group'>
    <div class='accordion-heading'>
      <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion4' href='#collapseFour'>
       Other
      </a>
    </div>
    <div id='collapseFour' class='accordion-body collapse'>
      <div class='accordion-inner'>
       Other
      </div>
    </div>
  </div>
</div>
";


}else {
print $logstring;
}


 ?>
 
  </div>
</div>

</fieldset>
</form>
                    </div>
                </div>
            </div>


<hr/>
 <div class="container">
<div class=" footer">  
<span><a href="./" ><span class="label label-inverse">Home</span></a></span>
<span><a href="http://www.gblearn.com" >GBLearn</a></span>
<span><a href="help.php" >Help</a></span>
</div>     
	</div>
</body>



</html>

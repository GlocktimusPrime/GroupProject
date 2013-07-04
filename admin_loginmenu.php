<!DOCTYPE html><?
						function  includenav(){							
							include 'authnav.php';							}
							?>
<html lang="en">
<head>
	<title>Admin Menu</title>

		<? includenav();?>
			<script type="text/javascript" src="/assets/js/bootstrap-dropdown.js"></script>
	
	
	
	

			
	            <div class="container">
                <div class="row">
                    <div class="span12">

<?php
echo "<div class='well'><legend>Admin Menu Login</legend>



 <form action='admin_logon.php'class='form-horizontal' method='POST'>

<input type='text' name='user'/>
<input type='password' name='password' />
<button type='submit' id='singlebutton' name='submit' value='1' class='btn-large btn-inverse'>Go</button>
</div>			
</br>";


?>

 
  </div>
</div>

            </div>
                </div>
            </div>


<hr/>
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

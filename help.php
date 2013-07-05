<?
if(!isset($_SESSION)) {
     session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin - </title>
							<? include "authnav.php";?>
			<script type="text/javascript" src="/assets/js/bootstrap-dropdown.js"></script>
		</div>
<body>
<?php
admin_help();
function admin_help(){
		if(isset($_SESSION['logged']) && $_SESSION['logged'] == "yes" &&  $_SESSION['isadmin'] = "yes") { 
			print "	            <div class='container'>
                <div class='row'>
                    <div class='span12'>
	<legend>Help</legend><div class=well><p style='color:crimson;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus malesuada est ac ultrices aliquam. Duis quis nulla non magna venenatis dapibus sed in ipsum. Praesent tincidunt, sapien non commodo molestie, dolor sapien pretium libero, blandit adipiscing mi turpis sit amet erat. Praesent porta ante leo, cursus hendrerit nibh molestie vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam non viverra purus. Nullam at eleifend neque. Phasellus eu posuere mauris, quis accumsan massa. Mauris rhoncus gravida nibh eget scelerisque. Quisque in vestibulum neque, a faucibus neque. Praesent facilisis venenatis libero, eget tincidunt velit tempus ut. Nunc pretium, lacus auctor rhoncus gravida, turpis nisl tempus ligula, nec hendrerit dolor libero id nunc. Vestibulum nec auctor dolor. Suspendisse a odio egestas, luctus nisi eget, convallis felis. Donec interdum, nisi at congue consequat, mi nulla hendrerit purus, ut pretium est purus consectetur turpis.
Maecenas lorem mauris, accumsan ut lobortis quis, vulputate eget erat. In et interdum metus. Nulla auctor ante id mi porttitor, et viverra sapien fermentum. Fusce accumsan venenatis diam, sit amet congue nunc tempus non. Nulla iaculis ornare rutrum. Aenean lacinia ut arcu ut pulvinar. Curabitur tempus porttitor ipsum in faucibus. Donec ornare mauris quis blandit dapibus. Suspendisse at justo eu erat pretium convallis.
Praesent sollicitudin ligula a tempus interdum. Vivamus fermentum tellus sem, sit amet mattis felis interdum nec. Donec accumsan velit ac sem facilisis ornare. Praesent elementum leo ligula, ut sodales risus ornare non. Morbi cursus eu justo non gravida. Vestibulum posuere est condimentum, dignissim diam quis, aliquet elit. Fusce congue tellus sit amet enim elementum, quis dignissim ligula convallis. Etiam non orci facilisis, gravida augue ut, dapibus sem. Fusce a nulla commodo, tempus augue at, tempor diam. Mauris sed euismod tellus. Quisque velit metus, fermentum a aliquet quis, malesuada sed lacus. Morbi nec ligula gravida, accumsan leo eget, molestie lacus. Fusce tempus posuere neque in ultrices.
Donec malesuada nulla nec velit dictum ultrices. Sed ac porta tellus. Ut quis fringilla ipsum. Sed vitae tellus ut turpis eleifend tempus. Suspendisse pellentesque ligula mattis, iaculis sem pharetra, adipiscing diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin venenatis diam leo, quis consectetur enim ullamcorper id. Ut metus massa, cursus ac pulvinar vel, sodales in neque. Nam tincidunt lacus sapien, sed gravida nulla hendrerit id.
Duis posuere est tincidunt diam ullamcorper, vel faucibus libero iaculis. Suspendisse ut dignissim nisl, at dignissim arcu. Aenean non vestibulum magna. Phasellus in sapien neque. Vestibulum varius ipsum sed porttitor sagittis. Suspendisse dapibus justo vel enim dignissim congue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent at elit libero. Donec eleifend, purus in sodales mollis, odio lectus tempor nibh, eget convallis eros orci eget nibh. Mauris eget tellus vitae tellus pharetra aliquet vel sit amet augue. Fusce porta tortor a justo dictum, eu dignissim sapien volutpat. Nulla ut placerat lacus. Nulla at dolor justo. Suspendisse adipiscing justo a lectus imperdiet vehicula. Curabitur non tincidunt sapien. Suspendisse eu ipsum pulvinar, tristique nisl ut, rutrum turpis.</p></div></div></div></div>";
}else {print "<div class='container'>
                <div class='row'>
                    <div class='span12'>
<legend>Help</legend><div class=well><p style='color:crimson;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus malesuada est ac ultrices aliquam. Duis quis nulla non magna venenatis dapibus sed in ipsum. Praesent tincidunt, sapien non commodo molestie, dolor sapien pretium libero, blandit adipiscing mi turpis sit amet erat. Praesent porta ante leo, cursus hendrerit nibh molestie vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam non viverra purus. Nullam at eleifend neque. Phasellus eu posuere mauris, quis accumsan massa. Mauris rhoncus gravida nibh eget scelerisque. Quisque in vestibulum neque, a faucibus neque. Praesent facilisis venenatis libero, eget tincidunt velit tempus ut. Nunc pretium, lacus auctor rhoncus gravida, turpis nisl tempus ligula, nec hendrerit dolor libero id nunc. Vestibulum nec auctor dolor. Suspendisse a odio egestas, luctus nisi eget, convallis felis. Donec interdum, nisi at congue consequat, mi nulla hendrerit purus, ut pretium est purus consectetur turpis.
Maecenas lorem mauris, accumsan ut lobortis quis, vulputate eget erat. In et interdum metus. Nulla auctor ante id mi porttitor, et viverra sapien fermentum. Fusce accumsan venenatis diam, sit amet congue nunc tempus non. Nulla iaculis ornare rutrum. Aenean lacinia ut arcu ut pulvinar. Curabitur tempus porttitor ipsum in faucibus. Donec ornare mauris quis blandit dapibus. Suspendisse at justo eu erat pretium convallis.
Praesent sollicitudin ligula a tempus interdum. Vivamus fermentum tellus sem, sit amet mattis felis interdum nec. Donec accumsan velit ac sem facilisis ornare. Praesent elementum leo ligula, ut sodales risus ornare non. Morbi cursus eu justo non gravida. Vestibulum posuere est condimentum, dignissim diam quis, aliquet elit. Fusce congue tellus sit amet enim elementum, quis dignissim ligula convallis. Etiam non orci facilisis, gravida augue ut, dapibus sem. Fusce a nulla commodo, tempus augue at, tempor diam. Mauris sed euismod tellus. Quisque velit metus, fermentum a aliquet quis, malesuada sed lacus. Morbi nec ligula gravida, accumsan leo eget, molestie lacus. Fusce tempus posuere neque in ultrices.
Donec malesuada nulla nec velit dictum ultrices. Sed ac porta tellus. Ut quis fringilla ipsum. Sed vitae tellus ut turpis eleifend tempus. Suspendisse pellentesque ligula mattis, iaculis sem pharetra, adipiscing diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin venenatis diam leo, quis consectetur enim ullamcorper id. Ut metus massa, cursus ac pulvinar vel, sodales in neque. Nam tincidunt lacus sapien, sed gravida nulla hendrerit id.
Duis posuere est tincidunt diam ullamcorper, vel faucibus libero iaculis. Suspendisse ut dignissim nisl, at dignissim arcu. Aenean non vestibulum magna. Phasellus in sapien neque. Vestibulum varius ipsum sed porttitor sagittis. Suspendisse dapibus justo vel enim dignissim congue. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent at elit libero. Donec eleifend, purus in sodales mollis, odio lectus tempor nibh, eget convallis eros orci eget nibh. Mauris eget tellus vitae tellus pharetra aliquet vel sit amet augue. Fusce porta tortor a justo dictum, eu dignissim sapien volutpat. Nulla ut placerat lacus. Nulla at dolor justo. Suspendisse adipiscing justo a lectus imperdiet vehicula. Curabitur non tincidunt sapien. Suspendisse eu ipsum pulvinar, tristique nisl ut, rutrum turpis.</p></div>
<div class=well>
Help here 
</div></div></div></div>";}
}
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
	<?  	
	global $brandinginfo;
	function branding(){
	global $brandinginfo;
	$file = file_get_contents('../branding.config', true);
	
	$brandinginfo = explode("::", $file);
	}
	branding();
	echo "<link rel='icon' 
      type='image/png' 
      href='img/favicon.ico'>
	<link rel='stylesheet' type='text/css' href='../css/bootstrap.css'/>
	<link rel='stylesheet' type='text/css' href='../css/fam-icons.css' />

  <script src='../js/jquery-1.10.0.js'></script>
  <script src='../js/bootstrap.js'></script>

	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>
	<script src='js/bootstrap.js'></script>
	
	
</head>
<body>
	<div class='container'>
		<div class='row'>
			<div class='span12'>
				

		<div class='page-header'>
 <h1>$brandinginfo[0] <small>$brandinginfo[1]</small></h1>
</div>
</style>";
	   if (strlen(session_id()) < 1) {
		session_start();
	}
	$destination = "..";
		if(isset($_SESSION['logged']) && $_SESSION['logged'] == "yes") { 
			print "	</div></div><div class='navbar navbar-inverse'>
					<div class='navbar-inner'>
						<ul class='nav pull-center'>
							<li><a href=$destination/>Home</a></li>
								<li><a href='$destination/view_items.php'>View Listings</a></li>
				<li><a href='$destination/user_createlisting.php'>Add Listing</a></li>
			<li class=divider-vertical><a>Logged in as: " .  $_SESSION['username'] . " </a></li>			
								<li><a href='$destination/logout.php'>Logout</a>		</li>"; if(isset( $_SESSION["isadmin"]) == "yes"){echo"	<li><a href='$destination/admin_logon.php'>Admin</a></li>";}else		{		echo"	<li><a href='user_cp.php'>User CP</a></li>";} echo"
</ul>			
			<ul class='nav pull-right'>
						<li><form class='navbar-search'>
																						
																						<div class='input-prepend'>
											  <span class='add-on'><i class='icon-search'></i></span>
												<input type='text' class='span2' placeholder='Search'>
											
										</div>
											</form> 
											</li>
											</ul>
											
									
	
					</div></div>
		
						
															
										
										
									
											
	 ";
			} 
		else { 
			print "	</div></div>	<div class='navbar navbar-inverse'>
					<div class='navbar-inner'>
						
						<ul class='nav pull-center'>
							<li><a href='$destination/'>Home</a></li>
				<li><a href='$destination/view_items.php'>View Listings</a></li>
			<li><a href='$destination/user_login.php'>Login</a></li><li><a href='register.php'>Register</a></li></ul>
						
						<ul class='nav pull-right'>
						<li><form class='navbar-search'>
																						
																						<div class='input-prepend'>
											  <span class='add-on'><i class='icon-search'></i></span>
												<input type='text' class='span2' placeholder='Search'>
											
										</div>
											</form> 
											</li>
											</ul>
									


</div></div>
	
											"; 
		}
		?>
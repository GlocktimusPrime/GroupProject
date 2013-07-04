	<?  
	include 'dropdown_cata.php';
	global $brandinginfo;
	function branding(){
	global $brandinginfo;		
	$file = file_get_contents('./branding.config');
	
	$brandinginfo = explode('::', $file);
	}
	branding();
	echo "<link rel='icon' 
      type='image/png' 
      href='img/favicon.ico'>
	<link rel='stylesheet' type='text/css' href='css/bootstrap.css'/>
	<link rel='stylesheet' type='text/css' href='css/fam-icons.css' />
	<Style>.testing{
  width: auto;

  }
.container1 {
    text-align: center;
}
.containerdrop {
background: rgb(254,204,177); /* Old browsers */
background: -moz-linear-gradient(top, rgba(254,204,177,1) 0%, rgba(241,116,50,1) 50%, rgba(234,85,7,1) 51%, rgba(251,149,94,1) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(254,204,177,1)), color-stop(50%,rgba(241,116,50,1)), color-stop(51%,rgba(234,85,7,1)), color-stop(100%,rgba(251,149,94,1))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, rgba(254,204,177,1) 0%,rgba(241,116,50,1) 50%,rgba(234,85,7,1) 51%,rgba(251,149,94,1) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, rgba(254,204,177,1) 0%,rgba(241,116,50,1) 50%,rgba(234,85,7,1) 51%,rgba(251,149,94,1) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, rgba(254,204,177,1) 0%,rgba(241,116,50,1) 50%,rgba(234,85,7,1) 51%,rgba(251,149,94,1) 100%); /* IE10+ */
background: linear-gradient(to bottom, rgba(254,204,177,1) 0%,rgba(241,116,50,1) 50%,rgba(234,85,7,1) 51%,rgba(251,149,94,1) 100%); /* W3C */

}
.navbar {
	
    display: block;
text-align:center;
   width: 98%;
padding-left:1%;
}.navbar-inner {
    display: block;

}}</style>
  <script src='js/jquery-1.10.0.js'></script>
  <script src='bootstrap.js'></script>

	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>
	<script src='js/bootstrap.js'></script>
	
	
</head>
<body>
	<div class='container'>
		<div class='row'>
			<div class=testing>
				

		<div class='page-header'>
 <h1>$brandinginfo[0] <small>$brandinginfo[1]</small></h1>
</div>
</style>";

		if(isset($_SESSION['logged']) && $_SESSION['logged'] == 'yes') { 
			echo "</div></div></div><div class='navbar navbar-inverse'>
					<div class='navbar-inner '>
						<ul class='nav pull-center'>
							<li><a href='./'><i class='fam-door'></i> Home</a></li>					
 	";
	dropdowncata();
echo "					
							<li><a href='view_items.php'><i class='fam-layout-content'></i>View Listings</a></li>
				<li><a href='user_createlisting.php'><i class='fam-layout-edit'></i>Add Listing</a></li>
			<li><a><i class='fam-connect'></i>Logged in as: " .  $_SESSION['username'] . " </a></li>			
								<li><a href='logout.php'><i class='fam-disconnect'></i>Logout</a>		</li>";
								if(isset( $_SESSION['isadmin']) == 'yes'){echo"	<li><a href='admin_logon.php'><i class='fam-shield'></i>Admin</a></li>";}else		{		echo"	<li><a href='user_cp.php'>User CP</a></li>";} echo"
	
	
								</ul>										
																						
											<form  class='navbar-form pull-right' method='get' action='search.php'>
												<input name='searchterms' type='text' placeholder='Search'>	
											</form>	
					</div></div>														
	 ";
			} 
		else {print "</div></div><div class='navbar navbar-inverse'>
					<div class='navbar-inner'>
						<ul class='nav'>
							<li><a href='./'><i class='fam-door'></i> Home</a></li>
 	";
	dropdowncata();
echo "<li><a href='view_items.php'><i class='fam-layout-content'></i>View Listings</a></li>
			<li><a href='user_login.php'><i class='fam-key-go'></i>Login</a></li><li><a href='register.php'><i class='fam-pencil-add'></i>Register</a></li>	
													</ul>																												
											<form  class='navbar-form pull-right' method='get' action='search.php'>
												<input name='searchterms' type='text' placeholder='Search'>													
											</form> 
</div></div>"; }
		?>
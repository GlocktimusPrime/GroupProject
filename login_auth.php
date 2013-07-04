
<?  
    session_start(); #start session
    if(isset($_SESSION['logged']) && $_SESSION['logged'] == yes) { 
		# DO NOTHING 
        } 
    else { 
        print 'You must be logged in to view this page'; 
    } 
?>
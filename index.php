<? if(!isset($_SESSION)) {
     session_start();
}
include 'title.php';

include 'make_listing.php';
$string1 = "Barter Brothers";	

$items = listingstoarray(" ");
$t = 0;
$j =0;
$test2 = "";
foreach($items as $item) {


	
$fp3 = fopen("listingdata/$item", 'r');
if ($fp3) {
   $array = explode("::", fread($fp3, filesize("listingdata/$item")));
   $titlestring = substr($array[1], 0, 25);
  
$desstring = substr($array[2], 0, 255) . "</br>";
$seller = substr($array[5], 0, 25);
$picstring = $array[7];

$listingstring = preg_replace("'\.txt$'", "", $item);
$listingnumber = trim($listingstring , "Listing Number;");
$itemcata = trim($array[8], ";; ");
if (preg_match("/$itemcata\b/i", "$test2") == false) {
   $test5 = "        <div class='thumbnail'>	<div align=center class=logo>
				<img src=$picstring' alt='ad pic'></img>
                 
				 </div>
                  <div class='caption'>
                    <h3>$titlestring</h3></div>
					<h5>Listing ID: $listingnumber</h5>
                    <p>Seller: <div align=center class=well>$array[5]</div></p>
					 <p>Description: <div align=center class='well'>$desstring</div></br></p>
					<p>Perceived Cash Value:<div align=center class=well> <i class='fam-money'></i> $$array[4]</div> </p>
					
					
				
						<p>Will accept:<div align=center class=well>$array[3]</div> </p>";
					echo"<script>	 var jsvar = <?= json_encode($test5) ?></script>";
   
	$j++;
	
} else {
if ($t<1) {
$t++;
#echo "<div class='well'>No listings in this directory.</div>";
}
}


}


}


					?>

<!DOCTYPE html>	 				
<html lang="en">
<head>
	<title><?php echo $string1; ?></title>	
						<?php
		include 'authnav.php';			
				?>		
		</head>
								

          
	            <div class="container" style='margin : auto; text-align: center'>
                <div class="row" style='margin : auto; text-align: center'>
                 
              <div class="well" style='margin : auto; text-align: center'>
                                      <h1>Listings</h1>
                            </div> 
                            <div style='width : auto;'><br>
  <div class="span10" style='width : auto;'>
                <?php
		
$items = readlisting();
foreach($items as $item) {
			$fp3 = fopen("listingdata/$item", 'r');
if ($fp3) {
   $array = explode("::", fread($fp3, filesize("listingdata/$item")));
}
for($o=0; $o<count($array); $o++){
#echo $array[$o];
}
}

					?>     </div>
 
</div>                         </div>    </div>
                              
                            
                      
                        
          
            


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

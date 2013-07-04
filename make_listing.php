<script language="javascript"> 
function toggle() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "show";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "hide";
	}
} 
</script>
<?php
	function listingstoarray($test2){

	$t = 0;
if ($dir = opendir('listingdata/')) {
	$items = array();
	while (false !== ($file = readdir($dir))) {
		if ($file != "." && $file != "..") {
			$items[] = $file; 
		}
	}
	closedir($dir);
}

		
return $items;
			  }
	
	
	
function addlisting(){
$allowedExts = array("gif", "jpeg", "jpg", "png");
$extension = end(explode(".", $_FILES["uploadedfile"]["name"]));
if ((($_FILES["uploadedfile"]["type"] == "image/gif")
|| ($_FILES["uploadedfile"]["type"] == "image/jpeg")
|| ($_FILES["uploadedfile"]["type"] == "image/jpg")
|| ($_FILES["uploadedfile"]["type"] == "image/pjpeg")
|| ($_FILES["uploadedfile"]["type"] == "image/x-png")
|| ($_FILES["uploadedfile"]["size"] < 20000))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["uploadedfile"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["uploadedfile"]["error"] . "<br>";
    }
  else
    {

    if (file_exists("userimg/" . $_FILES["uploadedfile"]["name"]))
      {
      echo $_FILES["uploadedfile"]["name"] . " already exists. Using default img ";
	   $itemimg = "::" . "http://placehold.it/350x150";
      }
    else
      {
      move_uploaded_file($_FILES["uploadedfile"]["tmp_name"],
      "userimg/". $_SESSION['username']. $_FILES["uploadedfile"]["name"]);
      echo "Stored in: " .  "userimg/". $_SESSION['username'] . $_FILES["uploadedfile"]["name"];
	   $itemimg = "::userimg/" .$_SESSION['username'] . $_FILES['uploadedfile']["name"];	
      }
    }
  }
else
  {
  echo "Invalid file";
  $itemimg = "::" . "http://placehold.it/350x150";
  }
	
	
 $uid = uniqid("", false);
    if(isset($_POST['itemtitle']) && ($_POST['itemdesc'])) { //only do file operations when appropriate
        $itemtitle = $_POST['itemtitle'];
		$itemdesc = $_POST['itemdesc'];
		$itemcata = $_POST['Category'];
		$seller = $_SESSION['username'];
		$itemprice = $_POST['price'];
	
	
		$itemaccept = "";
		if (isset($_POST['accept'])==true){
		 foreach($_POST['accept'] as $accept) {
			$itemaccept .=  $accept. "," ;
    }
	}
	}
		$listinginfo = "::$itemtitle" . "\n" . "::$itemdesc" .  "\n" . "::$itemaccept" . "\n" . "::$itemprice" . "\n" . "::$seller" ."\n"."::$itemimg"."\n". "::$itemcata" .  ";;";
        $listingFile = "listingdata/$uid.txt";
        $fh = fopen($listingFile, 'a+') or die("Write error");
        fwrite($fh, $listinginfo);
        fclose($fh);
    }
	
function readcata(){
$handle = opendir("catadata/");
$names = array();
while($name = readdir($handle)) {
    $names[] = $name;
}
closedir($handle);
sort($names);
$i = 2;
$r = 2;
  $listings = "";
unset($names[0]);
unset($names[1]);

foreach($names as $name){

$cataname = str_replace(".txt","::", "$name");
$catastring = trim($cataname, "::");
$hiddenname =   trim($name, ".txt");
echo "<form name=myform action=view_items.php method='POST'><button type=submit class='btn btn-link'><i class=fam-table-sort></i> $catastring</button><input type='hidden' name='catchoice' value='$hiddenname'></form>";
$fp = fopen("catadata/$names[$i]", 'r');
$i++;
$r++;
if ($fp) {
   $array = explode("::", fread($fp, filesize("catadata/$name")));
 foreach($array as $arrays){
  $listings = $listings . $arrays;
 }


}
}
$arrayoflistings = explode(";;", $listings);
$l = 0;
$listing = explode("::",$arrayoflistings[0]);

foreach($arrayoflistings as $list){
$item = explode("\n", $list);


}
			  }


function readlisting4($test2){

	$t = 0;
if ($dir = opendir('listingdata/')) {
	$items = array();
	while (false !== ($file = readdir($dir))) {
		if ($file != "." && $file != "..") {
			$items[] = $file; 
		}
	}
	closedir($dir);
}
foreach($items as $item) {

$fp3 = fopen("listingdata/$item", 'r');
if ($fp3) {
   $array = explode("::", fread($fp3, filesize("listingdata/$item")));
   $titlestring = substr($array[1], 0, 25);
  
$desstring = substr($array[2], 0, 5000) . "</br>";
$seller = substr($array[5], 0, 25);
$picstring = $array[7];

$listingstring = preg_replace("'\.txt$'", "", $item);
$listingnumber = trim($listingstring , "Listing Number;");
$itemcata = trim($array[8], ";; ");
if (stristr($desstring,$test2) !== false || stristr($titlestring,$test2) !== false || stristr($seller,$test2) !== false || stristr($itemcata,$test2) !== false || strpos($array[4],$test2) !== false) {

	$t=1;
   echo " <style>
.logo { max-height: 150px; max-width: 300px; overflow: hidden; }</style>
<div class='container'>
	<div class='hero-unit'>
		<img style='max-height: 300px; max-width: 600px' src='$picstring'>
		<h1>
			$titlestring
		</h1><hr>For sale by:	<span class='badge'>$seller</span></br>
Description:<pre>$desstring</pre></br>
	
		<span class='label'>Transaction Information</span>
			<div class='row-fluid'>
			<div class='span4'>
				<h3>
					Price:
				</h3>
				<p>
				<i class='fam-money'></i> $$array[4]
				</p>
			</div>
			<div class='span4'>
				<h3>
					Will Accept:
				</h3>
				<p>
					$array[3]
				</p>
			</div>
			<div class='span4'>
				<h3>
Listing ID:
				</h3>
				<p>
					$listingstring
				</p>
			</div>
		</div>
	</div>
	</div>
</div>";
         

					
				
				
        
             
			  
 }}
}




echo "</ul>";
		

			  }
function readlisting3($test2){

	$t = 0;
if ($dir = opendir('listingdata/')) {
	$items = array();
	while (false !== ($file = readdir($dir))) {
		if ($file != "." && $file != "..") {
			$items[] = $file; 
		}
	}
	closedir($dir);
}
foreach($items as $item) {

$fp3 = fopen("listingdata/$item", 'r');
if ($fp3) {
   $array = explode("::", fread($fp3, filesize("listingdata/$item")));
   $titlestring = substr($array[1], 0, 25);
  
$desstring = substr($array[2], 0, 5000) . "</br>";
$seller = substr($array[5], 0, 25);
$picstring = $array[7];

$listingstring = preg_replace("'\.txt$'", "", $item);
$listingnumber = trim($listingstring , "Listing Number;");
$itemcata = trim($array[8], ";; ");
if (preg_match("/$listingnumber\b/i", "$test2")) {
	$t=1;
   echo " <style>
.logo { max-height: 150px; max-width: 300px; overflow: hidden; }</style>
<div class='container'>
	<div class='hero-unit'>
		<img style='max-height: 300px; max-width: 600px' src='$picstring'>
		<h1>
			$titlestring
		</h1><hr>For sale by:	<span class='badge'>$seller</span></br>
Description:<pre>$desstring</pre></br>
	
		<span class='label'>Transaction Information</span>
			<div class='row-fluid'>
			<div class='span4'>
				<h3>
					Price:
				</h3>
				<p>
				<i class='fam-money'></i> $$array[4]
				</p>
			</div>
			<div class='span4'>
				<h3>
					Will Accept:
				</h3>
				<p>
					$array[3]
				</p>
			</div>
			<div class='span4'>
				<h3>
Listing ID:
				</h3>
				<p>
					$listingstring
				</p>
			</div>
		</div>
	</div>
	</div>
</div>";
         

					
				
				
        
             
			  
} else {
if ($t<1) {
$t++;
    echo "";
}
}


}

}
echo "</ul>";
		

			  }
function readlisting2($test2){

	$t = 0;
if ($dir = opendir('listingdata/')) {
	$items = array();
	while (false !== ($file = readdir($dir))) {
		if ($file != "." && $file != "..") {
			$items[] = $file; 
		}
	}
	closedir($dir);
}
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
if (preg_match("/$itemcata\b/i", "$test2")) {
	$t++;
   echo " <style>
.logo { max-height: 150px; max-width: 300px; overflow: hidden; }</style>
             <li class='span3'>
		
                <div class='thumbnail'>	<div align=center class=logo>
				<img src=$picstring' alt='ad pic'></img>
                 
				 </div>
                  <div class='caption'>
                    <h3>$titlestring</h3>
					<h5>Listing ID: $listingnumber</h5>
                    <p>Seller: <div align=center class=well>$array[5]</div></p>
					 <p>Description: <div align=center class='well'>$desstring</div></br></p>
					<p>Perceived Cash Value:<div align=center class=well> <i class='fam-money'></i> $$array[4]</div> </p>
					
					
				
						<p>Will accept:<div align=center class=well>$array[3]</div> </p>

						 <script src='bootbox.min.js'></script>
    <script>
        $(document).on('click', '.alert', function(e) {
            bootbox.alert('Hello world!', function() {
                console.log('Alert Callback');
            });
        });
    </script>
				
        
                  </div>
                
</li>";
	
} else {
if ($t<1) {
$t++;
    echo "";
}
}


}

}
echo "</ul>";
		

			  }
	function readlisting(){
		$q=0;
if ($dir = opendir('listingdata/')) {
	$items = array();
	while (false !== ($file = readdir($dir))) {
		if ($file != "." && $file != "..") {
			$items[] = $file; 
		}
	}
	closedir($dir);
}  $arrays =  array();
foreach($items as $item) {

$fp3 = fopen("listingdata/$item", 'r');
if ($fp3) {
   $array = explode("::", fread($fp3, filesize("listingdata/$item")));
   $titlestring = substr($array[1], 0, 25);
 
   $arrays = $items;

$desstring = substr($array[2], 0, 255) . "</br>";
$popdesstring = substr($array[2], 0, 5000) . "</br>";
$seller = substr($array[5], 0, 25);
$picstring = $array[7];

$listingstring = preg_replace("'\.txt$'", "", $item);
$listingnumber = trim($listingstring , "Listing Number;");
echo " <style>
.logo { margin-left:auto; margin-right:auto; center; max-height: 150px; max-width: 300px; overflow: hidden; }</style>
             <li id='toggleText' class='span3'>
		
                <div class='thumbnail'>	<div align=center class=logo>
				<img src=$picstring' alt='ad pic'></img>
                 
				 </div>
                  <div class='caption'>
                    <h3>$titlestring</h3>
					<h5>Listing ID: $listingnumber</h5>
                    <p>Seller: <div align=center class=well>$array[5]</div></p>
					 <p>Description: <div align=center class='well'>$desstring</div></br></p>
					<p>Perceived Cash Value:<div align=center class=well> <i class='fam-money'></i> $$array[4]</div> </p>
						<p>Will accept:<div align=center class=well>$array[3]</div> </p>					
	<form action='view_item.php' method='get'>
<input type='hidden' value='$listingnumber' name='showid'>
             <p><a href='#' class='btn btn-primary'>Offer</a> <button type='submit' class='btn btn-info'>Info</button> <a id='displayText' href='javascript:toggle();' class='btn'><i  class='icon-remove'></i></a></p>
                  </div>
                </form>";
#below is the info that pops up with bootbox
					 $popupinfo[$q] = "  <div>    <div class='thumbnail'>	<div align=center class=logo>
				<img src=$picstring' alt='ad pic'></img>
                 
				 </div>
                  <div class='caption'>
                    <h3>$titlestring</h3>
					<h5>Listing ID: $listingnumber</h5>
                    <p>Seller: <div align=center class=well>$array[5]</div></p>
					 <p>Description: <div align=center class='well'>$popdesstring</div></br></p>
					<p>Perceived Cash Value:<div align=center class=well> <i class='fam-money'></i> $$array[4]</div> </p>
						<p>Will accept:<div align=center class=well>$array[3]</div> </p></div>
				
		
			"; 			
						
						
			?>
			<?php  echo"
	
</li>";$q++;
			  

}

}

	echo "</ul>";	
  return $arrays;
			  }
	
	
	
	?>
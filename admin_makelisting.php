<?php
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
  {if ($_FILES["uploadedfile"]["error"] > 0)
    {echo "Return Code: " . $_FILES["uploadedfile"]["error"] . "<br>";}
  else {echo "Upload: " . $_FILES["uploadedfile"]["name"] . "<br>";
    echo "Type: " . $_FILES["uploadedfile"]["type"] . "<br>";
    echo "Size: " . ($_FILES["uploadedfile"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["uploadedfile"]["tmp_name"] . "<br>";
    if (file_exists("userimg/" . $_FILES["uploadedfile"]["name"]))
      {echo $_FILES["uploadedfile"]["name"] . " already exists. ";}else{
      move_uploaded_file($_FILES["uploadedfile"]["tmp_name"],
      "userimg/". $_SESSION['user']. $_FILES["uploadedfile"]["name"]);
      echo "Stored in: " .  "userimg/". $_SESSION['user'] . $_FILES["uploadedfile"]["name"];
	   $itemimg = "::userimg/" .$_SESSION['user'] . $_FILES['uploadedfile']["name"];	
      }
    }
  }
else
  {
  echo "Invalid file";
  $itemimg = "::" . "http://placehold.it/350x150";
  }
 $uid = uniqid("Listing Number;", false);
    if(isset($_POST['itemtitle']) && ($_POST['itemdesc'])) { //only do file operations when appropriate
        $itemtitle = $_POST['itemtitle'];
		$itemdesc = $_POST['itemdesc'];
		$seller = $_SESSION['user'];
		$itemprice = $_POST['price'];	
		$itemaccept = "";
		if (isset($_POST['accept'])==true){
		 foreach($_POST['accept'] as $accept) {
			$itemaccept .=  $accept. "," ;
    }}}
		$listinginfo = "::$itemtitle" . "\n" . "::$itemdesc" .  "\n" . "::$itemaccept" . "\n" . "::$itemprice" . "\n" . "::$seller" ."\n"."$itemimg" . ";;";
        $listingFile = "listingdata/$uid.txt";
        $fh = fopen($listingFile, 'a+') or die("Write error");
        fwrite($fh, $listinginfo);
        fclose($fh);}	
	function readlisting(){
$handle = opendir("listingdata/");
$names = array();
while($name = readdir($handle)) {
    $names[] = $name;}
closedir($handle);
sort($names);
$i = 2;
$listings = "";
unset($names[0]);
unset($names[1]);
foreach($names as $name){
$fp = fopen("listingdata/$names[$i]", 'r');
$i++;
if ($fp) {
   $array = explode("::", fread($fp, filesize("listingdata/$name")));
 foreach($array as $arrays){
  $listings = $listings . $arrays;
 }}}
$arrayoflistings = explode(";;", $listings);
$listing = explode("::",$arrayoflistings[0]);
foreach($arrayoflistings as $list){
$item = explode("\n", $list);
if (isset($item[3])==true){
$titlestring = substr($item[0], 0, 25);
$desstring = substr($item[1], 0, 255);
$seller = substr($item[4], 0, 25);
$picstring = $item[5];
$listingstring = trim($name, ".txt");
$listingnumber = trim($listingstring , "Listing Number;");
echo " <div class='row-fluid'><style>
.logo { max-height: 150px; max-width: 300px; overflow: hidden; }</style>
            <ul class='thumbnails'>   <li class='span4'>
                <div class='thumbnail'>	<div align=center class=logo>
				<img src='$picstring' alt='ad pic'></img>
				 </div>
                  <div class='caption'>
                    <h3>$titlestring</h3>
					<h5>Listing ID: $listingnumber</h5>
                    <p>Seller: <div align=center class=well>$seller</div></p>
					 <p>Description: <div align=center class=well>$desstring</div></p>
					<p>Perceived Cash Value:<div align=center class=well> <i class='fam-money'></i> $$item[3]</div> </p>
						<p>Will accept:<div align=center class=well>$item[2]</div> </p>
             <p><a href='#' class='btn btn-primary'>Offer</a> <a href='#' class='btn btn-info'>Info</a> <a href='#' class='btn'><i class='icon-remove'></i></a></p>
                  </div>
                </div>
              </li>";}}}?>
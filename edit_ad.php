<? if(!isset($_SESSION)) {
     session_start();
}
include 'make_listing.php';
$string1 = "Brand";	
include 'title.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $string1; ?></title>	
<?php
		include 'authnav.php';			
?>
</head>
<body>
		<? if(isset($_POST['idtoedit'])){
						$id = $_POST['idtoedit'];
				$info =	file_get_contents("listingdata/$id");
$infoarray = explode("::", $info);}?>		
	            <div class="container">
                <div class="row">
                    <div class="well"><h1>Edit:</h1>				
						<form action='edit_ad.php' class="form-horizontal" enctype="multipart/form-data" method='POST'>
							<input type='hidden' name='idtoeditsubmit' value='<?echo $id;?>'/>
<div class="control-group">
  <label class="control-label" for="itemtitle">Item <i class="fam-pencil"></i></label>
  <div class="controls">
    <input id="itemtitle" name="itemtitle" type="text" value="<?echo $infoarray[1];?>" class="input-large" required="">
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="itemdesc">Description <i class="fam-pencil"></i></label>
  <div class="controls">                     
    <textarea id="itemdesc" name="itemdesc" required=""><?echo $infoarray[2];?></textarea>
  </div>
</div>
<?
function readcata2(){
$handle = opendir("catadata/");
$names = array();
while($name = readdir($handle)) {
    $names[] = $name;
}
closedir($handle);
sort($names);
$i = 2;
  $listings = "";
unset($names[0]);
unset($names[1]);
foreach($names as $name){
$cataname = str_replace(".txt","::", "$name");
$catastring = trim($cataname, "::");
echo "<option>$catastring</option>";
}
}
?>
<div class="control-group">
  <label class="control-label" for="Category">Category</label>
  <div class="controls">
    <select id="Category" name="Category" class="input-large" >
	<? readcata2()?>
    </select>
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="accept">What would you accept?</label>
  <div class="controls">
    <label class="checkbox" for="accept-0">
      <input type="checkbox" name="accept[]" id="checkbox-0" value="<i class='fam-money'></i> &nbsp;" >
      Cash <i class="fam-money"></i>
    </label>
    <label class="checkbox" for="accept-1">
      <input type="checkbox" name="accept[]" id="checkbox-1" value=" <i class='fam-package'></i> &nbsp;">
      Goods <i class="fam-package-green"></i>
    </label>
    <label class="checkbox" for="accept-2">
      <input type="checkbox" name="accept[]" id="checkbox-2" value="<i class='fam-ruby'></i>&nbsp;">
      Services <i class="fam-user-suit"></i>
    </label>
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="price">Perceived Value <i class="fam-pencil"></i></label>
  <div class="controls">
    <div class="input-prepend">
      <span class="add-on"><i class="fam-coins"></i></span>
      <input id="price" name="price" class="input-xlarge" placeholder="<?echo $infoarray[4];?>" required="" type="number">
    </div> 
  </div>
</div>
<div class="control-group">
  <label class="control-label" for="file">Image</label>
  <div class="controls">
<input name="uploadedfile" type="file" />
  </div>
</div>
<button type='submit' id='singlebutton' name='submit' value='1' class='btn-large btn-inverse'>Submit</button>
</form>
<?php if(isset($_POST['submit'])){
	$id2 =$_POST['idtoeditsubmit'];
  if(isset($_POST['itemtitle']) && ($_POST['itemdesc'])) { //only do file operations when appropriate 
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
    }
  else
    {

    if (file_exists("userimg/" . $_FILES["uploadedfile"]["name"]))
      {
	   $itemimg = "::" . "http://placehold.it/350x150";
      }
    else
      {
      move_uploaded_file($_FILES["uploadedfile"]["tmp_name"],
      "userimg/". $_SESSION['username']. $_FILES["uploadedfile"]["name"]);
	   $itemimg = "::userimg/" .$_SESSION['username'] . $_FILES['uploadedfile']["name"];	
      }
    }
  }
else
  {
  echo "Invalid file";
  $itemimg = "::" . "http://placehold.it/350x150";
  } 
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
        $listingFile = "listingdata/$id2";
		file_put_contents($listingFile, $listinginfo);
		 }
?>
</div></div></div>
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
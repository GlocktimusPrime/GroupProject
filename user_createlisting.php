<? if(!isset($_SESSION)) {
     session_start();
}?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>User - Add Listing</title>
<? include 'authnav.php';?>
<script type="text/javascript" src="/assets/js/bootstrap-dropdown.js"></script>
</div>
<style>textarea{ 
  width: 400px; 
  min-width:200px; 
  max-width:600px; 

  height:200px; 
  min-height:200px;  
  max-height:2000px;
}
</style>
<body>
<div class="container">
<div class="row">
<div class="span12">
<!-- Form Name -->
<legend>Add Item</legend><div class=well><p style="font-weight:bold;">Welcome, this is the form for entering listings. </br>If a form has an icon like this: <i class="fam-pencil"></i> it is required to submit. </p></br>
 <form action='user_createlisting.php' class="form-horizontal" enctype="multipart/form-data" method='POST'>
<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="itemtitle">Item <i class="fam-pencil"></i></label>
  <div class="controls">
    <input id="itemtitle" name="itemtitle" type="text" placeholder="" class="input-large" required="">
  </div>
</div>
<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="itemdesc">Description <i class="fam-pencil"></i></label>
  <div class="controls">                     
    <textarea id="itemdesc" name="itemdesc" required=""></textarea>
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
$r = 2;
  $listings = "";
unset($names[0]);
unset($names[1]);
foreach($names as $name){
$cataname = str_replace(".txt","::", "$name");
$catastring = trim($cataname, "::");
echo "<option>$catastring</option>";
}}
?>
<!-- Select Multiple -->
<div class="control-group">
  <label class="control-label" for="Category">Category</label>
  <div class="controls">
    <select id="Category" name="Category" class="input-large" >
	<? readcata2()?>
    </select>
  </div>
</div>
<!-- Multiple Checkboxes -->
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
<!-- Prepended text-->
<div class="control-group">
  <label class="control-label" for="price">Perceived Value <i class="fam-pencil"></i></label>
  <div class="controls">
    <div class="input-prepend">
      <span class="add-on"><i class="fam-coins"></i></span>
      <input id="price" name="price" class="input-xlarge" placeholder="" required="" type="number">
    </div>   
  </div>
</div>
<!-- File Button --> 
<div class="control-group">
  <label class="control-label" for="file">Image</label>
  <div class="controls">
  <input name="uploadedfile" type="file" />
  </div>
</div>
<!-- Button -->
<button type='submit' id='singlebutton' name='submit' value='1' class='btn-large btn-inverse'>Submit</button>
</form>
</div></div></div></div><hr/>
<div class="container">
<div class=" footer"> 
<span><a href="" ><span class="label label-inverse">Home</span></a></span>
<span><a href="help.php" >Help</a></span>
<span>
<?php
include('footer.php');
?>
</span> 	
</div></div>
</body>
</html>
<?php
if(isset($_REQUEST['submit'])) {
include 'make_listing.php';
addlisting();
		}
?>
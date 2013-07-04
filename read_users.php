<?php

//path to directory to scan
$directory = "userdata/";

//get all text files with a .txt extension.
$texts = glob($directory . "*.user");

//print each file name
foreach($texts as $text)
{

$filename = "$text";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
$users = explode("\n", $contents);
echo  "<div class='btn-group'>  
  <label class='control-label' for='button1id'>$users[0]:</label>
  <div class='controls'>

    <button id='button1id' name='button1id' class='btn btn-info'>Edit</button> 

    <button id='button2id' name='button2id' class='btn btn-danger'>Delete</button>
  </div>
</div></br>";
fclose($handle);
 
}
?>
<?

function dropdowncata(){
$handle = opendir('catadata/');
$names = array();
while($name = readdir($handle)) {
    $names[] = $name;
}
closedir($handle);
sort($names);
$i = 2;
$r = 2;
  $listings = '';
unset($names[0]);
unset($names[1]);

echo"
<li>
  <a data-toggle='dropdown' href='#'>
   <i class='fam-application-view-gallery'></i> Categories
  </a>
  <ul class='containerdrop dropdown-menu'><div class='container1' >";



foreach($names as $name){

$cataname = str_replace(".txt","::", "$name");
$catastring = trim($cataname, "::");
#give it to catchoice post
echo "<li><form name=myform action=view_items.php method='POST'><button tabindex='-1'  type=submit class='btn btn-info btn-small'><i class='fam-folder-go'></i> $catastring</button><input type='hidden' name='catchoice' value='$catastring'></form></li>
";
 
}
echo "</div></ul>";
echo "</li>";

}
?>
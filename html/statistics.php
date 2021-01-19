<?php
// Comment the following line to enable the statistics about the usage of this website.
//exit;

$path = '../data';
$bytestotal = 0;
$path = realpath($path);
if($path!==false && $path!='' && file_exists($path)){
  foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS)) as $object){
    $bytestotal += $object->getSize();
  }
}
$bytestotal = $bytestotal/1000000;

echo "Usage: $bytestotal MB<br>";
echo 'Unique: '.file_get_contents("../unique", true).'<br>';
echo 'New: '.file_get_contents("../new", true).'<br>';
echo 'Open: '.file_get_contents("../open", true).'<br>';
echo 'Append: '.file_get_contents("../append", true).'<br>';
echo 'Wipe: '.file_get_contents("../wipe", true).'<br>';
echo 'Destroy: '.file_get_contents("../destroy", true).'<br>';
?>

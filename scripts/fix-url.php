<?php
/** Remove non-english chars from filename **/

//glob markdown files
$files = glob('content/posts/*.md');
foreach($files as $file) {
  $base = basename($file);
  $cleanfile = preg_replace('/[^\00-\255]+/u', '', $file);

  if($file != $cleanfile){
    var_dump($file);
    var_dump($cleanfile);
    rename($file, $cleanfile);
  }
}//end of foreach
?>

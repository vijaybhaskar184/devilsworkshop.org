<?php

//glob markdown files
$files = glob('content/posts/*.md');
foreach($files as $file) {
  $dir = dirname($file);
  preg_match('/(\d\d\d\d)-(\d\d)-(\d\d)-(.*)/i', $file, $matches);
  // var_dump($matches);
  // array_shift($matches);
  // $newfile = implode($matches,'/');
  $newfile = $dir . '/' . $matches[1] . '/' . $matches[4];
  var_dump($file);
  var_dump($newfile);

  if (!file_exists(dirname($newfile))) {
      mkdir(dirname($newfile), 0777, true);
  }

  echo rename($file, $newfile);  
  // foreach ($matches as $val) {
  //   print_r($val);
  // }

}//end of foreach
?>

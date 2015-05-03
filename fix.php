<?php
//glob markdown files
$files = glob('content/posts/*.md');
foreach($files as $file) {
  $base = basename($file);
  // $cleanfile = sanitize_file_name($base);
  $cleanfile = preg_replace('/[^\00-\255]+/u', '', $file);

  // $result = preg_match_all('/(\d\d\d\d)-(\d\d)-(\d\d)-(.*)/i', $cleanfile, $matches);

  if($file != $cleanfile){
    var_dump($file);
    var_dump($cleanfile);
    rename($file, $cleanfile);
  }

  // echo rename($cleanfile, );

  // // DEBUG
  // // var_dump($content);
  // var_dump($result);
  // var_dump($matches[2][0]);
  // var_dump($master[$matches[2][0]]);
  // foreach ($matches as $val) {
  //   print_r($val);
  // }
  // $new = $master[$matches[2][0]];
  //
  // //if displayname and username is same, skip this
  // if($matches[2][0] == $new)
  //   continue;
  //
  // $result = preg_replace('/(author:\s)(.*)/m', "author: $new",$content);
  // // $diff = xdiff_string_diff($content, $result, 1);
  // // var_dump($diff);
  // // var_dump($content);
  // // var_dump($result);
  //
  // file_put_contents($file, $result);
}//end of foreach

function sanitize_file_name( $filename ) {
	$filename_raw = $filename;
	$special_chars = array("?", "[", "]", "/", "\\", "=", "<", ">", ":", ";", ",", "'", "\"", "&", "$", "#", "*", "(", ")", "|", "~", "`", "!", "{", "}", chr(0));
	$filename = preg_replace( "#\x{00a0}#siu", ' ', $filename );
	$filename = str_replace( $special_chars, '', $filename );
	$filename = str_replace( array( '%20', '+' ), '-', $filename );
	$filename = preg_replace( '/[\r\n\t -]+/', '-', $filename );
	$filename = trim( $filename, '.-_' );

	return $filename;
}
?>

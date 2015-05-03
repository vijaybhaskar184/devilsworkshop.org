<?php
$authors = glob('data/authors/*.toml');
$master;

/** Loop to create mapping of username and displayname **/

foreach($authors as $author) {
    $username =  basename($author,".toml");
    $info = parse_ini_file($author);
    $display =  $info['display_name'];

    $oldusername = $username;
    //check username for @ (email)
    if(strpos($username, "@")){
      echo "before email: $username \n";
      $username = explode('@',$username)[0];
      // $username = left($email, stripos($email, '@'));
      echo "after email: $username \n";
    }

    //check username for dot .
    if(strpos($username, ".")){
      echo "before dot: $username \n";
      $username = str_replace(".", "", $username);
      echo "after dot: $username \n";
    }

    //check username for space
    if(strpos($username, " ")){
      echo "before space: $username \n";
      $username = str_replace(" ", "", $username);
      echo "after space: $username \n";
    }

    //check username for underscore
    if(strpos($username, "_")){
      echo "before space: $username \n";
      $username = str_replace("_", "", $username);
      echo "after space: $username \n";
    }

    //force lowercase
    if(preg_match('/[A-Z]/', $username)){
      echo "before lowercase: $username \n";
      $username = strtolower($username);
      echo "after lowercase: $username \n";
    }

    //rename author logic
    if ($oldusername != $username) {
      echo rename($author,dirname($author) . '/' . $username . '.toml');
    }

    //setup multidimnsioanl array
    $master[$display] = $username;

}

echo "Print master \n";
var_dump($master);
exit;
/** File content search and replace **/

// if($username == $display){
//   echo "Replacement start \n";
//   var_dump($author);
//   var_dump($username);
//   var_dump($display);
// }

//glob markdown files
$files = glob('content/posts/*.md');
foreach($files as $file) {
  $content = file_get_contents($file);
  $result = preg_match_all('/(author:\s)(.*)/m',$content,$matches);
  // $result = preg_replace('/(author:\s)(.*)/m', "$1".$master[$2],$content);

  // DEBUG
  // var_dump($content);
  var_dump($result);
  var_dump($matches[2][0]);
  var_dump($master[$matches[2][0]]);
  foreach ($matches as $val) {
    print_r($val);
  }
  $new = $master[$matches[2][0]];

  //if displayname and username is same, skip this
  if($matches[2][0] == $new)
    continue;

  $result = preg_replace('/(author:\s)(.*)/m', "author: $new",$content);
  // $diff = xdiff_string_diff($content, $result, 1);
  // var_dump($diff);
  // var_dump($content);
  // var_dump($result);

  file_put_contents($file, $result);
}//end of foreach

?>

<?php
$authors = glob('data/authors/*.toml');

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

    //rename author logic
    if ($oldusername != $username) {
      rename($author,dirname($author) . '/' . $username . '.toml');
    }

    continue;
    // echo $author ."\n";
    // echo $username."\n";
    // echo $display ."\n";

    // if($username == $display){
      var_dump($author);
      var_dump($username);
      var_dump($display);
    // }

}
exit;
// replace
// $files = glob('content/posts/*.md');
foreach($files as $file) {
    // echo $file . "\n";
}

?>

<?php
if(htmlentities(strip_tags($_POST['submit']), ENT_QUOTES) != 'NEW'){
  exit;
}

while (true){
  $noteid = rand (100000, 999999);
  if (file_exists("../data/$noteid") == false){
    mkdir("../data/$noteid");
    break;
  }
}
$password = htmlentities(strip_tags($_POST['password']), ENT_QUOTES);
$_POST['noteid'] = $noteid;
$datetime = date('Y/m/d H:i:s').' (UTC)';
file_put_contents("../data/$noteid/pass", md5($password));
file_put_contents("../data/$noteid/note", "$datetime\tAuthor\tNote Created\n");

include('open.php');
?>

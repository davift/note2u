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

      $token = $datetime."\tAuthor\tNote Created";
      $cipher_method = 'aes-128-ctr';
      $enc_key = openssl_digest(sha1($password), 'SHA256', TRUE);
      $enc_iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher_method));
      $cryptedtoken = openssl_encrypt($token, $cipher_method, $enc_key, 0, $enc_iv) . "::" . bin2hex($enc_iv);
      unset($token, $cipher_method, $enc_key, $enc_iv);

      file_put_contents("../data/$noteid/note", $cryptedtoken."\n", FILE_APPEND | LOCK_EX);

include('open.php');
?>

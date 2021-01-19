<center>
<table border="0" width="100%">
<?php
$noteid = (int) htmlentities(strip_tags($_POST['noteid']), ENT_QUOTES);
$password = htmlentities(strip_tags($_POST['password']), ENT_QUOTES);
$pass = str_replace(array("\r\n", "\n", "\r"), '', file_get_contents("../data/$noteid/pass", true));

echo '<tr><td align="left" valign="top">'."\n";

if (hash('sha256', $password) == $pass){

  $handle = fopen("../data/$noteid/counts", "w+");
  fwrite($handle, '0');
  fclose($handle);

  if (htmlentities(strip_tags($_POST['submit']), ENT_QUOTES) == 'APPEND'){
    $datetime = date('Y/m/d H:i:s').' (UTC)';
    $name = htmlentities(strip_tags($_POST['name']), ENT_QUOTES);
    $message = str_replace(array("\r\n", "\n", "\r"), '<br>', htmlentities(strip_tags($_POST['message']), ENT_QUOTES));

      $token = $datetime."\t".$name."\t".$message;
      $cipher_method = 'aes-128-ctr';
      $enc_key = openssl_digest(sha1($password), 'SHA256', TRUE);
      $enc_iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher_method));
      $cryptedtoken = openssl_encrypt($token, $cipher_method, $enc_key, 0, $enc_iv) . "::" . bin2hex($enc_iv);
      unset($token, $cipher_method, $enc_key, $enc_iv);

    file_put_contents("../data/$noteid/note", $cryptedtoken."\n", FILE_APPEND | LOCK_EX);

    $append = file_get_contents("../append", true);
    if ($append == null)
       $append = 0;
    $append++;
    $handle = fopen("../append", "w+");
    fwrite($handle, $append);
    fclose($handle);

  } elseif (htmlentities(strip_tags($_POST['submit']), ENT_QUOTES) == 'DESTROY'){
    array_map('unlink', glob("../data/$noteid/*"));
    rmdir("../data/$noteid");
    echo '<center><br> <br>NOTE DESTROYED!<br> <br> &nbsp;</center>';

    $destroy = file_get_contents("../destroy", true);
    if ($destroy == null)
       $destroy = 0;
    $destroy++;
    $handle = fopen("../destroy", "w+");
    fwrite($handle, $destroy);
    fclose($handle);

    include 'bottom.php';
    exit;
  } elseif (htmlentities(strip_tags($_POST['submit']), ENT_QUOTES) == 'WIPE'){
    file_put_contents("../data/$noteid/note", "");

    $wipe = file_get_contents("../wipe", true);
    if ($wipe == null)
       $wipe = 0;
    $wipe++;
    $handle = fopen("../wipe", "w+");
    fwrite($handle, $wipe);
    fclose($handle);
  }

  $file = fopen("../data/$noteid/note","r");
  while(! feof($file)){
      $cryptedmessage = str_replace(array("\r\n", "\n", "\r"), '', fgets($file));

      list($crypted_token, $enc_iv) = explode("::", $cryptedmessage);;
      $cipher_method = 'aes-128-ctr';
      $enc_key = openssl_digest(sha1($password), 'SHA256', TRUE);
      $line = openssl_decrypt($crypted_token, $cipher_method, $enc_key, 0, hex2bin($enc_iv));
      unset($crypted_token, $cipher_method, $enc_key, $enc_iv);

      if($line != ''){
	echo str_replace("\t", '</td><td align="left" valign="top">', $line).'</td></tr><tr><td align="left" valign="top">'."\n";
      }
  }
  fclose($file);

} else {
  echo "<center><br> <br>WRONG PASSWORD OR NOTE ID INEXISTENT!<br> <br> &nbsp;</center>";

  if($pass != ''){
     $totalcount = file_get_contents("../data/$noteid/countt", true);
     if ($totalcount == null)
        $totalcount = 0;
     $totalcount++;
     $handle = fopen("../data/$noteid/countt", "w+");
     fwrite($handle, $totalcount);
     fclose($handle);

     $sequentialcount = file_get_contents("../data/$noteid/counts", true);
     if ($sequentialcount == null)
        $sequentialcount = 0;
     $sequentialcount++;
     $handle = fopen("../data/$noteid/counts", "w+");
     fwrite($handle, $sequentialcount);
     fclose($handle);

     if($totalcount >= 50 || $sequentialcount >= 10){
       array_map('unlink', glob("../data/$noteid/*"));
       rmdir("../data/$noteid");
     }
  }

  include 'bottom.php';
  exit;
}

echo '<center><br>';
echo "Note ID: $noteid<br>";
echo "Password: $password<br>";
$notesize = filesize("../data/$noteid/note");
echo "Usage: ".($notesize/1000).' %<br>';
echo 'Sequential Fails: '.file_get_contents("../data/$noteid/counts", true).'<br>';
echo 'Total Fails: '.file_get_contents("../data/$noteid/countt", true).'<br><br>';
echo '<b>[copy these information,<br>it is impossible to recover]</b><br><br>';
echo '<div class="form-style-99">';
echo '<form action="" method="post">';
echo "<input type='hidden' name='noteid' value='$noteid'>";
echo "<input type='hidden' name='password' value='$password'>";
echo '<label><span> </span><input type="submit" name="submit" value="WIPE" /> &nbsp;&nbsp;</label>';
echo '<label><span> </span><input type="submit" name="submit" value="DESTROY" /> &nbsp;&nbsp;</label>';
echo '</form></div></center>';
?>

</td><td align="right" valign="middle" colspan="2">
<center>

<?php
if($notesize <= 1000){
  echo '<div class="form-style-99">';
  echo '<form action="" method="post">';
  echo "<input type='hidden' name='noteid' value='$noteid'>";
  echo "<input type='hidden' name='password' value='$password'>";
  echo '<label for="field1"><span>Name: &nbsp;<span class="required"></span></span><input type="text" class="input-field" name="name" value="" /> &nbsp;&nbsp;</label>';
  echo '<label for="field2"><span>Message: &nbsp;<span class="required"></span></span><textarea type="textarea" class="input-field" name="message"></textarea> &nbsp;&nbsp;</label>';
  echo '<label><span> </span><input type="submit" name="submit" value="APPEND" /> &nbsp;&nbsp;</label>';
  echo '</form></div>';
} else {
  echo 'The max capacity has been exceeded. Please WIPE it or start a new Note.';

  $capacity = file_get_contents("../capacity", true);
  if ($capacity == null)
     $capacity = 0;
  $capacity++;
  $handle = fopen("../capacity", "w+");
  fwrite($handle, $capacity);
  fclose($handle);
}
?>

</center>
</td></tr>
</table>
</center>

<?php
$open = file_get_contents("../open", true);
if ($open == null)
   $open = 0;
$open++;
$handle = fopen("../open", "w+");
fwrite($handle, $open);
fclose($handle);
?>

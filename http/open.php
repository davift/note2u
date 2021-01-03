<html margin="0" padding="0">
<style>
html *
{
   font-size: 14;
}

.form-style-3{
	max-width: 430px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-3 label{
	display:block;
	margin-bottom: 10px;
}
.form-style-3 label > span{
	float: center;
	width: 50px;
	color: #fff;
	font-weight: bold;
	font-size: 13px;
	text-shadow: 1px 1px 1px #000;
}
.form-style-3 fieldset{
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	margin: 0px 10px 0px 0px;
	border: 1px solid #fff;
	padding: 0px;
	background: #000;
	box-shadow: inset 0px 0px 15px #000;
	-moz-box-shadow: inset 0px 0px 15px #000;
	-webkit-box-shadow: inset 0px 0px 15px #000;
}
.form-style-3 fieldset legend{
	color: #fff;
	border-top: 1px solid #000;
	border-left: 1px solid #000;
	border-right: 1px solid #000;
	border-radius: 5px 5px 0px 0px;
	-webkit-border-radius: 5px 5px 0px 0px;
	-moz-border-radius: 5px 5px 0px 0px;
	background: #000;
	padding: 0px 8px 3px 8px;
	box-shadow: -0px -1px 2px #fff;
	-moz-box-shadow:-0px -1px 2px #fff;
	-webkit-box-shadow:-0px -1px 2px #fff;
	font-weight: normal;
	font-size: 12px;
}
.form-style-3 textarea{
	width:400px;
	height:100px;
}
.form-style-3 input[type=text],
.form-style-3 input[type=date],
.form-style-3 input[type=datetime],
.form-style-3 input[type=number],
.form-style-3 input[type=search],
.form-style-3 input[type=time],
.form-style-3 input[type=url],
.form-style-3 input[type=email],
.form-style-3 select,
.form-style-3 textarea{
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border: 1px solid #fff;
	outline: none;
	color: #fff;
	padding: 5px 8px 5px 8px;
	box-shadow: inset 1px 1px 4px #000;
	-moz-box-shadow: inset 1px 1px 4px #000;
	-webkit-box-shadow: inset 1px 1px 4px #000;
	background: #000;
	width:410;
}
.form-style-3  input[type=submit],
.form-style-3  input[type=button]{
	background: #000000;
	border: 1px solid #ffffff;
	padding: 5px 15px 5px 15px;
	color: #fff;
	box-shadow: inset -1px -1px 3px #fff;
	-moz-box-shadow: inset -1px -1px 3px #000;
	-webkit-box-shadow: inset -1px -1px 3px #000;
	border-radius: 3px;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	font-weight: normal;
}
.required{
	color:red;
	font-weight:normal;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 90%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #222222;
}

a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}
a:hover {
  background-color: #ffffff;
  color: black;
}
.button {
  background-color: #000000;
  color: white;
}
.label {
  background-color: #000000;
  color: white;
}
#header{
  min-height: 20px;
}
#chartTEM{
  min-height: 300px;
}
#chartPRE{
  min-height: 300px;
}
#header, #chartTEM, #chartPRE{
  margin-left: 0px;
  margin-right: 0px;
  margin-top: 0px;
  margin-bottom: 0px;
}
@viewport{
  zoom: 1.0;
  width: extend-to-zoom;
}
@-ms-viewport{
  zoom: 1.0;
  width: extend-to-zoom;
}
</style>
<body bgcolor="#000000" text="#ffffff" link="#0000ff" vlink="#00ffff" alink="#ff0000">
<center>

<table>

<?php
$noteid = (int) htmlentities(strip_tags($_POST['noteid']), ENT_QUOTES);
$password = htmlentities(strip_tags($_POST['password']), ENT_QUOTES);
$pass = str_replace(array("\r\n", "\n", "\r"), '', file_get_contents("../data/$noteid/pass", true));

echo '<tr><td align="left" valign="top">'."\n";

if (md5($password) == $pass){

  $handle = fopen("../data/$noteid/counts", "w+");
  fwrite($handle, '');
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
  } elseif (htmlentities(strip_tags($_POST['submit']), ENT_QUOTES) == 'DESTROY'){
    array_map('unlink', glob("../data/$noteid/*"));
    rmdir("../data/$noteid");
    echo '<center><br> <br>NOTE DESTROYED!<br> <br> &nbsp;</center>';
    exit;
  } elseif (htmlentities(strip_tags($_POST['submit']), ENT_QUOTES) == 'WIPE'){
    file_put_contents("../data/$noteid/note", "");
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

  exit;
}

echo '<center><br>';
echo "Note ID: $noteid<br><br>";
echo "Password: $password<br><br>";
echo '<b>[copy these information,<br>it is impossible to recover]</b><br><br>';
echo '<div class="form-style-3">';
echo '<form action="open.php" method="post">';
echo "<input type='hidden' name='noteid' value='$noteid'>";
echo "<input type='hidden' name='password' value='$password'>";
echo '<label><span> </span><input type="submit" name="submit" value="WIPE" /> &nbsp;&nbsp;</label>';
echo '<label><span> </span><input type="submit" name="submit" value="DESTROY" /> &nbsp;&nbsp;</label>';
echo '</form></div></center>';
?>

</td><td align="right" valign="middle" colspan="2">
<center><div class="form-style-3">
<form action="open.php" method="post">

<?php
echo "<input type='hidden' name='noteid' value='$noteid'>";
echo "<input type='hidden' name='password' value='$password'>";
?>

<label for="field1"><span>Name: &nbsp;<span class="required"></span></span><input type="text" class="input-field" name="name" value="" /> &nbsp;&nbsp;</label>
<label for="field2"><span>Message: &nbsp;<span class="required"></span></span><textarea type="textarea" class="input-field" name="message"></textarea> &nbsp;&nbsp;</label>
<label><span> </span><input type="submit" name="submit" value="APPEND" /> &nbsp;&nbsp;</label>
</form></div></center>

</td></tr>
</table>

</center>
</body></html>

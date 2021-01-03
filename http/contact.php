<html margin="0" padding="0">
<style>
.form-style-7{
	max-width:400px;
	margin:20px auto;
	background:#000;
	border-radius:2px;
	padding:20px;
	padding-top:0px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-7 h1{
	display: block;
	text-align: center;
	padding: 0;
	margin: 0px 0px 20px 0px;
	color: #0000ff;
	font-size:x-large;
}
.form-style-7 ul{
	list-style:none;
	padding:0;
	margin:0;
}
.form-style-7 li{
	display: block;
	padding: 9px;
	border:1px solid #fff;
	margin-bottom: 30px;
	border-radius: 3px;
}
.form-style-7 li:last-child{
	border:none;
	margin-bottom: 0px;
	text-align: center;
}
.form-style-7 li > label{
	display: block;
	float: left;
	margin-top: -19px;
	background: #000;
	height: 14px;
	padding: 2px 5px 2px 5px;
	color: #fff;
	font-size: 14px;
	overflow: hidden;
	font-family: Arial, Helvetica, sans-serif;
}
.form-style-7 input[type="text"],
.form-style-7 input[type="date"],
.form-style-7 input[type="datetime"],
.form-style-7 input[type="email"],
.form-style-7 input[type="number"],
.form-style-7 input[type="search"],
.form-style-7 input[type="time"],
.form-style-7 input[type="subject"],
.form-style-7 input[type="password"],
.form-style-7 textarea,
.form-style-7 select
{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	display: block;
	outline: none;
	border: none;
	height: 25px;
	line-height: 25px;
	font-size: 16px;
	padding: 0;
	font-family: Georgia, "Times New Roman", Times, serif;
        background: #000;
        color:#fff;
}
.form-style-7 input[type="text"]:focus,
.form-style-7 input[type="date"]:focus,
.form-style-7 input[type="datetime"]:focus,
.form-style-7 input[type="email"]:focus,
.form-style-7 input[type="number"]:focus,
.form-style-7 input[type="search"]:focus,
.form-style-7 input[type="time"]:focus,
.form-style-7 input[type="subject"]:focus,
.form-style-7 input[type="password"]:focus,
.form-style-7 textarea:focus,
.form-style-7 select:focus
{
}
.form-style-7 li > span{
	background: #fff;
	display: block;
	padding: 3px;
	margin: 0 -9px -9px -9px;
	text-align: center;
	color: #000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.form-style-7 textarea{
	resize:none;
}
.form-style-7 input[type="submit"],
.form-style-7 input[type="button"]{
	background: #000;
	border: none;
	padding: 10px 20px 10px 20px;
	border-bottom: 3px solid #fff;
	border-radius: 3px;
	color: #fff;
}
.form-style-7 input[type="submit"]:hover,
.form-style-7 input[type="button"]:hover{
	background: #fff;
	color:#000;
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

<?php
$name = htmlentities(strip_tags($_POST['name']), ENT_QUOTES);
$email = htmlentities(strip_tags($_POST['email']), ENT_QUOTES);
$subject = htmlentities(strip_tags($_POST['subject']), ENT_QUOTES);
$message = htmlentities(strip_tags($_POST['message']), ENT_QUOTES);

if ($_POST['submit'] == "Send" && ($name != null || $email != null || $subject != null || $message != null)){
  mail ("user@domain.com", "Note2U", "$name\n\n$email\n\n$subject\n\n$message");
  echo "<center><b> -->> Your message was sent. Thanks! <<-- </b></center>";
} else {
  echo "<center><b>CONTACT</b></center>";
}
?>

<form class="form-style-7" action="contact.php" method="post">
<ul>
<li>
    <label for="name">Name</label>
    <input type="text" name="name" maxlength="100">
    <span>Enter your name or nick.</span>
</li>
<li>
    <label for="email">Email</label>
    <input type="text" name="email" maxlength="100">
    <span>Enter an email for a response (optional).</span>
</li>
<li>
    <label for="subject">Subject</label>
    <input type="text" name="subject" maxlength="100">
    <span>What is your contact about?</span>
</li>
<li>
    <label for="message">Message</label>
    <textarea name="message" onkeyup="adjust_textarea(this)"></textarea>
    <span>Enter your message here.</span>
</li>
<li>
    <input type="submit" name="submit" value="Send">
</li>
</ul>
</form>

</body></html>

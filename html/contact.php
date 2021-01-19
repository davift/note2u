<?php
$name = htmlentities(strip_tags($_POST['name']), ENT_QUOTES);
$email = htmlentities(strip_tags($_POST['email']), ENT_QUOTES);
$subject = htmlentities(strip_tags($_POST['subject']), ENT_QUOTES);
$message = htmlentities(strip_tags($_POST['message']), ENT_QUOTES);

if ($_POST['submit'] == "Send" && ($name != null || $email != null || $subject != null || $message != null)){
  mail ("davift@gmail.com", "Note2U", "$name\n\n$email\n\n$subject\n\n$message");
  echo "<center><b> -->> Your message was sent. Thanks! <<-- </b></center>";
} else {
  echo "<center><b>CONTACT</b></center>";
}
?>

<form class="form-style-7" action="" method="post">
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
    <textarea name="message" rows="5" onkeyup="adjust_textarea(this)"></textarea>
    <span>Enter your message here.</span>
</li>
<li>
    <input type="submit" name="submit" value="Send">
</li>
</ul>
</form>

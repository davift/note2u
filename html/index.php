<?php
include 'top.php';

if ($_POST['submit'] == 'NEW'){
    include 'new.php';
} elseif ($_POST['submit'] == 'OPEN') {
    include 'open.php';
} elseif ($_POST['submit'] == 'APPEND') {
    include 'open.php';
} elseif ($_POST['submit'] == 'WIPE') {
    include 'open.php';
} elseif ($_POST['submit'] == 'DESTROY') {
    include 'open.php';
} elseif ($_GET['submit'] == 'ABOUT') {
    include 'about.php';
} elseif ($_GET['submit'] == 'CONTACT') {
    include 'contact.php';
} elseif ($_GET['submit'] == 'SEND') {
    include 'contact.php';
} else {
    include 'main.php';
}

include 'bottom.php';
?>

</body>
</html>
<?php
     $unique = file_get_contents("../unique", true);
     if ($unique == null)
        $unique = 0;
     $unique++;
     $handle = fopen("../unique", "w+");
     fwrite($handle, $unique);
     fclose($handle);
?>

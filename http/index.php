<!DOCTYPE html>
<html>
   <head>
      <title>Note2U - Send free anonymous secret notes!</title>
   </head>
   <frameset rows = "125,80%,40" frameborder="0">
      <frame name = "top" src = "top.php" scrolling="no" />
      <frame name = "main" src = "main.php" />
      <frame name = "bottom" src = "bottom.php" scrolling="no" />
      <noframes>
         <body>Sorry! Your browser does not support frames.</body>
      </noframes>
   </frameset>
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

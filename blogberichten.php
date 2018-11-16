<!DOCTYPE html>
<html>
  <head>
    <title>blogberichten</title>
  </head>
  <body>
    <p>
  <?php


      $blogberichten = fopen("blogberichten","r+");
      echo fread($blogberichten, filesize("blogberichten"));
      fclose($blogberichten);
    ?>
    </p>
  </body>
</html>

<?php

$country = ["indonesia"=>"D.K.I jakarta","singapura"=>"singapura","malaysia"=>"kuala lumpur","brunei"=>"bsb","thailand"=>"bangkok","laos"=>"vientiane","filipina"=>"manila","myanmar"=>"naypiydaw",
];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>daftar negara ASEAN dan ibukota</title>
    </head>
    <body>
        <?php
            echo "<p><b>Daftar negara ASEAN dan ibukota</b></p>";
          foreach ($country as $x => $x_value) {
            echo"<li>". "" . $x . ":" . $x_value."</li>";
          }
          echo"</br>";
        ?>
    </body>
</html>


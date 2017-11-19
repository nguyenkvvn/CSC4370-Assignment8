<?php

  $host = "localhost";
  $user = "knguyen76";
  $pass = "knguyen76";
  $db = "knguyen76";

  $r = mysql_connect($host, $user, $pass);

  if (!$r) {
      echo "Could not connect to server\n";
      trigger_error(mysql_error(), E_USER_ERROR);
  } else {
      echo "Connection established\n";
  }

  $r2 = mysql_select_db($db);

  if (!$r2) {
      echo "Cannot select database\n";
      trigger_error(mysql_error(), E_USER_ERROR);
  } else {
      echo "Database selected\n";
  }


?>

<html>
  <head>
    <link rel="stylesheet" href="HW8.css">
  </head>

  <body>
    <table>
      <tr>
        <td>Album Name</td>
        <td>Artist Name</td>
      </tr>
      <?php
        //$query = "SELECT * FROM `Albums`";
        $query = "SELECT s_albumname, s_artistname From Albums AS ab INNER JOIN Artists AS ar ON ab.s_artistID = ar.Id";
        $rs = mysql_query($query);
        while ($row = mysql_fetch_assoc($rs))
        {
      ?>
          <tr>
            <td><?= $row['s_albumname']?></td>
            <td><?= $row['s_artistname']?></td>
          </tr>
      <?php
        }
      ?>
    </table>
  </body>

</html>

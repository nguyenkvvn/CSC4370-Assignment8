<?php

$host = "localhost";
$user = "knguyen76";
$pass = "knguyen76";
$db = "knguyen76";

function execute_query($query) {

    $r = mysql_query($query);

    if (!$r) {
        echo "Cannot execute query: $query\n";
        trigger_error(mysql_error());
    } else {
        echo "Query: $query executed\n";
    }
}

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
  </head>

  <body>
    <?php
      $host = "localhost";
      $user = "knguyen76";
      $pass = "knguyen76";
      $db = "knguyen76";

      $r = mysql_connect($host, $user, $pass);

      if (isset($_POST['submit']))
      {
        $artistname = $_POST['s1_ArtistName'];
        //$albumname = $_POST['s1_ArtistSelect'];
        //echo $albumname . " " . $artistname;
        $query = "INSERT INTO Artists VALUES(DEFAULT, '$artistname')";
        execute_query($query);
      }
    ?>
    <form action="" method="post">
      <h1>Add a new artist</h1>
      Artist Name: <input name="s1_ArtistName" type="text" />
      <!---br>Album Name: <input name="s1_ArtistSelect" type="text"--->
      <br><input name="submit" type="submit" />
    </form>
  </body>

</html>
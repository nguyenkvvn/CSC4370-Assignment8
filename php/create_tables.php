<?php

$host = "localhost";
$user = "knguyen76";
$pass = "knguyen76";
$db = "knguyen76";

//copy-pasta table.php from mysql_goodies by Prof. Henry
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
//end copy-pasta

$query = "DROP TABLE IF EXISTS Artists";
execute_query($query);

$query = "CREATE TABLE Artists(Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, s_artistname TEXT) ENGINE=InnoDB";
execute_query($query);

$query = "DROP TABLE IF EXISTS Albums";
execute_query($query);

$query = "CREATE TABLE Albums(Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, s_albumname TEXT,
    s_artistID TEXT) ENGINE=InnoDB";
execute_query($query);

//join the two tables?
$query = "SELECT Albums.Id, Albums.s_name, Albums.s_artistID FROM Albums INNER JOIN Artists ON Albums.s_artistID = Artists.Id";
execute_query($query);

//fill with sample data
$query = "INSERT INTO Artists VALUES(DEFAULT, 'Matthew Young'); INSERT INTO Albums VALUES(DEFAULT, 'Dive EP', 1); INSERT INTO Artists VALUES(DEFAULT, 'FKA Twigs'); INSERT INTO Albums VALUES(DEFAULT, 'LP1', 2); INSERT INTO Artists VALUES(DEFAULT, 'Leisure'); INSERT INTO Albums VALUES(DEFAULT, 'Leisure', 3); INSERT INTO Artists VALUES(DEFAULT, 'Beyonce'); INSERT INTO Albums VALUES(DEFAULT, 'Lemonade', 4);";
execute_query($query);

//mysql_close();
?>

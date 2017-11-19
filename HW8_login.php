<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  header("Location:HW8.html");
   exit();
}
?>

<html>
  <head>
  </head>

  <body>
    <form action = "" method = "post">
       <label>User Name :</label><input type = "text" name = "username"/><br />
       <label>Password  :</label><input type = "password" name = "password" /><br/><br />
       <input type = "submit" value = " Submit "/>
    </form>
  </body>

</html>

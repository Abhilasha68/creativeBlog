<?php
include ("connect.php");
//include ('session.php');
session_start();

if(isset($_POST["submit"]))
{
  $aname = ($_POST["aname"]);
  $apass = ($_POST["apass"]);
  
  $db = "SELECT `authorID` FROM `authors` WHERE `aname` = '$aname' AND `apass` = `$apass`";

  $result = $conn->query($db);

  
  if ($result->num_rows == 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
      header("addpost.php");
    }
} else {
    echo "0 results";
}

?>


<html>
<body>
<form method = "POST">
<table align = "center">
<tr>
  <td>Author Name: <input type = "text" name = "aname"></td>
</tr>
<tr>
  <td>Password: <input type = "password" name = "apass"></td>
</tr>
<tr>
  <td>Email ID: <input type = "text" name = "aemail"></td>
</tr>
<tr>
  <td><input type = "submit" name = "submit" value = "submit">&nbsp<input type = "reset" value = "reset"></td>
</tr>
</table>
</form>
</body>
</html>
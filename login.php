

<?php
include ("connect.php");
//include ('session.php');
session_start();

if(isset($_POST["submit"]))
{
  $aname = ($_POST["aname"]);
  $apass = ($_POST["apass"]);
  
  $query = "SELECT `authorID` FROM `authors` WHERE `aname` = '$aname' AND `apass` = `$apass`";

  $result = $db->query($query);

  
  if ($result->num_rows >= 0) {
      header("Location: addpost.php");
    }
 else {
    echo "0 results";
}
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
  <td><input type = "submit" name = "submit" value = "submit">&nbsp<input type = "reset" value = "reset"></td>
</tr>
</table>
</form>
</body>
</html>
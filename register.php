
<?php


include ("connect.php");
//include ('session.php');
session_start();

if(isset($_POST["submit"]))
{
  $aname = ($_REQUEST["aname"]);
  $apass = ($_REQUEST["apass"]);
  $aemail = ($_REQUEST["aemail"]);

  //$db = "SELECT `authorID` FROM `authors` WHERE `aname` = '$aname' AND `apass` = `$apass` AND `aemail` = `$aemail`";
  //$result = mysql_query($query);
  

  $query = "INSERT INTO `authors` (`aname`,`apass`,`aemail`) values ('$aname','$apass','$aemail')";
  $result = $db->query($query);
  if ($result === TRUE) {
      echo "Successfully registered";
      header("Location: login.php");
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
  <td>Email ID: <input type = "text" name = "aemail"></td>
</tr>
<tr>
  <td><input type = "submit" name = "submit" value = "submit">&nbsp<input type = "reset" value = "reset"></td>
</tr>
</table>
</form>
</body>
</html>
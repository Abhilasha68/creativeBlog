<?php
/*


if(isset($_POST["submit"]))
{
    $name = $_REQUEST["name"];
    $address =$_REQUEST["address"];
    $gender = $_REQUEST["gender"];
    $branch = $_REQUEST["branch"];
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
   

   $query="INSERT INTO `information` (`name`, `address`, `gender`, `branch`, `username`, `password`) values 	
								('$name','$address','$gender','$branch','$username','$password')";
	
	if(!mysql_query($query))
		echo "Query does not work. <br/>Error:".mysql_error();

	else
		{
			echo "Register successful";
            header("Location: login.php");
		}
}*/
?>
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
  $result = $conn->query($db);

  $query = "INSERT INTO `authors` (`aname`,`apass`,`aemail`) values ('$aname','$apass','$aemail')";

  if ($result->num_rows == 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
      header("login.php");
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
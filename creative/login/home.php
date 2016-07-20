<?php

include_once ('connect.php');

echo "Home is where the heart is";
//include_once ('session.php');
//<b id="welcome">Welcome : <i><?php echo $login_session; </i></b>
?>

<html>
<head>
<title>Your Home Page</title>
</head>
<body>
<b id="welcome">Welcome</b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</body>
</html>
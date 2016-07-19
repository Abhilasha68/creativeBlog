<?php

include 'blogpost.php';


/*$host = 'localhost';
$username = 'root';
$password = '';
*/

$servername = "localhost";
$username = "abhilasha";
$password = "";
$dbname = 'creative';


//$db = mysqli_connect($host, $username, $password) 
$db = new mysqli($servername, $username, $password, $dbname);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

//@mysqli_select_db('creative') or die("Could not connect".mysql_error());


function GetBlogPosts($inId=null)
{
    global $db;

    if (!empty($inId))
    {
        $result = $db->query("SELECT * FROM `posts` WHERE postID = " . '$inId' . " ORDER BY 'postID' DESC"); 
    }

    else
    {
        $result = $db->query("SELECT * FROM `posts` ORDER BY 'postID' DESC");
    }
 
   $postArray = array();
    while($row = $result->fetch_assoc())
    {
       //$myPost = new BlogPost($db, $row["id"], $row['title'], $row['desc'], $row["author"], $row["content"], $row['datePosted']);
      $myPost = new BlogPost($db, $row['postID'], $row['ptitle'],null, null, $row['pcont'], $row['pdate']);
       array_push($postArray, $myPost);
    }
    return $postArray;
}
?>
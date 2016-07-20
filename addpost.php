
<?php


include ("connect.php");
//include ('session.php');
session_start();

$blogPosts = GetBlogPosts();

/* foreach ($blogPosts as $post)
                {
                   
                        echo $post->title;
                        echo $post->content;
                      echo' </h2>';
                     echo '</a>';
                    echo '</div>';
                    echo "posted by: ".$post->author."</br>";
                    echo "Posted on".$post->datePosted;
                    echo '<hr>';
                }
               
*/
if(isset($_POST["submit"]))
{
  $ptitle = $_POST["ptitle"];
  $pcont = $_POST["pcont"];
  $pdate = $_POST["pdate"];
 
  $query = "INSERT INTO `posts` (`ptitle`,`pcont`,`pdate` ) values ('$ptitle','$pcont','$pdate')";
  $result = $db->query($query);

if ($result->num_rows >= 0) {
      header("Location: viewpost.php");
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
  <td>Post Title: <input type = "text" name = "ptitle"></td>
</tr>
<tr>
  <td>Content: <input type = "text" name = "pcont"></td>
</tr>
<tr>
  <td>Date: <input type = "date" name = "pdate"></td>
</tr>
<tr>
  <td><input type = "submit" name = "submit" value = "submit">&nbsp<input type = "reset" value = "reset"></td>
</tr>
</table>
</form>
</body>
</html>
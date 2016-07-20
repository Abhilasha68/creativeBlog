<?php
 
class BlogPost
{

 
public $db; 
public $id;
public $title;
public $desc;
public $author;
public $content;
public $datePosted;
 
function __construct($d=null, $inId=null, $inTitle=null, $inDesc=null, $inAuthorId=null, $inContent=null, $inDatePosted=null)
{
    if (!empty($d))
    {
        $this->db = $d;
    }


    if (!empty($inId))
    {
        $this->id = $inId;
    }
    if (!empty($inTitle))
    {
        $this->title = $inTitle;
    }
    if (!empty($inDesc))
    {
        $this->desc = $inDesc;
    }

     if (!empty($inAuthorId))
    {
        $query = mysqli_query("SELECT `aname` FROM `authors` WHERE `authorID` = " . "$inAuthorId");
        $row = mysqli_fetch_assoc($query);
        $this->author = $row["aname"];
    }

    if(!empty($inContent))
    {
        $this->content = $inContent;
    }



    if (!empty($inDatePosted))
    {
       $this->datePosted=$inDatePosted;

    }
 }
 
}
 
?>
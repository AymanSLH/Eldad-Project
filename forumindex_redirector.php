<?php
/**
 * Created by PhpStorm.
 * User: Ayman
 * Date: 7/2/2018
 * Time: 9:30 AM
 */
if (isset($_GET['createmypost']))
{
   if (isset($_COOKIE['loginname']))
   {
       $author  = $_COOKIE['loginname'] ;
   }
   else
   {
       $author = "Anonymos" ;
   }
    $Get_title = $_GET['title'];
    $Get_description = $_GET['description'];
    $current_date  =   date('Y-m-d H:i:s')  ;
    $db = new SQLite3('DB/forum.db');
    $statement = $db->prepare('insert into Posts ("stamp" ,"author",  "title" , "matan") VALUES (:stamp,:author,:title,:matan)');
    $statement->bindValue(':stamp', $current_date);
    $statement->bindValue(':author', $author);
    $statement->bindValue(':title', $Get_title);
    $statement->bindValue(':matan', $Get_description);
    $statement->execute();
}
$new_url  = "Location:"."forumindex.php" ;
header($new_url) ;
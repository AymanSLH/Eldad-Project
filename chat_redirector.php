<?php
if (isset($_GET['submit']))
{
    $date  =  date('Y-m-d H:i:s')  ;
    $user_name = $_COOKIE['loginname'] ;
    $message  = $_GET['enter_message'] ;
    $db = new SQLite3('DB/chat.db');
    $statement = $db->prepare('insert into chat ("user_name" ,"date",  "msg") VALUES (:user_name,:date,:msg)');
    $statement->bindValue(':user_name', $user_name);
    $statement->bindValue(':date', $date);
    $statement->bindValue(':msg', $message);
    $statement->execute();
    $this_2   = "http://localhost/Eldad-Project/chat.php" ;
    header("Location:".$this_2) ;
}
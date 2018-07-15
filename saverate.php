<?php
if (isset($_GET['like']))
{
    $uid  = $_COOKIE['logincookie'] ;
    $lesson_name  = $_GET['lesson_name'] ;
    $res  = $_GET['like'] ;
    $db = new SQLite3('DB/stata.db');
    $statement = $db->prepare('insert into rates ("lesson_name" ,"rate" , "user_id") VALUES (:lesson_name , :rate , :user_id)');
    $statement->bindValue(':lesson_name', $lesson_name);
    $statement->bindValue(':rate', $res);
    $statement->bindValue(':user_id', $uid);
    $statement->execute();
    $this1 = "http://localhost/Eldad-Project/videolesson.php?lesson_number=".$_COOKIE['loginLesson'] ;
    header("Location:".$this1) ;
}
else{
    echo "please Dont leave rating empty !" ;
}
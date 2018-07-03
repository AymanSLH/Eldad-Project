<?php
/**
 * Created by PhpStorm.
 * User: Ayman
 * Date: 7/3/2018
 * Time: 11:34 AM
 */
$data_base = new SQLite3('Adaptive.db') ;
$statement = $data_base->prepare('update  Checkpoint Set "Lesn_id"=:coco Where "Std_id"=:std_id');
$statement->bindValue(':coco', 1 );
$statement->bindValue(':std_id', $_COOKIE['logincookie']);
$statement->execute();
setcookie('loginLesson'   , 1, time() + 3000 , '/')  ;
header("Location:index.php") ;
<?php
                if (isset($_GET['submitquiz']))
                {
                    $his_answer  = $_GET['Q1'] ;
                    if ($his_answer == $_COOKIE['Ans'])
                    {
                        $quiz_id  = $_GET['alternative'] ;
                        $stud_id  = $_COOKIE['logincookie'] ;
                        $attempts  = 1 ;
                        $solved  = "Yes" ;
//                        $solved  = "No" ;
                        $db = new SQLite3('DB/stata.db');
                        $statement = $db->prepare('INSERT into scores ("quiz_id" ,"stud_id","attempts","solved")VALUES(:quiz_id,:stud_id,:attempts,:solved)');
                        $statement->bindValue(':quiz_id', $quiz_id);
                        $statement->bindValue(':stud_id', $stud_id);
                        $statement->bindValue(':attempts', $attempts);
                        $statement->bindValue(':solved', $solved);
                        $statement->execute();

                        $the = "http://localhost/Eldad-Project/videolesson.php?lesson_number=".$_COOKIE['loginLesson'] ;
                        header("Location:".$the) ;
                    }
                    else
                    {
                        $quiz_id  = $_GET['alternative'] ;
                        $stud_id  = $_COOKIE['logincookie'] ;
                        $attempts  = 1 ;
//                        $solved  = "Yes" ;
                        $solved  = "No" ;
                        $db = new SQLite3('DB/stata.db');
                        $statement = $db->prepare('INSERT into scores ("quiz_id" ,"stud_id","attempts","solved")VALUES(:quiz_id,:stud_id,:attempts,:solved)');
                        $statement->bindValue(':quiz_id', $quiz_id);
                        $statement->bindValue(':stud_id', $stud_id);
                        $statement->bindValue(':attempts', $attempts);
                        $statement->bindValue(':solved', $solved);
                        $statement->execute();

                        $the = "http://localhost/Eldad-Project/alternative_video.php?alternative=".$_GET['alternative'] ;
                        header("Location:".$the) ;
                    }
                }

            ?>


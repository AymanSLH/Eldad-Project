
<?php
                if (isset($_GET['submitquiz']))
                {
                    $his_answer  = $_GET['Q1'] ;
                    if ($his_answer == $_COOKIE['Ans'])
                    {
                        echo "True !" ;
                        echo $_COOKIE['loginLesson'] ;
                        $the = "http://localhost/Eldad-Project/videolesson.php?lesson_number=".$_COOKIE['loginLesson'] ;
                        header("Location:".$the) ;
                    }

                    else
                    {
                        $the = "http://localhost/Eldad-Project/alternative_video.php?alternative=".$_GET['alternative'] ;
                        header("Location:".$the) ;
                    }


                }
            ?>
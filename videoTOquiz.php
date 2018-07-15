<?php

if (isset($_GET['a']))
    {
        $quizz_id = $_GET['a'] ;
}



$data_base = new SQLite3('DB/Adaptive.db') ;
$raw_result = $data_base->query("Select *  from Quizz") ;
while ($row = $raw_result->fetchArray())
{

    if ($row['Quizz_id'] == $quizz_id)
    {
        $question  = $row['Question'];
        $Choice_A =  $row['Choice_A'];
        $Choice_B  = $row['Choice_B'];
        $Choice_C  = $row['Choice_C'];
        $Choice_D  = $row['Choice_D'];
        $correct_ans  = $row['Correct_Ans'];
        setcookie('A' , $Choice_A, time() + 3000 , '/')  ;
        setcookie('B'   , $Choice_B, time() + 3000 , '/')  ;
        setcookie('C'   , $Choice_C, time() + 3000 , '/')  ;
        setcookie('D'   , $Choice_D, time() + 3000 , '/')  ;
        setcookie('Ans'   , $correct_ans, time() + 3000 , '/')  ;
        setcookie('Q'   , $question, time() + 3000 , '/')  ;


        $a = $_COOKIE['A'] ;
        $b = $_COOKIE['B'] ;
        $c = $_COOKIE['C'] ;
        $d = $_COOKIE['D'] ;
        $q = $_COOKIE['Q'] ;
        $ans = $_COOKIE['Ans'] ;
    }
}

                if (isset($_GET['a']))
                {
                    $quiz_num  = $_GET['a'] ;
                        echo "True !" ;
                        echo $_COOKIE['loginLesson'] ;
                        $the = "http://localhost/Eldad-Project/quiz.php?a=".$quiz_num ;
                        header("Location:".$the) ;
                }
?>

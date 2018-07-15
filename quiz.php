<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Lesson Quiz</title>
    <link rel="stylesheet" type="text/css" href="css/quiz.css">
    <link rel="icon" href="img/rocket.ico">
</head>
<?php
if (isset($_GET['a']))
{
    $quizz_id = $_GET['a'] ;
    $quizz_id = (int)$quizz_id  ;
    if ($quizz_id > 6)
    {
        $the = "http://localhost/Eldad-Project/exam.php" ;
        header("Location:".$the) ;
    }
}
?>
<?php
if (!isset($_COOKIE['logincookie']))
{
    header("Location:sorry.php") ;
}
?>
<body>
    <div class="grid">
        <div id="quiz">
            <h1>Quiz</h1>
            <hr style="margin-bottom: 20px">
            <?php
                        $quizz_number =  $_GET['a'] ;
                        $a = $_COOKIE['A'] ;
                        $b = $_COOKIE['B'] ;
                        $c = $_COOKIE['C'] ;
                        $d = $_COOKIE['D'] ;
                        $q = $_COOKIE['Q'] ;
                        $ans = $_COOKIE['Ans'] ;
                        ?>
   <form method="get" action="quizTOvideo.php">
       <p id="question"><?php  echo $q ?> </p>
        <div>
         <span class="radio"> <input type="radio" name ="Q1" value="ans1" class="a"/><?php echo $a  ; ?></span>
         <span class="radio"> <input type="radio" name ="Q1" value="ans2" class="a"/><?php echo $b  ; ?></span>
         <span class="radio"> <input type="radio" name ="Q1" value="ans3" class="a"/><?php echo $c ; ?></span>
         <span class="radio"> <input type="radio" name ="Q1" value="ans4" class="a"/><?php echo $d ; ?></span>
        </div>
       <hr style="margin-top: 50px">
            <footer>
                <div class="btnstyle">
                 <button class="submit" name="submitquiz" type="submit" >submit</button>
                </div>
                <input type="hidden" name="aa" value="<?php echo $_GET['a']?>">
                <input type="hidden" name="alternative" value="<?php echo $quizz_number ; ?>">
   </form>


            </footer>
        </div>
    </div>

</body>
</html>
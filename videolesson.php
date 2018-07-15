<!DOCTYPE html>
<html>
<title>Eldad | Lesson</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/video.css">
<link rel="icon" href="img/rocket.ico">
<body>

<?php
if (!isset($_COOKIE['logincookie']))
{
    header("Location:sorry.php") ;
}
?>
<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
    <h3 class="w3-bar-item">Menu</h3>


   <form method="get" action="videoTOquiz.php">

       <input class="w3-bar-item w3-button" style="color: red"  type="submit" value="<?php if ($_GET['lesson_number'] > 6 ) {echo "Congratulation !" ;} else {echo "Next Lesson >>" ;}?>" >

       <input class="w3-bar-item w3-button" style="color: olive;" value="<?php if ($_GET['lesson_number'] > 6 ) {echo "you finished !!" ;} else {echo "Go To Quiz !" ;} ?>" type="submit">
        <?php  $old_lesson = $_GET['lesson_number'] ; ?>
       <input type="hidden" name="a" value="<?php  echo $old_lesson ; ?>" />

   </form>

</div>

<!-- Page Content -->
<div style="margin-left:25%">

    <div class="w3-container w3-teal">
<!--        <h1>My Page</h1>-->

        <main>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="">Forum</a></li>
                    <li><a href="chat.php">Chat</a></li>


                    <li><a href="<?php
                        if(isset($_COOKIE['logincookie']))
                        {
                            echo "" ;
                        }
                        else
                        {
                            echo "login.php" ;
                        }
                        ?>"><?php
                            if(isset($_COOKIE['logincookie']))
                            {
                                echo "Welcome !" ;
                            }
                            else
                            {
                                echo "Log in " ;
                            }
                            ?></a></li>



                    <li><a href="<?php
                        if(isset($_COOKIE['logincookie']))
                        {
                            echo "profile.php" ;
                        }
                        else
                        {
                            echo "signup.php" ;
                        }
                        ?>"><?php
                            if(isset($_COOKIE['logincookie']))
                            {
                                echo $_COOKIE['loginname'] ;
                            }
                            else
                            {
                                echo "Sign Up" ;
                            }
                            ?></a></li>
                </ul>
            </nav>
        </main>

    </div>
                <?php
                $lesson_name = "" ;
                $lesson_number = "" ;
                if (isset($_GET['lesson_number']))
                {
                    $lesson_number  = $_GET['lesson_number'] ;

                    $string_lesson = $_COOKIE['loginLesson'] ;
                    $integer_lesson  = (int)$string_lesson ;
                    $new_integer_lesson  = $integer_lesson + 1 ;

                    setcookie('loginLesson'   , $new_integer_lesson , time() + 3000 , '/')  ;
                }

                $data_base = new SQLite3('DB/Adaptive.db') ;
                $statement = $data_base->prepare('update  Checkpoint Set "Lesn_id"=:lesn_id Where "Std_id"=:std_id');
                $statement->bindValue(':lesn_id', $new_integer_lesson);
                $statement->bindValue(':std_id', $_COOKIE['logincookie']);
                $statement->execute();
                $raw_result = $data_base->query("Select Lesson_id , Lesson_num from Main_Lesson") ;

                while ($row = $raw_result->fetchArray())
                {

                    if ($row['Lesson_id'] == $lesson_number)
                    {
                        $lesson_name = $row['Lesson_num'];
                    }
                    if ($_GET['lesson_number'] > 6 )
                    {
                        $lesson_name = "cong.mp4" ;
                    }
                }
            //  UPDAte Data base Table
                    ?>

        <video src="<?php echo "videos/".$lesson_name ; ?>"  style="width:100%;height:450px" controls></video>
        <div class="w3-container">
           <h2 style="color: orange"><a href="<?php echo "rate.php?lesson_name=".$lesson_name ; ?>" target="_blank">Rate This Lesson</a></h2>
        </div>
</div>
</body>
</html>
<?php
if (isset($_GET['golog']))
{
    $data_base = new SQLite3('Adaptive.db') ;
    $raw_result = $data_base->query("Select Email , Password, Student_id, Name , DOB from Student") ;

    while ($row = $raw_result->fetchArray())
    {
        if ($row['Email'] ==  $_GET['email']  && $row['Password'] == $_GET['password'])
        {
            $the_name = $row['Name'] ;
            $the_id = $row['Student_id'] ;
            $the_email  = $row['Email'] ;
            $the_DOB = $row['DOB'] ;
            $the_lesson_id = "" ;



              $raw_result2 = $data_base->query("Select Std_id  , Lesn_id from Checkpoint") ;
              while ($row2 = $raw_result2->fetchArray())
              {
                   if ($the_id  == $row2['Std_id'])
                      {
                      $the_lesson_id  = $row2['Lesn_id'] ;
                      }
              }



            setcookie('logincookie' , $the_id, time() + 3000 , '/')  ;
            setcookie('loginname'   , $the_name, time() + 3000 , '/')  ;
            setcookie('loginLesson'   , $the_lesson_id, time() + 3000 , '/')  ;
            setcookie('loginDOB'   , $the_DOB, time() + 3000 , '/')  ;
            setcookie('loginEmail'   , $the_email, time() + 3000 , '/')  ;
            header('Location: index.php');
        }

        else
        {
            echo "<div class='alert' style='padding: 20px;background-color: #f44336;color: white;'>
            <span class='closebtn' &times;</span> 
              Error ! Invalid Data</div>" ;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eldad | Log in</title>
    <link href="css/login.css" rel="stylesheet">
    <link rel="icon" href="img/rocket.ico">
    <link rel="stylesheet" href="css/navbar.css">

</head>

<body>
<nav class="navbar">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="forumindex.php">Forum</a></li>
        <li><a href="#">Chat</a></li>

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
<div class="login">
    <div class="login-triangle"></div>
    <h2 class="login-header">Log in</h2>
    <form class="login-container" method="get" action="">
        <p><input type="email" placeholder="Email" name="email"></p>
        <p><input type="password" placeholder="Password" name="password"></p>
        <p><input type="submit" value="Log in" name="golog"></p>
        <a href="signup.php" style="color: red">Sign up !</a>
    </form>

</div>
</body>
</html>
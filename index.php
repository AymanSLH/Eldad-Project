<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eldad | Home</title>
    <link rel="icon" href="img/rocket.ico">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="script" href="js/index.js">
</head>
<body>

<main>
    <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="">Forum</a></li>
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
                    echo "signup.html" ;
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


                    <form method="get" action="<?php
                    if(isset($_COOKIE['logincookie']))
                    {
                        echo "?????" ; /// The URL for profile Or resume ?
                    }
                    else
                    {
                        echo "signup.html" ;
                    }
                    ?>">
                        <div class="intro">
                            <p>Start your Journey Today and Learn to code</p>
                            <input type="submit" id="blo" value="<?php
                            if(isset($_COOKIE['logincookie']))
                            {
                                echo "Resume Learning" ;
                            }
                            else
                            {
                                echo "Start !" ;
                            }
                            ?>" name="signup2">

                        </div>
                    </form>



</body>
</html>
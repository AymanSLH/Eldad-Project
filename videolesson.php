<!DOCTYPE html>
<html>
<title>Eldad Lesson</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/video.css">
<link rel="icon" href="img/rocket.ico">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
    <h3 class="w3-bar-item">Menu</h3>
    <a href="#" class="w3-bar-item w3-button">Link 1</a>
    <a href="#" class="w3-bar-item w3-button">Link 2</a>
    <a href="#" class="w3-bar-item w3-button">Link 3</a>
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

    </div>

    <video src="videos/momo.mp4"  style="width:100%;height:450px" controls>
    </video>
    <div class="w3-container">
       <h3>Rate This Lesson</h3>
        <div class="rating">
            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
        </div>
    </div>
</div>

</body>
</html>

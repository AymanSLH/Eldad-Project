<?php
    if (isset($_GET['gosign'])) {
        $Get_Name = $_GET['Name'];
        $Get_Email = $_GET['Email'];
        $Get_DOB = $_GET['DOB'];
        $Get_Password = $_GET['Password'];
        $db = new SQLite3('DB/Adaptive.db');
        $statement = $db->prepare('insert into Student ("Name" ,"DOB",  "Email" , "Password") VALUES (:Name ,:DOB , :Email,:Password)');
        $statement->bindValue(':Name', $Get_Name);
        $statement->bindValue(':DOB', $Get_DOB);
        $statement->bindValue(':Email', $Get_Email);
        $statement->bindValue(':Password', $Get_Password);
        $statement->execute();

    /*
     * Below is start of part 2 # Ayman !
     */
        $raw_result = $db->query("Select Student_id , Email from Student");
        while ($row = $raw_result->fetchArray()) {
            if ($row['Email'] == $Get_Email) {
                $the_id = $row['Student_id'];
                $statement = $db->prepare('insert into Checkpoint ("Std_id" ,"Lesn_id") VALUES (:Std_id ,:Lesn_id)');
                $statement->bindValue(':Std_id', $the_id);
                $statement->bindValue(':Lesn_id', 1);
                $statement->execute();
                setcookie('logincookie', $the_id, time() + 3000, '/');
                setcookie('loginname', $Get_Name, time() + 3000, '/');
                setcookie('loginLesson', 1 , time() + 3000, '/');
                setcookie('loginDOB'   , $Get_DOB, time() + 3000 , '/')  ;
                setcookie('loginEmail'   , $Get_Email, time() + 3000 , '/')  ;
                header('Location: index.php');
            }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Eldad | Signup</title>
    <link rel="icon" href="img/rocket.ico">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>


<div class="container">
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
    <form method="get" action="">
        <h1>Sign Up</h1>
        <p>Create an account now</p>
        <br>
        <label>Name:</label><br>
        <input type="text" name="Name" required><br>

        <label>Date Of Birth:</label><br>
        <input type="text" name="DOB" placeholder="DD/MM/YY" required><br>

        <label>Email:</label><br>
        <input type="email"  name="Email" required><br>

        <label>Password:</label><br>
        <input type="password" name="Password" required><br>

        <button type="submit" name="gosign">Sign Up</button>
        <a href="login.php" style="color: red">Have account ? Log in </a>
        </form>
<!--    </div>-->
</body>
</html>

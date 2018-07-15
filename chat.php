<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/w3.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/chat.css" rel="stylesheet">


    <title>Chat | Eldad</title>
</head>
<body>

<?php
if (!isset($_COOKIE['logincookie']))
{
    header("Location:sorry.php") ;
}
?>

<?php
$data_base = new SQLite3('DB/chat.db') ;
$raw_result = $data_base->query("Select * from chat order by id desc ") ;
?>


<nav class="navbar">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="forumindex.php">Forum</a></li>
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
<h2>Messages</h2>
<form method="get" action="chat_redirector.php">
            <div class="container darker">
                <textarea name="enter_message" placeholder="Enter Message"></textarea>
                <button type="submit" name="submit" class="w3-button w3-block w3-round-large w3-indigo">Send</button>
            </div>
            </form>
<?php while ($row = $raw_result->fetchArray()): ?>

<div class="container">
    <img src="<?php $num = rand(1,8) ; echo "avatars/".$num.".png";  ; ?>" alt="Avatar" style="width:100%;">
    <p style="color: red" id="koko"><?php echo $row['user_name']." : " ; ?></p>
    <p><?php echo $row['msg'] ; ?></p>
    <span class="time-right"> <?php echo $row['date'] ;  ?> </span>
</div>
<?php endwhile; ?>

</body>
</html>

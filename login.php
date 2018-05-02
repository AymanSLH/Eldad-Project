<?php
if (isset($_GET['golog']))
{
    $data_base = new SQLite3('adaptive') ;
    $raw_result = $data_base->query("Select email , password, id  , name from student") ;

    while ($row = $raw_result->fetchArray())
    {
        if ($row['email'] ==  $_GET['email']  && $row['password'] == $_GET['password'])
        {
            $the_id = $row['id'] ;
            $the_name = $row['name'] ;
            setcookie('logincookie' , $the_id, time() + 3000 , '/')  ;
            setcookie('loginname'   , $the_name, time() + 3000 , '/')  ;
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
    <title>Title</title>
    <link href="css/login.css" rel="stylesheet">
</head>


<body>
<div class="login">
    <div class="login-triangle"></div>

    <h2 class="login-header">Log in</h2>

    <form class="login-container" method="get" action="">
        <p><input type="email" placeholder="Email" name="email"></p>
        <p><input type="password" placeholder="Password" name="password"></p>
        <p><input type="submit" value="Log in" name="golog"></p>
    </form>

</div>
</body>
</html>
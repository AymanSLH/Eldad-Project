<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link href="css/login.css" rel="stylesheet">
</head>
<body>

    <?php
        $data_base =  new SQLite3('adaptive') ;
        

    ?>
<div class="login">
    <div class="login-triangle"></div>

    <h2 class="login-header">Log in</h2>

    <form class="login-container">
        <p><input type="email" placeholder="Email"></p>
        <p><input type="password" placeholder="Password"></p>
        <p><input type="submit" value="Log in"></p>
    </form>
</div>
</body>
</html>
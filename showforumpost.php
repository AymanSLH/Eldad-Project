<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/comment.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/comment.js"></script>
    <link href="css/onepost.css" rel="stylesheet">
    <link href="img/rocket.ico" rel="icon">
    <title>Post | Eldad</title>
</head>
<body>
<?php
$our_post = "" ;
if (isset($_GET['pid']))
{
    $our_post = $_GET['pid'] ;
}
$data_base = new SQLite3('DB/forum.db') ;
$raw_result = $data_base->query("Select * from Posts") ;
while ($row = $raw_result->fetchArray()) :
if ($row['id'] == $our_post):
?>
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
        <h3><?php echo $row['title'] ; ?> </h3>
<h6>
    <?php echo $row['stamp'] ; ?>
</h6>

<h6>
    <?php echo $row['author'] ; ?> :
</h6>
        <p>
            <?php echo $row['matan'] ; ?>
        </p>


<?php endif;?>
<?php endwhile;?>
<div class="container">
    <div class="row">
        <h3>Add Your Comment : </h3>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="widget-area no-padding blank">
                <div class="status-upload">
                    <form>
                        <textarea placeholder="What do you Think ?" ></textarea>
                        <button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Post </button>
                    </form>
                </div><!-- Status Upload  -->
            </div><!-- Widget Area -->
        </div>
    </div>
</div>

</body>
</html>
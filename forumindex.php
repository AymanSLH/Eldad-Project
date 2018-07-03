<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forum | Eldad Project </title>
    <link href="css/whole.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="img/rocket.ico" rel="icon">
</head>
<body>

<?php
    if (!isset($_COOKIE['logincookie']))
    {
        header("Location:sorry.php") ;
    }
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
<header>
    <h3 class="site-title">Title</h3>
    <ul>
        <li>Blog</li>
        <li><a href="createforumpost.php" style="color: red"> Create New Post</a></li>
    </ul>
</header>

            <?php
            $data_base = new SQLite3('forum.db') ;
            $raw_result = $data_base->query("Select * from Posts") ;
            while ($row = $raw_result->fetchArray()) :
            ?>
<section>
    <article>
        <div class="article-wrapper">
            <div class="blog-label">
                <div class="home-label">
                    <h4 class="home-label-title">Forum</h4>
                </div>
            </div>
            <div class="blog-list-home">
                <div class="blog-list-content">
                    <h4><?php echo $row['title'] ; ?></h4>
                    <h6><?php echo $row['stamp'] ; ?></h6>
                    <?php echo $row['matan'] ; ?>
                    <br>
                    <a href="<?php echo "showforumpost.php?pid=".$row['id'] ; ?>" >Continue Reading >> </a>
                </div>
            </div>
</section>
<?php endwhile; ?>

</body>
</html>
​



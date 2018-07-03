<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/rocket.ico">
    <link href="css/profile.css" rel="stylesheet" >
    <link href="css/profilebootstrap.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/navbar.css" rel="stylesheet">
    <title>Profile | Eldad Project </title>
</head>
<body>
<?php
if (!isset($_COOKIE['logincookie']))
{
    header("Location:sorry.php") ;
}
?>
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

    <div class="row">
        <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
            
            <?php
            if (isset($_GET['out']))
            {
                setcookie('logincookie' , $the_id, time() - 3000 , '/')  ;
                setcookie('loginname'   , $the_name, time() - 3000 , '/')  ;
                setcookie('loginLesson'   , $the_lesson_id, time() - 3000 , '/')  ;
                setcookie('loginDOB'   , $the_DOB, time() - 3000 , '/')  ;
                setcookie('loginEmail'   , $the_email, time() - 3000 , '/')  ;
                header('Location: index.php');

            }
            ?>
            <form method="get" action="">
             <input type="submit" value="Logout" name="out">
            </form>


            <br>
            <p class=" text-info"><?php echo "Today is " . date("Y-m-d")  ?></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $_COOKIE['loginname'] ; ?></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="img/under-construction-96.png" class="img-circle img-responsive">
                            <a href="#" class="btn btn-success"> Upload Photo </a>
                        </div>
                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td>Progress in Course </td>
                                    <td> You are in Lesson Number <?php echo $_COOKIE['loginLesson']; ?> </td>
                                </tr>
                                <tr>
                                    <td>Date of Birth </td>
                                    <td> <?php echo $_COOKIE['loginDOB']; ?> </td>
                                </tr>

                                <tr>
                                    <td>Gender</td>
                                    <td> N A </td>
                                </tr>
                                <tr>
                                    <td>Home Address</td>
                                    <td>  NA </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><a href="mailto:"><?php echo $_COOKIE['loginEmail']; ?></a></td>
                                </tr>
                                <td>Phone Number</td>
                                <td>N A  (Landline)<br><br> NA (Mobile)
                                </td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="<?php echo "http://localhost/Eldad-Project/videolesson.php?lesson_number=".$_COOKIE['loginLesson'] ; ?>" class="btn btn-primary">Resume Learning</a>
                            <a href="reset.php" class="btn btn-danger">Reset Account Progress </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
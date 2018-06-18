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

<div class="container">

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

    <div class="row">
        <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
            <A href="#" >Logout</A>
            <br>
            <p class=" text-info"><?php echo "Today is " . date("Y-m-d")  ?></p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">USER NAME</h3>
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
                                    <td> ?????  </td>
                                </tr>
                                <tr>
                                    <td>Date of Birth </td>
                                    <td>06/23/2013</td>
                                </tr>

                                <tr>
                                    <td>Gender</td>
                                    <td>Female</td>
                                </tr>
                                <tr>
                                    <td>Home Address</td>
                                    <td>Kathmandu,Nepal</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><a href="mailto:info@support.com">info@support.com</a></td>
                                </tr>
                                <td>Phone Number</td>
                                <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                                </td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="#" class="btn btn-primary">Resume Learning</a>
                            <a href="#" class="btn btn-danger">Delete Account </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
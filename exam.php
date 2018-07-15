<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>PHP Quiz</title>
	<link rel="stylesheet" type="text/css" href="css/exam.css" />
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
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
	<div id="page-wrap">
		<h1>Final Exam</h1>
		<form action="grade.php" method="get" id="quiz">
            <ol>
                <li>
                    <h3 style="color:red">Which of the following is opposite of addition :</h3>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Multiply </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Subtraction</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Division </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) None of the above</label>
                    </div>
                
                </li>
                <li>
                    <h3 style="color:red"> A prime number can divide by :</h3>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) One </label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Itself </label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) Both A & B </label>
                    </div>
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) None of them </label>
                    </div>
                </li>
                <li>
                    <h3 style="color:red">This number is a fraction : </h3>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A)56</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) 14</label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) 0.5 </label>
                    </div>
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) 7 </label>
                    </div>
                </li>
                <li>
                    <h3 style="color:red">A Multiplication ...</h3>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) Adding one number to another</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) See how number contains another </label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) i dont know</label>
                    </div>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Add number many times to itself equal to other number </label>
                    </div>
                </li>
                <li>
                    <h3 style="color:red">Your favorite website is</h3>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) Eldad </label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B)Eldad</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) Eldad</label>
                    </div>
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D)  Eldad </label>
                    </div>
                </li>
            </ol>
            <button type="submit" class="w3-indigo w3-block w3-round w3-wide w3-large"> Submit Answers</button>
		</form>
	</div>
</body>
</html>
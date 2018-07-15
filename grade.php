<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="css/w3.css" rel="stylesheet">
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/exam.css" />
    <link rel="stylesheet" href="buttoot.css">
</head>

<body>

	<div id="page-wrap">

		<h1>Final Quiz </h1>
		
        <?php
       if (isset($_GET['question-1-answers']) && isset($_GET['question-2-answers']) && isset($_GET['question-3-answers']) && isset($_GET['question-4-answers']) && isset($_GET['question-5-answers'])) {
           $answer1 = $_GET['question-1-answers'];
           $answer2 = $_GET['question-2-answers'];
           $answer3 = $_GET['question-3-answers'];
           $answer4 = $_GET['question-4-answers'];
           $answer5 = $_GET['question-5-answers'];
       }
       else {
           die("You must solve all Questions !") ;
       }
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5 == "A") { $totalCorrect++; }

        $db = new SQLite3('DB/stata.db');
        $statement = $db->prepare('insert into grades ("std_id" ,"grade") VALUES (:std_id,:grade)');
        $statement->bindValue(':std_id', $_COOKIE['logincookie']);
        $statement->bindValue(':grade', $totalCorrect);
        $statement->execute();

            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            $val  = $totalCorrect/5 ;
            $val = $val * 100 ;

        ?>
        <br>
        <div class="w3-light-grey w3-round">
            <div class="w3-container w3-round w3-blue" style="<?php echo "width:".$val."%" ; ?>"><?php echo $val."%" ; ?></div>
        </div>
            <br>
            <br>

        <form action="index.php">
            <button type="submit"  class="w3-large w3-wide w3-round w3-block w3-khaki w3-xlarge">Ok</button>
        </form>
	
	</div>
	


</body>

</html>
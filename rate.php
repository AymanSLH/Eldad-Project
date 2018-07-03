<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/rate.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
        <form method="get" action="saverate.php">
            <h2 style="text-align: center">How Much do you Like The video ? </h2>
            <input type="submit" value="&#x21A9 Save and Back To lessons " name="rate" id="handi">
            <input type="hidden" name="lesson_name" value="<?php echo $_GET['lesson_name'] ;?>">
            <section id="like" class="rating">
                <!-- FIFTH HEART -->
                <input type="radio" id="heart_5" name="like" value="5" />
                <label for="heart_5" title="Five">&#10084;</label>
                <!-- FOURTH HEART -->
                <input type="radio" id="heart_4" name="like" value="4" />
                <label for="heart_4" title="Four">&#10084;</label>
                <!-- THIRD HEART -->
                <input type="radio" id="heart_3" name="like" value="3" />
                <label for="heart_3" title="Three">&#10084;</label>
                <!-- SECOND HEART -->
                <input type="radio" id="heart_2" name="like" value="2" />
                <label for="heart_2" title="Two">&#10084;</label>
                <!-- FIRST HEART -->
                <input type="radio" id="heart_1" name="like" value="1" />
                <label for="heart_1" title="One">&#10084;</label>
            </section>

        </form>
</body>
</html>
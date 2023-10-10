<!doctype html>
<html lang='en'>

<head>
    <title>Results</title>
    <meta charset='utf-8'>
    <link href=data: , rel=icon>

    <style>
    .correct {
        color: green;
    }

    .incorrect {
        color: red;
    }
    </style>
</head>

<body>

    <h1>Results</h1>

    <?php if ($haveAnswer == false) { ?>
    Please enter an answer.
    <?php } elseif ($correct) { ?>
    <div class='correct'>You got it correct! :-)</div>
    <?php } else { ?>
    <div class='incorrect'>Sorry, that is not correct. :-(</div>
    <?php } ?>

    <a href='index.php'>Play again...</a>

</body>

</html>
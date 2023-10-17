<!doctype html>
<html lang='en'>

<head>
    <title>Mystery Word Scramble</title>
    <meta charset='utf-8'>

    <style>
    .results {
        margin-top: 20px;
        font-weight: bold;
        font-size: 16px;
    }

    .correct {
        color: green;
    }

    .incorrect {
        color: red;
    }

    .word,
    .hint {
        font-weight: bold;
    }
    </style>
</head>

<body>

    <form method='POST' action='process.php'>
        <h1>Mystery Word Scramble</h1>

        <p>Mystery word: <span class='word'><?php echo $wordScrambled ?></span>
        </p>
        <p>Hint: <span class='hint'><?php echo $hint ?></span>
        </p>

        <label for='answer'>Your guess:</label>
        <input type='text' name='answer' id='answer'>

        <button type='submit'>Check answer</button>
    </form>

    <?php if (isset($results)) { ?>
    <div class='results'>
        <?php if ($haveAnswer == false) { ?>
        Please enter an answer.
        <?php } elseif ($correct) { ?>
        <div class='correct'>✅ Correct! </div>
        <?php } else { ?>
        <div class='incorrect'>❌ Incorrect. Please try again.</div>
        <?php } ?>
    </div>
    <?php } ?>

</body>

</html>
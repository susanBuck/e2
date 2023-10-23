<!doctype html>
<html lang='en'>

<head>
    <title>Project 2 - Heads or Tails</title>
    <meta charset='utf-8'>
    <link href=data: , rel=icon>

    <link href='/styles.css' rel='stylesheet'>
</head>

<body>
    <img id='logo' alt='Heads or Tails logo' src='/images/heads-or-tails-logo.png'>

    <div id='instructions'>
        <h2>Instructions</h2>
        <p>Pick a side, heads or tails.</p>
        <p>We’ll flip a coin and if it lands on the side you chose, you win!</p>
    </div>

    <form method='POST' action='process.php'>

        <div id='choices'>
            <input type='radio' id='heads' name='choice' value='heads'
                   <?php echo (!isset($choice) or $choice == 'heads') ? 'checked' : '' ?>><label
                   for='heads'><img src='/images/coin-heads@2x.png' class='coin'></label>
            <input type='radio' id='tails' name='choice' value='tails'
                   <?php echo (isset($choice) and $choice == 'tails') ? 'checked' : '' ?>><label
                   for='tails'><img src='/images/coin-tails@2x.png' class='coin'></label>
        </div>

        <button type='submit'>Flip!</button>
    </form>

    <?php if (isset($results)) { ?>
    <div id='results'>

        <p class='flip'>
            The coin landed on: <br>
            <img src='/images/coin-<?php echo $flip ?>@2x.png'
                 class='coin'>
        </p>

        <?php if ($winner) { ?>
        <p class='won'>You won the toss. 😃</p>
        <?php } else { ?>
        <p class='lost'>You lost, please try again. 🙁</p>
        <?php } ?>

        <?php } ?>
    </div>


</body>

</html>
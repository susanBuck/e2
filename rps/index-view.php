<!doctype html>
<html lang='en'>

<head>

    <title>RPS with an external package</title>
    <meta charset='utf-8'>

    <style>
    #play {
        background-color: #eee;
        padding: 10px;
        width: 300px;
    }

    #play h2 {
        margin: 0 0 15px 0;
    }


    #play button {
        display: block;
        margin-top: 20px;
    }
    </style>

</head>

<body>
    <h1>RPS with an external package</h1>

    <section id='instructions'>
        <h2>Instructions</h2>
        <p>
            It’s you vs. the computer! First choose a move: <em>rock</em>, <em>paper</em>, <em>scissors</em>, then
            <em>Shoot!</em>
        </p>

        <p>
            The computer will choose its move and the victor will be declared according to the following rules:
        </p>

        <ul>
            <li>Rock beats Scissors
            <li>Scissors beats Paper
            <li>Paper beats Rock
        </ul>

        <p>
            If you and the computer choose the same move, it’s a tie.
        </p>
    </section>

    <section id='play'>
        <h2>Play</h2>
        <form method='POST' action='process.php'>

            <?php foreach ($moves as $move) { ?>
            <input type='radio'
                   name='player'
                   value='<?php echo $move ?>'
                   id='<?php echo $move ?>'
                   <?php echo ($lastGame and $move == $lastGame['player']) ? 'checked' : '' ?>>
            <label for='<?php echo $move ?>'><?php echo ucfirst($move) ?></label>
            <?php } ?>

            <button type='submit'>Shoot!</button>
        </form>
    </section>

    <section id='results'>
        <?php if ($lastGame) { ?>
        <h2>Results</h2>
        <ul>
            <li>You chose <strong><?php echo $lastGame['player'] ?></strong>
            </li>
            <li>The computer chose <strong><?php echo $lastGame['computer'] ?></strong>
            </li>
            <li>
                <?php if ($lastGame['outcome'] == 'lost') { ?>
                You lost :(
                <?php } elseif ($lastGame['outcome'] == 'won') { ?>
                You won! :)
                <?php } else { ?>
                It was a tie.
                <?php } ?>
            </li>
        </ul>
        <?php } ?>
    </section>


    <section id='recentGames'>
        <?php if ($recentGames) { ?>
        <h2>Game history</h2>
        <?php foreach ($recentGames as $game) { ?>
        <ul>
            <li>Player chose: <?php echo $game['player'] ?>
            <li>Computer chose: <?php echo $game['computer'] ?>
            <li>Outcome: <?php echo $game['outcome'] ?>
            <li>Played at: <?php echo $game['timestamp'] ?>
        </ul>
        <?php } ?>
        <?php } ?>
    </section>

</body>

</html>
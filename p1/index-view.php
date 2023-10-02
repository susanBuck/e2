<!doctype html>
<html lang='en'>

<head>
    <title>Project 1</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
</head>

<body>
    <h1>Project 1</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>Player A randomly picks a coin side - heads or tails.</li>
        <li>A coin is randomly “flipped”, “landing” on either heads or tails.</li>
        <li>If the coin landed on the same side Player A chose, they win.</li>
        <li>Otherwise, Player B wins.</li>
    </ul>

    <h2>Results</h2>

    <ul>

        <li>Player A flipped <?php echo $playerA ?>
        </li>
        <li>Player B defaults to <?php echo $playerB ?>
        </li>
        <li>The coin landed on <?php echo $flip ?>
        </li>
        <li>The winner is <?php echo $winner ?>
        </li>
    </ul>

</body>
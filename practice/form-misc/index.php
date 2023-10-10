<!doctype html>
<html lang='en'>

<head>
    <title>Miscellaneous form input details</title>
    <meta charset='utf-8'>

    <style>
    h2 {
        font-size: 12pt;
    }

    div {
        margin-bottom: 40px;
    }
    </style>
</head>

<body>

    <form method='GET' action='process.php'>

        <div>
            <h2>Demonstrating how text inputs always give you String values in form results, even if the user enters a
                number</h2>
            <label for='guess'>What the mystery number?</label>
            <input type='text' name='guess' id='guess'>
        </div>

        <div>
            <h2>Demonstrating how checkbox values are conveyed in form results</h2>
            <input type='checkbox' value='yes' name='subscribe' id='subscribe'>
            <label for='subscribe'>Subscribe to our newsletter?</label>
        </div>

        <div>
            <h2>Demonstrating how values for a group of checkboxes are conveyed in form results</h2>
            <input type='checkbox' name='colors[]' value='red' id='red'>
            <label for='red'>Red</label>


            <input type='checkbox' name='colors[]' value='orange' id='orange'>
            <label for='orange'>Orange</label>

            <input type='checkbox' name='colors[]' value='yellow' id='yellow'>
            <label for='yellow'>Yellow</label>
        </div>

        <div>
            <h2>Demonstrating how values for a dropdown are conveyed in form results</h2>
            <label for='color'>What’s your favorite color</label>
            <select id='color' name='color'>
                <option>Choose one...</option>
                <option value='red'>Firetruck red</option>
                <option value='orange'>Pumpkin orange</option>
                <option value='yellow'>Sunshine yellow</option>
            </select>
        </div>

        <button type='submit'>Submit</button>
    </form>

</body>

</html>
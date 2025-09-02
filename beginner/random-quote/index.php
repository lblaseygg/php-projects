<?php
$quotes = ["Be yourself; everyone else is already taken.
― Oscar Wilde",

"I'm selfish, impatient and a little insecure. I make mistakes, I am out of control and at times hard to handle. But if you can't handle me at my worst, then you sure as hell don't deserve me at my best.
― Marilyn Monroe",

"So many books, so little time.
― Frank Zappa",

"Two things are infinite: the universe and human stupidity; and I'm not sure about the universe.
― Albert Einstein",

"A room without books is like a body without a soul.
― Marcus Tullius Cicero",

"Be who you are and say what you feel, because those who mind don't matter, and those who matter don't mind.
― Bernard M. Baruch",
];

// Makes a random index to use in random quote to generate a quote
$randIndex = rand(0, count($quotes) -1);
$randomQuote = $quotes[$randIndex];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Quote</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div>
        <p>
            <?php echo $randomQuote; ?>
        </p>
        <form>
            <input class="btn" type="submit" value="Refresh">
        </form>
    </div>
</body>
</html>
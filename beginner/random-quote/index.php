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

$randIndex = rand(0, count($quotes) -1);
$randomQuote = $quotes[$randIndex];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Quote</title>
</head>
<body>
    <p>
        <?php echo $randomQuote; ?>
    </p>
</body>
</html>
<?php
$quotes = ["quote1",
"quote2",
"quote3",
];

$randQuote = rand(0, count($quotes) -1);
echo $randQuote;
?>
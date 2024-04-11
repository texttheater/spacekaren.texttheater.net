<?php
$first = array(
    'Elmo',
    'Enron',
);
$last = array(
    'Mars',
    'Murks',
    'Skum',
);
$f = $first[array_rand($first, 1)];
$l = $last[array_rand($last, 1)];
?>
<!doctype html>
<html lang="de">
<title>Space Karen Name Generator</title>
<link rel ="stylesheet" type="text/css" href="style.css">
<main>
    <p><?= $f ?> <?= $l ?></p>
</main>
<footer>
    <p>
        <a href="https://texttheater.net/impressum">Impressum</a>
        <a href="https://texttheater.net/datenschutzerklaerung">Datenschutz</a>
        <a href="https://github.com/texttheater/spacekaren.texttheater.net">Fork me on GitHub</a>
    </p>
</footer>

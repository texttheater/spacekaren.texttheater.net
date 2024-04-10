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
<p><?= $f ?> <?= $l ?></p>
<a href="https://github.com/texttheater/spacekaren.texttheater.net"><img style="position: absolute; top: 0; right: 0; border: 0;" src="forkme_right_gray_6d6d6d.png" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png"></a>

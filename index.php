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
<title>Space Karen</title>
<link rel ="stylesheet" type="text/css" href="style.css">
<p><?= $f ?> <?= $l ?></p>

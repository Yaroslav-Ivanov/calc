<?php

use Calc\Calculator;

include '../vendor/autoload.php';

$calc = new Calculator(
    $_POST['a'],
    $_POST['b']
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>Калькулятор</h1>
Ответ: <span><?= $calc->{$_POST['op'] ?? "sum"}(); ?></span>
<form method="POST" action="?">
    <input type="text" name="a">
    <select name="op">
        <option value="div">/</option>
        <option value="mul">*</option>
        <option value="sum">+</option>
        <option value="dif">-</option>
    </select>
    <input type="text" name="b">
    <input type="submit" value="OK">
</form>
</body>

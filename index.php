<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    $numbers = range(0, 99);
    shuffle($numbers);

    $arr = array_slice($numbers, 90);
    var_dump($arr);

    $evens = array_filter($arr, 
        fn($item) => 
            $item % 2 === 0 ? $item : false
    );

    $sorted = $arr;
    $sorted = [...$arr];

    sort($sorted);

    var_dump($arr);
?>

<?php
    $numbers = range(0, 99);
    shuffle($numbers);
    $arr = array_slice($numbers, 90);
    
    $reverse = array_reverse($arr)
?>

<div>
    <p><b>Array: </b>
        <?= implode(', ', $arr) ?></p>
    <p><b>Reverse: </b>
        <?= implode(', ', $reverse) ?>
    </p>
</div>

<div>
    <p><b>Array: </b>
        <?= implode(', ', $arr) ?></p>
    <p><b>Evens: </b>
        <?= implode(', ', $evens) ?>
    </p>
    <p><b>[Max, Min]</b>
        [<?= max($arr)?>, <?= min($arr)?>]</p>
    <p><b>Sorted: </b>
        <?= implode(', ', $sorted) ?></p>
</div>

<!-- Создать массив из 10 элементов и заполнить его слу-
чайными числами от 10 до 100. Создать переменную,
записать в нее число и реализовать алгоритм поиска
данного числа в массиве. Если число было найдено,
вывести порядковый номер элемента, если нет — выве-
сти сообщение (No result for <Number>), где Number —
число. -->

<?php 
    $numbers = range(0, 99);
    shuffle($numbers);
    $array = array_slice($numbers, 90);

    $number = rand(0, 99);
    $index = array_search($number, $array);
?>

<div>
    <p><b>Array: </b>
        <?= implode(', ', $array) ?></p>
    <p>
        <?= $index 
            ? "Number $number found. Index: $index"
            : "No result for $number " ?>
    </p>
</div>

</body>
</html>
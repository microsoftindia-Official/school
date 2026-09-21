<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    for ($i = 1; $i <= 10; $i++) {
        echo $i . " ";
    }
    echo "<br><br>";

    for ($i = 10; $i >= 1; $i--) {
        echo $i . " ";
    }
    echo "<br><br>";

    $suma = 0;
    for ($i = 1; $i <= 10; $i++) {
        $suma += $i;
    }
    echo "Suma: " . $suma;
    echo "<br><br>";

    for ($i = 1; $i <= 10; $i++) {
        echo ($i * 2) . " ";
    }
    echo "<br><br>";

    $X = 12;
    $Y = 500;
    $kwota = 0;
    for ($m = 1; $m <= $X; $m++) {
        $kwota += $Y;
        $kwota += $kwota * 0.08;
    }
    echo "Zgromadzona kwota: " . round($kwota, 2) . " zl";
    echo "<br><br>";

    $n = 100;
    $a1 = 5;
    $r = 10;
    $suma = 0;
    $element = $a1;
    for ($i = 0; $i < $n; $i++) {
        $suma += $element;
        $element += $r;
    }
    echo "Suma ciagu: " . $suma;
    echo "<br><br>";

    $sumaCegiel = 0;
    for ($i = 10; $i >= 1; $i--) {
        $sumaCegiel += $i * $i;
    }
    echo "Liczba cegiel w piramidzie: " . $sumaCegiel;
    echo "<br><br>";

    $X = 20;
    $Y = 5;
    $Z = 2;
    $sumaCegiel = 0;
    $aktualnyRzad = $X;
    for ($i = 0; $i < $Y; $i++) {
        if ($aktualnyRzad <= 0) break;
        $sumaCegiel += $aktualnyRzad;
        $aktualnyRzad -= $Z;
    }
    echo "Liczba cegiel w scianie: " . $sumaCegiel;
    echo "<br><br>";

    $X = 20;
    $Y = 5;
    $Z = 2;
    $K = 2.5;
    $sumaCegiel = 0;
    $aktualnyRzad = $X;
    for ($i = 0; $i < $Y; $i++) {
        if ($aktualnyRzad <= 0) break;
        $sumaCegiel += $aktualnyRzad;
        $aktualnyRzad -= $Z;
    }
    $wagaCalkowita = $sumaCegiel * $K;
    echo "Waga sciany: " . $wagaCalkowita . " kg";
    echo "<br><br>";

    $a = 12;
    $b = 4;
    $operator = '/';
    switch ($operator) {
        case '+':
            $wynik = $a + $b;
            break;
        case '-':
            $wynik = $a - $b;
            break;
        case '*':
            $wynik = $a * $b;
            break;
        case '/':
            $wynik = ($b != 0) ? ($a / $b) : "Blad dzielenia przez zero";
            break;
        default:
            $wynik = "Nieznany operator";
    }
    echo "Wynik kalkulatora: " . $wynik;
    echo "<br><br>";

    $N = 8;
    $X = 3;
    $Y = 5;
    $element = $X;
    for ($i = 0; $i < $N; $i++) {
        echo $element . " ";
        $element += $Y;
    }
    echo "<br><br>";

    $liczby = [[5, 3], [10, -5], [4, -4]];
    foreach ($liczby as $para) {
        $a = $para[0];
        $b = $para[1];
        $suma = $a + $b;
        echo "Suma: " . $suma . "<br>";
        if ($suma == 0) break;
    }
    echo "<br>";

    $n = 5;
    $silnia = 1;
    for ($i = 1; $i <= $n; $i++) {
        $silnia *= $i;
    }
    echo "Silnia: " . $silnia;
    echo "<br><br>";

    $n = 5;
    $x = 2;
    for ($i = 0; $i < $n; $i++) {
        echo $x . " ";
        $x = $x * $x;
    }
    echo "<br><br>";

    $suma = 0;
    $ilosc = 10;
    echo "Liczby: ";
    for ($i = 0; $i < $ilosc; $i++) {
        $losowa = rand(50, 100);
        echo $losowa . " ";
        $suma += $losowa;
    }
    $srednia = $suma / $ilosc;
    echo "<br>Suma: " . $suma;
    echo "<br>Srednia: " . $srednia;
?>
</body>
</html>
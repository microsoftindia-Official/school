<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>zdanie</title>
</head>
<body>

<?php
    $sumaWszystkich = 0;
    $sumaParzystych = 0;
    $sumaNieparzystych = 0;
    $iloscPodzielnychPrzez3 = 0;

    for ($i = 1; $i <= 100; $i++) {
        $sumaWszystkich += $i;
        
        $opis = "";
        
        if ($i % 2 == 0) {
            $opis .= "parzysta";
            $sumaParzystych += $i;
        } else {
            $opis .= "nieparzysta";
            $sumaNieparzystych += $i;
        }
        
        if ($i % 3 == 0) {
            $opis .= ", podzielna przez 3";
            $iloscPodzielnychPrzez3++;
        }
        
        echo $i . " - " . $opis . "<br>";
}
?>

<br>
<strong>Suma wszystkich liczb:</strong> <?php echo $sumaWszystkich; ?><br>
<strong>Suma liczb parzystych:</strong> <?php echo $sumaParzystych; ?><br>
<strong>Suma liczb nieparzystych:</strong> <?php echo $sumaNieparzystych; ?><br>
<strong>Liczb podzielnych przez 3:</strong> <?php echo $iloscPodzielnychPrzez3; ?><br>

</body>
</html>
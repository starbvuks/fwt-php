<html>

<head>Arr Functions</head>

<body>
    <?php
    $players = array("A" => "Curry", "B" => "Bryant", "C" => "Jordan", "D" => "Durant", "E" => "Giannis");
    echo "<br>";

    $lower = array_change_key_case($players, CASE_LOWER);
    print_r($lower);

    echo "<br>";

    $chunk = array_chunk($players, 3);
    print_r($chunk);
    echo count($chunk);

    echo "<br>";

    print_r(array_reverse($players));
    ?>
</body>

</html>
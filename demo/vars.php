<html>

<head>
</head>

<body>
    <?php
    $var1 = "hello";
    $var2 = 21;

    echo "<h2>" . $var1 . "</h2><br>";
    echo "<b>" . $var2 . "</b><br>";

    $x = 54.23;
    var_dump($x);
    echo "<br>";

    $empty = null;
    $carry = !$empty;

    var_dump($empty);
    echo " | ";
    var_dump($carry);
    ?>
</body>

</html>
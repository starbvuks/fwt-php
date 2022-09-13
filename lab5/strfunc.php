<html>

<head>
    String Functions
</head>

<body>
    <?php
    static $str = "my name is Woxsen";
    static $str2 = "my name is woxsen";

    $lower = strtolower($str);
    $upper = strtoupper($str);
    $rev = strrev($str);
    $comp = strcmp($str, $str2);
    $len = strlen($str);
    $sub = substr($str, 7);

    echo "<p>$rev</p><br>";
    echo "<p>$lower</p><br>";
    echo "<p>$upper</p><br>";
    echo "<p>$comp</p><br>";
    echo "<p>$len</p><br>";
    echo "<p>$sub</p><br>";
    ?>
</body>

</html>
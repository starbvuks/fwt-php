<html>

<head>
    <title>Loops</title>
</head>

<body>

    <?php
    function tables($n)
    {
        for ($i = 0; $i <= $n; $i++) {
            echo $n . "*" . $i . "=" . $n*$i;
            echo "<br>";
        }
    }

    tables(4)
    ?>

</body>

</html>
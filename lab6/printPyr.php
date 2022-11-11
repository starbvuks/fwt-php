<html>

<head>
    <title>Loops</title>
</head>

<body>

    <?php
    function printPyr($n)
    {
        for ($i = 0; $i <= $n; $i++) {
            for ($j = 0; $j <= $i; $j++) {
                echo '*';
            }
            echo "<br>";
        }
    }

    printPyr(4)
    ?>

</body>

</html>
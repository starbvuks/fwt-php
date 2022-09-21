<html>

<head>
    <title>Loops</title>
</head>

<body>

    <?php
    function printPyr($n)
    {
        for ($i = 0; $i <= $n; $i++) {
            for ($j = 0; $j <= $n - $i; $j++) {
                echo "&nbsp&nbsp";
            }
            for ($k = 0; $k <= $i; $k++) {
                echo '*';
            }
            echo "<br>";
        }
    }

    printPyr(4)
    ?>

</body>

</html>
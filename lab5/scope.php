<html>

<head>Scope</head>

<body>
    <?php
    $global = "global hi";

    function scopeCheck()
    {
        global $global;
        $local = "local hi";

        static $num = 3;
        $num--;

        echo "<p>$global <br> $local <br> $num</p>";
    }
    scopeCheck();
    scopeCheck();
    scopeCheck();
    ?>
</body>

</html>
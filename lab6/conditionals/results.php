<html>

<head>
    <title>Loops</title>
</head>

<body>

    <?php
    $result = 69;

    switch($result) {
        case $result<20:
            echo "Re-attempt";
            break;
        case $result<50:
            echo "Mechatronics";
            break;
        case $result<75:
            echo "CSE";
            break;
        case $result<90:
            echo "Mtech";
            break;
        default:
            echo "Dropout";
            break;
    }

    ?>

</body>

</html>
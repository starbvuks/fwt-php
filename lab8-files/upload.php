<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $name = $_FILES['file']['name'];
    $size = $_FILES['file']['size'];
    $tmp = $_FILES['file']['tmp_name'];
    $type = $_FILES['file']['type'];
    $ext = explode('.', $_FILES['file']['name']);
    $file_ext = end($ext);

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "extension not allowed, choose a JPEG or PNG file.";
    }

    if ($size > 2097152) {
        $errors[] = 'Max file size is 2MB';
    }

    if (empty($errors) == true) {
        move_uploaded_file($tmp, "images\\" . $name);
        echo "Success";
    } else {
        print_r($errors);
    }
}
?>
<html>

<body>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" />
        <input type="submit" />
    </form>

    <ul>
        <li>Sent file: <?php echo $name;  ?>
        <li>File size: <?php echo $size;  ?>
        <li>File type: <?php echo $type ?>
    </ul>

</body>

</html>
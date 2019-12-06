<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <style></style>
    <script></script>
</head>

<body>
    <?php
    ini_set('display_errors', 1);
    $uploaddir = '/var/www/html/files/uploads/';
    if (!is_dir($uploaddir)) {
        mkdir($uploaddir, 0777, $recursive = true);
    }
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    echo '<pre>';
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo 'File valid. Upload successful.';
    } else {
        print "Possible file upload attack!";
    }
    echo 'Debugging details : ';
    print_r($_FILES);
    print "</pre>";
    ?>
</body>

</html>
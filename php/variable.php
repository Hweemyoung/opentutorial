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
    $a = 1;
    echo $a+1;
    echo "<br>";
    print $a+2;
    echo '<br>';
    define('TITLE', 'CONSTANT1');
    echo TITLE;
    define('TITLE', 'CONSTANT2');
    echo gettype($a);
    settype($a, 'double');
    echo "<br>";
    echo gettype($a);
    $string1 = 'string2';
    $$string1 = 2;
    echo "<br>";
    echo $string1;
    echo "<br>";
    echo $string2;
    echo "<br>";
    echo $$string2;

    ?>
</body>
</html>
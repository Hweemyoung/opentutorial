<?php
ini_set("display_errors", "1");
session_start();
session_destroy();
// header('Location: ./login.php');
?>
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
        echo empty($_SESSION['id']).'<br>';
        echo 'Session destroyed.<br>'
    ?>
    <button onclick="window.location.href = './login.php'">Return to login.php</button>
</body>

</html>
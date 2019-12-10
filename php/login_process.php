<?php
session_start();
$id = 'HMK';
$pwd = 'PWD';
if (!empty($_POST['id']) && !empty($_POST['pwd'])) {
    if ($_POST['id'] == $id && $_POST['pwd'] == $pwd) {
        $_SESSION['is_login'] = true;
        $_SESSION['nickname'] = 'hweem';
        header('Location: ./login_session.php');
        exit;
    }
}
echo '로그인 하지 못했습니다.<br>';
echo empty($_SESSION['id']) . '<br>';
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
    <button onclick="window.location.href = './login.php'">Return to login.php</button>
</body>

</html>
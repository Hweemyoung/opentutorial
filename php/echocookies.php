<?php
echo $_COOKIE['cookie1'] . '<br>';
if (array_key_exists('cookie2', $_COOKIE)) {
    echo 'Since initiation of setcookie.php: ';
    echo time() - $_COOKIE['cookie2'];
} else {
    echo 'Cookie had not been created or already been expired.';
}
?>

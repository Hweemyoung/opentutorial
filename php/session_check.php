<?php
ini_set("display_errors", "1");
session_save_path('./save_path/');
session_start();
echo $_SESSION['title'].'<br>';
echo file_get_contents('./save_path/sess_'.session_id());
?>
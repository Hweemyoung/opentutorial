<?php
if(!is_dir('./save_path/')){
    mkdir('./save_path/', 0777, true);
}
session_save_path('./save_path/');
session_start();
$_SESSION['title'] = 'HMK';
?>
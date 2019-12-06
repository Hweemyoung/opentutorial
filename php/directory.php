<?php
echo getcwd().'<br>';
chdir('../');
// chdir('/var/s/');
echo getcwd().'<br>';

chdir('./files/');
$dir = './';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

print_r($files1);
echo '<br>';
print_r($files2);

mkdir('dir1/dir2/dir3', 0700, 1);
?>
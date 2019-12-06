<?php
$file = 'readme.txt';
$newfile = 'readme_copy.txt.bak';

if(!copy($file, $newfile)){
    echo 'Failed to copy<br>';
}

echo 'Exists: '.file_exists($file).'<br>';
echo 'Readable: '.is_readable($file).'<br>';
echo 'Writable: '.is_writable($file).'<br>';

?>
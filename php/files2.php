<?php
$newfile = 'readme_copy.txt.bak';

echo 'Exists: '.file_exists($newfile).'<br>';
if(!unlink($newfile)){
    echo 'Failed to unlink<br>';
}
echo 'Exists: '.file_exists($newfile).'<br>';
?>
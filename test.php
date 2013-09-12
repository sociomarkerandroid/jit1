<?php
$files = array();
$dir = opendir('css/');
while ($file = readdir($dir)) {
    if ($file == '.' || $file == '..') {
        continue;
    }
    $files[] = $file;
}
echo json_encode($files);
?>
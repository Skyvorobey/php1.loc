<?php
function return_file($thisFile) {
    return file_get_contents(__DIR__ . '/../../' . $thisFile);
}
?>
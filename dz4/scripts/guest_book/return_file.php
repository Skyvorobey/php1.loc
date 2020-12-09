<?php
function returnsFile($thisFile) {
    while (!feof($thisFile)) {
        $str = fgets($thisFile);
        echo $str;
    }
    fclose($thisFile);
}
?>
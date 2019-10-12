<?php
function copyrightDate($years) {
    if($years >= date('Y')){
        echo '&copy; ' . date('Y');
    } else {
        echo '&copy; ' . $years . ' - ' . date('Y');
    }
}
copyrightDate(2015);

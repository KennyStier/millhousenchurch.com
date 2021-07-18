<?php

//Convert it into a Unix timestamp using strtotime.
$file = '../js/alert.js';
$timestamp = strtotime($_POST["date"]);
//Print it out.
$js = 'var message = "' .$_POST["message"]. '"; var unix = ' .$timestamp.';';
file_put_contents($file, $js);

if (file_get_contents($file) == $js) {
    echo "Set message successfully";
} else {
    echo "Failed to set message";
}

?>
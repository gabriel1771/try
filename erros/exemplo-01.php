<?php

function teste($code, $message, $file, $line){

    echo json_encode(array(
        "code"=>$code,
        "message"=>$message,
        "fine"=>$file,
        "lile"=>$line
    ));

}

set_error_handler("teste");

echo $a;

?>

?>
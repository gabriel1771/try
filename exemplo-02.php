<?php

function trataNome($name){
    if(!$name){
        throw new Exception("nenhum nome foi informado", 1);
        
    }else{
        echo $name ."<br>";
    }
}


try{
    trataNome("gabriel");
    trataNome("");
}catch(Exception $e){
    echo $e->getMessage() ."<br>";
} finally{
    echo "try foi executado por favor entre em contato com o desenvolvedor do projeto";
}


?>
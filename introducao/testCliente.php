<?php
    include "cliente.class.php";

    $obj = new Cliente();
    $obj->nome = "Fernanda" ;
    $obj->telefone = "33141162" ;
    $obj->email = "gabrieelbeello@gmail.com" ;
    $obj->cpf = "178.567.157-07" ;

    echo $obj->nome ;



?>
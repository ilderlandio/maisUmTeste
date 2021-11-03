<?php
$nome = $_POST['nome'];
$idade = $_POST['idade'];

$arq = fopen("cadastro.txt","a+");
fwrite($arq, $nome. "\r\n".$idade."\r\n");
fclose($arq);
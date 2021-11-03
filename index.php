<?php
if(is_dir("files")){
	echo "pasta ja criada";
}else{ 
 mkdir("files");
 echo "Diretório criado com sucesso!";
}

$file = fopen("files/cadastro.txt","a+");
fwrite($file, "Caio Victor Gaspar de Oliveira \r\n");
fclose($file);

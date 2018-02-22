<?php 

$name = "images";

if (!is_dir($name)){

	mkdir($name); //cria diretório

	echo "Diretório $name criado com sucesso!";

} else {

	rmdir($name); //exclue diretório
	echo "Já existe o diretório: $name foi removido";

}

 ?>
<?php

	if(!file_exists("portifolio.xml")){
		
		$fp = fopen("portifolio.xml","w");
		
		$conteudo_inicial = '<?xml version="1.0"?><portifolios></portifolios>';
		
		fwrite($fp,$conteudo_inicial);
		
		fclose($fp);
		
	}

    $arquivo = 'portifolio.xml';
    $xml = simplexml_load_file($arquivo);

	$nova_posicao = sizeof($xml->portifolio);

    $xml->portifolio[$nova_posicao]->nome = $_POST["nome"];
    $xml->portifolio[$nova_posicao]->link = $_POST["link"];
    $xml->portifolio[$nova_posicao]->data= $_POST["data"];
	$xml->portifolio[$nova_posicao]->files=$_POST["files"];
    

	$xml->asXML($arquivo);

	header("location:listar.php")
?>
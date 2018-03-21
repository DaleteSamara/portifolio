<?php 
   include ("cabecalho.php"); 

   if(file_exists("portifolio.xml")){
   header('content-type:text/html; charset=utf-8');
   $xml = simplexml_load_file('portifolio.xml');
        echo "
		
		<table border='1'>
			<th>Titulo</th>
			<th>Link</th>
			<th>Data</th>
			<th>Tipo arq</th>";
   }
   
   $contador=0;
   foreach($xml->portifolio as $portifolio){
	echo "<tr>
			<td>$portifolio->nome</td>
			<td><a href='$portifolio->link'>$portifolio->link</a></td>
			<td>$portifolio->data</td>
			<td>$portifolio->files</td>
	</tr>
		";
   }

   ?>
	 
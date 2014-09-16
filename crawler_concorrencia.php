<?php
	header('Content-type:text/plain;charset=utf8');
	error_reporting(E_ALL ^ E_DEPRECATED);

	$link = new mysqli('localhost','root','','pregoesindex') or die;

	$handle = fopen('concorrencia.csv', 'r');


	echo "<pre>";
	$x = 0;

    while (($linha = fgetcsv($handle, 1000, ";")) !== FALSE) {
    	   
    	   foreach($linha as $k => $v) $linha[$k] = utf8_encode(utf8_decode($v));

    	   echo $x++;
    	   	$query = "INSERT INTO concorrencia(
								  idarquivo, 
								  modalidade,
								  numero,
								  comissao,
								  processo,
								  nsistema,
								  dataentrada,
								  dataenviada,
								  diaspendentes,
								  datapossivel,
								  periodoretirada,
								  dataabertura,
								  horaabertura,
								  qntdias,
								  numerooficio,
								  orgaorequisitante,
								  recurso,
								  objeto,
								  status,
								  estimadaprojetado,
								  estimadoreal,
								  adjudicado,
								  valoresexpurgados,
								  tipo,
								  bens,
								  observacao
								  )
							VALUES(
								1,
								'".mysql_real_escape_string($linha[0])."',
								'".mysql_real_escape_string($linha[1])."',
								'".mysql_real_escape_string($linha[2])."',
								'".mysql_real_escape_string($linha[3])."',
								'".mysql_real_escape_string($linha[4])."',
								'".mysql_real_escape_string($linha[5])."',
								'".mysql_real_escape_string($linha[6])."',
								'".mysql_real_escape_string($linha[7])."',
								'".mysql_real_escape_string($linha[8])."',
								'".mysql_real_escape_string($linha[9])."',
								'".mysql_real_escape_string($linha[10])."',
								'".mysql_real_escape_string($linha[11])."',
								'".mysql_real_escape_string($linha[12])."',
								'".mysql_real_escape_string($linha[14])."',
								'".mysql_real_escape_string($linha[15])."',
								'".mysql_real_escape_string($linha[16])."',
								'".mysql_real_escape_string($linha[17])."',
								'".mysql_real_escape_string($linha[18])."',
								'".mysql_real_escape_string($linha[19])."',
								'".mysql_real_escape_string($linha[20])."',
								'".mysql_real_escape_string($linha[21])."',
								'".mysql_real_escape_string($linha[22])."',
								'".mysql_real_escape_string($linha[24])."',
								'".mysql_real_escape_string($linha[25])."',
								'".mysql_real_escape_string($linha[26])."'
								)"

							;
				//echo $query."\n";			

				mysqli_query($link, $query) or die(mysqli_error($link));			



                   
						
		}

					



?>

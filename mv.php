<html>
<head>
<title>Formul&aacute;rio</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<?php
ini_set('default_charset','utf-8');
$fp = fopen('data.txt', 'a+');

$nomesvariaveis="";
foreach ($_POST as $key => $value)
    $nomesvariaveis = $nomesvariaveis.$key.",";
	
$nomesvariaveis=$nomesvariaveis."\n"; 
//imprime os nomes das variáveis na primeira linha	
fwrite($fp,$nomesvariaveis); 

//Lista todos os campos do formulario
$tipodelocal= (string)$_POST['tipodelocal'];
$exame= (string)$_POST['exame'];
$ocic=(string)$_POST['ocic'];
$ocdp= (string)$_POST['ocdp'];
$aut= (string)$_POST['aut'];
$aut2o=(string)$_POST['aut2'];
$dia= (string)$_POST['dia'];
$mes= (string)$_POST['mes'];
$ano=(string)$_POST['ano'];
$camera= (string)$_POST['camera'];
$cartao= (string)$_POST['cartao'];
$perito=(string)$_POST['perito'];
$perito2= (string)$_POST['perito2'];
$papi= (string)$_POST['papi'];
$agente=(string)$_POST['agente'];
$viatura= (string)$_POST['viatura'];
$hora1= (string)$_POST['hora1'];
$minuto1=(string)$_POST['minuto1'];
$hora2= (string)$_POST['hora2'];
$minuto2= (string)$_POST['minuto2'];
$hora3= (string)$_POST['hora3'];
$minuto3= (string)$_POST['minuto3'];
$hora4= (string)$_POST['hora4'];
$minuto4= (string)$_POST['minuto4'];
$endereco= (string)$_POST['endereco'];
$regiao= (string)$_POST['regiao'];
$gpssul= (string)$_POST['gpssul'];
$gpsoeste= (string)$_POST['gpsoeste'];

//Escreve o conteúdo das variáveis no arquivo
fwrite($fp,utf8_encode($tipodelocal).",".$exame.",".$ocic.",".$ocdp.",".$aut.",".$aut2.",".$dia.",".$mes.",".$ano.",".$camera.",".$cartao.",".$perito.",".$perito2.",".$papi.",".$agente.",".$viatura.",".$hora1.",".$minuto1.",".$hora2.",".$minuto2.",".$hora3.",".$minuto3.",".$hora4.",".$minuto4.",".$endereco.",".$regiao.",".$gpssul.",".$gpsoeste."\n"); 

echo "Ocorrência cadastrada!\n\n";
fclose($fp);
?>

<a href="croqui.html"></br></br>Cadastrar nova ocorrencia</a>
	</body>
	</html>
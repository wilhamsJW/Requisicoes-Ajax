<!--< ?php

$conect = mysqli_connect('localhost', 'root', '', 'andes_db');
$sql = "SELECT nomeproduto, precounitario, imagempequena FROM produtos";
$query = mysqli_query($conect, $sql);

while ($linha = mysqli_fetch_object($query)) {
    $array[] = $linha;
? >
    
    < ?php 
    
     //print_r($array)[0]; //aqui teremos todo o db na variavel array 
     echo json_encode($array); //transformando em json, isso é um arquivo json dinamico, 
     //o interessante desse json_enconde é que quando acontecer alguma alteração no db o json é alterado dinamicamente tbm
    ?> 
    -->

<!--<li>< ?php echo $linha->nomeproduto ? ></li> todos os dados da minha consulta sql sairá em forma de lista-->
<!--
< ?php
}

mysqli_close($conect);

?>
-->

<?php

//preparar o arquqivo para callback
$callback = isset($_GET['callback']) ? $_GET['callback'] : false;
$conecta = mysqli_connect('localhost', 'root', '', 'andes_db');
$selecao = "SELECT nomeproduto, precounitario, imagempequena FROM produtos";
$produtos = mysqli_query($conecta, $selecao);

$retorno = array();
while ($linha = mysqli_fetch_object($produtos)) {
    $retorno[] = $linha;
}
echo ($callback ? $callback . '(' : '') . json_encode($retorno) . ($callback ? ')' : '');

// fechar conecta
mysqli_close($conecta);
?>
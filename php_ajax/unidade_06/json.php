<?php


//preparar o aqr
// abrir conexao
$conecta = mysqli_connect('localhost', 'root', '', 'andes_db');
$selecao = "SELECT nomeproduto, precounitario, imagempequena FROM produtos";
$produtos = mysqli_query($conecta, $selecao);

//$retorno = array();
while ($linha = mysqli_fetch_object($produtos)) {
    $retorno[] = $linha;
?>
    <?php echo json_encode($retorno); ?>

<?php
}
// fechar conecta
mysqli_close($conecta);
?>
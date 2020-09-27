<?php


    //preparar o aqr
    // abrir conexao
    $conecta = mysqli_connect("localhost","root","","andes_db");

    $selecao = "SELECT nomeproduto, precounitario, imagempequena FROM produtos";
    $produtos = mysqli_query($conecta,$selecao);

    $retorno;
    while($linha = mysqli_fetch_object($produtos)) {
        $retorno[] = $linha;
    }   

    echo json_encode($retorno);
    echo json_encode($retorno[0]); //caso queira buscar algum item em si dentro do array, seria com [0]
    
    /**Json_encode transforma um array vindo do db em formato JSON*/
    

    // fechar conecta
    mysqli_close($conecta);
?>
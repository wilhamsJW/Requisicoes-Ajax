<?php
    // Criar objeto de conexao
    $conecta = mysqli_connect("localhost","root","","andes_db");
    if ( mysqli_connect_errno()  ) {
        die("Conexao falhou: " . mysqli_connect_errno());
    }

    // selecao de estados
    $select = "SELECT estadoID, nome ";
    $select .= "FROM estados ";
    $lista_estados = mysqli_query($conecta, $select);
    if(!$lista_estados) {
        die("Erro no banco");
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title> 
        
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <main>  
            <div id="janela_formulario">
                
                <form id="formulario_transportadora">
                    <label for="nometransportadora">Nome da Transportadora</label>
                    <input type="text" name="nometransportadora" id="nometransportadora">

                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" id="endereco">

                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" id="cidade">

                    <select name="estados">
                        <?php
                            while($linha = mysqli_fetch_assoc($lista_estados)) {
                        ?>
                            <option value="<?php echo $linha["estadoID"];  ?>">
                                <?php echo utf8_encode($linha["nome"]);  ?>
                            </option>
                        <?php
                            }
                        ?>                        
                    </select>
                    
                    <input type="submit" value="Confirmar inclusão">  
                    
                    <div id="mensagem">
                        <p></p>
                    </div>
                </form> 
                
            </div>
        </main>
        
        <script src="jquery.js"></script>
        <script>
            $('#formulario_transportadora').submit(function(e){
                e.preventDefault(); //função acionada para evitar alguns comportamentos de carregaamento padrões da página, nesse caso seria pra evitar o action do formulario, porém nem o action eu coloquei
                alert('Pegando o botão submit');
                //var form = $(this); //guradando o this dentro de uma variável e poderia usar apenas a variável se quisesse ou usar o this direto
                //Quando uso o this me refiro seleção da vez, nesse caso é a ID do formulario
                alert($(this).serialize()); //irá aparecer um alert com object object caso não tenha nada no formulario
                //o método serialize pega todos os dados do input, text area, select e a partir daí enviar a um db.
            })
        </script>
    </body>
</html>
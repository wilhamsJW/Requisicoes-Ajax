<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP com AJAX</title>
</head>

<body>

    <div id="nome"></div>
    <div id="falha" style="color: red; font-size:50px"></div>
    <div id="msg" style="color: black; font-size: 25px"></div>
    <script src="jquery.js"></script>
    <script>
        $.ajax({
            url:'nome.php'
        }).done(function(valor){                          //done = exevuta a função quando está ok 
            $('#nome').html(valor);                     
        }).fail(function(){                             //executa a função quando dá falha
            $('#falha').html("Falha no carregamento");
        }).always(function(){                         //always = executa função independente de  qq sucesso ou falha
            $('#msg').html("Esta é uma mensagem que sempre será mostrada ao usuário independente de sucesso ou falha no carregamento da página!");
        })
    </script>
</body>

</html>
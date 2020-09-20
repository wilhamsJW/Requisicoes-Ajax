<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP com AJAX</title>
</head>

<body>

    <div id="nome"></div>
    <div id="msg"></div>
    <script src="jquery.js"></script>
    <script>
        $.ajax({
            url:'nome.php'
        }).done(function(valor){                          //done = exevuta a função quando está ok 
            $('#nome').html(valor);                     
        }).fail(function(){                             //executa a função quando dá falha
            $('#nome').html("Falha no carregamento");
        }).always(function(){                         //always = executa função independente de  qq sucesso ou falha
            $('#msg').html("Mensagem Com Always será enviada sempre!");
        })
    </script>
</body>

</html>
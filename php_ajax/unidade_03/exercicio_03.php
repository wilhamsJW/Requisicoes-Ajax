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
        }).done(function(valor){                          //done = executa a função quando está ok 
            $('#nome').html(valor);                     
        }).fail(function(){                             //executa a função quando dá falha
            $('#falha').html("Falha no carregamento");
        }).always(function(){                         //always = executa função independente de  qq sucesso ou falha
<<<<<<< HEAD
            $('#msg').html("Esta é uma mensagem que sempre será mostrada ao usuário independente de sucesso ou falha no carregamento da página!");
=======
            $('#msg').html("Mensagem Com Always será enviada sempre!");
>>>>>>> c30bb9c2d958d0b21b40b58d034c062816ca4872
        })
    </script>
</body>

</html>
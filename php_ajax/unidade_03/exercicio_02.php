<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP com AJAX</title>
</head>

<body>

<<<<<<< HEAD
    <div id="nome" style="color: red; width: 1000px; font-size:40px"></div>
=======
    <div id="nome"></div>
    
>>>>>>> c30bb9c2d958d0b21b40b58d034c062816ca4872
    <script src="jquery.js"></script>
    <script>
        function acionarBanco(){
        $.ajax({
            url:'nome.php'
        }).then(sucesso, falha);

        function sucesso (v) {
            $('#nome').html(v);
        }
        function falha () {
            $('#nome').html("Falha no carregamento da informação ao banco de dados!");
        }
        }
    </script>

    <button onclick="acionarBanco()">Buscar informações no banco de dados</button>
</body>

</html>
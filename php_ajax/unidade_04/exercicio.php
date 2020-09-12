<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP com AJAX</title>
</head>

<body>
    <div id="listagem"></div>
    <div id="gg"></div>

    <script src="jquery.js"></script>
    <script>
        $.ajax({
            url: '_xml/produtos.xml'
        }).then(sucesso, falha)

        function sucesso(x) {
            console.log($(x).find('produto'));
            console.log("Aqui");
            console.log($(x).find('precounitario1'));
            $('#gg').html("ok");
            var elemento;
            elemento = "<ul>";
            $(x).find('produto').each(function() {
                var nome = $(this).find('nomeproduto').text();
                var preco = $(this).find('precounitario').text();
                elemento += "<li>" + nome + " - R$  " + preco + "</li>";
            });

            elemento += "<ul>";
            $('#listagem').html(elemento);


        }

        function falha() {

        }
    </script>
</body>

</html>
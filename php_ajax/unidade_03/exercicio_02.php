<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP com AJAX</title>
</head>

<body>

    <div id="nome"></div>
    <script src="jquery.js"></script>
    <script>
        $.ajax({
            url:'nome.php'
        }).then(sucesso, falha);

        function sucesso (v) {
            $('#nome').html(v);
        }
        function falha () {
            $('#nome').html("Falha no carregamento");
        }
    </script>
</body>

</html>
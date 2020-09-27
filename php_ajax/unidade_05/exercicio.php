<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>
        <div id="listagem"></div>
        <script src="jquery.js"></script>
        <script>
            $.getJSON('_json/produtos.json', function(data){
                console.log("AQUI");
                console.log(data);
                $.each(data, function(i, value){
                  console.log(value.nomeproduto);  
                });
            });
        </script>
    </body>
</html>
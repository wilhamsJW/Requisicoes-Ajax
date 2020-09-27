<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX - 2020</title>
        <style>
            #curso {
                color: red;
            }
        </style>
    </head>

    <body>
    <div><h1 id="curso"></h1></div>

    <script src="jquery.js"></script>
    <script>
        $('#curso').load('dados.txt');
    </script>
    <h1>Teste</h1>
    </body>
</html>
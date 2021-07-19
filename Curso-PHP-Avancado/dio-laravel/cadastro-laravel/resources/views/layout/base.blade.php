<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}} :: @yield('titulo')</title>
</head>
<body>

    <div class="container">
        @yield('conteudo')
    </div>
    <footer>
        <p>Digital Innovtion One - 2021</p>
    </footer>
</body>
</html>

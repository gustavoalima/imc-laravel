<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Resultado do IMC</h1>
        <p class="result">
            Seu IMC é: {{ number_format($imc, 2) }}<br>
            Classificação: {{ $classification }}
        </p>
        <a href="{{ route('home') }}">Voltar</a>
    </div>
</body>
</html>

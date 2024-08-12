<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Calculadora de IMC</h1>
        <form action="{{ route('imc.calculate') }}" method="POST">
            @csrf
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="height">Altura (em metros):</label>
            <input type="text" id="height" name="height" required>
            <br>
            <label for="weight">Peso (em kg):</label>
            <input type="text" id="weight" name="weight" required>
            <br>
            <button type="submit">Calcular IMC</button>
        </form>
    </div>
</body>
</html>

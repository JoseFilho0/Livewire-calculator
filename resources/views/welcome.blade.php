<!doctype html>
<html lang="en" xmlns:livewire="http://www.w3.org/1999/xlink">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
<div class="bg-gray-800">
    <livewire:calculator/>
</div>
@livewireScripts
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <title>Cadastro de Domínios</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Cadastro de Domínios">
  <meta name="author" content="Leander Fruchting">
  <link rel="stylesheet" href="/assets/css/stylesheet.css?v=1">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <header>
  </header>

  <div class='flex flex-col '>
  
    <div class='header'>
      Cadastro de Domínios
    </div>

    {{  $slot  }}

  </div>


</body>
</html>

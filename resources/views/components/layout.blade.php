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
    <h1 style='line-height:40px;background-color:#f2f2f2;margin-bottom:20px;text-align:center' >Cadastro de Domínios</h1>

  </header>

  {{  $slot  }}

</body>
</html>

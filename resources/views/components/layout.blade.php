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
  
    <div class='header '>
        <div class='flex flex-1 '>
          <img src='https://leanderdeveloper.store/portal_busca_curitiba/logo_busca.png' style='height:50px;padding-top:0px;padding-left:15px'>
        </div>

        <div class='flex   justify-center flex-1'>
          Cadastro de Domínios
        </div>

        <!-- 3a coluna, caso surja alguma ideia -->
        <div class='flex justify-end pr-3 flex-1'>
          &nbsp;leanderprogrammer@gmail.com
        </div>
    </div>


    {{  $slot  }}

  </div>


</body>
</html>

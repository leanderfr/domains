<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <title>Cadastro de Domínios</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Cadastro de Domínios">
  <meta name="author" content="Leander Fruchting">
  <link rel="stylesheet" href="/assets/css/stylesheet.css?v=1">

  <link rel="stylesheet" href="{{ asset('build/assets/app-DkahNSte.css') }}">


</head>
<body>
  <header>
  </header>

  <div class='flex flex-col '>
  
    <div class='header '>
        <div class='flex flex-1 '>
          <a href="{{ route('home') }}" class='border-2 border-transparent hover:border-gray-700 rounded-lg'>  
            <img src='https://leanderdeveloper.store/portal_busca_curitiba/logo_busca.png' style='height:50px;padding-left:20px;padding-right:35px'>
          </a>
        </div>

        <div class='flex   justify-center flex-1'>
          Cadastro de Domínios
        </div>

        <!-- 3a coluna, caso surja alguma ideia -->
        <div class='flex justify-end flex-1 pr-8'>
          <a href="mailto:leanderprogrammer@gmail.com">&nbsp;leanderprogrammer@gmail.com</a>          
        </div>
    </div>


    {{  $slot  }}

  </div>


</body>
</html>

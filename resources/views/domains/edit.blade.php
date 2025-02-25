<x-layout>
</x-layout>

<form method='post' action="{{ route('domains.update', ['id' => $domain->id]) }}"  id='formEditDomain' >

<!-- impede insercao de terceiros -->
@csrf
@method('PATCH')

<div class='leading-[30px] mt-14 fixed bg-white w-full  text-center text-gray-600 flex flex-col z-50 '>

  <!-- barra de botoes -->
  <div class='flex flex-row justify-between pr-3 border-b-[1px] border-gray-400 '>

    <div class='flex items-center'>
    &nbsp;&nbsp;&nbsp;<span class='text-blue-400 bold text-2xl'>Editando</span>&nbsp;<span class='pt-[3px]'>&nbsp;&nbsp;Domínio - Id: {{ $domain->id }}</span>
    </div>

    <div class='flex flex-row flex-1 justify-end gap-10'>
        <!-- botao salvar dominio -->
        <div class='flex w-[120px] h-[50px] border-transparent border-2 hover:border-blue-500 cursor-pointer justify-center rounded-lg'
           onclick=" document.getElementById('formEditDomain').submit(); ">
              <svg height="44px" width="44px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="navy"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:navy;} </style> <g> <polygon class="st0" points="440.469,73.413 218.357,295.525 71.531,148.709 0,220.229 146.826,367.055 218.357,438.587 289.878,367.055 512,144.945 "></polygon> </g> </g></svg>
          </a>
        </div>

        <!-- botao cancelar edicao -->
        <div class='flex w-[120px] h-[50px] border-transparent border-2 hover:border-blue-500 cursor-pointer justify-center rounded-lg items-center'
            onclick="window.location = `{{ route('domains.index') }}` ">
              <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#4d4d4d"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20.7457 3.32851C20.3552 2.93798 19.722 2.93798 19.3315 3.32851L12.0371 10.6229L4.74275 3.32851C4.35223 2.93798 3.71906 2.93798 3.32854 3.32851C2.93801 3.71903 2.93801 4.3522 3.32854 4.74272L10.6229 12.0371L3.32856 19.3314C2.93803 19.722 2.93803 20.3551 3.32856 20.7457C3.71908 21.1362 4.35225 21.1362 4.74277 20.7457L12.0371 13.4513L19.3315 20.7457C19.722 21.1362 20.3552 21.1362 20.7457 20.7457C21.1362 20.3551 21.1362 19.722 20.7457 19.3315L13.4513 12.0371L20.7457 4.74272C21.1362 4.3522 21.1362 3.71903 20.7457 3.32851Z" fill="#4d4d4d"></path> </g></svg>
          </a>
        </div>

    </div>

  </div>

  <!-- formulario de dominio -->
  <div class='flex flex-col w-full bg-gray-100 h-screen'>

    <div class='flex flex-col w-[80%] pl-[10%] pt-[40px] bg-gray-100 flex-1 '>

        <div class='flex flex-row pb-3'>
          Domínio:
        </div>

        <div class='flex flex-row pb-12'>
          <input type='text' id='domain' name='domain' class='w-full px-2' autocomplete="off" value="{{ $domain->domain }}" >
        </div>


        <div class='flex flex-row pb-12'>
          <select id='host_id' name='host_id' required class='w-full cursor-pointer h-9'>
            <option value=''  disabled selected>Selecione o local de hospedagem</option>

            @foreach ($hosts as $host)
              @if ( $host->id == $domain->host_id )
                <option value="{{ $host->id }}" selected>{{ $host->name }}</option>              

              @else 
                <option value="{{ $host->id }}" >{{ $host->name }}</option>              

              @endif
            @endforeach
          </select>
        </div>

        <div class='flex flex-row pb-3'>
          Data expiração:
        </div>

        <div class='flex flex-row '>
          <input type='text' id='expiration_date' name='expiration_date' class='w-full px-2' 
              autocomplete="off" placeholder='dd/mm/yyyy' maxlength='10' value="{{ date( 'd/m/Y' , strtotime($domain->expiration_date))}}">
        </div>

        <!-- exibe eventuais erros -->
        @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100 mt-5">

              @foreach ($errors->all() as $error)
                <li class='my-2 text-red-500'>
                  {{$error}}
                </li>
              @endforeach

            </ul>
        @endif




      </div>

  </div>


</div>

</form>

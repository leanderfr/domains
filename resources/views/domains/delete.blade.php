<x-layout>
</x-layout>

<form method='post' action="{{ route('domains.destroy', ['id' => $domain->id]) }}"  id='formDestroyDomain' >
@csrf
@method('DELETE')


<div class='leading-[30px] mt-14 fixed bg-white w-full  text-center text-gray-600 flex flex-col z-50 '>

  <!-- barra de botoes -->
  <div class='flex flex-row justify-between pr-3 border-b-[1px] border-gray-400 '>

    <div class='flex items-center'>
    &nbsp;&nbsp;&nbsp;<span class='text-red-600 bold text-2xl'>Confirmar Exclusão</span>&nbsp;<span class='pt-[3px]'>&nbsp;&nbsp;Domínio - Id: {{ $domain->id }}</span>
    </div>

    <div class='flex flex-row flex-1 justify-end gap-10'>
        <!-- botao salvar dominio -->
        <div class='flex w-[120px] h-[50px] border-transparent border-2 hover:border-blue-500 cursor-pointer justify-center rounded-lg'
           onclick=" document.getElementById('formDestroyDomain').submit(); ">
              <svg width="44px" height="44px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="red"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9 14L11 16L15 12M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M4 6H20M18 6V16.2C18 17.8802 18 18.7202 17.673 19.362C17.3854 19.9265 16.9265 20.3854 16.362 20.673C15.7202 21 14.8802 21 13.2 21H10.8C9.11984 21 8.27976 21 7.63803 20.673C7.07354 20.3854 6.6146 19.9265 6.32698 19.362C6 18.7202 6 17.8802 6 16.2V6" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
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
          <input type='text' id='domain' name='domain' class='w-full px-2' autocomplete="off" value="{{ $domain->domain }}" readonly >
        </div>


        <div class='flex flex-mow mb-12 bg-white w-full'>
          {{  $domain->host->name }}
        </div>

        <div class='flex flex-row pb-3'>
          Data expiração:
        </div>

        <div class='flex flex-row '>
          <input type='text' id='expiration_date' name='expiration_date' class='w-full px-2' readonly
               maxlength='10' value="{{ date( 'd/m/Y' , strtotime($domain->expiration_date))}}">
        </div>

      </div>

  </div>


</div>


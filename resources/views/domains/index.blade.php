<x-layout>
</x-layout>

<div class='leading-[30px] mt-14 fixed bg-white w-full border-b-[1px] border-gray-400 text-center text-gray-600 flex flex-col z-50'>

  <!-- barra de botoes -->
  <div class='flex flex-row  justify-end pr-3 '>

    <!-- botao adicionar dominio -->
    <div class='flex w-[120px] h-[50px] border-transparent border-2 hover:border-blue-500 cursor-pointer justify-center rounded-lg'
        onclick="window.location = `{{ route('domains.create') }}` ">
          <svg width="44px" height="44px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10 14H12M12 14H14M12 14V16M12 14V12" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path> <path d="M2 6.94975C2 6.06722 2 5.62595 2.06935 5.25839C2.37464 3.64031 3.64031 2.37464 5.25839 2.06935C5.62595 2 6.06722 2 6.94975 2C7.33642 2 7.52976 2 7.71557 2.01738C8.51665 2.09229 9.27652 2.40704 9.89594 2.92051C10.0396 3.03961 10.1763 3.17633 10.4497 3.44975L11 4C11.8158 4.81578 12.2237 5.22367 12.7121 5.49543C12.9804 5.64471 13.2651 5.7626 13.5604 5.84678C14.0979 6 14.6747 6 15.8284 6H16.2021C18.8345 6 20.1506 6 21.0062 6.76946C21.0849 6.84024 21.1598 6.91514 21.2305 6.99383C22 7.84935 22 9.16554 22 11.7979V14C22 17.7712 22 19.6569 20.8284 20.8284C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V6.94975Z" stroke="#1C274C" stroke-width="1.5"></path> </g></svg>  
      </a>
    </div>
  </div>

  <!-- datatable de dominios -->
  <div class='flex flex-row mb-2'>
      <div class='flex w-[calc(50%-200px)]'>
        &nbsp;&nbsp;Domínio
      </div> 

      <div class='flex w-[25%]'>
        Data Expiração
      </div> 

      <div class='flex w-[25%] -ml-3'>
        Hospedado em:
      </div> 

      <div class='flex w-[200px] '>
        Ações
      </div> 

  </div> 


</div>


</div>

<div class='dinamicContent'>


  @foreach ($domains as $domain)

    <x-domain_item

        href="{{  route('domains.edit',  ['id' => $domain->id]) }}"  
        active="{{  $domain->active }}" 
        domain="{{ $domain->domain }}" 
        id="{{ $domain->id }}" 
        host="{{ $domain->host->name  }}"
        expiration_date="{{ date( 'd/m/Y' , strtotime($domain->expiration_date))}}" >

    </x-domain_item>



    
  @endforeach

</div>


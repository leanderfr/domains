@props( ['active' => true, 'href', 'domain', 'expiration_date', 'id', 'host'] )


<div @class( ['domainCard', 'disabledDomain' => ! $active] ) onclick="window.location = '{{ $href }}'" >
  
    <div class='flex w-[calc(50%-200px)]'>
      {{ $domain  }}
    </div> 

    <div class='flex w-[25%]'>
      {{ $expiration_date  }}
    </div> 

    <div class='flex w-[25%]'>
      {{  $host }}
    </div> 

    <!-- botoes editar, excluir, etc -->
    <div class='flex w-[200px] flex-row'>

      <!-- botao editar -->
      @if ($active)
        <div class='actionButton'>
          <a href="{{ route('domains.show', ['id' => $id]) }}">
            <svg xmlns='http://www.w3.org/2000/svg' fill='navy' width='24px' height='24px' viewBox='0 0 24 24' stroke='navy'><g id='SVGRepo_bgCarrier' stroke-width='0'></g><g id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'></g><g id='SVGRepo_iconCarrier'><path d='M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z'></path></g></svg>
          </a>
        </div>
      @else
        <div class='noButton'>
        </div>
      @endif

      <!-- botao excluir -->
      @if ($active)
        <div class='actionButton'>
          <svg fill='red' width='24px' height='24px' viewBox='0 0 1024 1024' xmlns='http://www.w3.org/2000/svg' class='icon' stroke='red'><g id='SVGRepo_bgCarrier' stroke-width='0'></g><g id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'></g><g id='SVGRepo_iconCarrier'> <path d='M360 184h-8c4.4 0 8-3.6 8-8v8h304v-8c0 4.4 3.6 8 8 8h-8v72h72v-80c0-35.3-28.7-64-64-64H352c-35.3 0-64 28.7-64 64v80h72v-72zm504 72H160c-17.7 0-32 14.3-32 32v32c0 4.4 3.6 8 8 8h60.4l24.7 523c1.6 34.1 29.8 61 63.9 61h454c34.2 0 62.3-26.8 63.9-61l24.7-523H888c4.4 0 8-3.6 8-8v-32c0-17.7-14.3-32-32-32zM731.3 840H292.7l-24.2-512h487l-24.2 512z'></path> </g></svg>
        </div>
      @else
        <div class='noButton'>
        </div>
      @endif

      <!-- botao ativar/desativar dominio -->
      @if (! $active)
        <!-- botao desativar dominio -->  
        <div class='actionButton'>
          <svg fill='white' width='24px' height='24px' viewBox='0 0 24 24' version='1.1' fill='none' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' fill='gray' transform='rotate(180)' stroke='gray'><g id='SVGRepo_bgCarrier' stroke-width='0'></g><g id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'></g><g id='SVGRepo_iconCarrier'> <title>/svg/ic-switch-on</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id='Page-1' stroke='none' stroke-width='1'  fill-rule='evenodd'> <g id='ic-switch-on' fill-rule='nonzero' fill='gray'> <path d='M3,12 C3,14.2046438 4.78852545,16 6.9947834,16 L17.0052166,16 C19.2082844,16 21,14.209139 21,12 C21,9.79535615 19.2114745,8 17.0052166,8 L6.9947834,8 C4.79171562,8 3,9.790861 3,12 Z M1,12 C1,8.68773136 3.68570682,6 6.9947834,6 L17.0052166,6 C20.3154275,6 23,8.69016475 23,12 C23,15.3122686 20.3142932,18 17.0052166,18 L6.9947834,18 C3.68457248,18 1,15.3098352 1,12 Z M17,15 C15.3431458,15 14,13.6568542 14,12 C14,10.3431458 15.3431458,9 17,9 C18.6568542,9 20,10.3431458 20,12 C20,13.6568542 18.6568542,15 17,15 Z' id='Rectangle-75'> </path> </g> </g> </g></svg>
        </div>       

      @else 
        <!-- botao ativar dominio -->  
        <div class='actionButton'>
          <svg fill='white'  width='24px' height='24px' viewBox='0 0 24 24' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' style='fill:rgb(128, 128, 255) stroke:rgb(128, 128, 255)'><g id='SVGRepo_bgCarrier' stroke-width='0'></g><g id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'></g><g id='SVGRepo_iconCarrier'> <title>/svg/ic-switch-on</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'> <g id='ic-switch-on' fill-rule='nonzero' style='fill:rgb(128, 128, 255)'> <path d='M3,12 C3,14.2046438 4.78852545,16 6.9947834,16 L17.0052166,16 C19.2082844,16 21,14.209139 21,12 C21,9.79535615 19.2114745,8 17.0052166,8 L6.9947834,8 C4.79171562,8 3,9.790861 3,12 Z M1,12 C1,8.68773136 3.68570682,6 6.9947834,6 L17.0052166,6 C20.3154275,6 23,8.69016475 23,12 C23,15.3122686 20.3142932,18 17.0052166,18 L6.9947834,18 C3.68457248,18 1,15.3098352 1,12 Z M17,15 C15.3431458,15 14,13.6568542 14,12 C14,10.3431458 15.3431458,9 17,9 C18.6568542,9 20,10.3431458 20,12 C20,13.6568542 18.6568542,15 17,15 Z' id='Rectangle-75'> </path> </g> </g> </g></svg>
        </div> 

      @endif



    </div> 





</div>


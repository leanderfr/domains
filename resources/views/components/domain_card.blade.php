@props( ['active' => true, 'href', 'domain', 'expiration_date'] )


<div @class( ['domainCard', 'disabledDomain' => ! $active] ) onclick="window.location = '{{ $href }}'" >
  
    <div class='flex w-[50%]'>
      {{ $domain  }}
    </div> 

    <div class='flex w-[25%]'>
      {{ $expiration_date  }}
    </div> 

    <div class='flex w-[25%]'>
      kinghost.net
    </div> 



</div>


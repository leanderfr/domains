@props( ['active' => true, 'href', 'domain'] )


<div @class( ['domainCard', 'disabledDomain' => ! $active] ) onclick="window.location = '{{ $href }}'" >
  
    <div class='w-[50%]'>
      {{ $domain  }}
    </div> 

</div>


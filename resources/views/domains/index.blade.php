<x-layout>
</x-layout>

<div class='leading-[50px] mt-12 fixed bg-white w-full border-b-[1px] border-gray-400 text-center text-gray-600'>Lista geral</div>

<div class='dinamicContent'>



  @foreach ($domains as $domain)

    <x-domain_card href="/domains/{{  $domain->id }}"  active="{{  $domain->active }}" domain="{{ $domain->domain }}"  >
    </x-domain_card>

    
  @endforeach

</div>


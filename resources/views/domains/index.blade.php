<x-layout>

</x-layout>

<div>

<h4>Lista geral</h4>

<br>
<br>
<br>
<br>
    @foreach ($domains as $domain)
      <div class='linha'>

      <x-card href="/domains/{{  $domain->id }}">
        <h3>aqui={{  $domain->domain  }}</h3>
      </x-card>
      
    @endforeach
</div>
</div>


<?php

namespace App\Http\Controllers;

use App\Models\Domains;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    public function index()
    {
        $domains = Domains::query()->orderBy('domain','asc')->get();
        //$domains = Domains::query()->orderBy('domain','asc')->paginate();
        //dd($domains); 
        return view('domains.index', ['domains' => $domains]);
    }

    public function create()
    {
        return view('domains.create');
    }

    public function store(Request $request)
    {
        //return view('domain.store');

      $data = $request->validade([
        'domain' => ['required', 'string']
      ]);

      $data['id']=3;
      $domain = Domains::create($data);

      return to_route('domains.show', $domain)->with('message', 'Dominio foi criado');


    }

    public function show($id)
    {
        $domain = Domains::findOrFail($id);
      //$domain = Domains::get($id);
        return view('domains.show', ['domain' => $domain]);
    }

    public function edit(Domains $domain)
    {
        return view('domains.edit', $domain);
    }

    public function update(Request $request, Domains $domain)
    {
        $data = $request->validade([
          'domain' => ['required', 'string']
        ]);

        $domain->update($data);
        return to_route('domains.show', $domain)->with('message', 'Dominio foi atualizado');
    } 

    public function destroy(Domains $domain)
    {
        $domain->delete();
        return to_route('domains.index', $domain)->with('message', 'Dominio foi excluído');

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Domains;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$domains = Domains::query()->orderBy('domain','asc')->get();
        $domains = Domains::query()->orderBy('domain','asc')->paginate();
        //dd($domains); 
        return view('domains.index', ['domains' => $domains]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('domains.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(Domains $domain)
    {
        return view('domains.show', ['domain' => $domain]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Domains $domain)
    {
        return view('domains.edit', $domain);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Domains $domain)
    {

        $data = $request->validade([
          'domain' => ['required', 'string']
        ]);

        $domain->update($data);
        return to_route('domains.show', $domain)->with('message', 'Dominio foi atualizado');
    } 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Domains $domain)
    {
        $domain->delete();
        return to_route('domains.index', $domain)->with('message', 'Dominio foi excluído');

    }
}

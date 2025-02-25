<?php

namespace App\Http\Controllers;

use App\Models\Domains;
use Illuminate\Http\Request;

class DomainController extends Controller
{

    //**********************************************************************************
    // datatable de dominios
    //**********************************************************************************  
    public function index()
    {
        $domains = Domains::with('host')->orderBy('domain','asc')->get();
        //$domains = Domains::query()->orderBy('domain','asc')->paginate();
        //dd($domains); 
        return view('domains.index', ['domains' => $domains]);
    }

    //**********************************************************************************
    // formulario de novo dominio
    //**********************************************************************************  
    public function create()
    {
        return view('domains.create');
    }

    //**********************************************************************************
    // post de novo dominio
    //**********************************************************************************  
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

    //**********************************************************************************
    // exibe form de dominio (read only)
    // ** nao sera usado
    //**********************************************************************************  

    public function show($id)
    {
        $domain = Domains::with('host')->findOrFail($id);
      //$domain = Domains::get($id);
        return view('domains.show', ['domain' => $domain]);
    }

    //**********************************************************************************
    // exibe form de dominio (permite edicao)
    //**********************************************************************************  

    public function edit(Domains $domain)
    {
        return view('domains.edit', $domain);
    }

    //**********************************************************************************
    // patch/put de dominio 
    //**********************************************************************************  
    public function update(Request $request, Domains $domain)
    {
        $data = $request->validade([
          'domain' => ['required', 'string']
        ]);

        $domain->update($data);
        return to_route('domains.show', $domain)->with('message', 'Dominio foi atualizado');
    } 

    //**********************************************************************************
    // delete de dominio 
    //**********************************************************************************  
    
    public function destroy(Domains $domain)
    {
        $domain->delete();
        return to_route('domains.index', $domain)->with('message', 'Dominio foi excluído');

    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Domains;
use App\Models\Hosts;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DomainController extends Controller
{

    //**********************************************************************************
    // datatable de dominios
    //**********************************************************************************  
    public function index()
    {
        $domains = Domains::with('host')->orderBy('updated_at','desc')->get();
        //$domains = Domains::query()->orderBy('domain','asc')->paginate();
        //dd($domains); 
        return view('domains.index', ['domains' => $domains]);
    }

    //**********************************************************************************
    // formulario de novo dominio
    //**********************************************************************************  
    public function create()
    {
        $hosts = Hosts::all();
        return view('domains.create', ['hosts' => $hosts]);
    }

    //**********************************************************************************
    // post de novo dominio
    //**********************************************************************************  
    public function store(Request $request)
    {
      $validated = $request->validate([
        'domain' => 'required|string|min:5|max:150',
        'host_id' => 'required|exists:hosts,id',
        'expiration_date'  =>  'required|date|date_format:"d/m/Y"',
      ]);

      Domains::create($validated);

      return redirect()->route('domains.index');

    }

    //**********************************************************************************
    // exibe form de dominio (read only)
    // ** nao sera usado ***
    //**********************************************************************************  

    public function show($id)
    {
        $domain = Domains::with('host')->findOrFail($id);
        $hosts = Hosts::all();
      //$domain = Domains::get($id);
        return view('domains.show', ['domain' => $domain, 'hosts' => $hosts]);
    }

    //**********************************************************************************
    // exibe form de dominio (permite edicao)
    //**********************************************************************************  

    public function edit(String $id)
    {
        $domain = Domains::with('host')->findOrFail($id);
        $hosts = Hosts::all();
        return view('domains.edit', ['domain' => $domain, 'hosts' => $hosts]);
    }

    //**********************************************************************************
    // patch/put de dominio 
    //**********************************************************************************  
    public function update(Request $request, Domains $domain)
    {

        $validated = $request->validate([
          'domain' => 'required|string|min:5|max:150',
          'host_id' => 'required|exists:hosts,id',
          'expiration_date'  =>  'required|date|date_format:"d/m/Y"',
        ]);


        $validated['expiration_date'] = Carbon::parse($request->expiration_date)->format('Y-m-d');

        $domain->update($validated);
        return redirect()->route('domains.index');
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

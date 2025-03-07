<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Domains;
use App\Models\Hosts;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DateTime;


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
        'expiration_date'  =>  'required|date_format:d/m/Y',
      ], 
        [
          'expiration_date' => 'Data inválida',
          'domain' => 'Domínio deve ter entre 5 e 150 caracteres',
          'host_id' => 'Identifique o local da hospedagem',
      ]);
            
      $date = DateTime::createFromFormat('d/m/Y', $validated['expiration_date']);
      $validated['expiration_date'] = $date->format('Y-m-d');

      Domains::create($validated);

      return redirect()->route('domains.index');

    }

    //**********************************************************************************
    // exibe form de dominio para eventual exclusao do registro
    //**********************************************************************************  

    public function delete(String $id)
    {
        $domain = Domains::with('host')->findOrFail($id);
        $hosts = Hosts::all();
        return view('domains.delete', ['domain' => $domain, 'hosts' => $hosts]);
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
    public function update(Request $request, String $id)
    {

        $validated = $request->validate([
          'domain' => 'required|string|min:5|max:150',
          'host_id' => 'required|exists:hosts,id',
          'expiration_date'  =>  'required|date_format:d/m/Y',
        ], 
          [
            'expiration_date' => 'Data inválida',
            'domain' => 'Domínio deve ter entre 5 e 150 caracteres',
            'host_id' => 'Identifique o local da hospedagem',
        ]);

        $date = DateTime::createFromFormat('d/m/Y', $validated['expiration_date']);
        $validated['expiration_date'] = $date->format('Y-m-d');

        Domains::where('id',$id)->update( $validated );
        return redirect()->route('domains.index');
    } 

    //**********************************************************************************
    // exclui dominio 
    //**********************************************************************************      
    public function destroy($id)
    {
        $domain = Domains::with('host')->findOrFail($id);
        $domain->delete();

        return redirect()->route('domains.index');
    }

    //**********************************************************************************
    // desativa/ativo determinado dominio 
    //**********************************************************************************      
    public function status($id)
    {
        //Domains::Where('id', $id)->update( ['active' => false] ) ;

        DB::statement("UPDATE domains set active = ! active where id = $id");
        return redirect()->route('domains.index');
    }





}

?>
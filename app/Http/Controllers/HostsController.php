<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Hosts;


class HostsController extends Controller
{

    //**********************************************************************************
    // datatable de dominios
    //**********************************************************************************  
    public function index()
    {
        $hosts = Hosts::orderBy('updated_at','desc')->get();

        //$domains = Domains::query()->orderBy('domain','asc')->paginate();
        //dd($domains); 
        return view('hosts.index', ['hosts' => $hosts]);
    }



}

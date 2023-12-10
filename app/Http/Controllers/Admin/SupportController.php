<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support){

        // $supports = Support::all(); -- Simplificada;
        // $support = new Support(); -- Instancia chamada no construtor;

        $supports = $support->all();

        return view('admin/supports/index', compact('supports')); //ou '** ['supports' => $supports] **' vai dar na mesma;
    }

    public function create(){
        return view('admin/supports/create');
    }

    public function store(Request $request, Support $support){
        $data = $request->all();
        $data['status'] = 'a';

        $support = $support->create($data);
        
        return redirect()->route('supports.index');
    }
}
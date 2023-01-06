<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Contracts\Servoce\Attribute\Required;
use App\Models\Dorogi;
use App\Models\Category;
use App\Http\Controllers\DorogiResource;
use Illuminate\Support\Facades\DB;



class DorogiController extends Controller
{
    public function index(){
        $dorogis = Dorogi::all();

        // return DorogiResource::collection($dorogis);

        return view('dorogi.index', compact('dorogis'));
    }

    public function create(){
        
        return view('dorogi.create');
    }

    public function store(){
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'price' => 'string',

        ]);

        Dorogi::create($data);

        // return new DorogiResource($data);
        dd($data);

        // return redirect()->route('dorogi.index');
    }

    public function show(Dorogi $dorogi){
        
        return view('dorogi.show', compact('dorogi'));
    }

    public function edit(Dorogi $dorogi){
        
        return view('dorogi.edit', compact('dorogis'));
    }
    public function update(Dorogi $dorogi){
        $data = request()->validate([
            'title' => 'string',
            'content' => 'text',
            'price' => 'float',

        ]);
        $dorogi->update($data);
        return $dorogi->fresh();
        // return redirect()->route('dorogi.index', compact('dorogis'));
    }

    public function destroy(Dorogi $dorogi){
        
        $dorogi->delete();
        return redirect()->route('dorogi.index');
    }

}

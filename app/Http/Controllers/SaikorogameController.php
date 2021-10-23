<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SaikorogameModel;
use App\Http\Requests\SaikorogameRequest;

class SaikorogameController extends Controller
{   
    public function index(){
        return view('Saikorogame');
    }
    
    public function battle(SaikorogameRequest $request){
        $name = $request->name;
        $saikoro = new SaikorogameModel;
        
        $you = $saikoro->saikoro();
        $cpu = $saikoro->saikoro();
        $playerpicture = $saikoro->picture($you);
        $cpupicture = $saikoro->picture($cpu);
        $judgement = $saikoro->judgement($you,$cpu);
        return view('Saikorogame2')->with([
            'name' => $name,
            'playerpicture' => $playerpicture,
            'cpupicture' => $cpupicture, 
            'you' => $you,
            'cpu' => $cpu,
            'judgement' => $judgement
            ]);
            
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class saikoro extends Model
{
    public function index(){
    
    // public function result(){
    //     $saikoro = rand(1,6);
        
        return view('index');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JankenGameModel;

class JankenGameController extends Controller
{
    public function index(){
        return view('JankenGame1');
    }
    
    
    public function battle(Request $request){
        $rps = new JankenGameModel;
        $cpuchoise = rand(1,3);
        $cpu = $rps -> janken($cpuchoise);
        $yourchoise = $request -> yourchoise;
        $you = $rps -> janken($yourchoise);

        
        $judgement = $rps -> judgement($yourchoise,$cpuchoise);
        if ($judgement == 'win') {
            $message = 'あなたの勝ちです！！おめでとう！';
        } elseif ($judgement == 'lose') {
            $message = 'あなたの負けです、残念！';
        } elseif ($judgement == 'drow') {
            $message = 'あいこです';
            return view('Jankendrow') -> with([
                'you' => $you,
                'cpu' => $cpu,
                'message' => $message
            ]);
        }
        return view('JankenGame2') -> with([
            'you' => $you,
            'cpu' => $cpu,
            'message' => $message
            ]);
    }
    
     
}

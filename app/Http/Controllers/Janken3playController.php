<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Janken3playModel;

class Janken3playController extends Controller
{
    public function index(){
        
        return view('Janken3play1');
        
    }
    
    public function battle(Request $request){
        $rps =new Janken3playModel; //インスタンス化.
        
        $cpuchoise = rand(1,3); 
        $cpuchoise2 = rand(1,3);    //cpuchoice,cpuchoice2に1〜3の数字をランダムに代入.
        
        $cpu = $rps -> janken($cpuchoise);
        $cpu2 = $rps -> janken($cpuchoise2);    //1〜3の数字を,グーチョキパーの文字列に変換.
        
        $yourchoise = $request -> yourchoise;   //ユーザが入力した情報を代入.
        $you = $rps -> janken($yourchoise); //1〜3の数字を,グーチョキパーの文字列に変換.
        
        $judgement = $rps -> judgement($yourchoise,$cpuchoise,$cpuchoise2);//勝敗を評価.
        
        //dd($cpuchoise2);    //debug
        
        if ($judgement == 'win'){
            $message = 'あなたの勝ちです！！おめでとう！！';
            
        } elseif ($judgement == 'lose') {
            $message = 'あなたの負けです、残念！';
            
        } elseif ($judgement == 'drow') {
            $message = 'あいこです';
            return view('Janken3playdrow') -> with([
                
                'you' => $you,
                'cpu' => $cpu,
                'cpu2' => $cpu2,
                'message' => $message
                
            ]);
        }
        return view('Janken3play2') -> with([
            
            'you' => $you,
            'cpu' => $cpu,
            'cpu2' => $cpu2,
            'message' => $message
            
        ]);
    }
}

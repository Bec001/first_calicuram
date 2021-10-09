<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Saikoro;

class SaikoroController extends Controller
{
    public function index(Request $request){
        $mode = $request->mode;
        
        if ($mode == 'result') { 
            $saikoro = rand(1,6);
        
            switch ($saikoro) {
                case 1:
                    $picture = "https://myworkpictures.s3.ap-northeast-1.amazonaws.com/%E3%82%B5%E3%82%A4%E3%82%B3%E3%83%AD/saikoro1.png";
                    break;
                case 2:
                    $picture = "https://myworkpictures.s3.ap-northeast-1.amazonaws.com/%E3%82%B5%E3%82%A4%E3%82%B3%E3%83%AD/saikoro2.png";
                    break;
                case 3:
                    $picture = 'https://myworkpictures.s3.ap-northeast-1.amazonaws.com/%E3%82%B5%E3%82%A4%E3%82%B3%E3%83%AD/saikoro3.png';
                    break;
                case 4:
                    $picture = 'https://myworkpictures.s3.ap-northeast-1.amazonaws.com/%E3%82%B5%E3%82%A4%E3%82%B3%E3%83%AD/saikoro4.png';
                    break;
                case 5:
                    $picture = 'https://myworkpictures.s3.ap-northeast-1.amazonaws.com/%E3%82%B5%E3%82%A4%E3%82%B3%E3%83%AD/saikoro5.png';
                    break;
                case 6:
                    $picture = 'https://myworkpictures.s3.ap-northeast-1.amazonaws.com/%E3%82%B5%E3%82%A4%E3%82%B3%E3%83%AD/saikoro6.png';
                    break;
            }
            return view('Saikoro')->with([
                'picture' => $picture,
                'saikoro' => $saikoro,
                ]);
        } else {
            return view('Saikoro2');
        }
    }
}

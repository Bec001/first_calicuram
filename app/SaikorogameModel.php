<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Saikorogame;

class saikorogameModel extends Model
{
    public function saikoro(){
        $dice = rand(1,6);
        return $dice;
    }
    
    public function picture($dice){
        switch ($dice) {
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
        return $picture;
    }
    
    public function judgement($you,$cpu){
        if ($you == 1 && $cpu == 6) {
            $message = 'あなたの勝ちです！！';
        } elseif ($you == 6 && $cpu == 1) {
            $message = 'あなたの負けです、残念！！';
        } elseif ($you > $cpu) {
            $message = 'あなたの勝ちです！！';
        } elseif ($you < $cpu) {
            $message = 'あなたの負けです、残念！！';
        } elseif ($you == $cpu) {
            $message = 'あいこです。';
        }
        return $message;
    }
        
}


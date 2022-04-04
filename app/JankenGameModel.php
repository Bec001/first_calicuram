<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\JankengameController;

class JankenGameModel extends Model
{
    public function janken ($janken) {
        switch($janken){
            case 1:
                $result = 'グー';
                break;
            case 2:
                $result = 'チョキ';
                break;
            case 3:
                $result = 'パー';
                break;
        }
        return $result;
    }
    
    public function judgement ($you,$cpu) {
        if ($you == 1 && $cpu == 3) {
            return 'lose';
        } elseif ($you == 3 && $cpu == 1) {
            return 'win';
        } elseif ($you > $cpu) {
            return 'lose';
        } elseif ($you < $cpu) {
            return 'win';
        } elseif ($you == $cpu) {
            return 'drow';
        } 
    }
   
}

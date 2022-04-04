<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Janken3playModel extends Model
{
    public function janken ($janken){
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
    
    public function judgement ($you,$cpu,$cpu2) {
        if ($you == $cpu && $cpu == $cpu2) {
            return 'drow';
            
        } elseif ($you != $cpu && $you != $cpu2 && $cpu != $cpu2) {
            return 'drow';
            
        } elseif ($you == 3 && ($cpu == 1 || $cpu2 == 1)){  //modifid
            return 'win';
            
        } elseif ($you == 1 && ($cpu == 3 || $cpu2 == 3)){  //modifid
            return 'lose';
            
        } elseif ($you < $cpu || $you < $cpu2){
            return 'win';
            
        } elseif ($you > $cpu || $you > $cpu2){
            return 'lose';
            
        }
    }
}

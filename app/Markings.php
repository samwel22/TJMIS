<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Markings extends Model
{
    protected $fillable = ['question_id','correct_answer'];


   public function answers(){
        return $this->hasOne(Answers::class,'question_id'); 
    }
}

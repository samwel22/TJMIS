<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $fillable = ['question_name','opt1','opt2','opt3',

        'opt4','point'];


    	public function answer(){
        return $this->hasOne(Answer::class); 
    }
}

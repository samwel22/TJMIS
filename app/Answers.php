<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    protected $fillable = ['question_id','answer'];


   // public function question(){
   //      return $this->belongTo(Question::class); 
   //  }
}

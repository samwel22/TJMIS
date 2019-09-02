<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trequests extends Model
{
    protected $fillable =['tcode','tsubject','cduration','salary','school_id'];

     public function school(){
        return $this->belongsTo(Schools::class,'school_id'); 
    }
}

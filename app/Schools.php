<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schools extends Model
{
    protected $fillable =['user_id','code','name','rnumber','year','address','pnumber','email'];

    public function school(){
     return $this->belongsTo(User::class); 
    }
}

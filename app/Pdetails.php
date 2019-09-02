<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pdetails extends Model
{
     protected $fillable=['user_id','fname','mname','lname','dob','gender','country','pnumber','disability','tsubject','e_level','c_year','experience','other','address','marital','cresidence','presidence','ecertificates','pcertificates','bcertificates','cvitae','tcode','slug'];


      protected $date =['deleted_at'];


    public function Pdetail(){
        return $this->belongTo(User::class); 
    }
}

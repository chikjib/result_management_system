<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tblss2studentThirdTerm extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
        'passport','admission_no','surname','firstname','othername','sex','date_of_birth','name_of_parents','address','state','phone_no','class','block','session'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tblss3positionSecondTerm extends Model
{
    //
    public $timestamps = false;
    
    protected $fillable = ['admission_no','session','block','grandtotal','position'];
}

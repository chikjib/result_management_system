<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tblss1positionSecondTerm extends Model
{
    //
    public $timestamps = false;
    
    protected $fillable = ['admission_no','session','block','grandtotal','position'];
}

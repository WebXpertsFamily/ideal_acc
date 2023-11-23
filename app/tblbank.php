<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tblbank extends Model
{
    const PER_PAGE = 10;

    protected  $guarded = ['id'];
}

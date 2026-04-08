<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use SoftDeletes;
    protected $table = "rates";
    protected $guarded = ['id'];
}

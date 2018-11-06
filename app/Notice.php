<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    //
    protected $table = 'notices';
    protected $fillable = ['id','user_id','content','is_read'];
    public $timestamps = false;
}

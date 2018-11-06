<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $fillable = ['profile_id','height','body_type','birth_origin','education','annual_salary', 'have_children'];
    public $timestamps = false;
}

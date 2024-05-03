<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function user()
    {
       // return $this->hasOne(User::class, 'foreign_key', 'local_key');
       return $this->belongsTo('App\Models\User');
    }
}

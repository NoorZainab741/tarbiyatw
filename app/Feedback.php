<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable=['detail','attachment','status','menu_id'];

    public  function menu()
    {
        return $this->belongsTo(Module::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    protected $fillable=['name','module_id','icon'];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
    public function datauploadings()
    {
        return $this->hasMany(Datauploading::class);
    }
}

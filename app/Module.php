<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['name','menu_id','icon','has_submenu'];

    public function sub_menu()
    {
        return $this->hasMany(SubMenu::class);
    }
    public function data_uploading()
    {
        return $this->hasMany(Datauploading::class);
    }
    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datauploading extends Model
{
    protected $fillable=['title','author','pdfs','ppts','audios','videolinks','sub_menu_id','module_id','hyperlink'];

    protected $casts = [
        'pdfs' => 'array',
        'ppts' => 'array',
        'audios' => 'array',
    ];
    public  function sub_menu()
    {
        return $this->belongsTo(SubMenu::class);
    }
    public  function module()
    {
        return $this->belongsTo(Module::class);
    }
}

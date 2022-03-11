<?php

namespace App\Models\general\fabric;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    use HasFactory;
    protected $table = 'tbl_general_fabric_color_info';
    public $timestamps = false;

    public static function addFeatureImage($id, $filename){
        $c = color::find($id);
        $c->image = $filename;
        $c->save();
    }
    
}

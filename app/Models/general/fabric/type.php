<?php

namespace App\Models\general\fabric;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    use HasFactory;
    protected $table = 'tbl_general_fabric_type_info';
    public $timestamps = false;

    public static function addFeatureImage($id, $filename){
        $c = type::find($id);
        $c->image = $filename;
        $c->save();
    }
}

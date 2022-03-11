<?php

namespace App\Models\general\fabric;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class material extends Model
{
    use HasFactory;
    protected $table = 'tbl_general_fabric_material_info';
    public $timestamps = false;

    public static function addFeatureImage($id, $filename){
        $c = material::find($id);
        $c->image = $filename;
        $c->save();
    }
}

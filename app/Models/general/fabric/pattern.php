<?php

namespace App\Models\general\fabric;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pattern extends Model
{
    use HasFactory;
    protected $table = 'tbl_general_fabric_pattern_info';
    public $timestamps = false;

    public static function addFeatureImage($id, $filename){
        $c = pattern::find($id);
        $c->image = $filename;
        $c->save();
    }
}

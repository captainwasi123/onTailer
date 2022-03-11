<?php

namespace App\Models\general;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    protected $table = 'tbl_general_categories_info';
    public $timestamps = false;

    public static function addFeatureImage($id, $filename){
        $c = categories::find($id);
        $c->image = $filename;
        $c->save();
    }
}

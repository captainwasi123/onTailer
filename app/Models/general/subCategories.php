<?php

namespace App\Models\general;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\general\categories;

class subCategories extends Model
{
    use HasFactory;
    protected $table = 'tbl_general_sub_categories_info';
    public $timestamps = false;

    public static function addFeatureImage($id, $filename){
        $c = subCategories::find($id);
        $c->image = $filename;
        $c->save();
    }


    public function category(){
        return $this->belongsTo(categories::class, 'category_id');
    }
}

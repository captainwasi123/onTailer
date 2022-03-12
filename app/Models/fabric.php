<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\general\categories;
use App\Models\general\subCategories;
use App\Models\general\fabric\color;
use App\Models\general\fabric\material;
use App\Models\general\fabric\pattern;
use App\Models\general\fabric\type;

class fabric extends Model
{
    use HasFactory;
    protected $table = 'tbl_fabric_info';

    public static function addFabric(array $data){
        $f = new fabric;
        $f->category_id = $data['category_id'];
        $f->sub_category_id = $data['sub_category_id'];
        $f->name = $data['name'];
        $f->type_id = $data['type_id'];
        $f->material_id = $data['material_id'];
        $f->pattern_id = $data['pattern_id'];
        $f->color_id = $data['color_id'];
        $f->price = $data['price'];
        $f->save();

        return $f->id;
    }

    public static function editFabric($id, array $data){
        $f = fabric::find($id);
        $f->category_id = $data['category_id'];
        $f->sub_category_id = $data['sub_category_id'];
        $f->name = $data['name'];
        $f->type_id = $data['type_id'];
        $f->material_id = $data['material_id'];
        $f->pattern_id = $data['pattern_id'];
        $f->color_id = $data['color_id'];
        $f->price = $data['price'];
        $f->save();

        return $f->id;
    }

    public static function addFeatureImage($id, $filename){
        $c = fabric::find($id);
        $c->image = $filename;
        $c->save();
    }


    public function category(){
        return $this->belongsTo(categories::class, 'category_id');
    }
    public function subCategories(){
        return $this->belongsTo(subCategories::class, 'sub_category_id');
    }
    public function type(){
        return $this->belongsTo(type::class, 'type_id');
    }
    public function material(){
        return $this->belongsTo(material::class, 'material_id');
    }
    public function pattern(){
        return $this->belongsTo(pattern::class, 'pattern_id');
    }
    public function color(){
        return $this->belongsTo(color::class, 'color_id');
    }
}

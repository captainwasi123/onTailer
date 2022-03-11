<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\general\categories;
use App\Models\general\subCategories;
use App\Models\general\fabric\color;
use App\Models\general\fabric\material;
use App\Models\general\fabric\pattern;
use App\Models\general\fabric\type;

class settingController extends Controller
{
    //Categories
      function categories(){
        $data['categories'] = categories::all();
        return view('admin.generalSettings.categories.index')->with($data);
      }
      function categoriesAdd(Request $request){
        $data = $request->all();

        $c = new categories;
        $c->name = $data['name'];
        $c->save();
        $id = $c->id;
        if ($request->hasFile('image')) {
          $file = $request->file('image');
          $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
          $filename = $id.'-'.$filename;
          $file->move(base_path('/public/storage/settings/category/'), $filename);
          categories::addFeatureImage($id, $filename);
        }

        return redirect()->back()->with('success', 'New Category Added.');
      }
      function categoriesDelete($id){
        $id = base64_decode($id);
        categories::destroy($id);

        return redirect()->back()->with('success', 'Category Deleted.');
      }
      function categoriesEdit($id){
        $id = base64_decode($id);
        $data['data'] = categories::find($id);

        return view('admin.generalSettings.categories.response.edit')->with($data);
      }
      function categoriesUpdate(Request $request){
        $data = $request->all();
        $id = base64_decode($data['catid']);
        $c = categories::find($id);
        $c->name = $data['name'];
        $c->save();
        if ($request->hasFile('image')) {
          $file = $request->file('image');
          $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
          $filename = $id.'-'.$filename;
          $file->move(base_path('/public/storage/settings/category/'), $filename);
          categories::addFeatureImage($id, $filename);
        }

        return redirect()->back()->with('success', 'Category Updated.');
      }


    //Sub Categories
      function subCategories(){
        $data['categories'] = categories::all();
        $data['subCategories'] = subCategories::all();
        return view('admin.generalSettings.subCategories.index')->with($data);
      }
      function subCategoriesAdd(Request $request){
        $data = $request->all();

        $c = new subCategories;
        $c->category_id = $data['category_id'];
        $c->name = $data['name'];
        $c->save();
        $id = $c->id;
        if ($request->hasFile('image')) {
          $file = $request->file('image');
          $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
          $filename = $id.'-'.$filename;
          $file->move(base_path('/public/storage/settings/subCategory/'), $filename);
          subCategories::addFeatureImage($id, $filename);
        }

        return redirect()->back()->with('success', 'New Sub Category Added.');
      }
      function subCategoriesDelete($id){
        $id = base64_decode($id);
        subCategories::destroy($id);

        return redirect()->back()->with('success', 'Sub Category Deleted.');
      }
      function subCategoriesEdit($id){
        $id = base64_decode($id);
        $data['data'] = subCategories::find($id);
        $data['categories'] = categories::all();

        return view('admin.generalSettings.subCategories.response.edit')->with($data);
      }
      function subCategoriesUpdate(Request $request){
        $data = $request->all();
        $id = base64_decode($data['catid']);
        $c = subCategories::find($id);
        $c->category_id = $data['category_id'];
        $c->name = $data['name'];
        $c->save();
        if ($request->hasFile('image')) {
          $file = $request->file('image');
          $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
          $filename = $id.'-'.$filename;
          $file->move(base_path('/public/storage/settings/subCategory/'), $filename);
          subCategories::addFeatureImage($id, $filename);
        }

        return redirect()->back()->with('success', 'Sub Category Updated.');
      }

    //Fabric

      //Color
        function fabricColor(){
          $data['colors'] = color::all();
          return view('admin.generalSettings.fabric.color.index')->with($data);
        }
        function fabricColorAdd(Request $request){
          $data = $request->all();

          $c = new color;
          $c->label = $data['label'];
          $c->hashcode = $data['hashcode'];
          $c->save();
          $id = $c->id;
          if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/settings/fabric/color/'), $filename);
            color::addFeatureImage($id, $filename);
          }

          return redirect()->back()->with('success', 'Fabric Color Added.');
        }
        function fabricColorDelete($id){
          $id = base64_decode($id);
          color::destroy($id);

          return redirect()->back()->with('success', 'Fabric Color Deleted.');
        }
        function fabricColorEdit($id){
          $id = base64_decode($id);
          $data['data'] = color::find($id);

          return view('admin.generalSettings.fabric.color.response.edit')->with($data);
        }
        function fabricColorUpdate(Request $request){
          $data = $request->all();
          $id = base64_decode($data['colorid']);
          $c = color::find($id);
          $c->label = $data['label'];
          $c->hashcode = $data['hashcode'];
          $c->save();
          if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/settings/fabric/color/'), $filename);
            color::addFeatureImage($id, $filename);
          }

          return redirect()->back()->with('success', 'Fabric Color Updated.');
        }

      //Material
        function fabricMaterial(){
          $data['materials'] = material::all();
          return view('admin.generalSettings.fabric.material.index')->with($data);
        }
        function fabricMaterialAdd(Request $request){
          $data = $request->all();

          $c = new material;
          $c->name = $data['name'];
          $c->save();
          $id = $c->id;
          if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/settings/fabric/material/'), $filename);
            material::addFeatureImage($id, $filename);
          }

          return redirect()->back()->with('success', 'Fabric Material Added.');
        }
        function fabricMaterialDelete($id){
          $id = base64_decode($id);
          material::destroy($id);

          return redirect()->back()->with('success', 'Fabric Material Deleted.');
        }
        function fabricMaterialEdit($id){
          $id = base64_decode($id);
          $data['data'] = material::find($id);

          return view('admin.generalSettings.fabric.material.response.edit')->with($data);
        }
        function fabricMaterialUpdate(Request $request){
          $data = $request->all();
          $id = base64_decode($data['materialid']);
          $c = material::find($id);
          $c->name = $data['name'];
          $c->save();
          if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/settings/fabric/material/'), $filename);
            material::addFeatureImage($id, $filename);
          }

          return redirect()->back()->with('success', 'Fabric Material Updated.');
        }

      //Pattern
        function fabricPattern(){
          $data['patterns'] = pattern::all();
          return view('admin.generalSettings.fabric.pattern.index')->with($data);
        }
        function fabricPatternAdd(Request $request){
          $data = $request->all();

          $c = new pattern;
          $c->name = $data['name'];
          $c->save();
          $id = $c->id;
          if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/settings/fabric/pattern/'), $filename);
            pattern::addFeatureImage($id, $filename);
          }

          return redirect()->back()->with('success', 'Fabric Pattern Added.');
        }
        function fabricPatternDelete($id){
          $id = base64_decode($id);
          pattern::destroy($id);

          return redirect()->back()->with('success', 'Fabric Pattern Deleted.');
        }
        function fabricPatternEdit($id){
          $id = base64_decode($id);
          $data['data'] = pattern::find($id);

          return view('admin.generalSettings.fabric.pattern.response.edit')->with($data);
        }
        function fabricPatternUpdate(Request $request){
          $data = $request->all();
          $id = base64_decode($data['patternid']);
          $c = pattern::find($id);
          $c->name = $data['name'];
          $c->save();
          if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/settings/fabric/pattern/'), $filename);
            pattern::addFeatureImage($id, $filename);
          }

          return redirect()->back()->with('success', 'Fabric Pattern Updated.');
        }

      //Type
        function fabricType(){
          $data['types'] = type::all();
          return view('admin.generalSettings.fabric.type.index')->with($data);
        }
        function fabricTypeAdd(Request $request){
          $data = $request->all();

          $c = new type;
          $c->name = $data['name'];
          $c->save();
          $id = $c->id;
          if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/settings/fabric/type/'), $filename);
            type::addFeatureImage($id, $filename);
          }

          return redirect()->back()->with('success', 'Fabric Type Added.');
        }
        function fabricTypeDelete($id){
          $id = base64_decode($id);
          type::destroy($id);

          return redirect()->back()->with('success', 'Fabric Type Deleted.');
        }
        function fabricTypeEdit($id){
          $id = base64_decode($id);
          $data['data'] = type::find($id);

          return view('admin.generalSettings.fabric.type.response.edit')->with($data);
        }
        function fabricTypeUpdate(Request $request){
          $data = $request->all();
          $id = base64_decode($data['typeid']);
          $c = type::find($id);
          $c->name = $data['name'];
          $c->save();
          if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
            $filename = $id.'-'.$filename;
            $file->move(base_path('/public/storage/settings/fabric/type/'), $filename);
            type::addFeatureImage($id, $filename);
          }

          return redirect()->back()->with('success', 'Fabric Type Updated.');
        }





}

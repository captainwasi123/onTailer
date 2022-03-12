<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\fabric;
use App\Models\general\categories;
use App\Models\general\subCategories;
use App\Models\general\fabric\color;
use App\Models\general\fabric\material;
use App\Models\general\fabric\pattern;
use App\Models\general\fabric\type;

class FabricController extends Controller
{
    public function index(){
        $data['fabrics'] = fabric::all();

        return view('admin.fabric.index')->with($data);
    }
    public function add(){
        $data['categories'] = categories::all();
        $data['subCategories'] = subCategories::all();
        $data['color'] = color::all();
        $data['material'] = material::all();
        $data['pattern'] = pattern::all();
        $data['type'] = type::all();

        return view('admin.fabric.add')->with($data);
    }
    public function addSubmit(Request $request){
        $data = $request->all();

        $id = fabric::addFabric($data);
        if ($request->hasFile('image')) {
          $file = $request->file('image');
          $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
          $filename = $id.'-'.$filename;
          $file->move(base_path('/public/storage/fabric/'), $filename);
          fabric::addFeatureImage($id, $filename);
        }
        return redirect()->back()->with('success', 'New Fabric Added.');
    }
    public function edit($id){
        $data['fabric'] = fabric::find(base64_decode($id));
        $data['categories'] = categories::all();
        $data['subCategories'] = subCategories::where('category_id', $data['fabric']->category_id)->get();
        $data['color'] = color::all();
        $data['material'] = material::all();
        $data['pattern'] = pattern::all();
        $data['type'] = type::all();


        return view('admin.fabric.response.edit')->with($data);
    }
    public function update(Request $request){
        $data = $request->all();
        $id = base64_decode($data['fabricid']);
        fabric::editFabric($id, $data);
        if ($request->hasFile('image')) {
          $file = $request->file('image');
          $filename = date('dmyHis').'.'.$file->getClientOriginalExtension();
          $filename = $id.'-'.$filename;
          $file->move(base_path('/public/storage/fabric/'), $filename);
          fabric::addFeatureImage($id, $filename);
        }
        return redirect()->back()->with('success', 'Fabric Updated.');
    }
    public function delete($id){
        fabric::destroy(base64_decode($id));

        return redirect()->back()->with('success', 'Fabric Deleted.');
    }

    public function getSubCategory($id){
        $data = subCategories::where('category_id', $id)->orderBy('name')->get();
        $element = '<option value="">Select Sub Category</option>';
        foreach($data as $val){
            $element .= '<option value="'.$val->id.'">'.$val->name.'</option>';
        }
        if(count($data) == 0){
            $element = '<option value="">No Sub Categories Found.</option>';
        }
        return $element;
    }
}

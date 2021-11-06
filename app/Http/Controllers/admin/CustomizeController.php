<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomizeController extends Controller
{
    // customization
    public function customization()
    {
        return view('admin.customization.customization');
    }

    public function addcustompart()
    {
        return view('admin.customization.add-custom-part');
    }

    // mens dress
    public function menblazer()
    {
        return view('admin.customization.men.blazer');
    }

     public function menjeans()
    {
        return view('admin.customization.men.jeans');
    }

    public function menkurta()
    {
        return view('admin.customization.men.kurta');
    }

    public function menpyjama()
    {
        return view('admin.customization.men.pyjama');
    }

    public function mentshirt()
    {
        return view('admin.customization.men.tshirt');
    }

    public function mentrouser()
    {
        return view('admin.customization.men.trouser');
    }

    // women dress

    public function womenblazer()
    {
        return view('admin.customization.women.blazer');
    }

     public function womenjeans()
    {
        return view('admin.customization.women.jeans');
    }

     public function womenkurti()
    {
        return view('admin.customization.women.kurti');
    }


    public function womenshirt()
    {
        return view('admin.customization.women.shirt');
    }

    public function womentrouser()
    {
        return view('admin.customization.women.trouser');
    }

    public function womendresses()
    {
        return view('admin.customization.women.dresses');
    }

    // add men

    public function addMenblazer()
    {
        return view('admin.customization.men.add-blazer');
    }

    public function addMenharem()
    {
        return view('admin.customization.men.add-harem');
    }
    
    public function addMenjeans()
    {
        return view('admin.customization.men.add-jeans');
    }

     public function addMenkurta()
    {
        return view('admin.customization.men.add-kurta');
    }

     public function addMenshirt()
    {
        return view('admin.customization.men.add-shirt');
    }

     public function addMentrouser()
    {
        return view('admin.customization.men.add-trouser');
    }


    // add women

    public function addwomenblazer()
    {
        return view('admin.customization.women.add-blazer');
    }

    public function addwomendresses()
    {
        return view('admin.customization.women.add-dresses');
    }
    
    public function addwomenjeans()
    {
        return view('admin.customization.women.add-jeans');
    }

     public function addwomenkurti()
    {
        return view('admin.customization.women.add-kurti');
    }

     public function addwomenshirt()
    {
        return view('admin.customization.women.add-shirt');
    }

     public function addwomentrouser()
    {
        return view('admin.customization.women.add-trouser');
    }


}

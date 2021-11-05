<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomizeController extends Controller
{
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
}

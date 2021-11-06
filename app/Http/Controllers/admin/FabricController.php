<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FabricController extends Controller
{
    // fabric

     public function fabric()
    {
        
        return view('admin.fabric.fabric');
    }
}

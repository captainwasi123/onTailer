<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MeasurementController extends Controller
{
     public function Aimeasurement()
    {
        
        return view('admin.fabric.measurement.ai-measurement');
    }

      public function Manualmeasurement()
    {
        
        return view('admin.fabric.measurement.manual-measurement');
    }

      public function Standmeasurement()
    {
        
        return view('admin.fabric.measurement.standard-measurement');
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    
    public function discount()
    {
        return view('admin.discount.discount');
    }
}

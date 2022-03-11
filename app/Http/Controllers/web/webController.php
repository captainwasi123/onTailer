<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class webController extends Controller
{
    //
    function index(){

        return view('web.index');
    }
    function about(){

        return view('web.about');
    }
    function fitGurantee(){

        return view('web.fit-gurantee');
    }
    function shoppingPolicy(){

        return view('web.shopping-policy');
    }
    function returnPolicy(){

        return view('web.alteration-return-policy');
    }
    function privacyPolicy(){

        return view('web.privacy-policy');
    }
    function termsConditions(){

        return view('web.terms-conditions');
    }
    function contactUs(){

        return view('web.contact-us');
    }
}

<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mainController extends Controller
{
    //
    function index(){

    	return view('web.index');
    }
    function about(){

    	return view('web.about');
    }
    function fitgurantee(){

    	return view('web.fit-gurantee');
    }
    function shoppingpolicy(){

    	return view('web.shopping-policy');
    }
    function alterationreturnpolicy(){

    	return view('web.alteration-return-policy');
    }
    function privacypolicy(){

    	return view('web.privacy-policy');
    }
    function termsconditions(){

    	return view('web.terms-conditions');
    }
    function measurementprofile(){

    	return view('web.measurement-profile');
    }
    function aimeasurementtable(){

    	return view('web.ai-measurement-table');
    }
    function manualmeasurementtable(){

    	return view('web.manual-measurement-table');
    }
    function createmeasurementprofile(){

    	return view('web.create-measurement-profile');
    }
    function contactus(){

    	return view('web.contact-us');
    }
    function paymentcontactus(){

    	return view('web.payment-contact-us');
    }
    function managecontactus(){

    	return view('web.manage-contact-us');
    }
    function offercontactus(){

    	return view('web.offer-contact-us');
    }
    function othercontactus(){

    	return view('web.other-contact-us');
    }
    function menshop(){

    	return view('web.men-shop');
    }
    function menshopsingle(){

    	return view('web.men-shop-single');
    }
    function addtocart(){

    	return view('web.add-to-cart');
    }
    function menshopfabric(){

    	return view('web.men-shop-fabric');
    }
    function menshopcustomize(){

    	return view('web.men-shop-customize');
    }
    function personalinformation(){

    	return view('web.personal-information');
    }
    
    
}


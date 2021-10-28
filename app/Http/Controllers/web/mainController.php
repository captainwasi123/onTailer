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
    
    function menshopfabric(){

    	return view('web.men-shop-fabric');
    }
    function menshopcustomize(){

    	return view('web.men-shop-customize');
    }
    function personalinformation(){

    	return view('web.personal-information');
    }
    function checkout(){

        return view('web.checkout');
    }
    function paymentmethod(){

        return view('web.payment-method');
    }
    function myorders(){

        return view('web.my-orders');
    }
    function orderwithaimeasurement(){

        return view('web.order-with-ai-measurement');
    }
    function orderwithmanualmeasurement(){

        return view('web.order-with-manual-measurement');
    }
    function orderwithstandardmeasurement(){

        return view('web.order-with-standard-measurement');
    }
    function viewshirtcustomization(){

        return view('web.view-shirt-customization');
    }
    function cancelorder(){

        return view('web.cancel-order');
    }
    function ordertracking(){

        return view('web.order-tracking');
    }
    function ordercanceltracking(){

        return view('web.order-cancel-tracking');
    }
    
    function modal(){

        return view('web.modal');
    }
    
    
    /*Nabeel*/  
    function addtocart(){

        return view('web.add-to-cart');
    }

    function measurementformen(){
        return view('web.measurement-for-men');
    }

    function aialgorithm(){
        return view('web.ai-algorithm');
    }
    function aialgorithmcalculate(){
        return view('web.ai-algorithm-calculate');
    }
    
    function standardsize(){
        return view('web.standard-size');
    }

    function manualmeasurements(){
        return view('web.manual-measurements');
    }
    
}


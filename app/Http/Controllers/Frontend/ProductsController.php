<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Mail;
use \App\Mail\InquiryMail;
use Illuminate\Http\Request;

/**
 * Class ProductsController.
 */
class ProductsController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function kayakConsumerProducts()
    {
        return view('frontend.kayak_consumer_products');
    }


    public function otherProducts()
    {
        return view('frontend.other_products');
    }

    public function kayakProducts()
    {
        return view('frontend.kayak_products');
    }

    public function send(Request $request)
    {        
        // dd($request);
        
        $details = [
            'name' => $request->name,
            'company' => $request->company,
            'phone' => $request->telephone,
            'email' => $request->email,
            'company' => $request->company,
            'message' => $request->message
        ];

        \Mail::to([$request->email,'nihsaan.enspirer@gmail.com'])->send(new InquiryMail($details));

        session()->flash('message','Thanks!');

        return back();    
    }
}

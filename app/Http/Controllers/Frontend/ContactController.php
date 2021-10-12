<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Contact\SendContactRequest;
use App\Mail\Frontend\Contact\SendContact;
use Illuminate\Http\Request;
Use App\Models\ContactUs;
use Mail;
use \App\Mail\ContactUsMail;


/**
 * Class ContactController.
 */
class ContactController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.contact_us');
    }

    public function store(Request $request)
    {        
        // dd($request);
        
        $add = new ContactUs;

        $add->name=$request->name;
        $add->email=$request->email;
        $add->company=$request->company;
        $add->telephone=$request->telephone;
        $add->message=$request->message;
        $add->status='Pending';

        $add->save();

        $details = [
            'name' => $request->name,
            'phone' => $request->telephone,
            'email' => $request->email,
            'company' => $request->company,
            'message' => $request->message
        ];

        \Mail::to('nihsaan.enspirer@gmail.com')->send(new ContactUsMail($details));

        session()->flash('message','Thanks!');

        return back();    
    }
   
}

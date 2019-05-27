<?php

namespace App\Http\Controllers\contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

use DB;
use File;
use Image;
use Input;
use Session;


class ContactController extends Controller
{
    public function getContact()
    {
        return view('contact.contact-us');
    }

    public function postContact(ContactRequest $request)
    {

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $msg = $request->input('message');

        $data = array('name' => $name,'email' => $email,'phone' => $phone,'msg' => $msg,
            'from' => 'gomla.online2017@gmail.com',
            'from_name' => 'Gomla Online');

        \Mail::send('contact.email', $data, function ($message) use ($data) {
            $message->to('support@gomla.online', 'Your Website')
                ->from( $data['from'], $data['from_name'] )
                ->subject('gomla.online Contact Message');
        });

        return redirect()->back()->with('success', 'تم إرسال الرساله بنجاح');


    }

}

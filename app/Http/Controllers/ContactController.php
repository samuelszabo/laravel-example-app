<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        //  Send mail to admin
        Mail::send('contact.mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'text' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('samuelszabo7@gmail.com', 'samuel')->subject('Contact form');
        });

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }

}

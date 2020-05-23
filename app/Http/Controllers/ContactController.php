<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contact;
use App\User;
use App\Notifications\ContactMailNotification;
use App\Http\Requests\ContactStoreRequest;
use Illuminate\Support\Facades\App;

class ContactController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lang)
    {
        App::setlocale($lang);
        return view('web.contact.create', compact('lang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactStoreRequest $request)
    {
        $data =new User;
        $data->email = 'otters.c.01@gmail.com';
        $data->name = request('name');
        $data->user_email = request('email');
        $data->message = request('message');
        $data->notify(new ContactMailNotification());


    }
}

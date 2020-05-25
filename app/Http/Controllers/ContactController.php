<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\InfoContact;
use App\Contact;
use App\User;
use App\Notifications\ContactMailNotification;
use Exception;

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
        $info = InfoContact::where('id', 1)->firstOrFail();
        return view('web.contact.create', compact('lang', 'info'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactStoreRequest $request, $lang)
    {
        $recaptcha=file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LeH7fsUAAAAAOS2EgK4PXQ8BFSXvPtPIVLrXNtn&response='.request('g-recaptcha-response'));
        $recaptcha=json_decode($recaptcha);

        if ($recaptcha->success) {
            try {
                $data =new User;
                $data->email = 'info@sparen.com.ar';
                $data->name = request('name');
                $data->user_email = request('email');
                $data->message = request('message');
                $data->notify(new ContactMailNotification());

                return redirect()->back()->with(['type' => 'success', 'title' => 'Envio Exitoso', 'msg' => 'El correo ha sido enviado exitosamente.']);
            } catch (Exception $e) {
                return redirect()->back()->with(['type' => 'error', 'title' => 'Envio Fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.'])->withInput();
            }
        } else {
            return redirect()->back()->with(['type' => 'error', 'title' => 'Envio Fallido', 'msg' => 'Ha ocurrido un error durante el proceso, intentelo nuevamente.'])->withInput();
        }
    }
}

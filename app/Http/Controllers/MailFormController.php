<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\MailFormRequest;
use App\Mail\Contact;

class MailFormController extends Controller
{
    public function contact(Request $request)
    {
        $inputs = $request->session()->get('inputs');

        return view('mailform.contact', compact('inputs'));
    }

    public function confirm (MailFormRequest $request)
    {
        $request->validate();

        $inputs = $request->all();
        $request->session()->put('inputs', $inputs);

        return view('mailform.confirm', compact('inputs'));
    }

    public function sendmail(Request $request)
    {
        $inputs = $request->all();
        Mail::to(env('MAIL_CONTACT_TO'))
            ->send(new Contact($inputs));
        $request->session()->forget('inputs', $inputs);

        return view('mailform.thanks');
    }
}

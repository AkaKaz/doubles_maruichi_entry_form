<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntryFormRequest;
use App\Mail\EntryReceived;
use Illuminate\Support\Facades\Mail;

class EntryFormController extends Controller
{
    public function index()
    {
        return view('entry/form');
    }

    public function back()
    {
        return redirect('/')->withInput();
    }

    public function confirm(EntryFormRequest $request)
    {
        $data = $request->validated();

        return view('entry/confirm', compact('data'));
    }

    public function complete(EntryFormRequest $request)
    {
        $data = $request->validated();

        foreach (config('entry-form.to') as $to) {
            $mail = Mail::to($to)
                ->cc(config('entry-form.cc'))
                ->bcc(config('entry-form.bcc'))
                ->send(new EntryReceived($data));
        }

        return view('entry/complete');
    }
}

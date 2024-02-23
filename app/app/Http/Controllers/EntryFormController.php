<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntryFormRequest;

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
        // sending email
        return view('entry/complete');
    }
}

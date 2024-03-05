<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewGraduateEntryRequest;
use App\Mail\NewGraduateEntryReceived;
use Illuminate\Support\Facades\Mail;

class NewGraduateEntryController extends Controller
{
    public function index()
    {
        return view('page/new-graduate-entry/form');
    }

    public function back()
    {
        return redirect()->route('new-graduate.index')->withInput();
    }

    public function confirm(NewGraduateEntryRequest $request)
    {
        $data = $request->validated();

        if ($request->has('profile.face')) {
            $_face = file_get_contents($data['profile']['face']);
            $_face_b64 = base64_encode($_face);
            $data['profile']['_face'] = [
                'base64' => $_face_b64,
                'mime' => $data['profile']['face']->getMimeType(),
            ];
        }

        return view('page/new-graduate-entry/confirm', compact('data'));
    }

    public function complete(NewGraduateEntryRequest $request)
    {
        $data = $request->validated();

        foreach (config('entry-form.new-graduate.to') as $to) {
            $mail = Mail::to($to)
                ->cc(config('entry-form.new-graduate.cc'))
                ->bcc(config('entry-form.new-graduate.bcc'))
                ->send(new NewGraduateEntryReceived($data));
        }

        return view('page/new-graduate-entry/complete');
    }
}

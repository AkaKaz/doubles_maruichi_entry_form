<?php

namespace App\Http\Controllers;

use App\Http\Requests\MidCareerEntryRequest;
use App\Mail\MidCareerEntryReceived;
use Illuminate\Support\Facades\Mail;

class MidCareerEntryController extends Controller
{
    public function index()
    {
        return view('page/mid-career-entry/form');
    }

    public function back()
    {
        return redirect()->route('mid-career.index')->withInput();
    }

    public function confirm(MidCareerEntryRequest $request)
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

        return view('page/mid-career-entry/confirm', compact('data'));
    }

    public function complete(MidCareerEntryRequest $request)
    {
        $data = $request->validated();

        foreach (config('entry-form.mid-career.to') as $to) {
            $mail = Mail::to($to)
                ->cc(config('entry-form.mid-career.cc'))
                ->bcc(config('entry-form.mid-career.bcc'))
                ->send(new MidCareerEntryReceived($data));
        }

        return view('page/mid-career-entry/complete');
    }
}

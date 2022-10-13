<?php

namespace App\Http\Controllers;

use Mail;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function send_mail(ContactRequest $request)
    {
        try {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,

            ];
            $mail_recevier = 'rolaahmedabdelmaksoud281997@gmail.com';
            Mail::to($mail_recevier)->send(new ContactMail($data));
            return redirect()->route('posts.index')->with('success', 'email sent successfully.');
        } catch (Exception $e) {

            return redirect()->route('posts.index')->with('error', 'error happens during sending mail please try again.');
        }
    }
}

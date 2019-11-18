<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\User;

class SendEmailController extends Controller
{
    function index($id)
    {
     $username = User::find($id);
     return view('send_email',compact('username'));
    }

    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

        $email = $request->email;
     
     Mail::to($email)->send(new SendMail($data));
     return back()->with('success', 'Email Sent!!!');

    }
}

?>

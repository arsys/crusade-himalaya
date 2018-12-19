<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Validator;
use App\Mail\Contact;
use App\Mail\QuickEnquiry;
use Session;
class PostController extends Controller
{
    public function postContact(Request $request)
    {
       // dd($request->all());
        $token = $request->input('g-recaptcha-response');
        if (strlen($token) > 0) {
            $this->validate($request, [
                'fullName' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'contactMessage' => 'min:10']);
//                    dd($request->all());
            $userIP = $request->ip();
            $IPdata = file_get_contents("http://api.ipstack.com/{$userIP}?access_key=2f40cb1cb05f40c9439fe91a309910b0");
            $IPdata = json_decode($IPdata);
            $user_info = "IP: {$IPdata->ip} <br> [ Country: <b>{$IPdata->country_name}</b> | City: {$IPdata->city} ]";
            $data = array(
                'name' => $request->fullName,
                'subject' => $request->subject,
                'email' => $request->email,
                'bodyMessage' => $request->contactMessage,
                'user_info' => $user_info,
            );
//            dd($data);
            Mail::send(new Contact($data));

            Session::flash('success', 'Email sent sucessfully!');
            return redirect()->back();
        }
    }

    public function quickEnquiry(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullName' => 'required',
            'email' => 'required|email',
            'enquiryMessage' => 'required',
        ]);
        if ($validator->passes()) {
            $userIP = $request->ip();
            $IPdata = file_get_contents("http://api.ipstack.com/{$userIP}?access_key=2f40cb1cb05f40c9439fe91a309910b0");
            $IPdata = json_decode($IPdata);
            $user_info = "IP: {$IPdata->ip} <br> [ Country: <b>{$IPdata->country_name}</b> | City: {$IPdata->city} ]";
            $data = array(
                'name' => $request->name,
                'email' => $request->email,
                'bodyMessage' => $request->content,
                'user_info' => $user_info,
            );
            Mail::send(new QuickEnquiry($data));
            return response()->json(['success'=>'Mail sent sucessfully.']);
        }
        return response()->json(['error'=>$validator->errors()->all()]);
    }
}

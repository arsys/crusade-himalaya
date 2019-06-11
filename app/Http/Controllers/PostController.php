<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use Mail;
use Validator;
use App\Mail\Contact;
use App\Mail\QuickEnquiry;
use App\Mail\Refer;
use App\Mail\Booking;
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
            $user_info = $this->ipLocation($request->ip());
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
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'fullName' => 'required',
            'email' => 'required|email',
            'enquiryMessage' => 'required',
        ]);
        if ($validator->passes()) {
            $user_info = $this->ipLocation($request->ip());

            $tour = Tour::where('id',$request->tour_id)->firstOrFail();
            // dd($tour);
            $sub = "Quick Enquiry for ". $tour->title." ". $tour->days." Days";
            $data = array(
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $sub,
                'bodyMessage' => $request->enquiryMessage,
                'user_info' => $user_info,
            );
            Mail::send(new QuickEnquiry($data));
            return response()->json(['success'=>'Mail sent sucessfully.']);
        }
        return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function referFriend(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fname' => 'required',
            'lname' => 'required',
            'myEmail' => 'required|email',
            'comment' => 'required',
            'sendTo1' => 'required|email'
        ]);
        if ($validator->passes()) {
            $data = array(
                'name' => $request->fname.''.$request->lname,
                'sender' => $request->myEmail,
                'receiver' => $request->myEmail,
                'bodyMessage' => $request->comment,
            );
            if(isset($request->sendTo2)) {
               $data['receiver2'] = $request->sendTo2;
           }
           if(isset($request->sendTo3)) {
               $data['receiver3'] = $request->sendTo3;
           }
           if(isset($request->copy)) {
               $data['copy'] = $request->copy;
           }
           Mail::send(new Refer($data));
           return response()->json(['success'=>'Mail sent sucessfully.']);
       }
       return response()->json(['error'=>$validator->errors()->all()]);
    }    

   public function requestBroucher(Request $request)
   {
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
    ]);
    if ($validator->passes()) {
        return response()->json(['success'=>'Mail sent sucessfully.']);
    }
    return response()->json(['error'=>$validator->errors()->all()]);
   }

 public function bookingComplete(Request $request)
 {
    //  dd($request->all());
    $this->validate($request, [
        'depDate' => 'required',
        'fullName' => 'required',
        'email' => 'required|email',
        'contact' => 'required',
        'bookingMessage' => 'min:10|sometimes']);

    $user_info = $this->ipLocation($request->ip());   
    $tour = Tour::where('id',$request->tour_id)->firstOrFail();
    // dd($tour);
    $sub = "Tour booking request for ". $tour->title." ". $tour->days." Days";    
    $trip = $tour->title." ". $tour->days." Days"; 
    $data = array(
        'name' => $request->fullName,
        'email' => $request->email,
        'contact' => $request->contact,
        'subject' => $sub,
        'a' => $request->bookingMessage,
        'user_info' => $user_info,
        'trip' => $trip,
        'pax' => $request->travellers,
        'country' => $request->country,
        'date' => $request->depDate
    );

    Mail::send(new Booking($data));
    Session::flash('success', 'Email sent sucessfully!');
    return redirect()->route('frontend.thankYou', $tour->slug);

 }

 public function ipLocation($ip)
 {
     $IPdata = file_get_contents("http://api.ipstack.com/{$ip}?access_key=2f40cb1cb05f40c9439fe91a309910b0");
     $IPdata = json_decode($IPdata);
     $user_info = "IP: {$IPdata->ip} <br> [ Country: <b>{$IPdata->country_name}</b> | City: {$IPdata->city} ]";
     return $user_info;
 }

}

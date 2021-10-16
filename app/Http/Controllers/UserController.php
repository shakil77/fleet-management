<?php
namespace App\Http\Controllers;

use App\Mail\FleetMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function generate_otp()
    {
        $otp = null;
        $otp = rand(100000, 999999);
        return $otp;
    }

    public function send_otp()
    {
        $otp = $this->generate_otp();
        $message = "Your OTP for this transaction is $otp, which is valid for 15 minutes only.";
        //Mail::to('mohammadraza0423@gmail.com')->send(new FleetMail($message));
        // $data = array('name'=>'Akil Raza');
        // Mail::send(['text'=>$message],$data, function($message) {
        //     $message->to('mohammadraza0423@gmail.com','Akil')->subject('Test Subject');
        //     $message->from('mohammadraza0423@gmail.com','Shakeel Ahmad');
        // });
        // echo 'otp sent';

        $to_name = 'Akil Raza';
        $to_email = 'mohammadraza0423@gmail.com';
        $data = array('name'=>"Cloudways (sender_name)", "body" => "A test mail");
  
        Mail::send('mail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
        ->subject('Laravel Test Mail');
        $message->from('mohammadraza0423@gmail.com','Test Mail');
        });
   
        return 'Email sent Successfully';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}

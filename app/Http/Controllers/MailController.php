<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\UserTerdaftar;

class MailController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // Variable data ini yang berupa array ini akan bisa diakses di dalam "view".
    $data = ['name' => 'Ali', 'age' => 20 ];

    // "emails.hello" adalah nama view.
    Mail::send('emails.hello', $data, function ($mail)
    {
      // Email dikirimkan ke address "momo@deviluke.com"
      // dengan nama penerima "Momo Velia Deviluke"
      $mail->to('erwin_txt@yahoo.com', 'erwin');

      // Copy carbon dikirimkan ke address "haruna@sairenji"
      // dengan nama penerima "Haruna Sairenji"
      //$mail->cc('haruna@sairenji', 'Haruna Sairenji');

      $mail->subject('Test email!');
      });
      return view('mail');
  }
  public function daftar(){
    $user = ['name' => 'iqbal', 'id' => 3 ];

    Mail::to('erwin_txt@yahoo.com', 'erwin')->send(new UserTerdaftar($user));
    //return $user;

    }
}

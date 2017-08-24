<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;
use App\User;


class ProfilController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index(){
      return view('ubahprofil');
  }
  public function post(Request $request)
  {
    $rules = ['name' => 'required|string',
              'address' => 'required|string',
              'telp' => 'required|numeric',
              'email' => 'required|email',
              '_token'=>'required'];
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->fails()) {
        return redirect('/profil')
                    ->withErrors($validator)
                    ->withInput();
    }else{
            $name         = $request->input('name');
            $address      = $request->input('address');
            $telp         = $request->input('telp');
            $email        = $request->input('email');
            $id           = Auth::id();
            $data         = User::where('id',$id)->update(['name'=>$name,'address'=>$address,'telp'=>$telp,'email'=>$email]);
            Session::flash('flash_message', 'Data Telah diganti bro!');
            //return redirect()->back();
            return redirect('/profil');


    }

  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class ChangeController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index(){
      return view('changepassword');
  }

  public function post(Request $request){
    $rules = ['oldpassword' => 'required|min:6',
              'password' => 'required|min:6',
              'password-confirmation' => 'required|min:6|same:password','_token'=>'required'];
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->fails()) {
        return redirect('change')
                    ->withErrors($validator)
                    ->withInput();
        //echo 'fail';
    }else{
        $hashedPassword = Auth::user()->password ;
        if (Hash::check($request->input('oldpassword'), $hashedPassword)) {
            $password      = bcrypt($request->input('password'));
            $id           = Auth::id();
            $data         = User::where('id',$id)->update(['password'=>$password ]);
            Session::flash('flash_message', 'Password Telah diganti bro!');
            //return redirect()->back();
            return redirect('/change');
        }else {
            Session::flash('flash_message', 'Password Lama Tidak Cocok bro!');
            return redirect('/change');
        }

    }
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\User;
use Session;

class ListinguserController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index(){
      return view('data');
  }


  public function dataUser()
    {
        //$users = User::select(['id','name','email','created_at','updated_at']);
        //return Datatables::of($users)->make();
        return Datatables::of(User::query())
        // tambah kolom untuk aksi edit dan hapus
        ->addColumn('action',
        '<a href="/datauser/{{ $id }}/edit" title="Edit" class="btn-sm btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
        <a href="/datauser/{{ $id }}/delete" title="Delete" class="btn-sm btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
        <!--<form style="display: inline" >
            <input name="_method" type="hidden" value="DELETE">
            <input name="_token" type="hidden" value="{!! csrf_token() !!}">
            <button class="btn-sm btn-danger" type="button" style="border: none"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
        </form>-->')
        ->make(true);
    }
    public function createUser()
      {
          return view('createuser');
      }

      public function createpost(Request $request){
        $rules = ['name' => 'required|string',
                  'address' => 'required|string',
                  'telp' => 'required|numeric',
                  'email' => 'required|email',
                  'password' => 'required|min:6',
                  'password-confirmation' => 'required|min:6|same:password'];

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return redirect('/datauser/create')
                        ->withErrors($validator)
                        ->withInput();
        }else{
                $data = new User;
                $data->name   = $request->input('name');
                $data->address= $request->input('address');
                $data->telp   = $request->input('telp');
                $data->email  = $request->input('email');
                //$data->password= bcrypt($request->input['password']);
                $data->password = bcrypt($request->input('password'));
                $data->save();
                Session::flash('flash_message', 'Data Telah tersimpan bro!');
                //return redirect()->back();
                return redirect('/datauser/create');

        }
      }

    public function editform(Request $request)
      {
          $data = User::select('id','name','address','telp','email')->where('id',$request->id)->first();
          //dd($data);
          return view('edituser',compact('data'));
      }

    public function editpost(Request $request){
      $rules = ['name' => 'required|string',
                'address' => 'required|string',
                'telp' => 'required|numeric',
                'email' => 'required|email'];
      $validator = Validator::make(Input::all(), $rules);
      $id =$request->input('id');
      if ($validator->fails()) {
          return redirect('/datauser/'.$id.'/edit')
                      ->withErrors($validator)
                      ->withInput();
      }else{
              $name         = $request->input('name');
              $address      = $request->input('address');
              $telp         = $request->input('telp');
              $email        = $request->input('email');
              $id           = $request->input('id');
              $data         = User::where('id',$id)->update(['name'=>$name,'address'=>$address,'telp'=>$telp,'email'=>$email]);
              Session::flash('flash_message', 'Data Telah diganti bro!');
              //return redirect()->back();
              return redirect('/datauser/'.$id.'/edit');

      }
    }
    public function deleteform(Request $request)
        {
            $data = User::select('id','name','address','telp','email')->where('id',$request->id)->first();
            //dd($data);
            return view('deleteuser',compact('data'));
        }
    public function deletepost(Request $request){
            $id = $request->input('id');
            User::where('id',$id)->delete();
            return redirect('/datauser');
        }
}

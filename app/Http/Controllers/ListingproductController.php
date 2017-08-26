<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Product;
use Session;

class ListingproductController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function index(){
      return view('dataPdt');
  }


  public function dataProduct()
    {
        //alternatif 1
        //$users = User::select(['id','name','email','created_at','updated_at']);
        //return Datatables::of($users)->make();

        //alternatif 2
        //return Datatables::of(Product::query())

        //alternatif 3
        $product = Product::all();
        //Product::query();


        return Datatables::of($product)

        ->editColumn('type_name', function ($product) {
                        return $product->Type->type_name;
                    })
        ->editColumn('price', function ($product) {
                        return number_format($product->price,2,',','.');
                    })
        // tambah kolom untuk aksi edit dan hapus
        ->addColumn('action',
        '<a href="/dataproduct/{{ $id }}/edit" title="Edit" class="btn-sm btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
        <a href="/dataproduct/{{ $id }}/delete" title="Delete" class="btn-sm btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
        <!--<form style="display: inline" >
            <input name="_method" type="hidden" value="DELETE">
            <input name="_token" type="hidden" value="{!! csrf_token() !!}">
            <button class="btn-sm btn-danger" type="button" style="border: none"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
        </form>-->')
        ->make(true);

    }

    public function editform(Request $request)
      {
          $data = Product::select('id','product_name','supplier_name','price')->where('id',$request->id)->first();
          return view('editproduct',compact('data'));
      }
    public function editpost(Request $request){
      $rules = ['product_name' => 'required|string',
                'supplier_name' => 'required|string',
                'price' => 'required|numeric'];
      $validator = Validator::make(Input::all(), $rules);
      $id =$request->input('id');
      if ($validator->fails()) {
          return redirect('/dataproduct/'.$id.'/edit')
                      ->withErrors($validator)
                      ->withInput();
      }else{
              $product_name = $request->input('product_name');
              $supplier_name= $request->input('supplier_name');
              $price        = $request->input('price');
              $id           = $request->input('id');
              $data         = Product::where('id',$id)->update(['product_name'=>$product_name,'supplier_name'=>$supplier_name,'price'=>$price]);
              Session::flash('flash_message', 'Data Telah diganti bro!');
              //return redirect()->back();
              return redirect('/dataproduct/'.$id.'/edit');

      }
    }
    public function deleteform(Request $request)
        {
            $data = Product::select('id','product_name','supplier_name','price')->where('id',$request->id)->first();
            //dd($data);
            return view('deleteproduct',compact('data'));
        }
    public function deletepost(Request $request){
            $id = $request->input('id');
            Product::where('id',$id)->delete();
            return redirect('/dataproduct');
        }


}

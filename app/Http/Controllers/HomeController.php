<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $cek_total = User::select(DB::raw('count(id) as jumlah'))->first();
          if ($cek_total){ $user =  $cek_total->jumlah;}else{$user = 0;};
        $cek_total = Product::select(DB::raw('count(id) as jumlah'))->first();
          if ($cek_total){ $product =  $cek_total->jumlah;}else{$product = 0;};
        return view('home',compact('user','product'));
    }
}

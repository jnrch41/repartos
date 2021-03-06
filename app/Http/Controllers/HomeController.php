<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


      if (Auth::user()->type === 'admin') {
        return redirect()->intended('admin/resumen');
      }elseif (Auth::user()->type === 'supervisor') {
        return redirect()->intended('supervisor/resumen');
      }else {
        return redirect()->intended('reparto/resumen');
      }



    }




}

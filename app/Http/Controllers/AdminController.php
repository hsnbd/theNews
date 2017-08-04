<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return (\Auth::guest())? redirect('/') : view('admin.index');
        // if(\Auth::guest()){
        //   return redirect('/');
        // }
        //
        // return view('admin.index');

    }


}

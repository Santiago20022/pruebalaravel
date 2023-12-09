<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request) {
        
        return view('test', [
            dd($request->query('title' , default: 'valor default'))
        ]);
    }
}

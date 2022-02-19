<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function fruit()
    {
       return view('admin.productshow');
    }

    public function fruitcreate()
    {
        return view('admin.productcreate');
    }

    public function fruitedit(Request $request)
    {

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquriy;

class ProductController extends Controller
{
    public function enquriy(Request $request)
    {
        // dd($request->all());
        $enquriy = new Enquriy();
        $enquriy->name = $request->name;
        $enquriy->email = $request->email;
        $enquriy->phone = $request->phone;
        $enquriy->message = $request->message;
        $enquriy->save();
        return redirect()->back(); 
    }
}

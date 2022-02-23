<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fruit;

class AllController extends Controller
{
    public function fruit()
    {
       $auth = \Auth::id(); 
       $products = fruit::where('auth_id',$auth)->get(); 
       return view('admin.productshow',["products"=>$products]);
    }

    public function fruitcreate()
    {
        return view('admin.productcreate');
    }

    public function fruitstore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required|file|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($image = $request->file('file')) {
            $destinationPath = 'public/fruit/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
        }

        $fruit = new Fruit();
        $fruit->auth_id = \Auth::id();
        $fruit->title= $request->get('title');
        $fruit->img = $profileImage;
        $fruit->save();

        return redirect()->route('productshow');

    }

    public function fruitedit($id)
    {
        $friutedit = fruit::where('id',$id)->first();
        return view('admin.productedit',['friutedit'=>$friutedit]); 
    }
}

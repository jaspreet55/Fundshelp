<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Type;

class TypeController extends Controller
{
    public function create(Request $request)
    {
        if($request->isMethod('post'))
        {
         $type = new Type();
         $type->name =$request->name;
         $type->status =$request->status;
         $type->save();

    	
    	}
    	return view('type.addtype');
    } 
}

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
             $request->validate([
            
            'name' => 'required',
            'status' =>'required',
        ]);
         $type = new Type();
         $type->name =$request->name;
         $type->status =$request->status;
         $type->save();

    	
    	}
    	return view('type.addtype');
    } 
     public function typelisting()
    {
      $typelist = Type::get();
      return view('type.typelisting',['typelist'=>$typelist]);
    }
    public function enabled($id)
    {
      Type::where('id',$id)->update(['status'=>1]);
      return back();
    }
    public function disabled($id)
    {
      Type::where('id',$id)->update(['status'=>0]);
      return back();
    }
    public function typeedit($id)
    {
      // dump($id);
      
      $typechng = Type::find($id);
        return view('type.edit',['typeedit'=>$typechng]);
        
    }
     public function updatetype(Request $request)
    {  
        dump($request->all());
        Type::where('id',$request['id'])->update($request->except('_token'));
        return redirect()->route('type.typelisting');
    }
    public function delete($id)
    {
       
        Type::where('id',$id)->delete();
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Event;
use App\Model\Type;
use Illuminate\Support\Facades\Storage;
use Session;

class EventController extends Controller
{

    // public function all_query($id){

    //  $all = Event::all();

    //  Event::select(['id','title'])->get();

    // $find = Event::find($id)->update(['title'=]);
    // dump($find);
    //  dump($all->toArray());



    // }
    public function create(Request $request){
     //  Type::all(); // for select all data without any conditon
     // $types = Type::select(['id','name'])->get(); // for select all data without any conditon
     //  dump($types->toArray());
     //  Type::select(['id','name'])->where(['status'=>1, 'name'=>'abc'])->get(); // for select all data without any conditon

    	// dump(1234);
		 // dump($request);
      if($request->isMethod('post')){
        // dd($request->images);
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'title' =>'required',
            'description' =>'required',
            'phone' =>'required',
            'address' =>'required',
        ]);
        $imageName = NULL;
          if($request->hasFile('images'))
          {
            $no =1;
            foreach ($request->images as $key => $value) {
            $imageName = $no.time().'.'.$value->getClientOriginalExtension();
            $value->move(public_path('images'), $imageName);
            $img[] = $imageName;
             $no++;
           }
          }
        $event = new Event();
        $event->fill($request->except('images'));
            // $event->fill($request->except('video'));
        $event->images =json_encode($img);
              // $event->video =$videos;
        $event->save();
        echo '123'.$request['title'];
        Session::flash('success',' Event successfully created.');
        return back();//->with('success','You have successfully upload image.')
           // ->with('images',$imageName);
      }
        $type_data = Type::pluck('name','id');
    	return view('events.addevent',['data_type'=>$type_data]);
    }
    public function eventlisting()
    {
      $list = Event::get();
      return view('events.listing',['list'=>$list]);
    }
    public function enabled($id)
    {
      Event::where('id',$id)->update(['status'=>1]);
      return back();
    }
    public function disabled($id)
    {

    }
}

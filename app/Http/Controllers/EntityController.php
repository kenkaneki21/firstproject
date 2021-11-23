<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entity;
use Illuminate\Support\Carbon;
use Auth;
use Illuminate\Support\Str;

class EntityController extends Controller
{
   public function __construct(){
      $this->middleware('auth');
    }
    //
    public function Entitylist(){
     $entities = Entity::latest()->paginate(5);
     return view('admin.entity.index',compact('entities'));
    }
    public function Register(){
    	 return view('admin.entity.register');
    }
    public function EntityEdit($id){
    	$entities = Entity::find($id);
    	 return view('admin.entity.edit',compact('entities'));

    }
    public function EntityUpdate(Request $request ,$id){
        $update = Entity::find($id)->update([
            'f_name' => Str::ucfirst($request->firstname),
            'm_name' => Str::ucfirst($request->middlename),
            'l_name' => Str::ucfirst($request->lastname),
            'address' => $request->address,
            'contact_number' => $request->contact,
            'email' => $request->email,     
        ]);
         
        return Redirect()->route('entity.list')->with('success','Entity Updated Successfull');
    }
    public function RegisterEntity(Request $request){
    	$validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
        ],
        [
            'fname.required' => 'Please Input First Name',
            'lname.required' => 'Please Input Last Name',   
        ]);
        Entity::insert([
            'f_name' => Str::ucfirst($request->firstname),
            'm_name' => Str::ucfirst($request->middlename),
            'l_name' => Str::ucfirst($request->lastname),
            'address' => $request->address,
            'contact_number' => $request->contact,
            'email' => $request->email,
            'created_at' => Carbon::now(),
        ]);
        return Redirect()->back()->with('success','Brand Update Succesfully');
    }
     public function EntityDelete($id){
        $delete = Entity::find($id)->delete();
        return Redirect()->back()->with('success','Category Deleted Successfull');

    }
    public function Logout(){
        Auth::logout();
        return Redirect()->route('login')->with('success','User Logout');
    }
}

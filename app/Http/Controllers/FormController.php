<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class FormController extends Controller{

    public function index(){
        return view('index');
}
public function register(){
    return view('form');
}
public function store(Request $request){

    // dd($request->all());
    $request->validate(
        [
            'name'=>'required',
            'email'=>'required|email',
            'contact'=>'required',
            'country'=>'required',
            'province'=>'required',
            'address'=>'required',
            'password'=>'required',
            'confirm_password'=>'required|same:password',
            'gender'=>'required'
        ]);
        $entries= new Customer;
        $entries ->name=$request['name'];
        $entries->email=$request['email'];
        $entries->contact=$request['contact']; 
        $entries->country=$request['country'];
        $entries->province=$request['province']; 
        $entries->address=$request['address'];  
        $entries->password= md5($request['password']);
        $entries->confirm_password= md5($request['confirm_password']);
        $entries->gender=$request['gender'];

       $entries->save();
       return redirect('/view'); 
    // echo"<pre>";
//     echo "<pre>";
//     print_r($request->all());
 }
 public function view(){
    $entries=Customer::all();
    $data=compact('entries');
    return view('customer')->with($data);
    
}


public function destory($id){
    $data = Customer::find($id);
    $data->delete();
    return redirect('/view');
}
public function edit($id){
    $data=Customer::find($id);
    return view ('update',['data'=>$data]);
}
public function update($id,Request $request){
    $request->validate([
        'password'=>'required',
        'confirm_password'=>'required|same:password'

    ]);
    $entries= new Customer;
        $entries ->name=$request['name'];
        $entries->email=$request['email'];
        $entries->contact=$request['contact']; 
        $entries->country=$request['country'];
        $entries->province=$request['province']; 
        $entries->address=$request['address'];  
        $entries->password= md5($request['password']);
        $entries->confirm_password= md5($request['confirm_password']);
        $entries->gender=$request['gender'];
        $entries->save();
        return redirect('/view'); 
    
}


}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class ApiController extends Controller
{
    function api($id=null){
        return $id?Customer::find($id):Customer::all();
    }
    function addData(Request $req){
        $req->validate(
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
        $entries->name=$req->name;
        $entries->email=$req->email;
        $entries->contact=$req->contact;
        $entries->country=$req->country;
        $entries->province=$req->province;
        $entries->address=$req->address;
        $entries->password=md5($req->password);
        $entries->confirm_password=md5($req->confirm_password);
        $entries->gender=$req->gender;
        $result=$entries->save();
        
        if($result){
            return["Result=>Data has been saved"];
    
        }
        else{
            ["Result=>Operation failed"];
        }
    
    
    
    
    }
    function updateData(Request $req){
        $req->validate(
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
        $entries= Customer::find($req->id);
        $entries->name=$req->name;
        $entries->email=$req->email;
        $entries->contact=$req->contact;
        $entries->country=$req->country;
        $entries->province=$req->province;
        $entries->address=$req->address;
        $entries->password=md5($req->password);
        $entries->confirm_password=md5($req->confirm_password);
        $entries->gender=$req->gender;
        $result=$entries->save();
        
        if($result){
            return["Result=>Data has been update"];
    
        }
        else{
            ["Result=>update Operation failed"];
        }
    
    
    
    
    }
    Function search($name){
        return Customer::where('name',"like","%".$name."%")->get();
    } 
    function destroy($id){
     $entries = Customer::find($id);
     $result= $entries->delete();
     if($result){
      return  ["Result=> has been deleted"];
     }else{
       return ["Result=>Operation Failed"];
     }
    }
}

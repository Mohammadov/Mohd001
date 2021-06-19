<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAdmin(){
        $data=[];
        $data['name']='ahmad';
        $data['age']=25;
        $data['id']=400;
        $obj=new \stdClass();
        $obj->name='khaled';
        $obj->age=30;
        $obj->id=500;
        $user=['mohd','saleh','awad'];
        return view('admin',$data,compact('obj','user'));
    }
    public function getLanding(){
        return view('landing');
    }
}

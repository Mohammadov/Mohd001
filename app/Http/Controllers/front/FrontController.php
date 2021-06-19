<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{


    public function getOmar(){
        return'omar 5ara';
    }
    public function getSamer(){
        return'Samer 5ara';
    }
    public function getAhmad(){
        return'Ahmad 5ara';
    }
    public function getAge(){
        return'38';
    }
    public function getName(){
        return'AbuELZOOZ';
    }
    public function getId(){
        return'17';
    }
}

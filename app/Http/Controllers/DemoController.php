<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
  function DemoAction1(){
    return "profile";
  }
  function DemoAction2(){
    return "settings";
  }
}
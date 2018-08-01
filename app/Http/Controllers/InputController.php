<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reserve;

class InputController extends Controller
{
    public function index(){
      $date = date('m/d/Y',strtotime('now'));
      
    }
}

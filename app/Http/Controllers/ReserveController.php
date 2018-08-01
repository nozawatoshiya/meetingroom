<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reserve;

class ReserveController extends Controller
{
    public function index(){
      $date = date('m/d/Y',strtotime('now'));
      $dateJ = date('Y年m月d日',strtotime($date));

      $result = reserve::where('date',$date)->orderBy('startTime','asc')->get();

      if(!$result->isempty()){
        $message = "";

        return view('reserve',compact('result','dateJ','message'));
      }else{
        $message = $dateJ.' のデータは存在しません。';

        return view('reserve',compact('result','dateJ','message'));
      }

    }

    public function test(){
      return view('test');      
    }
}

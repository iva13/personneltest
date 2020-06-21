<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class UserController extends Controller{

  public function user()
  {
      $users = User::all();
      return view('users.index',compact('users'));

  }
  public function show($id)
  {
    $users = DB::table('users')->find($id);
    
    $lastCall = DB::table('users')
    ->where('user', $users->user)
    ->orderBy('date')
    ->limit(5)
    ->get();

    return view('users.show',compact('users', 'lastCall'));
  }

}
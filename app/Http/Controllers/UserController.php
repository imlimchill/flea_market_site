<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
  public function admin()
  {
    $users = User::get(); //User = model

    return view('management.admin', [
      'user' => $users]);
  }

  public function index()
  {
    $users = User::get(); //User = model

    return view('management.admin', [
      'user' => $users]);
  }

  public function show($name){
    $users = User::find($name);
    return view('member.management', compact('member'));
  }

  public function edit($name){
    $users = User::find($name);
    return view('member.edit',compact('member'));
  }
}

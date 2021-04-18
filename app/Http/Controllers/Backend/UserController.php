<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view(){
        $data['alldata'] = User::all();
        return view('backend.user.user-view',$data);
    }
    public function add(){
        return view('backend.user.user-add');
    }
}

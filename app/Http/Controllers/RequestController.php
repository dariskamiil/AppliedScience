<?php

namespace App\Http\Controllers;

use App\requests;
use App\category;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    public function create()
    {
        $users = user::where('role','admin')->get();
        $categories = category::get();
        return view('request.create', compact('categories', 'users'));
    }
}

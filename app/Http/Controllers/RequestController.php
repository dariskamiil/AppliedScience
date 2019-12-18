<?php

namespace App\Http\Controllers;

use app\requests;
use App\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    public function create()
    {
        $categories = category::get();
        return view('request.create', compact('categories'));
    }
}

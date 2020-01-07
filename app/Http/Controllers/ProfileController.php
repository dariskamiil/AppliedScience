<?php

namespace App\Http\Controllers;

use App\Account;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit($id)
    {
        $accounts = account::findOrFail($id);
        return view('auth.profile', compact('accounts'));
    }
    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => 'required|string',
        ]);
        $accounts = account::findOrFail($id);
        $accounts->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'updated_by'=> Auth::user()->id,
        ]);
        return view('auth.profile', compact('accounts'));
    }
}

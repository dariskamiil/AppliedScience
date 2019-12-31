<?php

namespace App\Http\Controllers;

use App\Account;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        $accounts = account::orderBy('name', 'ASC')->paginate(15);
        return view('account.index', compact('accounts'))
        ->with('no',($request->input('page', 1)-1)*15);
    }
    public function edit($id)
    {
        $departments = Department::orderBy('department_name', 'ASC')->where('is_active','1')->get();
        $accounts = account::findOrFail($id);
        return view('account.edit', compact('accounts', 'departments'));
    }
    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => 'required|string',
            'role' => 'required|in:user,admin',
        ]);
        $accounts = account::findOrFail($id);
        $accounts->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'role' => $request->role,
            'approved' => $request->approved,
        ]);
        return redirect(route('account.index'));   
    }
}
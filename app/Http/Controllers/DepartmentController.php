<?php

namespace App\Http\Controllers;

use App\department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class DepartmentController extends Controller
{
    public function index(Request $request)
    {
        $departments = department::paginate(10);
        return view('departments.index', compact('departments'))
        ->with('no',($request->input('page', 1)-1)*10);    
    }
    public function create()
    {
        return view('departments.create');
    }
    public function store(Request $request)
    {
        request()->validate([
            'department_name' => 'required|string|max:3',
        ]);
        $departments = Department::create([
            'department_name' => $request->department_name,
            'created_by' => Auth::user()->id,
            'updated_by' => Auth::user()->id,
        ]);
        return redirect(route('department.index'));
    }
    public function edit($department_id)
    {
        $departments = department::findOrFail($department_id);
        return view('departments.edit', compact('departments'));
    }
    public function update(Request $request, $department_id)
    {
        request()->validate([
            'department_name' => 'required|string|max:3',
        ]);
        $departments = department::findOrFail($department_id);
        $departments->update([
            'department_name' => $request->department_name,
            'is_active' =>  $request->status,
            'updated_by'=> Auth::user()->id,
        ]);
        return redirect(route('department.index'));
        
    }
    public function delete(Request $request, $department_id)
    {
        request()->validate([
            'is_active' => 1,
        ]);
        $departments = department::findOrFail($department_id);
        $departments->update([
            'is_active' =>  0,
            'updated_by'=> Auth::user()->id,
        ]);
        return redirect(route('department.index'));
        
    }
}
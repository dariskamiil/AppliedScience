<?php

namespace App\Http\Controllers;

use App\department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function index(Request $request)
    {
        //$active_count = department::where('is_active','1')->get()->count();
        //$inactive_count = department::where('is_active','0')->get()->count();
        $all_count = department::where('is_active','1')->get()->count();
        $departments = department::paginate(15);
        return view('departments.index', compact('departments', 'all_count'))
        ->with('no',($request->input('page', 1)-1)*15);
        return view('departments.index', compact('inactive_count', 'active_count'));
        
    }
    public function create()
    {
        return view('departments.create');
    }
    public function store(Request $request)
    {
        request()->validate([
            'department_name' => 'required|string',
        ]);
        $departments = Department::create($request->all());
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
            'department_name' => 'required|string',
        ]);
        $departments = department::findOrFail($department_id);
        $departments->update([
            'department_name' => $request->department_name,
        ]);
        return redirect(route('department.index'));
        
    }
}

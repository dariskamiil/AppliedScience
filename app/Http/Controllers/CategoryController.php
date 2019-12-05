<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $all_count = category::get()->count();
        $categorys = category::paginate(15);
        return view('category.index', compact('categorys', 'all_count'))
        ->with('no',($request->input('page', 1)-1)*15);
    }
    public function create()
    {
        return view('category.create');
    }
    public function store(Request $request)
    {
        request()->validate([
            'article_category_name' => 'required|string',
        ]);
        $categorys = category::create($request->all());
        return redirect(route('category.index'));
    }
    public function edit($article_category_id)
    {
        $categorys = category::findOrFail($article_category_id);
        return view('category.edit', compact('categorys'));
    }
    public function update(Request $request, $article_category_id)
    {
        request()->validate([
            'article_category_name' => 'required|string',
        ]);
        $categorys = category::findOrFail($article_category_id);
        $categorys->update([
            'article_category_name' => $request->article_category_name,
        ]);
        return redirect(route('category.index'));
        
    }
}

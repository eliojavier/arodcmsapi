<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::active()->get();

        return response()->json(['categories' => $categories]);
    }


    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return response()->json(['success' => true, 'msg' => 'category stored']);
    }


    public function update(Request $request, Category $category)
    {
        $category->name = $request->name;
        $category->update();

        return response()->json(['success' => true, 'msg' => 'category updated']);
    }

    public function updateStatus(Category $category)
    {
        $category->status = $category->status == 'active' ? 'inactive' : 'active';
        $category->update();

        return response()->json(['success' => 'category updated']);
    }
}

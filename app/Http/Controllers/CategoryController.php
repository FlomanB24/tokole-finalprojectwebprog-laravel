<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function admin_create_category()
    {
        return view('menu.admin.createcategory');
    }

    public function add_category(Request $request)
    {
        $request->validate([
            'category' => 'required'
        ]);

        Category::create([
            'category_name' => $request->category
        ]);

        return redirect()->back()->with('success', 'Add category success!');
    }

    public function admin_view_category()
    {
        return view('menu.admin.viewcategory', [
            "title" => "list category",
            "categories" => Category::all()
        ]);
    }

    public function update_category(Request $request)
    {
        $category = Category::find($request->id);
        return view('menu.admin.updatecategory', compact('category'));
    }

    public function admin_update_category(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->save();

        return redirect()->back()->with('success', 'Update category success!');
    }
}

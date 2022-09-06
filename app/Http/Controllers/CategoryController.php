<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function category_view()
    {
        $cat = Category::get();
        return view('admin.category', ['cate' => $cat]);
    }

    public function category(Request $request)

    {
        Category::insert(
            ['category_name' => $request->category],
        );
        return redirect('/category')->with('messege', 'category Added');
    }
    public function deleteData($id)

    {
        Category::where('id', $id)->delete();
        return redirect('/category')->with('messege', 'category deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function product_view()
    {
        $product = Product::all();
        $categories = Category::all();
        $product = Product::paginate(10);
        return view('admin.product')
            ->with('product', $product)
            ->with('categories', $categories);
    }

    public function product(Request $request)
    {

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $imageName = $request->file('image');
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move('uploads/images/', $imageName);
        if (isset($request->id)) {
            Product::where('id', $request->id)->update([
                'title' => $request->title,
                'price' => $request->price,
                'discription' => $request->discription
            ]);
        } else {
            Product::insert(
                [
                    'title' => $request->title,
                    'price' => $request->price,
                    'discription' => $request->discription,
                    'image_name' => $imageName,
                    'category_id' => $request->category_id,
                ]
            );
            return redirect('product')
                ->with('messege', 'product Added');
        }

        return redirect('product')

            ->with('messege', 'product updated');
    }
    public function deleteProduct($id)

    {
        Product::where('id', $id)->delete();
        return redirect('/product')->with('messege', 'product deleted successfully');
    }
    public function editProduct($id)
    {

        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.editProduct', ['categories' => $categories, 'product' => $product]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function productDetail($id)
    {
        return view('menu.general.detailproduct', [
            "title" => "list product",
            "product" => Product::find($id)
        ]);
    }

    public function admin_view_product()
    {
        $products = Product::latest();

        if (request('search')) {
            $products = Product::where('nama_product', 'like', '%' . request('search') . '%');
        }

        return view('menu.admin.viewproduct', [
            "title" => "store list",
            "products" => $products->paginate(10)->withQueryString(),
        ]);
    }

    public function admin_product_detail($id)
    {
        return view('menu.admin.productdetail', [
            "title" => "product detail",
            "product" => Product::find($id),
        ]);
    }

    public function create_product()
    {
        return view('menu.admin.createproduct', [
            'stores' => Store::all(),
        ]);
    }

    public function add_product(Request $request)
    {
        $validatedData = $request->validate([
            'store_id' => 'required',
            'nama_product' => 'required|min:5|max:100',
            'harga' => 'required|numeric|min:1000',
            'deskripsi_produk' => 'required|min:5|max:200',
            'rating' => 'required',
            'image' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('images');
        }

        Product::create($validatedData);

        return redirect()->back()->with('success', 'Add store success!');
    }

    public function update(Request $request)
    {
        $stores = Store::all();
        $product = Product::find($request->id);
        return view('menu.admin.updateproduct', compact('product', 'stores'));
    }

    public function update_product(Request $request, $id)
    {
        $request->validate([
            'store_id' => 'required',
            'nama_product' => 'required|min:5|max:100',
            'harga' => 'required|numeric|min:10000',
            'deskripsi_produk' => 'required|min:10|max:200',
            'rating' => 'required',
            'image' => 'required|image|file|max:1024',
        ]);

        if ($request->file('image')) {

            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $request->image = $request->file('image')->store('images');
        }

        $product = Product::find($id);
        $product->store_id = $request->store_id;
        $product->nama_product = $request->nama_product;
        $product->harga = $request->harga;
        $product->deskripsi_produk = $request->deskripsi_produk;
        $product->rating = $request->rating;
        $product->image = $request->image;

        $product->save();

        return redirect()->back()->with('success', 'Update product success!');
    }

    public function delete(Request $request)
    {
        DB::table('products')->where('id', '=', $request->id)->delete();
        return redirect()->route('view_product')->with('deleted', 'Item has been deleted!');
    }
}

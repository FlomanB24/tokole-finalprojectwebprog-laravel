<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function showAllStore()
    {
        $products = Product::latest();
        $stores = Store::latest();

        if (request('search')) {
            $products = Product::where('nama_product', 'like', '%' . request('search') . '%');
        }

        if (request('search')) {
            $stores = Store::where('nama_store', 'like', '%' . request('search') . '%');
        }

        return view('menu.general.about', [
            "title" => "store list",
            "products" => $products->paginate(5)->withQueryString(),
            "stores" => $stores->paginate(6)->withQueryString()
        ]);
    }

    public function store($id)
    {

        return view('menu.general.store', [

            "title" => "store detail",
            "store" => Store::find($id)
        ]);
    }

    public function storeDetail($id)
    {
        return view('menu.general.storedetail', [
            "title" => "store",
            "store" => Store::find($id),
        ]);
    }

    public function admin_view_store()
    {
        // return view('menu.admin.viewstore', [
        //     "title" => "list product",
        //     "stores" => Store::all()
        // ]);

        $stores = Store::latest();

        if (request('search')) {
            $stores = Store::where('nama_store', 'like', '%' . request('search') . '%');
        }

        return view('menu.admin.viewstore', [
            "title" => "store list",
            "stores" => $stores->paginate(5)->withQueryString(),
        ]);
    }

    public function admin_store_detail($id)
    {
        return view('menu.admin.storedetail', [
            "title" => "store detail",
            "store" => Store::find($id),
        ]);
    }


    public function admin_insert_store()
    {
        return view('menu.admin.insertstore', [
            'categories' => Category::all(),
        ]);
    }

    public function add_store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required',
            'nama_store' => 'required|min:5|max:100',
            'nama_seller' => 'required|min:5|max:100',
            'no_telp' => 'required|min:11|max:12',
            'alamat' => 'required|min:10|max:100',
            'jam_buka' => 'required|min:8|max:15',
            'deskripsi_store' => 'required|min:10|max:200',
            'image' => 'required|image|file|max:1024',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('images');
        }

        Store::create($validatedData);

        return redirect()->back()->with('success', 'Add product success!');
    }

    public function update_store(Request $request)
    {
        $categories = Category::all();
        $store = Store::find($request->id);
        return view('menu.admin.updatestore', compact('store', 'categories'));
    }

    public function admin_update_store(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'nama_store' => 'required',
            'nama_seller' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'jam_buka' => 'required',
            'deskripsi_store' => 'required',
            'image' => 'required',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $request->image = $request->file('image')->store('images');
        }

        $store = Store::find($id);
        $store->category_id = $request->category_id;
        $store->nama_store = $request->nama_store;
        $store->nama_seller = $request->nama_seller;
        $store->no_telp = $request->no_telp;
        $store->alamat = $request->alamat;
        $store->jam_buka = $request->jam_buka;
        $store->deskripsi_store = $request->deskripsi_store;
        $store->image = $request->image;

        $store->save();

        return redirect()->back()->with('success', 'Update store success!');
    }

    public function delete(Request $request)
    {
        DB::table('stores')->where('id', '=', $request->id)->delete();
        return redirect()->route('view_store')->with('deleted', 'Item has been deleted!');
    }
}

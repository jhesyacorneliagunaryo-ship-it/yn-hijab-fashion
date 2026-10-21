<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{


public function catalog()
{
    $products = \App\Models\Product::latest()->get();

    return view('home', compact('products'));
}

    public function index()
    {
        $products = Product::latest()->get();

        return view('admin-products', compact('products'));
    }

    public function create()
    {
        return view('admin-product-create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')
                ->store('products', 'public');
        }

        Product::create($data);

        return redirect('/admin/products')
            ->with('success', 'Produk berhasil ditambahkan!');
    }

    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect('/admin/products')
            ->with('success', 'Produk berhasil dihapus!');
    }
}

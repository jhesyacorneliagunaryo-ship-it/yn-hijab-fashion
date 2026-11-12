<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function catalog()
    {
        $products = Product::latest()->get();
        $profiles = Profile::latest()->get();

        return view('home', compact('products', 'profiles'));
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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')
                ->store('products', 'public');
        }

        Product::create($validated);

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
    public function collection()
{
    $products = Product::latest()->get();

    return view('collection', compact('products'));
}
}

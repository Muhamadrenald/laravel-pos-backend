<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //all products
        $products = \App\Models\Product::orderBy('id', 'desc')->get();
        return response()->json([
            'success' => true,
            'message' => 'List Data Product',
            'data' => $products
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'category' => 'required|in:food,drink,snack',
            'image' => 'required|image|mimes:png,jpg,jpeg,webp'
        ]);

        $filename = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/products', $filename);
        $product = \App\Models\Product::create([
            'name' => $request->name,
            'price' => (int) $request->price,
            'stock' => (int) $request->stock,
            'category' => $request->category,
            'image' => $filename,
            'is_favorite' => $request->is_favorite
        ]);

        if ($product) {
            return response()->json([
                'success' => true,
                'message' => 'Product Created',
                'data' => $product
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Product Failed to Save',
            ], 409);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'name' => 'required|min:3|unique:products,name,' . $id,
    //         'image' => 'image|mimes:png,jpg,jpeg'
    //     ]);

    //     $product = \App\Models\Product::findOrFail($id);

    //     if ($request->hasFile('image')) {
    //         Storage::delete('public/products/' . $product->image);
    //         $filename = time() . '.' . $request->image->extension();
    //         $request->image->storeAs('public/products', $filename);
    //         $product->update([
    //             'name' => $request->name,
    //             'description' => $request->description,
    //             'price' => $request->price,
    //             'stock' => $request->stock,
    //             'category' => $request->category,
    //             'image' => $filename,
    //         ]);
    //     } else {
    //         $product->update([
    //             'name' => $request->name,
    //             'description' => $request->description,
    //             'price' => $request->price,
    //             'stock' => $request->stock,
    //             'category' => $request->category,
    //         ]);
    //     }
    //     return redirect()->route('product.index')->with('success', 'product berhasil diupdate');
    // }

    // public function update(Request $request, $id)
    // {
    //     $imagePath = Product::find($id)->image;

    //     if ($request->hasFile('image')) {
    //         if ($imagePath && Storage::disk('public')->exists($imagePath)) {
    //             Storage::disk('public')->delete($imagePath);
    //         }
    //     }

    //     $filename = time() . '.' . $request->image->extension();
    //     $request->image->storeAs('public/products', $filename);

    //     $data = $request->all();
    //     $product = Product::findOrFail($id);
    //     $data['image'] = $filename;
    //     $product->update($data);
    //     return redirect()->route('product.index')->with('success', 'Product successfully updated');
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

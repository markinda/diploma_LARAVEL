<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('catalog', [
            'product' => Product::paginate(12),
            'category' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.product.add', [
            'category'=> Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pathPhoto = $request->file('pathPhoto')->store('uploads', 'public');

        $request->validate([
            'name' => 'required',
            'category' => 'required|in:1,2,3,4,5,6,7,8,9',
            'price' => 'required|integer|regex:/([0-9])+/',
            'count' => 'required|integer|regex:/([0-9])+/',
            'pathPhoto' => 'required|max:5000K|mimes:jpeg,jpg,png'
        ]);

        if (Product::create([
            'name' => $request->name,
            'idCategories' => $request->category,
            'price' => $request->price,
            'count' => $request->count,
            'pathPhoto' => $pathPhoto,
        ])) return redirect('catalog');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Request $request)
    {
        if($request->filter == ""){
            return view('catalog', [
                'product' => Product::where("idCategories", $request->category)->paginate(1000),
                'category' => Category::all()
            ]);
        }
        else{

            return view('catalog', [
                'product' => Product::where("name", 'LIKE', '%' . $request->filter . '%')->paginate(1000),
                'category' => Category::all()
            ]);
        }
    }


    public function edit($id)
    {
        return view('admin.product.edit', [
            'category' => Category::all(),
            'products' => Product::where('id', $id)->get()
        ]);
    }


    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'category' => 'required|in:1,2,3,4,5,6,7,8,9',
            'price' => 'required|integer|regex:/([0-9])+/',
            'count' => 'required|integer|regex:/([0-9])+/'
        ]);

       // $product->fill($request->all())->save();
        $product->name = $request->name;
        $product->idCategories = $request->category;
        $product->price = $request->price;
        $product->count = $request->count;
        $product->save();

        return redirect('catalog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('catalog');
    }
}

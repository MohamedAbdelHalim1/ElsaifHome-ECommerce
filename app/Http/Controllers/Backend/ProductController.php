<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $products = Product::select(['id', 'name', 'photo' , 'category_id']);
            return DataTables::of($products)
                ->addColumn('photo', function ($product) {
                    // Ensure the image path is correctly concatenated
                    return '<a href="'.$product->photo.'" target="_blank"><img src="'.asset($product->photo).'" alt="'.$product->name.'" style="width: 100px; height: 100px;"></a>';
                })
                ->addColumn('category', function ($product) {
                    return $product->category->name;
                })
                ->addColumn('action', function ($product) {
                    return '
                    <a href="'.route('products.edit', $product->id).'" class="btn btn btn-primary">Edit</a>
                    <form action="'.route('products.destroy', $product->id).'" method="POST" style="display:inline-block;" onsubmit="return confirm(\'Are you sure you want to delete this product?\');">
                        '.csrf_field().'
                        '.method_field('DELETE').'
                        <button type="submit" class="btn btn btn-danger">Delete</button>
                    </form>';
                })
                ->rawColumns(['photo', 'category' , 'action'])
                ->make(true);
        }
    
        // Additional logic here
        
        return view('backend.products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.products.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($validator->fails()) {
            return redirect()->route('products.create')
                             ->withErrors($validator)
                             ->withInput();
        }

        // Handle file upload
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('assets/images'), $photoName);
            $photoPath = 'assets/images/' . $photoName;
        }

        // Create a new category
        $product = new Product();
        $product->name = $request->input('name');
        $product->photo = $photoPath;
        $product->category_id = $request->category_id;
        $product->save();

        // Redirect with success message
        return redirect()->route('products.index')
                         ->with('success', 'Product added successfully!');

    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('backend.products.edit' , compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',

        ]);

        if ($validator->fails()) {
            return redirect()->route('products.edit')
                             ->withErrors($validator)
                             ->withInput();
        }

        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->category_id = $request->category_id;

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('assets/images'), $photoName);
            $photoPath = 'assets/images/' . $photoName;
            $product->photo = $photoPath;

        }

        $product->save();

        // Redirect with success message
        return redirect()->route('products.index')
                         ->with('success', 'Product Updated successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index')
        ->with('success', 'Product Deleted successfully!');
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    if ($request->ajax()) {
        $categories = Category::select(['id', 'name', 'photo']);
        return DataTables::of($categories)
            ->addColumn('photo', function ($category) {
                // Ensure the image path is correctly concatenated
                return '<a href="'.$category->photo.'" target="_blank"><img src="'.asset($category->photo).'" alt="'.$category->name.'" style="width: 100px; height: 100px;"></a>';
            })
            ->addColumn('action', function ($category) {
                return '
                <a href="'.route('categories.edit', $category->id).'" class="btn btn btn-primary">Edit</a>
                <form action="'.route('categories.destroy', $category->id).'" method="POST" style="display:inline-block;" onsubmit="return confirm(\'Are you sure you want to delete this category?\');">
                    '.csrf_field().'
                    '.method_field('DELETE').'
                    <button type="submit" class="btn btn btn-danger">Delete</button>
                </form>';
            })
            ->rawColumns(['photo', 'action'])
            ->make(true);
    }

    // Additional logic here
    
    return view('backend.categories.index');
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.categories.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('categories.create')
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
        $category = new Category();
        $category->name = $request->input('name');
        $category->photo = $photoPath;
        $category->save();

        // Redirect with success message
        return redirect()->route('categories.index')
                         ->with('success', 'Category added successfully!');

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
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('backend.categories.edit' , compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('categories.edit')
                             ->withErrors($validator)
                             ->withInput();
        }

        $category = Category::find($id);
        $category->name = $request->input('name');

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('assets/images'), $photoName);
            $photoPath = 'assets/images/' . $photoName;
            $category->photo = $photoPath;

        }

        $category->save();

        // Redirect with success message
        return redirect()->route('categories.index')
                         ->with('success', 'Category Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories.index')
                         ->with('success', 'Category Deleted successfully!');
    }
}

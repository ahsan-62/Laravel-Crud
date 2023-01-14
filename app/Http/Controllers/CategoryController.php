<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = Category::all();
        $categories = Category::withCount('subcategories')->get(['id', 'name', 'created_at']);
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        // $request->validate([
        //     'category_name' => 'required|string|alpha',
        //     'category_slug' => 'required|string|alpha',
        //     'is_active' => 'nullable'
        // ]);
        // dd($request->all());

        Category::create([
            'name' => $request->category_name,
            'slug' => Str::slug($request->category_name),
            'is_active' => $request->filled('is_active')
        ]);
        // Session::flash('status', 'Category Created Successfully.....');
        Toastr::success('Category created successfully.....');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $category = Category::find($id);

        $category->update([
            'name' => $request->category_name,
            'slug' => Str::slug($request->category_name),
            'is_active' => $request->filled('is_active')
        ]);
        Toastr::success('Category Updated successfully.....');
        // Session::flash('status', 'Category Updated Successfully.....');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        Category::find($id)->delete();
        // Session::flash('status', 'category Deleted Succesfully');
        Toastr::warning('Category Deleted successfully.....');
        return redirect()->route('category.index');
    }
}

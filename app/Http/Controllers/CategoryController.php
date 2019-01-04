<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Alert;
use Validator;
class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nama_category' => 'required|unique:categorys',
        ];

        $message = [
            'nama_category.required' => 'The Category is required',
            'nama_category.unique' => 'Your Category can not be same',
        ];
        $validation = Validator::make($request->all(), $rules, $message);
        if ($validation->fails())
        {
            Alert::error('Sorry your data is invalid, Please try again!', 'Oops!')->persistent("Ok");
            return back()->withErrors($validation)->withInput();
        }

        // $request->validate([
        //     'nama_category' => 'required|unique:categorys',
        // ]);

        $category = new Category;
        $category->nama_category = $request->nama_category;
        $category->slug = str_slug($request->nama_category, '-');
        // dd($category);
        $category->save();
        Alert::success('Data successfully saved','Good Job')->autoclose(1500);
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'nama_category' => 'required',
        ]);
        $a = category::findOrFail($category->id);
        ;
        $a->nama_category = $request->nama_category;
        // dd($category);
        $a->save();
        Alert::success('Data successfully edited','Good Job')->autoclose(1000);
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if(!category::destroy($category->id)){
            Alert::error('Sorry your data is invalid, Please try again!', 'Oops!')->persistent("Ok");
            return redirect()->back();
        } else{
            Alert::success('Data successfully deleted', 'Good Job')->autoclose(1000);
            return redirect()->route('admin.category.index');
        }
    }
}

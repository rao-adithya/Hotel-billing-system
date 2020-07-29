<?php

namespace App\Http\Controllers\Admin;
use Session;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = new Category();
        $categories->roomtype = $request->input('roomtype');
         $categories->floor = $request->input('floor');
          $categories->price = $request->input('price');
          $categories->save();
          Session::flash('statuscode','success');
           return redirect('/categories')->with('status','Data Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editcategory = Category::findorFail($id);
        return view('admin.category.edit')->with('editcategory',$editcategory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editcategory = Category::findorFail($id);
        $editcategory->roomtype = $request->input('roomtype');
        $editcategory->floor = $request->input('floor');
        $editcategory->price = $request->input('price');
         $editcategory->update();
         Session::flash('statuscode','info');
        return redirect('/categories')->with('status','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $categories = Category::findorFail($id);
        $categories->delete();
        Session::flash('statuscode','error');
        return redirect('/categories')->with('status','Your data is deleted');
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Categories;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::paginate(10);

        return view('dashboard.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Category = NEW Categories();
        $data = request()->validate([
            'title' => 'required|min:2|max:255',
            'desc' => 'required|max:16500',
        ]);
        $Category->fill($data);
        $Category->save();

        return redirect('/dashboard/Categories')->with('status', 'Category Added !!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Categories::findorfail($id);

        return view('dashboard.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Categories::findorfail($id);
        $data = request()->validate([
            'title' => 'required|min:2|max:255',
            'desc' => 'required|max:16500',
        ]);

        $category->fill($data);
        $category->update();

        return redirect('/dashboard/Categories')->with('status', 'Category Updated !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Categories::findorfail($id);
        $category->delete();

        return redirect('/dashboard/Categories')->with('status', 'Category Deleted!!');
    }
}

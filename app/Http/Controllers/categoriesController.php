<?php

namespace App\Http\Controllers;

use App\Models\categoriesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = categoriesModel::all();
        return  view('categories/categoriesView')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories/createView');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|min:3|max:20',
                'description' => 'required'
            ],
            [
                'required' => ':attribute not have let check',
                'min' => ':attribute less then :min',
                'max' => ':attribute high than :max',
            ],
            [
                'name' => 'categories name'
            ]
        );
        $categories = new categoriesModel;
        $categories->name = $request->input('name');
        $categories->description = $request->input('description');
        $categories->save();
        return redirect()->route('indexcate');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categoriesModel  $categoriesModel
     * @return \Illuminate\Http\Response
     */
    public function show(categoriesModel $categoriesModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categoriesModel  $categoriesModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = categoriesModel::where('id', '=', (int)$id)->first();
        return view('categories/updateView')->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categoriesModel  $categoriesModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|min:3|max:20',
                'description' => 'required'
            ],
            [
                'required' => ':attribute not have let check',
                'min' => ':attribute less then :min',
                'max' => ':attribute high than :max',
            ],
            [
                'name' => 'categories name'
            ]
        );
        $name = $_POST['name'];
        $description = $_POST['description'];
        categoriesModel::where('id', '=', (int)$id)->update(['name' => $name, 'description' => $description]);
        return redirect()->route('indexcate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categoriesModel  $categoriesModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        categoriesModel::where('id', '=', (int)$id)->delete();
        return redirect()->route('indexcate');
    }
}

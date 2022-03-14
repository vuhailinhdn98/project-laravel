<?php

namespace App\Http\Controllers;

use App\Models\suppliersModel;
use Illuminate\Http\Request;

class suppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = suppliersModel::all();
        return view('suppliers/suppliersView')->with('suppliers', $suppliers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suppliers/createView');
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
                'phone' => 'required'
            ],
            [
                'required' => ':attribute not have let check',
                'min' => ':attribute less then :min',
                'max' => ':attribute high than :max',
            ],
            [
                'name' => 'supplier name',
                'phone' => 'this phone',
            ]
        );
        $suppliers = new suppliersModel;
        $suppliers->name = $request->input('name');
        $suppliers->phone = $request->input('phone');
        $suppliers->save();
        return redirect()->route('indexsupp');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\suppliersModel  $suppliersModel
     * @return \Illuminate\Http\Response
     */
    public function show(suppliersModel $suppliersModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\suppliersModel  $suppliersModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suppliers = suppliersModel::where('id', '=', (int)$id)->first();
        return view('suppliers/updateView')->with('suppliers', $suppliers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\suppliersModel  $suppliersModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|min:3|max:20',
                'phone' => 'required'
            ],
            [
                'required' => ':attribute not have let check',
                'min' => ':attribute less then :min',
                'max' => ':attribute high than :max',
            ],
            [
                'name' => 'supplier name',
                'phone' => 'this phone',
            ]
        );
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        suppliersModel::where('id', '=', $id)->update(['name' => $name, 'phone' => $phone]);
        return redirect()->route('indexsupp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\suppliersModel  $suppliersModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        suppliersModel::where('id', '=', $id)->delete();
        return redirect()->route('indexsupp');
    }
}

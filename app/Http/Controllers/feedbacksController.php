<?php

namespace App\Http\Controllers;

use App\Models\feedbacksModel;
use Illuminate\Http\Request;

class feedbacksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = feedbacksModel::all();
        return view('feedbacks/feedbacksView')->with('feedbacks', $feedbacks);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\feedbacksModel  $feedbacksModel
     * @return \Illuminate\Http\Response
     */
    public function show(feedbacksModel $feedbacksModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\feedbacksModel  $feedbacksModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feedbacks = feedbacksModel::where('id', '=', $id)->first();
        return view('feedbacks/updateView')->with('feedbacks', $feedbacks);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\feedbacksModel  $feedbacksModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, feedbacksModel $feedbacksModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\feedbacksModel  $feedbacksModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        feedbacksModel::where('id', '=', $id)->delete();
        return redirect()->route('indexfeed');
    }
}

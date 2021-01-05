<?php

namespace App\Http\Controllers;

use App\jobsubcategory;
use App\jobcategory;
use Illuminate\Http\Request;


class JobsubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jobsubcategories = jobsubcategory::orderBy('id','desc')->get();
        return view('backend.subcategories.index',compact('jobsubcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jobcategories = jobcategory::all();
        return view('backend.subcategories.create',compact('jobcategories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'jobcategory' => 'required'

        ]);
        // $subcategory=Subcategory::find($id);
        $jobsubcategory = new jobsubcategory;

        $jobsubcategory->name = $request->name;
        $jobsubcategory->jobcategory_id= $request->jobcategory;
        $jobsubcategory->save();
        return redirect()->route('jobsubcategory.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jobsubcategory  $jobsubcategory
     * @return \Illuminate\Http\Response
     */
    public function show(jobsubcategory $jobsubcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jobsubcategory  $jobsubcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(jobsubcategory $jobsubcategory)
    {
        //
        $jobsubcategories = jobsubcategory::find($id);
        $jobcategory = jobcategory::all();
        return view('backend.subcategories.edit',compact('jobsubcategories','jobcategory'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jobsubcategory  $jobsubcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jobsubcategory $jobsubcategory)
    {
        //
        $request->validate([
            'name' => 'required|min:5',
            'jobcategory' => 'required'

        ]);
         //$jobsubcategory=jobsubcategory::find($id);
        // $subcategory = new Subcategory;

        $jobsubcategory->name = $request->name;
        $jobsubcategory->jobcategory_id= $request->jobcategory;
        $jobsubcategory->save();
        return redirect()->route('jobsubcategory.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jobsubcategory  $jobsubcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(jobsubcategory $jobsubcategory)
    {
        //
    }
}

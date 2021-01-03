<?php

namespace App\Http\Controllers;

use App\jobcategory;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobcategories = jobcategory::all();
        return view('backend.categories.index',compact('jobcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.categories.create');
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
        //dd($request);

        //validation
        $request->validate([
            'name' => 'required|min:5',
            'logo' => 'required|mimes:jpeg,jpg,png'
        ]);

        // upload
        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->logo->getClientOriginalName();

            // categoryimg/624872374523_a.jpg
            $filePath = $request->file('logo')->storeAs('jobcategoryimg', $fileName, 'public');

             $path = '/storage/'.$filePath;
        }


        // store data
        $jobcategory = new jobcategory;
        $jobcategory->name = $request->name;
        $jobcategory->logo = $path;
        $jobcategory->save();

        //redirect
        return redirect()->route('jobcategory.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jobcategory  $jobcategory
     * @return \Illuminate\Http\Response
     */
    public function show(jobcategory $jobcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jobcategory  $jobcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(jobcategory $jobcategory)
    {
        //
        //$jobcategory = jobcategory::find($jobcategory);
        return view('backend.categories.edit',compact('jobcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jobcategory  $jobcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jobcategory $jobcategory)
    {
        //
        $request->validate([
            'name' => 'required|min:5',
            'logo' => 'sometimes|mimes:jpeg,jpg,png'
        ]);

        // upload
        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->logo->getClientOriginalName();

            // categoryimg/624872374523_a.jpg
            $filePath = $request->file('logo')->storeAs('jobcategoryimg', $fileName, 'public');

            $path = '/storage/'.$filePath;

            // delete old image


            // $category->logo = $path;

        }
        else {
           $path=$request->oldlogo;
        }

        //$jobcategory=jobcategory::find($id);
        // update data
        $jobcategory->name = $request->name;
        $jobcategory->logo = $path;
        $jobcategory->save();

        // redirect
        return redirect()->route('jobcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jobcategory  $jobcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(jobcategory $jobcategory)
    {
        //
        //$jobcategory=jobcategory::find($id);
        $jobcategory->delete();
        // delete old image

        // redirect
        return redirect()->route('jobcategory.index');
    }
}


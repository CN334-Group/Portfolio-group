<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Experience;

class ExperiencePagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $experiences = Experience::all();
        return view('pages.experiences.list', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.experiences.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'date' => 'required|string',
            'title' => 'required|string',
            'big_image' => 'required|image',
            'description' => 'required|string',
        ]);

        $experiences = new Experience;
        $experiences->date = $request->date;
        $experiences->title = $request->title;
        $experiences->description = $request->description;

        $image_file = $request->file('big_image');
        Storage::putFile('public/img', $image_file);
        $experiences->big_image = "storage/img/" . $image_file->hashName();


        $experiences->save();

        return redirect()->route('admin.experiences.create')->with('success', 'New Experience Create Successfully');
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
        $experience = Experience::find($id);
        return view('pages.experiences.edit', compact('experience'));
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
        $this->validate($request, [
            'date' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $experiences = Experience::find($id);
        $experiences->date = $request->date;
        $experiences->title = $request->title;
        $experiences->description = $request->description;

        if ($request->file('big_image')) {
            $image_file = $request->file('big_image');
            Storage::putFile('public/img', $image_file);
            $experiences->big_image = "storage/img/" . $image_file->hashName();
        }



        $experiences->save();

        return redirect()->route('admin.experiences.list')->with('success', 'Experience updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experience = Experience::find($id);
        @unlink(public_path($experience->big_image));
        $experience->delete();

        return redirect()->route('admin.experiences.list')->with('success', 'Experience Deleted Successfully');
    }
}

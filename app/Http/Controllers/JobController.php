<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Job;
use App\Tag;

class JobController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showCreationForm()
    {
        return view('createjob');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function store(Request $data)
    {
        $this->validate( $data, [
            'title' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'price' => 'required|integer',
            'about' => 'required|string|max:250',
            'deadline' => 'required|date',
            'tag1' => 'required',
        ]);

        Tag::findOrFail( $data['tag1'] );
        if (isset($data['tag2'])) { Tag::findOrFail( $data['tag2'] ); }
        if (isset($data['tag3'])) { Tag::findOrFail( $data['tag3'] ); }

        //$datesubmitted = date_parse_from_format( 'd-m-Y', $data['deadline'] );
        $due_date = date('Y-m-d 23:59:59', strtotime($data['deadline']));
        Job::create([
            'userid' => Auth::user()->getId(),
            'amount' => $data['price'],
            'description' => $data['about'],
            'title' => $data['title'],
            'due_date' => $due_date,
            'tag1' => $data['tag1'],
            'tag2' => $data['tag2'],
            'tag3' => $data['tag3']
        ]);

        return redirect()->route('welcome')->with('success', 'Job ' . $data['title'] . ' created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}

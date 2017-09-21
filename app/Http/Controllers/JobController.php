<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Job;
use App\JobTags;

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
            'amount' => 'required|integer|max:20',
            'deadline' => 'required|string|max:255',
            'description' => 'required|string|max:250',
            'due_date' => 'required|date',
        ]);

        $due_date = date('Y-m-d 23:59:59', $data['deadline']);
        return Job::create([
            'userid' => Auth::user()->getId(),
            'amount' => $data['price'],
            'description' => $data['about'],
            'title' => $data['title'],
            'due_date' => $due_date,
        ]);
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

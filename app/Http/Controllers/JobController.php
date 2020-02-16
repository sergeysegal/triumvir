<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jobs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
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
            'job_id' => 'required|alpha_dash',
            'job_title' => 'required|alpha_num_spaces',
            'job_family' => 'required|alpha_num_spaces',
            'location' => 'required|alpha_num_spaces',
            'role_desc' => 'required|string',
            'responsibilities' => 'required|string',
            'qualifications' => 'required|string'
        ]);

        $job = new Job();
        $job->job_id = $request->job_id;
        $job->job_title = $request->job_title;
        $job->job_family = $request->job_family;
        $job->location = $request->location;
        $job->role_desc = filter_var($request->role_desc, FILTER_SANITIZE_STRING);
        $job->responsibilities = filter_var($request->responsibilities, FILTER_SANITIZE_STRING);
        $job->qualifications = filter_var($request->qualifications, FILTER_SANITIZE_STRING);

        $job->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}

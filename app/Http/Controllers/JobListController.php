<?php

namespace App\Http\Controllers;

use App\Models\JobList;
use Illuminate\Http\Request;

class JobListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $joblists = JobList::with('user')->latest()->simplePaginate(5);
        return view('jobs.index', ['joblists' => $joblists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(JobList $jobList)
    {
        return view('jobs.show', ['joblist' => $jobList]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobList $jobList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobList $jobList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobList $jobList)
    {
        //
    }
}

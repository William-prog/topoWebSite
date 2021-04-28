<?php

namespace App\Http\Controllers;

use App\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $existingJobPosts = JobPost::all();
        App::setLocale('es');

        return view("job_posts")->with(["existingJobPosts" => $existingJobPosts]);
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
        $newJobPost = new JobPost;
        
        $validateData = $request->validate([
            'job-title' =>                  'required|string|max:255',
            'job-responsabilities-json' =>  'required|json',
            'job-experience' =>             'required|string',
            'job-education' =>              'required|string',
        ]);

        $newJobPost->job_title = $request->input('job-title');
        $newJobPost->job_responsabilities = $request->input('job-responsabilities-json');
        $newJobPost->job_experience = $request->input('job-experience');
        $newJobPost->job_education = $request->input('job-education');

        $newJobPost->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobPost  $jobPost
     * @param  \Illuminate\Http\Request  $request
     */
    public function show(JobPost $jobPost, Request $request)
    {
        return $jobPost->where('id', $request->jobPostId)->get();        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobPost  $jobPost
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function edit(JobPost $jobPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobPost $jobPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobPost  $jobPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobPost $jobPost)
    {
        //
    }

    public function test() {
        return "async call, mother fucker";
    }
}

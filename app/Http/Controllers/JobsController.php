<?php namespace FiveOne\Http\Controllers;

use FiveOne\Http\Requests;
use FiveOne\Http\Controllers\Controller;
use FiveOne\Http\Transformers\JobTransformer;
use FiveOne\Job;
use Illuminate\Http\Request;

class JobsController extends ApiController
{

    protected $jobTransformer;

    /**
     * @param JobTransformer $jobTransformer
     */
    public function __construct(JobTransformer $jobTransformer)
    {

        $this->jobTransformer = $jobTransformer;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $jobs = Job::all();
        return $this->respond([
            'data' => $this->jobTransformer->transformCollection($jobs->all())
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

}

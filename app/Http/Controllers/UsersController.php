<?php namespace FiveOne\Http\Controllers;

use FiveOne\Http\Requests;
use FiveOne\Http\Controllers\Controller;
use FiveOne\Http\Transformers\UserTransformer;
use FiveOne\User;
use Illuminate\Http\Request;

class UsersController extends ApiController
{
    /*
     * @var FiveOne\Transformers\UserTransformer
     */
    protected $userTransformer;

    public function __construct(UserTransformer $userTransformer)
    {
        $this->userTransformer = $userTransformer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();

        return response()->json([
            'data' => $this->userTransformer->transformCollection($users->all())
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
        $user = User::find($id);

        if ( ! $user ) {
            return $this->respondNotFound('User not found');
        }

        return response()->json([
            'data' => $this->userTransformer->transform($user)
        ], 200);

    }
}

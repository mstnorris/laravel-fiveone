<?php namespace FiveOne\Http\Controllers;

use FiveOne\Http\Requests;
use FiveOne\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function users()
    {
        $request = Request::create('api/v1/users', 'GET');

        return view('pages.users');
    }
}

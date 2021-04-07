<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContestantRequest;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(ContestantRequest $request)
    {
        dd($request->all());
    }
}

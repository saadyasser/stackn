<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function index()
    {
        return view('questions');
    }

    public function create()
    {
        return view('ask-question');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Step;
use Illuminate\Http\Request;

class StepController extends Controller
{
    public function index()
    {
        return view('steps.index');
    }

    public function create()
    {
        return view('steps.create');
    }

    public function show(Step $step)
    {
        return view('steps.show', ['step' => $step]);
    }
}

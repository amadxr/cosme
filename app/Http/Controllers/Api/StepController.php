<?php

namespace App\Http\Controllers\Api;

use App\Models\Step;
use App\Models\Tag;
use App\Http\Controllers\Controller;
use App\Http\Resources\Step as StepResource;
use Illuminate\Http\Request;

class StepController extends Controller
{
    public function index()
    {
        $steps = Step::orderBy('order', 'asc')->get();

        return StepResource::collection($steps);
    }
}

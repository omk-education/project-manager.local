<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class IndexController extends Controller
{
    public function index()
    {
        $complete = Task::where('completed', 1)->get();
        $work = Task::where('completed', 0)->get();

        return view('index', compact('complete', 'work'));
    }
}

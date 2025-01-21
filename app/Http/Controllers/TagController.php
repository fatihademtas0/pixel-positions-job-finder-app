<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    //jobs for this tag

    public function __invoke(Tag $tag)
    {
        return view('jobs.results' , ['jobs' => $tag->jobs]);
    }
}
